<?php
$host = null;
$socket = "/cloudsql/gary-demo:us-central1:ccs-sql"; /* Host name */
$user = "root"; /* User */
$password = "P@ssw0rd"; /* Password */
$dbname = "giwacdb"; /* Database name */

//connect with the database
$db = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
	}
?>