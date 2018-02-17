<?php 
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("triplan");

$query="select * from city";
echo "<table><tr><th>ID</th><th>city name</th><th>city code</th><th>active</th></tr>";
if($data=mysql_query($query)){
	while ($row=mysql_fetch_assoc($data)) {
		echo "<tr>";
		echo "<td>".$id_city=$row['id_city']."</td>";
		echo "<td>".$city_name=$row['city_name']."</td>";
		echo "<td>".$city_code=$row['city_code']."</td>";
		echo "<td>".$active=$row['active']."</td>";
		echo "</tr>";

		
	}
	echo "</table>";
}else{
	echo mysql_error();
}