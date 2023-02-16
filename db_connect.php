<?php

$servername = "*SERVER_NAME*";
$username = "*USERNAME*";
$password = "*PASSWORD*";
$database = "*DATABASE_NAME*";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
	

?>