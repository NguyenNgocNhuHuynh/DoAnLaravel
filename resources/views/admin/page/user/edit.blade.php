@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> User </h1>

<h4> Edit </h4>

<hr>

<form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
      <label for="image">Image:</label>
    <input type="file" class="form-control" name="image" value="{{$user->image}}">
    </div>
 
    <div class="form-group">
     <label for="email">Email:</label>
     <input type="email" class="form-control" name="email"value="{{$user->email}}">
   </div>

 
  
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name"value="{{$user->name}}">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number:</label>
    <input type="text" class="form-control" name="phone_number"value="{{$user->phone_number}}">
  </div>

  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" name="address"value="{{$user->address}}">
  </div>


  
   <button type="submit" class="btn btn-primary">Edit</button>
 </form>

 @endsection