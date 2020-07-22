<html>
<head>
    <style>
        .page-item{
            display: inline-block;
            padding: 10px;
        }
    </style>
<title>
User Session
</title>
</head>
<body>
    <div>
        @foreach($data as $item)
       <h1> <li>{{$item->title}}</li></h1>
        @endforeach
    </div>

    <div>
<h1>{{$data->links()}}</h1></div>
</body>
</html>
