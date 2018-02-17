<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("triplan");
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$query="insert into city values(null,'$name','$email','$contact')";
if(mysql_query($query)){
	echo "record has been inserted";
}else{
	mysql_error();
	
}
?>