<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::cursorPaginate(10);
        return NewsResource::collection($news);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|json',
            'description' => 'required|json',
            'category_id' => 'required|exists:categories,id',
        ]);


        $data['title'] = json_decode($data['title'], true);
        $data['description'] = json_decode($data['description'], true);


        if (!is_array($data['title']) || !is_array($data['description'])) {
            return response()->json(['error' => 'Invalid JSON format'], 422);
        }

        foreach ($data['title'] as $key => $value) {
            if (!is_string($value) || strlen($value) > 255) {
                return response()->json(['error' => 'Invalid title value'], 422);
            }
        }

        foreach ($data['description'] as $key => $value) {
            if (!is_string($value)) {
                return response()->json(['error' => 'Invalid description value'], 422);
            }
        }


        $news = News::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
        ]);

        return new NewsResource($news);
    }


    public function update(Request $request, News $new)
    {
        $data = $request->validate([
            'title' => 'required|json',
            'description' => 'required|json', 
            'category_id' => 'required|exists:categories,id', 
        ]);

        $data['title'] = json_decode($data['title'], true);
        $data['description'] = json_decode($data['description'], true);

        if (!is_array($data['title']) || !is_array($data['description'])) {
            return response()->json(['error' => 'Invalid JSON format'], 422);
        }

        foreach ($data['title'] as $key => $value) {
            if (!is_string($value) || strlen($value) > 255) {
                return response()->json(['error' => 'Invalid title value'], 422);
            }
        }

        foreach ($data['description'] as $key => $value) {
            if (!is_string($value)) {
                return response()->json(['error' => 'Invalid description value'], 422);
            }
        }

        $new->update([
            'title' => $data['title'], 
            'description' => $data['description'], 
            'category_id' => $data['category_id'], 
        ]);

        return new NewsResource($new); 
    }



    public function show(News $new)
    {
        return new NewsResource($new);
    }

    public function delete(News $new)
    {
        $new->delete();
        return response()->json(['success' => 'info is deleted']);
    }
}
