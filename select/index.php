<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		$("#load").click(function(event){
			event.preventDefault();
			$.ajax({
			 url:"show.php",
			 datatype:"html",
			 success:function(response){
				 $("#result").html(response);
			 }
			 
		    })
			 
		})
		 
		 
		 
	 });
		
	</script>
</head>
<body>

	<h1>Show data from db using ajax</h1>
	<button id="load">load data</button>
	<div id="result"></div>

</body>
</html>