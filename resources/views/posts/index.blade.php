@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Categories</th>
                    <th>Tags</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <x-post-component :post="$post" />
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
