@extends('adminlte::page')

@section('title', 'Create Page')

@section('content_header')
    <h1>Create Page</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pages.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="15" required></textarea>
                </div>

                <h2>Add Posts</h2>
                <div>
                    @foreach($posts as $post)
                        <div class="form-check">
                            <input type="checkbox" name="posts[]" value="{{ $post->id }}" id="post-{{ $post->id }}" class="form-check-input">
                            <label for="post-{{ $post->id }}" class="form-check-label">{{ $post->title }}</label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary mt-3">Create Page</button>
            </form>
        </div>
    </div>
@stop

@section('js')
    <script>

        CKEDITOR.replace('content');
    </script>
@stop
