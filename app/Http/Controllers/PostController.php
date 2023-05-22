<?php

namespace App\Http\Controllers;

use App\Events\UserActivityEvent;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('author', 'categories', 'tags')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.create', compact('users', 'categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required',
        ]);

        $post = new Post([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => $request->input('user_id'),
            'slug' => Str::slug($request->title),
        ]);

        $post->save();
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        $user = User::find($request->input('user_id'));
        event(new UserActivityEvent($request->input('user_id'), "User <b>{$user->name}</b> created a new blog post with title: <b>{$request->input('title')}</b>"));
        return redirect()->route('posts.index');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.edit', compact('post', 'users', 'categories', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required',
        ]);

        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => $request->input('user_id'),
        ]);

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
