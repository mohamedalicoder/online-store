
@extends('layouts.app')
@extends('layouts.navbar')
<title>show product</title>
@section('content')

<div class="container my-5 text-center text-uppercase fw-bold fs-1 text-decoration-none d-flex justify-content-between align-items-center text-primary ">
    <h1>Product Number {{ $product->id }}</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">All Products</a>
</div>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $product->name }}</h5>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $product->description }}</p>
        </div>
            <div class="card-footer">
                <p class="card-text">Price: {{ $product->price }}</p>
                <p class="card-text">Stock: {{ $product->stock }}</p>
                <img class=" w-25  h-25" src="{{ $product->image }}">
                <p class="card-text">Status: {{ $product->status }}</p>

            </div>
        <div class="card-footer">
            <p class="card-text">Created At: {{ $product->created_at }}</p>
            <p class="card-text">Updated At: {{ $product->updated_at }}</p>
        </div>

    </div>
</div>

@endsection
