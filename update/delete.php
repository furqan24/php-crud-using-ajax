<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript">
	 $(document).ready(function(){
		$("#delete").click(function(event){
			event.preventDefault();
			$.ajax({
			 url:"delete2.php",
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
	
	<table cellpadding="6" cellspacing="5">
	<tr><td>id</th>	<td><?= $_GET['id']?></td></tr>
	<tr><td>city_name</td>	<td><?= $_GET['city']?></td></tr>
	<tr><td>city_code </td> <td><?= $_GET['code']?></td>	</tr>
	<tr><td>active </th> <td><?= $_GET['active']?></td>	</tr>
	<tr><td colspan="2" align="center"></td></tr>
	</table>

<h2>are you sure you want to delete??</h2>
	<form action="" method="post">
		<input type="text" name="id" readonly="readonly" value="<?= $_GET['id'] ?>">
		<input type="submit" name="delete" id="delete" value="delete">
	</form>

</body>
</html>