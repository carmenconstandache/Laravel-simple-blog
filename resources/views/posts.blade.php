@extends('index')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Category</th>

      <th scope="col" class="text-right">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    
     @foreach($posts as $post)
     <tr>
       <td> {{$post->id}} </td>
       <td> {{$post->title}} </td>
       <td> {{$post->content}} </td>
       <td> {{$post->category->name}} </td>



       <td class="text-right">
       <div class="row">
        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary mr-2 btn-sm">Edit</a> 
       <form method="post" action="{{route('posts.destroy',$post->id)}}">
       @method('DELETE')
       @csrf
       <button type="submit" class="btn btn-primary btn-sm mt-2">Delete</a> 
       </div>
       </td>
       </form>
         </tr>
     @endforeach
    
  </tbody>
</table>

<a href="{{route('posts.create')}}" class="btn btn-primary mr-2 btn-sm">Add post</a> 




@endsection