@extends('index')

@section('content')

<div class="container mt-4"  >
<form method="post" action="{{route('categories.store')}}"> 
@csrf
  <div class="form-group">
    <label for="category_name">Category name</label>
    <input class="form-control" name="name" id="category_name" >
  </div>
  
  <button type="submit" class="btn btn-primary">Add category</button>

  </form>
</div>

@endsection