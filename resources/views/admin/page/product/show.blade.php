@extends('admin.layout.default')
@section('body')
<center>
<h2 class="text-primary"> Product </h2>
</center>

  <table class="table table-bordereds ">
    <thead class="text-black text-center"> 
      <th>Image</th>  
      <th>Name</th>  
      <th>Quantity</th>  
      <th>Price</th>  
      <th>Category</th>  
  
      <th >Detail</th>
    </thead>
    <tbody class="text-black">
     <tr>
       <td>
        <label > <img height="70px" width="auto" src="{{asset('admin/img/product/'.$products->image)}}" alt=""> </label>
       </td>
       <td>
        <label > {{$products->name}}  </label>
       </td>
       <td>
        <label >{{$products->quantity}} </label>
       </td>
       <td>
        <label > {{$products->price}} </label>
       </td>
       <td>
        <label > {{$products->category->name}} </label>
       </td>
       <td>
        <label > {{$products->detail}} </label>
       </td>
     </tr>
    </tbody>
  </table>
  
  <div class="form-group" >
    <a href="{{route('product.index')}}" class="btn btn-success"> List</a>
  </div>

@endsection


