@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Category </h1>

<hr>

<a class="btn btn-primary" href="{{route('category.create')}}"> Create </a>

<br>

<table class="table table-bordered table-hover ">
    <thead class="text-black text-center">
     
      <th>Name</th>
 
     
     
      <th colspan="3" class="text-center" >Option</th>
    </thead>
    <tbody class="text-black">
      @foreach($cate ?? '' as $category)
        <tr>
         
          <td>{{$category->name}} </td>
        
          <td><a href="{{route('category.show',$category->id)}}" class="btn btn-info"> Detail</a></td>
          <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-primary"> Edit</a></td>
            
          <td>
          <form action="{{route('category.destroy', $category->id)}}" method="POST">
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