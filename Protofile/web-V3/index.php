
<html> 
<head>   
 
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/dropzone.min.js"></script>
 
</head>
 
<body>

<form id="dropzone-form" action="process_document.php" class="dropzone">


</form>


<script>
  var myDropzone = new Dropzone("#dropzone-form");
  myDropzone.on("success", function(file) {
    window.location.href = "http://localhost/pre-reg/web-V3/student.php";
  });



</script>
</body>
</html>