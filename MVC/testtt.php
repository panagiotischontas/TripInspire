
<?php

function getAir(){
  $dbServerName = "localhost";
  $dbUsername = "root";
  $dbPass = "";
  $dbName = "tw";

  $conn = mysqli_connect($dbServerName, $dbUsername, $dbPass, $dbName);

  foreach ($this->tari as $c => $t) {
    // echo $c .  ": ";
    for($i = 0; $i <count($t); $i = $i+1){
      // echo $t[$i] . ", ";

      $sql = "SELECT oras, aeroport FROM aeroporturi where tara like \'%" . $t[$i] . "%'";
      echo $sql;
      $result = mysqli_query($this->conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      for($k = 0; $k < $resultCheck; $k = $k+1){
        $row = mysqli_fetch_assoc($result);
        $CurrOras = $row['oras'];
        $CurrAir = $row['aeroport'];




      }

    }
  }
