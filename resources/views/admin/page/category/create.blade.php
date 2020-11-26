@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Category </h1>

<h4> Create </h4>

<hr>

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" name="name">
   </div>
  
   <button type="submit" class="btn btn-primary">Create</button>
 </form>

 @endsection