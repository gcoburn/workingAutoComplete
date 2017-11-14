<?php
$host = null;
$socket = "/cloudsql/<PROJECT-NAME>:<LOCATION>:<DB-INSTANCE-NAME>";
$user = "root"; /* User */
$password = "PASSWORD"; /* Password */
$dbname = "DB-NAME"; /* Database name */

//connect with the database
$db = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
	}
?>
