<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $news = News::orderBy('id', 'desc')->paginate(10);
        return view('pages.userPage', ['categories' => $categories, 'news' => $news]);
    }

    public function filter(Category $category)
    {
        $categories = Category::all();
        $news = News::where('category_id', $category->id)->orderBy('id', 'desc')->paginate(10);
        return view('pages.userPage', ['categories' => $categories, 'news' => $news]);    
    }
}
