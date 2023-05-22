<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {

        $count = [
            'posts' => Post::count(),
            'pages' =>Page::count()
        ];
        return view('home', compact('count'));
    }
}
