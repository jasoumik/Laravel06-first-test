<html>
<head>
<script src="js/jquery.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    alert("The button was clicked.");
    $.get('',function(result,state){
        console.warn(result);
    });
  });
});
</script>
</head>
<body>
    <h1>Profle list</h1>
    <button>fetch ajax data</button>
</body>
</html>