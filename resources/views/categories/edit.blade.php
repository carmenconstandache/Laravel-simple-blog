@extends('index')

@section('content')

<div class="container mt-4"  >
<form method="post" action="{{route('categories.update',$category->id)}}"> 
@method('PUT')
@csrf
  <div class="form-group">
    <label for="category_name">Category name</label>
    <input class="form-control" name="name" id="category_name" value="{{$category->name}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>

  </form>
</div>

@endsection