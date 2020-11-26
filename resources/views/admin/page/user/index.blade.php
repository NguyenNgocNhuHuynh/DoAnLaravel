@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Member </h1>

<hr>

<a class="btn btn-primary" href="{{route('user.create')}}"> Create </a>

<br>

<table class="table table-bordered table-hover table-success ">
    <thead class="text-black text-center">
      <th>Image</th>
      <th>Email</th>
      <th>Name</th>
     

      <th colspan="3" class="text-center">Option</th>
    </thead>
    <tbody class="text-black">
      @foreach($users ?? '' as $user)
        <tr>
         
          <td><img style="height:100px; width: auto;" src="{{asset('admin/img/user/'.$user->image)}}"/> </td>
          <td>{{$user->email}} </td>
          <td>{{$user->name}} </td>
        
         
          <td><a href="{{route('user.show',$user->id)}}" class="btn btn-info"> Detail</a></td>
          <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-primary"> Edit</a></td>
            
          <td>
          <form action="{{route('user.destroy', $user->id)}}" method="POST">
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