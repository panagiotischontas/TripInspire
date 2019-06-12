<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "tw";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPass, $dbName);
$sql = "INSERT INTO AEROPORTURI VALUES('Iran', 'Abadan', 'ABD');";
mysqli_query($conn, $sql);

echo "totul bun";



 ?>
