@extends('layouts.app')

@section('title', 'View Product')
@section("content")
        <div class="card mt-5">
            <div class="card-header"><h4>Product Show</h4></div>
            <div class="card-body">
                <a href="{{ route('products.index') }}" class="btn btn-info btn-sm mb-3">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Back
                </a>
    
                <div class="mt-4">
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Detail:</strong> {{ $product->detail }}</p>
                </div>
            </div>
        </div>
@endsection
