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
<div class="form-container">
    <h2>Add Product</h2>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product-name">Product Name</label>
            <input type="text" id="product-name" name="name" required>
        </div>
        <div class="form-group">
            <label for="product-image">Product Image</label>
            <input type="file" id="product-image" name="image" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="product-price">Amount</label>
            <input type="number" id="product-price" name="amount" step="0.01" min="0" required>
        </div>
        <div class="form-group">
            <label for="product-description">Description</label>
            <textarea id="product-description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Add Product</button>
    </form>
</div>
@endsection