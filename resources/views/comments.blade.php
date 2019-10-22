@extends('index')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Text</th>
      <th scope="col">Post</th>

      <th scope="col" class="text-right">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    
     @foreach($comments as $comm)
     <tr>
     <td> {{$comm->id}} </td>

       <td> {{$comm->name}} </td>
       <td> {{$comm->email}} </td>
       <td> {{$comm->phone}} </td>
       <td> {{$comm->text}} </td>
       <td> {{$comm->post_fk->title}} </td>

       <td class="float-right">
       <div class="row">
       
       <form method="post" action="{{route('commentsdelete',$comm->id)}}">
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



@endsection