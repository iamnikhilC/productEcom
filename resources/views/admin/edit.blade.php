@extends('layouts.admin')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<h2>Edit Product</h2>

<div class="product-container" style="gap:20px;">
    <!-- Product Image -->
    <div class="product-image">
    <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" class="product-image">

        <!-- <img src="product-image.jpg" alt="Product Image"> -->
    </div>

    <!-- Product Details -->
    <form action="{{route('update',['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product-name">Product Name</label>
            <input type="text" id="product-name" name="name" value="{{$product->name}}" required>
        </div>
        <div class="form-group">
            <label for="product-image">Product Image</label>
            <input type="file" id="product-image" name="image" accept="image/*" value="{{$product->image}}">
        </div>
        <div class="form-group">
            <label for="product-price">Amount</label>
            <input type="number" id="product-price" name="amount" value="{{$product->amount}}" step="0.01" min="0" required>
        </div>
        <div class="form-group">
            <label for="product-description">Description</label>
            <textarea id="product-description" name="description" rows="4">{{$product->description}}</textarea>
        </div>
        <button type="submit" class="submit-btn">Update</button>
    </form>
</div>
@endsection