@extends('layouts.admin')

@section('content')
<h2>Product List</h2>

<table>
    <tr>
        <th>Nmae</th>
        <th>Price</th>
        <th>Description</th>
        <th style="width:content;">Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>

        <!-- <td><img src="{{ Storage::url('images/' . $product->image) }}" alt="Product Image" class="product-image"></td> -->
        <td>{{$product->amount}}</td>
        <td>{{$product->description}}</td>
        <td style="width:100px;">
            <a href="{{route('edit', ['id' => $product->id])}}" class="action-btn"><i class="fa-duotone fa-solid fa-pen-to-square"></i></a>
            <a href="{{route('view', ['id' => $product->id])}}" class="action-btn"><i class="fa-sharp fa-solid fa-eye"></i></a>
        </td>
    </tr>
    @endforeach
    
</table>




@endsection