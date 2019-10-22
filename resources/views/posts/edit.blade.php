@extends('index')

@section('content')

<div class="container mt-4"  >
<form method="post" action="{{route('posts.update',$post->id)}}"> 
@method('PUT')
@csrf
  <div class="form-group">
    <label for="post_title">Title</label>
    <input class="form-control" name="title" id="post_title" value="{{$post->title}}">
  </div>
  
  <div class="form-group">
    <label for="post_content">Content</label>
    <input class="form-control" name="content" id="post_content" value="{{$post->content}}">
  </div>

  <select name="category_id" id="" class="form-control mb-2">
  @foreach($categories as $ctg)

  <option value="{{$ctg->id}}"> {{$ctg->name}} </option>

  @endforeach
  </select>

  <button type="submit" class="btn btn-primary">Save</button>

  </form>
</div>

@endsection