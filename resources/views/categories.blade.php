@extends('index')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col" class="text-right">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    
     @foreach($categories as $ctg)
     <tr>
       <td> {{$ctg->id}} </td>
       <td> {{$ctg->name}} </td>

       <td class="float-right">
       <div class="row">
        <a href="{{route('categories.edit',$ctg->id)}}" class="btn btn-primary mr-2 btn-sm">Edit</a> 
       <form method="post" action="{{route('categories.destroy',$ctg->id)}}">
       @method('DELETE')
       @csrf
       <button type="submit" class="btn btn-primary btn-sm">Delete</a> 
       </div>
       </td>
       </form>
         </tr>
     @endforeach
    
  </tbody>
</table>

<a href="{{route('categories.create')}}" class="btn btn-primary mr-2 btn-sm">Add category</a> 


@endsection