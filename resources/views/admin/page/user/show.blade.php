@extends('admin.layout.default')
@section('body')
<center>
  <h2 class="text-primary"> Product </h2>
  </center>
  
    <table class="table table-bordereds ">
      <thead class="text-black text-center"> 
        <th>Image</th>  
        <th>Name</th>  
        <th>Email</th>  
        <th>Phone</th>  
        <th>Address</th>  
       
      
      </thead>
      <tbody class="text-black">
       <tr>
         <td>
          <label > <img height="70px" width="auto" src="{{asset('admin/img/user/'.$users->image)}}" alt=""> </label>
         </td>
         
         <td>
          <label > {{$users->name}}  </label>
         </td>
         <td>
          <label >{{$users->email}} </label>
         </td>
         <td>
          <label >{{$users->phone_number}} </label>
         </td>
         <td>
          <label >{{$users->address}} </label>
         </td>
       </tr>
      </tbody>
    </table>
    
    <div class="form-group" >
      <a href="{{route('user.index')}}" class="btn btn-success"> List</a>
    </div>
@endsection