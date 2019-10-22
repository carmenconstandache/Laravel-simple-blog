@extends('index')

@section('content')

<ul class="list-group mb-4">

@foreach($post as $p)

  <li class="list-group-item  border-left-0 border-right-0">  <a href="{{route('content',$p->id)}}" ><h1>{{$p->title}}</h1> </a> <p> {!!substr($p->content,0,250)!!}... </p> <p>Posted on {{date('D-M-Y', strtotime($p->created_at))}} </p> </li>

@endforeach
 
</ul>

{{$post->links()}}

@endsection