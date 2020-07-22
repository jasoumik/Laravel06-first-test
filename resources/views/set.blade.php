<html>
<head>
<title>
User Info
</title>
</head>
<body>
    <!-- <h1>Set View</h1> -->
    <!-- @for($i=0; $i < 4;$i++ )
    <p>The value of i is {{$i}}</p>
    @endfor -->
    {{$id}}
    {{$name}}
    @foreach($burgers as $burger)
    <div>
    {{$loop->index}} {{$burger['type']}}
    @if($loop->last)
    -last in the loop
    @endif
    </div>
    @endforeach

</body>
</html>
