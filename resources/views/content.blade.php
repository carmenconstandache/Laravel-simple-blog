@extends('index')




@section('title', $post->title)



@section('content')

<h5> {!!$post->content!!} </h5>
<h6> {{$post->views}} views</h6>
</div>
</div>
</div>

@if(count($post->comments)>0)

<div class="container  mb-4" >
<div class="card border-0">
  <div class="card-body">

<ul class="list-group mb-4">

@foreach($post->comments()->paginate(5) as $comment)

<li class="list-group-item  border-left-0 border-right-0"> <h6> {{$comment->name}} </h6><p> <h5>{{$comment->text}} </h5></p> </li>


@endforeach


</ul>

{{$post->comments()->paginate(5)->links()}}


</div>
</div>
</div>

@endif


<div class="container mt-4 mb-4" style="width:600px" >


<form method="post" action="{{route('save_comm', $post->id)}}"> 
@csrf
  <div class="form-group">
    <label for="comment_text">Message</label>
    <input class="form-control" name="text" id="comment_text" >
  </div>
  
  @if ($errors->has('message')) 
    <li>{!! $errors->first('message') !!}</li>

@endif

  <div class="form-group">
    <label for="comment_name">Name</label>
    <input class="form-control" name="name" id="comment_name" >
  </div>

  @if ($errors->has('name')) 
  <li>{!! $errors->first('name') !!}</li>


@endif

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control" name="email" id="email" >
  </div>

  @if ($errors->has('email')) 

  <li>{!! $errors->first('email') !!}</li>


@endif

  <div class="form-group">
    <label for="phone">Phone</label>
    <input class="form-control" name="phone" id="phone" >
  </div>

  @if ($errors->has('phone')) 

  <li>{!! $errors->first('phone') !!}</li>


@endif

  
  <button type="submit" class="btn btn-primary">Add comment</button>

  </form>
</div>

@endsection






