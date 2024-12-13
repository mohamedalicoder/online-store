
@extends('layouts.app')
@extends('layouts.navbar')
<title>show Post</title>
@section('content')

<div class="container my-5 text-center text-uppercase fw-bold fs-1 text-decoration-none d-flex justify-content-between align-items-center text-primary ">
    <h1>Post Number {{ $post->id }}</h1>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">All Posts</a>
</div>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $post->title }}</h5>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->body }}</p>
        </div>
        <div class="card-footer">
            <p class="card-text">Created At: {{ $post->created_at }}</p>
            <p class="card-text">Updated At: {{ $post->updated_at }}</p>
        </div>
    </div>
</div>

@endsection
