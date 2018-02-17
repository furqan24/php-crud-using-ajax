<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("triplan");
$id=$_POST['id'];
/*$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];*/
$query="delete from city where id_city='$id'";
if(mysql_query($query)){
	header("Refresh: 5; url=update.php");
	echo "record has been deleted";
   
}else{
	mysql_error();
	
}
?>