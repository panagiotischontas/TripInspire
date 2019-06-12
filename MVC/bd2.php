<html>
<head>
  <meta charset="utf-8">
</head>
<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "test2";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPass, $dbName);

echo "succees";

$sql = "SELECT * FROM aeroporturi";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

for($k = 0; $k < $resultCheck; $k = $k+1){
  $row = mysqli_fetch_assoc($result);
  $CurrOras = $row['oras'];
  $CurrAir = $row['aeroport'];
  echo $CurrAir . " --> " . $CurrOras . ", ";
}


 ?>
 </html>
