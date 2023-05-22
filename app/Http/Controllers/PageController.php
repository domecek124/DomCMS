<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Post;
class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        $posts = Post::all();
        return view('pages.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Page::create($request->all());

        return redirect()->route('pages.index')
            ->with('success', 'Page created successfully.');
    }

    public function show(Page $page)
    {
        $posts = Post::where('category_id', $page->id)->get();

        return view('pages.show', compact('page', 'posts'));
    }

    public function edit(Page $page)
    {
        $posts = Post::all();
        return view('pages.edit', compact('page', 'posts'));
    }

    public function update(Request $request, Page $page)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $page->title = $validatedData['title'];
        $page->content = $validatedData['content'];
        $page->save();

        $page->posts()->sync($request->input('posts', []));

        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('pages.index')
            ->with('success', 'Page deleted successfully.');
    }
}
