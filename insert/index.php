<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript">
	 $(document).ready(function(){
		$("#save").click(function(event){
			event.preventDefault();
			$.ajax({
			 url:"insert.php",
			 data:$('form').serialize(),
			 method:"post",
			 datatype:"text",
			 success:function(response){
				 $("#msg").text(response);
			 }
			 
		    })
			 
		})
		 
		 
		 
	 });
	
	</script>
</head>
<body>
  <p id="msg"></p>
	<form action="" method="post">
	<table cellpadding="6" cellspacing="5">
	<tr><th>Enter Name</th>	<td><input type="text" name="name"/></td></tr>
	<tr><th>Enter Email </th> <td><input type="email" name="email"/></td>	</tr>
	<tr><th>Enter Contact</th> <td><input type="text" name="contact"/></td>	</tr>
	<tr><td colspan="2" align="center"><input type="submit" name="save"  id="save" value="save"/></td></tr>
	</table>
	</form>
</body>
</html>