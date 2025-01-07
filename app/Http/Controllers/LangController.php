<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function lang($lang)
    {
        
        if (!in_array($lang, ['en', 'uz', 'ru'])) {
            abort(404);
        }
        
        session()->put('lang',$lang);
        
        return back();
    }
}
