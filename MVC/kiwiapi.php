<?php

function getFlight($flyFrom, $flyToArray,$date_from, $date_to){
  if(!isset($flyFrom)){
    $flyFrom = "RO";
}
  $myUrl = "https://api.skypicker.com/flights?fly_from=" . $flyFrom . "&fly_to=";
  $myUrl = $myUrl . $flyToArray[0];
  for($i=1; $i<count($flyToArray); $i=$i+1)
    $myUrl = $myUrl . ',' . $flyToArray[$i];
  $myUrl = $myUrl . "&date_from=" .$date_from .  "&date_to=" . $date_to;
  // $URLL = "https://api.skypicker.com/flights?mapIdfrom=timisoara_ro&fly_to=IT,FR&date_from=08/08/2019&date_to=08/09/2019";
  define('URL', $myUrl);
  // define('URL2', $URLL);


  $c = curl_init ();
  curl_setopt ($c, CURLOPT_URL, URL);
  curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
  $res = curl_exec ($c);
  curl_close ($c);
  // echo htmlentities ($res);
  $res =  json_decode($res, true);
  $data = $res['data'];
  return $data;

}
$flyFrom="RO";
$flyToArray = ["IT", "FR", "ES"];
$date_from = "08/08/2019";
$date_to="08/09/2019";

$json = getFlight($flyFrom, $flyToArray,$date_from, $date_to);

echo count($json) . " results:<br><br>" ;

for($i=0; $i<count($json); $i=$i+1){
  echo $i . ". From " . $json[$i]['cityFrom'] . " To " . $json[$i]['cityTo'];
  echo "\t" . $json[$i]['price'] . " EUR";
  $esc = count($json[$i]['route']);
  if($esc == 1){
    echo " ZBOR DIRECT";
  }
  else{
    $esc = $esc-1;
    echo " cu " . $esc . " escale: ";
  }

  if(count($json[$i]['route']) > 1) {
    for($j=0;$j<count($json[$i]['route'])-1; $j=$j+1)
      echo $json[$i]['route'][$j]['cityTo'] . "  ";
  }
  echo "<br><br>";
}

// echo "<pre>";
// echo json_encode($json, JSON_PRETTY_PRINT);
// echo "</pre>";

 ?>
