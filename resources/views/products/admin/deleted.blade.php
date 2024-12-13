
@extends('layouts.app')
@extends('layouts.navbar')
@section('title', 'Product Deleted')
@section('content')
<div class="container my-5 text-center text-uppercase fw-bold fs-1 text-decoration-none d-flex justify-content-between align-items-center text-primary text-decoration-underline">
    <h1>Product Deleted</h1>
</div>
 <!-- Products Section -->
 <section id="products" class="products-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Our Products</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($product->description, 100) }}</p>
                            <p class="card-text fw-bold">${{ number_format($product->price, 2) }}</p>
                            <p class="card-text {{ $product->stock > 0 ? 'text-success' : 'text-danger' }}">
                                {{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary btn-sm">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                            <a href="{{ route('products.restore', $product->id) }}" class="btn btn-outline-success btn-sm">Restore</a>
                            <form action="{{ route('products.delete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">No products found</div>
                </div>
            @endforelse
        </div>


    </div>
</section>
</div>
@endsection
