@extends('admin.layout.default')
@section('body')
<h1 class="text-primary"> Product </h1>  
<hr>
<div>
<a class="btn btn-primary" href="{{route('product.create')}}"> Create </a>
</div>
<br>
<table class="table table-bordered table-hover ">
    <thead class="text-black text-center"> 
      <th>Image</th>  
      <th>Name</th>  
      <th>Quantity</th>  
      <th>Price</th>  
      <th>Category</th>  

      <th colspan="3" class="text-center" >Option</th>
    </thead>
    <tbody class="text-black">
      @foreach($products ?? '' as $product)    
        <tr>
          <td><img style="height:100px; width: auto;" src="{{asset('admin/img/product/'.$product->image)}}"/> </td>
          
          <td>{{$product->name}} </td>
          <td>{{$product->quantity}} </td>
          <td>{{$product->price}} </td>
          <td>{{$product->category->name}} </td>
          
          <td><a href="{{route('product.show',$product->id)}}" class="btn btn-info"> Detail</a></td>
          <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-primary"> Edit</a></td>
          <td>
          <form action="{{route('product.destroy', $product->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
          </td>
          </form>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection