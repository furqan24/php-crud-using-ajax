<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("triplan");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$query="update city set city_name='$name', city_code='$email',active='$contact' where id_city='$id'";
if(mysql_query($query)){
	echo "record has been update";
}else{
	mysql_error();
	
}
?>