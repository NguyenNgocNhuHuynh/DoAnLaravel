@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Category </h1>

<hr>

<a class="btn btn-primary" href="{{route('category.create')}}"> Create </a>

<br>
<div class="form-group">
    <label for="name">Name:</label>
    <label > {{$cate->name}} </label>
  </div>

  <div class="form-group">
    <a href="{{route('category.edit', $cate->id)}}" class="btn btn-warning"> Edit</a>
    
  </div>
  
  <div class="form-group">
    <a href="{{route('category.index')}}" class="btn btn-black"> List</a>
  </div>

@endsection