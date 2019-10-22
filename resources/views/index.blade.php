<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="jquery-3.4.1.min.js"></script>

</head>

<body>





<div style="background-image:url('@if(isset($post->image)) ../img/{{$post->image}} @else  https://i.stack.imgur.com/OpeH1.png @endif'); background-size: cover;height:450px;width:100%; border:1px white solid">

<div class="text-white text-center " style="margin-top: 10%">

<h1> @yield('title') </h1> 

</div>
</div>


<div class="container mt-4 mb-4" >
<div class="card border-0">
  <div class="card-body">

@yield('content')

  </div>
</div>
</div>

</body>
</html>