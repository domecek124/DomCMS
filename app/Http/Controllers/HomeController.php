<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use App\Models\Post;
use App\Models\Page;

class HomeController extends Controller
{

    public function index()
    {
        $latestActivity = UserActivity::with('user')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $count = [
            'posts' => Post::count(),
            'pages' =>Page::count()
        ];
        return view('home', compact('count', 'latestActivity'));
    }
}
