
@extends('layouts.app')
@extends('layouts.navbar')
<title>Create Post</title>
@section('content')
<form action="{{ route('posts.store') }}" class="form w-50 mx-auto my-5 border border-primary p-3 rounded shadow shadow-lg p-3 mb-5 bg-body rounded" method="post">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
