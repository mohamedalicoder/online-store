
@extends('layouts.app')
@extends('layouts.navbar')
<title>edit Product</title>
@section('content')
<form action="{{ route('products.update', $product->id) }}" class="form w-50 mx-auto my-5 border border-primary p-3 rounded shadow shadow-lg p-3 mb-5 bg-body rounded" method="post">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{ $product->name }}" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" value="{{ $product->price }}" class="form-control" id="price" name="price" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" value="{{ $product->stock }}" class="form-control" id="stock" name="stock" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" value="{{ $product->status }}" class="form-control" id="status" name="status" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
