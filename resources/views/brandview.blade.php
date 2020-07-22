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
   <form action="branddelete" method="post">
   @csrf
   <select name="id" id="">
   <option value="1">Apple</option>
   <option value="2">Mi</option>
   <option value="3">LG</option>
   </select>
   <br><br>
   {{-- <input type="text" name="name" placeholder="Brand name">
    {{-- @error('username')
    <div>{{$message}}</div>
    @enderror --}}
    {{-- <br><br>
    <input type="text" name="post_id" placeholder="Post id">
    <br><br> --}}
    <button type="submit">Delete</button>
   </form>
</body>
</html>
