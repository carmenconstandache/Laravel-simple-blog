@extends('index')

@section('content')

<div class="container mt-4"  >
<form method="post" action="{{route('save_comm')}}"> 
@csrf
  <div class="form-group">
    <label for="comment_text">Message</label>
    <input class="form-control" name="text" id="comment_text" >
  </div>

  <div class="form-group">
    <label for="comment_name">Name</label>
    <input class="form-control" name="name" id="comment_name" >
  </div>

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" >
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input class="form-control" name="phone" id="phone" >
  </div>

  <select name="post_id" id="" class="form-control mb-2">
    @foreach($post as $p)

      <option value="{{$p->id}}"> {{$p->title}} </option>

    @endforeach
  </select>
  
  <button type="submit" class="btn btn-primary">Add comment</button>

  </form>
</div>



@endsection