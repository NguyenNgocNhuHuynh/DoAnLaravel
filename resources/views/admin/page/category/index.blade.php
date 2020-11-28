@extends('admin.layout.default')
@section('body')

<h1 class="text-primary"> Category </h1>

<hr>

<a class="btn btn-primary" href="{{route('category.create')}}"> Create </a>

<br>

<table class="table table-bordered table-hover ">
    <thead class="text-black text-center">
     
      <th>Name</th>
 
     
     
      <th colspan="2" class="text-center" >Option</th>
    </thead>
    <tbody class="text-black">
      @foreach($cate ?? '' as $category)
        <tr>
         
          <td>{{$category->name}} </td>
        
       
          <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-primary"> Edit</a></td>
            
          @if($category->status==false)
          <td>
            <form action="{{route('category.destroy', $category->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary"><i class="fa fa-unlock"></i> Unlock</button>
          </form>
            </td>
           @endif

           @if($category->status==true)
          <td>
          <form action="{{route('category.destroy', $category->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-success"><i class="fa fa-lock"></i> Lock</button>
         
         
          </form>
        </td>
        @endif
        </tr>
      @endforeach
    </tbody>
  </table>


@endsection