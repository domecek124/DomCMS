@extends('adminlte::page')

@section('title', 'Edit Page')

@section('content_header')
    <h1>Edit Page</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pages.update', $page->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="15" required>{{ $page->content }}</textarea>
                </div>

                <h2>Add Posts</h2>
                <div>
                    @foreach($posts as $post)
                        <div class="form-check">
                            <input type="checkbox" name="posts[]" value="{{ $post->id }}" id="post-{{ $post->id }}" class="form-check-input"
                                {{ $page->posts->contains($post->id) ? 'checked' : '' }}>
                            <label for="post-{{ $post->id }}" class="form-check-label">{{ $post->title }}</label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update Page</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <!-- Add any custom CSS you need for this page here -->
@stop

@section('js')
    <script>
        // Initialize CKEditor for the content textarea
        CKEDITOR.replace('content');
    </script>
@stop
