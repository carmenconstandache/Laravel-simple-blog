@extends('index')

@section('content')

<div class="container mt-4"  >
<form method="post" action="{{route('posts.store')}}"> 
@csrf
  <div class="form-group">
    <label for="post_title">Post title</label>
    <input class="form-control" name="title" id="post_title" >
  </div>

  <div class="form-group">
    <label for="post_content">Post content</label>
    <input class="form-control" name="content" id="post_content" >
  </div>

 
  <select name="category_id" id="" class="form-control mb-2">
  @foreach($category as $ctg)

  <option value="{{$ctg->id}}"> {{$ctg->name}} </option>

  @endforeach
  </select>

  <div class="custom-file">
    <input type="file" class="custom-file-input" name="image" id="post_image" >
    <label class="custom-file-label" for="post_image">Select image</label>

  </div>

  <button type="submit" class="btn btn-primary mt-2">Add category</button>

  </form>
</div>

<script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

</script>

@endsection
