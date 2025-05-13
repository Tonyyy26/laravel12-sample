@extends('layouts.app')

@section('title', 'Create Product')
@section("content")
    <div class="card mt-5">
            <div class="card-header"><h4>Product Create</h4></div>
            <div class="card-body">
                <a href="{{ route('products.index') }}" class="btn btn-info btn-sm mb-3">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Back
                </a>
    
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mt-2">
                        <label for="">Name:</label>
                        <input type="text" name="name" placeholder="Name" class="form-control">
                        @error('name')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
    
                    <div class="mt-2">
                        <label for="">Detail:</label>
                        <textarea name="detail" placeholder="Detail" class="form-control"></textarea>
                        @error('detail')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
    
                    <div class="mt-2">
                        <button class="btn btn-success btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
