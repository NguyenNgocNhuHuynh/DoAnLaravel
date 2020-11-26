@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Product </h1>

<hr>

<a class="btn btn-primary" href="{{route('product.create')}}"> Create </a>

<br>
  <div class="form-group">
    <label for="image">Image:</label>
    <label > {{$product->image}} </label>
  </div>

  <div class="form-group">
    <label for="name">Name:</label>
    <label > {{$product->name}} </label>
  </div>

  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <label > {{$product->quantity}} </label>
  </div>

  

  <div class="form-group">
    <label for="detail">Detail</label>
    <label > {{$product->detail}} </label>
  </div>


  <div class="form-group">
    <a href="{{route('product.edit', $product->id)}}" class="btn btn-warning"> Edit</a>
  </div>
  
  <div class="form-group">
    <a href="{{route('product.index')}}" class="btn btn-black"> List</a>
  </div>

@endsection