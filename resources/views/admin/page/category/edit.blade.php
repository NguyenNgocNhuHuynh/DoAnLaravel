@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Category </h1>

<h4> Edit </h4>

<hr>

<form action="{{route('category.update',$cate->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
     <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" value="{{$cate->name}}">
   </div>
  
   <button type="submit" class="btn btn-primary">Edit</button>
 </form>

 @endsection