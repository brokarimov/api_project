<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::cursorPaginate(10);
        return CategoryResource::collection($categories);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $data['name'] = json_decode($data['name'], true);

        if (!is_array($data['name'])) {
            return response()->json(['error' => 'Invalid name format'], 422);
        }

        foreach ($data['name'] as $key => $value) {
            if (!is_string($value) || strlen($value) > 255) {
                return response()->json(['error' => 'Invalid name value'], 422);
            }
        }

        $category = Category::create(['name' => $data['name']]);
        return new CategoryResource($category);
    }

    public function delete(Category $category)
    {
        $category->delete();
        return response()->json(['success' => 'info is deleted']);
    }

    public function update(Category $category, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|json',
        ]);

        $decodedName = json_decode($data['name'], true);

        if (!is_array($decodedName)) {
            return response()->json(['error' => 'Invalid JSON format for name'], 422);
        }

        foreach ($decodedName as $lang => $value) {
            if (!is_string($value) || strlen($value) > 255) {
                return response()->json(['error' => "Invalid value for language key: $lang"], 422);
            }
        }

        $category->update([
            'name' => $decodedName,
        ]);

        return new CategoryResource($category);
    }
}
