<h1>User </h1>
@extends('layout')
@section('title','User')


@section('header')
@parent
@endsection

{{-- @section('content','Middle user page part come from child part')

@section('footer')
@parent
@endsection --}}
{{--
<!-- <h1>Users</h1>
<a href="welcome">Open Welcome page</a> -->

<html>
<head>
<title>
User Blade
</title>
</head>
<body>
<h1>Hello From user View</h1>
<div>
   {{$data['name']}}
</div>

<div>
   @if($data['name']=='jasoumik')
   Hi,This is jasoumik
   @elseif($data['name']=='nobin')
   Hi,This is nobin
   @else
   Hi,New Friend
   @endif
</div>
<div>
   @foreach($data as $d)
   <li>{!!$d!!}</li>
   @endforeach
</div>
<!-- <form action="UserController" method="post">

   <input type="text" name="username">
   @csrf
     @error('username')
    <div>{{$message}}</div>
    @enderror -->
    <!-- <br><br>
    <input type="text" name="pass">
    <br><br>
    <button type="submit">Submit</button>
   </form> -->
</body>
</html>
<script>
   var a=@json($data);
   console.log('php code in js',a);
</script> --}}
