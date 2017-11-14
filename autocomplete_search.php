<?php
//include the connection file for db access
include "cloudSqlConnect.php";

$searchTerm = $_GET['term']; 	//get search term

//set trigger query, get results and set data variable with row information
$query = "SELECT name FROM products WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC Limit 0,25";
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_array($result)){
	$data[] = $row['name'];
}

//return json data
echo json_encode($data);
?>