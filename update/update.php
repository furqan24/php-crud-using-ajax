<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript">
	 $(document).ready(function(){
		$("#update").click(function(event){
			event.preventDefault();
			$.ajax({
			 url:"update2.php",
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
	<tr><th></th>	<td><input type="hidden" name="id" value="<?= $_GET['id']?>" readonly="readonly"/></td></tr>
	<tr><th>city_name</th>	<td><input type="text" name="name" id="name" value="<?= $_GET['city']?>" /></td></tr>
	<tr><th>city_code </th> <td><input type="email" name="email" id="email" value="<?= $_GET['code']?>" /></td>	</tr>
	<tr><th>active </th> <td><input type="text" name="contact" id="contact" value="<?= $_GET['active']?>" /></td>	</tr>
	<tr><td colspan="2" align="center"><input type="submit" name="update"  id="update" value="update"/></td></tr>
	</table>
	</form>

</body>
</html>