<html>
<head>
<title>
Upload file
</title>
</head>
<body>
    <!-- <div>
       <ul>
       @foreach($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
    </ul>

    </div> -->
   <form action="upload" method="post" enctype="multipart/form-data">
   @csrf
   <input type="file" name="user_img">
    {{-- @error('username')
    <div>{{$message}}</div>
    @enderror
    <br><br>
    <input type="text" name="usermail"> --}}
    <br><br>
    <button type="submit">Upload Img</button>
   </form>
</body>
</html>
