<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\Category;

class AppController extends Controller
{
    public function index(Request $request)
    {
        $app = App::get()->where('publish', 1);
        $categories = Category::get();
        return view('apps', ['apps' => $app, 'categories' => $categories]);
    }

    public function detail(Request $request , $app_id)
    {
        $app = App::find($app_id);
        $categories = Category::get();
        return view('detail', ['app' => $app, 'categories' => $categories]);
    }

}
