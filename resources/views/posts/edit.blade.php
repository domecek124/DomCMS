@extends('adminlte::page')
@section('content')
    <div class="container">
        <h1>Edit: <b>{{ $post->title }}</b></h1>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title"
                       value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5"
                          placeholder="Enter post content">{{ $post->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="user_id">Author</label>
                <select class="form-control" id="user_id" name="user_id">
                    <option value="">Select Author</option>
                    @foreach($users as $user)
                        @if($post->user_id == $user->id)
                            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                        @else
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="categories">Categories</label>
                <select multiple class="form-control" id="categories" name="categories[]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
