@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
<div class="container-fluid p-0">
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center justify-content-center" style="background: url('{{ asset('assets/hero-bg.jpg') }}') center/cover no-repeat; height: 400px;">
        <div class="text-center text-white">
            <h1 class="fw-bold fs-1 text-uppercase text-shadow text-black text-center mt-5 display-4  mb-3">مرحبًا بكم في المتجر الحديث</h1>
            <p class="lead mb-4 text-shadow text-black text-center fw-bold   ">اكتشف أفضل المنتجات التي صُنعت خصيصًا من أجلك</p>
            <a href="#products" class="btn btn-warning btn-lg">تسوق الآن</a>
        </div>
    </section>

    <!-- Featured Products Section -->
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">المنتجات المميزة</h2>
            <p>أفضل وأحدث منتجاتنا</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($products as $product)
                <div class="col">
                    <div class="card h-100 product-card d-flex flex-column justify-content-between align-items-center hover ">
                        <img src="{{ asset( $product->image) }}" class="card-img-top product-image  object-cover " width="200" height="300" alt="{{ $product->name }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-success fw-bold">${{ number_format($product->price, 2) }}</p>
                            <form method="POST" action="">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-primary">أضف إلى السلة</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">لا توجد منتجات مميزة حاليًا</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Categories Section -->
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">فئات المنتجات</h2>
            <p>استكشف مجموعة واسعة من الفئات</p>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @forelse ($categories as $category)
                <div class="col">
                    <div class="card h-100 product-card d-flex flex-column justify-content-between align-items-center ">
                        <a href="">
                            <img src="{{ asset( $category->image) }}" class="card-img-top product-image  object-cover" width="200" height="200" alt="{{ $category->name }}">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ $category->product_count }} منتجات</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">لا توجد فئات متوفرة</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} جميع الحقوق محفوظة</p>
        </div>
    </footer>
</div>
@endsection
