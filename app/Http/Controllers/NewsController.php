<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(10);
        return view('pages.news-index', ['models' => $news]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('pages.news-create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        // Validate the incoming data
        $data = $request->validate([
            'title' => 'required|array',  // Make sure it's an array
            'title.*' => 'required|string|max:255',  // Each title value must be a string and max 255 chars
            'description' => 'required|array',  // Make sure it's an array
            'description.*' => 'required|string|max:255',  // Each description value must be a string and max 255 chars

            'category_id' => 'required|exists:categories,id',  // Ensure category exists
        ]);

        // No need to decode as the data is already in array format
        // Check if the 'title' and 'description' fields are arrays (additional check if needed)
        if (!is_array($data['title']) || !is_array($data['description'])) {
            return response()->json(['error' => 'Invalid data format'], 422);
        }

        // Validate that each title and description value is a string and does not exceed 255 characters
        foreach ($data['title'] as $key => $value) {
            if (!is_string($value) || strlen($value) > 255) {
                return response()->json(['error' => 'Invalid title value'], 422);
            }
        }

        foreach ($data['description'] as $key => $value) {
            if (!is_string($value) || strlen($value) > 255) {
                return response()->json(['error' => 'Invalid description value'], 422);
            }
        }

        // Create the news entry with the validated data
        $news = News::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
        ]);

        // Redirect to the news index page
        return redirect('/news');
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
