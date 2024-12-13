
@extends('layouts.app')
@extends('layouts.navbar')
<title>edit Post</title>
@section('content')
<form action="{{ route('posts.update', $post->id) }}" class="form w-50 mx-auto my-5 border border-primary p-3 rounded shadow shadow-lg p-3 mb-5 bg-body rounded" method="post">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" value="{{ $post->title }}" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body" rows="3">{{ $post->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
