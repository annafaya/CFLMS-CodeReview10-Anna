<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php

$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "cr10_anna_biglibrary";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error() . "\n");
}
// sql to create table
	$sql = "CREATE TABLE media (
		id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  		image varchar(150) DEFAULT NULL,
  		type varchar(30) DEFAULT NULL,
  		title varchar(100) DEFAULT NULL,
  		author varchar(30) DEFAULT NULL,
  		ISBN varchar(30) DEFAULT NULL,
  		short_description varchar(300) DEFAULT NULL,
  		publish_date date DEFAULT NULL,
  		publisher varchar(30) DEFAULT NULL
	)" ;
if (mysqli_query($conn, $sql)) {
   echo "Table Users created successfully"  . "\n";
} else {
   echo  "Error creating table: " . mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>
</body>
</html>