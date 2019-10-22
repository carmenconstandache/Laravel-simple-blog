@extends('index')


@section('content')
<form method= "post" action="{{route('storeEmail')}}">
@csrf
<div class="form-group  mt-2 emailClass">
    <label for="email">E-mail</label>
    <input type="text" class="form-control" name="email[]" id="email" >
</div>


<span class="btn btn-primary newClass mt-2">ADD</span>

<button type="submit" class="btn btn-primary mt-2 saveBtn">SAVE</button>


</form>

  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script>
$( ".newClass" ).click(function() {
    

$('.emailClass:last').clone().find("input:text").val("").end().appendTo('.emailClass');


});

$( ".saveBtn" ).click(function() {
    

});

</script>




@endsection