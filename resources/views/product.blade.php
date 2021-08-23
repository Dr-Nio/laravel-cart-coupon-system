@extends('layouts.app')

@section('content')

<main class="container-fluid">
    <div class="container-fluid text-center">
        <h2>Shop</h2> <hr>
        <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/macbook.webp') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <h2 class="card-text">${{ $product->price }}</h2>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<div class="footer bg-secondary text-white mt-3">
    <div class="container-fluid ">
        <div class="row">
            <div class="col align-self-start">
                One of three columns
            </div>
            <div class="col align-self-center">
                One of three columns
            </div>
            <div class="col align-self-end">
                One of three columns
            </div>
        </div>
    </div>
</div>
@endsection
