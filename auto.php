<?php
//include the connection file for db access
include "cloudSqlConnect.php";

//set trigger query, get results and set data variable with row information
$query = "SELECT name FROM products";
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_array($result)){
	$data[] = $row['name'];
}

//return json data
echo json_encode($data);
?>