@extends('adminlte::page')

@section('title', 'Page Details')

@section('content_header')
    <h1>{{ $page->title }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p>{{ $page->content }}</p>
        </div>
    </div>

    <h2 class="mt-4">Posts:</h2>
    @include('single_post')
@stop

@section('css')
    <!-- Add any custom CSS you need for this page here -->
@stop

@section('js')
    <!-- Add any custom JS you need for this page here -->
@stop
