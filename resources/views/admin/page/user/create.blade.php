@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Member </h1>

<h4> Create </h4>

<hr>

<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="image">
    </div>
 
    <div class="form-group">
     <label for="email">Email:</label>
     <input type="email" class="form-control" name="email">
   </div>

   <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number:</label>
    <input type="text" class="form-control" name="phone_number">
  </div>

  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" name="address">
  </div>



  
   <button type="submit" class="btn btn-primary">Create</button>
 </form>

 @endsection