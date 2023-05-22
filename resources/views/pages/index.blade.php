@extends('adminlte::page')

@section('title', 'Pages')

@section('content_header')
    <h1>Pages</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pages.create') }}" class="btn btn-primary">Create New Page</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->title }}</td>
                        <td>
                            <a href="{{ route('pages.show', $page) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('pages.edit', $page) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('pages.destroy', $page) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

