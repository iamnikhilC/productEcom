@extends('layouts.admin')

@section('content')
<h2>Product Details</h2>
<div class="product-container">
    <!-- Product Image -->
    <div class="product-image">
    <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" class="product-image">

        <!-- <img src="product-image.jpg" alt="Product Image"> -->
    </div>

    <!-- Product Details -->
    <div class="product-details">
        <h2>{{$product->name}}</h2>
        <div class="product-price">{{ html_entity_decode('&#8377;') }}{{$product->amount}}</div>
        <p class="product-description">
            {{$product->description}}
        </p>
        <a href="{{route('edit',['id' => $product->id])}}" class="update-btn">Edit <i class="fa-duotone fa-solid fa-pen-to-square"></i></a>
    </div>
</div>
@endsection