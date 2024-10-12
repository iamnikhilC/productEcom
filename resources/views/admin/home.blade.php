@extends('layouts.app')

<style>
.py-4{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction:column;
}
a{
    text-decoration: none;
}
.product-container {
    background-color: #fff;
    max-width: 800px;
    width: 100%;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    display: flex;
    flex-wrap: wrap;
    margin-bottom:20px;
}
.product-image {
    flex: 1;
    min-width: 250px;
    max-width: 400px;
    text-align: center;
}
.product-image img {
    max-width: 100%;
    border-radius: 8px;
}
.product-details {
    flex: 1;
    padding: 20px;
}
.product-details h2 {
    color: #8787ff;
    margin-top: 0;
}
.product-price {
    font-size: 24px;
    color: #8787ff;
    margin: 10px 0;
}
.product-description {
    font-size: 16px;
    color: #666;
    line-height: 1.5;
}
.update-btn {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #8787ff;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    display: inline-block;
}
.update-btn:hover {
    background-color: #ccccff;
}

</style>

@section('content')
<h2>Product Details</h2>
@foreach($products as $product)
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
        <a href="" class="update-btn">Add To Cart <i class="fa-solid fa-cart-plus"></i></a>
        <a href="" class="update-btn">Buy now <i class="fa-solid fa-bag-shopping"></i></a>
    </div>
</div>
@endforeach

@endsection