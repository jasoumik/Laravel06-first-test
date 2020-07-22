<html>
<head>
<title>
User Form
</title>
</head>
<body>
    <!-- <div>
       <ul>
       {{-- @foreach($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach --}}
    </ul>

    </div> -->
   <form action="brandSubmit" method="post">
   @csrf
   <input type="text" name="name" placeholder="Brand name">
    {{-- @error('username')
    <div>{{$message}}</div>
    @enderror --}}
    <br><br>
    <input type="text" name="post_id" placeholder="Post id">
    <br><br>
    <button type="submit">Submit</button>
   </form>
</body>
</html>
