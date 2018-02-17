<?php 
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("triplan");

$query="select * from city";
echo "<table><tr><th>ID</th><th>city name</th><th>city code</th><th>active</th><th>Edit</th><th>Delete</th></tr>";
if($data=mysql_query($query)){
	while ($row=mysql_fetch_assoc($data)) {
		echo "<tr><td>$row[id_city]</td>
		<td>$row[city_name]</td>
		<td>$row[city_code]</td>
		<td>$row[active]</td>
		<td><a href='update.php?id=$row[id_city] & city=$row[city_name] & code=$row[city_code] & active=$row[active]'>edit</a></td>
		<td><a href='delete.php?id=$row[id_city]&city=$row[city_name]&code=$row[city_code]&active=$row[active]'>delete</a></td>
		
		</tr>";

		
	}
	echo "</table>";
}else{
	echo mysql_error();
}