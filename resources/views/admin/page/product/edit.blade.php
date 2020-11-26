@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Product </h1>

<h4> Edit </h4>

<hr>

<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
   
      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image" >
      </div>
      <div class="form-group">
       <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" value="{{$product->name}}">
     </div>
     <div class="form-group">
       <label for="quantity">Quantity:</label>
       <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
     </div>
     <div class="form-group">
       <label for="price">Price:</label>
       <input type="number" class="form-control" name="price" value="{{$product->price}}">
     </div>
  
     <div class="form-group">
       <label >Category:</label>
     <select name="cate">
       @foreach ($categories as $category)
         <option  value="{{$category->id}}"> {{$category->name}}</option>
       @endforeach
   
     </select>
     </div>
     <div class="form-group">
       <label for="detail">Detail:</label>
     <textarea class="form-control" id="details" name="detail"></textarea>
       <script>CKEDITOR.replace('details');</script>
     </div>
   <button type="submit" class="btn btn-primary">Edit</button>
 </form>

 @endsection