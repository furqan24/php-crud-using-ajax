<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript">
	  $(document).ready(function(){
		  $.ajax({
			  url:"data.php",
			  data:"",
			  datatype:"text",
			  success:function(str){
				  $("#show").text(str);
			  }
		  })
		  
	  })
	
	</script>
</head>
<body>
	<div id="show"></div>
</body>
</html>