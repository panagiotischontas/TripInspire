<?php

define ("FR", "https://www.ryanair.com/ro/ro/booking/home/");
define("W6", "https://wizzair.com/ro-ro#/booking/select-flight/");

function getFlight($flyFrom, $flyToArray,$date_from, $date_to){
  if(!isset($flyFrom)){
    $flyFrom = "RO";
}
  $myUrl = "https://api.skypicker.com/flights?select_airlines=FR,W6&limit=500&fly_from=" . $flyFrom . "&fly_to=";
  $myUrl = $myUrl . $flyToArray[0];
  for($i=1; $i<count($flyToArray); $i=$i+1)
    $myUrl = $myUrl . ',' . $flyToArray[$i];
  $myUrl = $myUrl . "&date_from=" .$date_from .  "&date_to=" . $date_to;
  // $URLL = "https://api.skypicker.com/flights?mapIdfrom=timisoara_ro&fly_to=IT,FR&date_from=08/08/2019&date_to=08/09/2019";
  define('URL', $myUrl);
  // define('URL2', $URLL);


  $c = curl_init();
  curl_setopt ($c, CURLOPT_URL, URL);
  curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
  $res = curl_exec ($c);
  curl_close ($c);
  // echo htmlentities ($res);
  $res =  json_decode($res, true);
  // echo "<pre>";
  // echo json_encode($res, JSON_PRETTY_PRINT);
  // echo "</pre>";
  $data = $res['data'];
  return $data;

}
$flyFrom="RO";
$flyToArray = ["IT"];
$date_from = "08/08/2019";
$date_to="08/08/2019";
$dateForFR = "2019-08-08";

$json = getFlight($flyFrom, $flyToArray,$date_from, $date_to);

echo count($json) . " results:<br><br>" ;

$toEcho = "";

for($i=0; $i<count($json); $i=$i+1){
$toEcho = "";
  $toEcho = $toEcho . $i . ". From " . $json[$i]['cityFrom'] . " To " . $json[$i]['cityTo'];
  $toEcho = $toEcho . $json[$i]['price'] . " EUR";
  $esc = count($json[$i]['route']);
  if($esc == 1){
    $toEcho = $toEcho . " ZBOR DIRECT";
    if($json[$i]['airlines'][0] == "FR"){
      echo "<a href = \"" . FR.$json[$i]['routes'][0][0]. "/".$json[$i]['routes'][0][1] ."/" . $dateForFR . "//" . "1/0/0/0\">". $toEcho . "</a>";
        echo "<br><br>";
    }
    else if($json[$i]['airlines'][0] == "W6"){
      echo "<a href = \"" . W6.$json[$i]['routes'][0][0]. "/".$json[$i]['routes'][0][1] ."/" . $dateForFR . "/null" . "/1/0/0/0\">". $toEcho . "</a>";
        echo "<br><br>";
    }
  }
  else{
    $esc = $esc-1;
    $toEcho = $toEcho . " cu " . $esc . " escale: ";
    for($j=0;$j<count($json[$i]['route'])-1; $j=$j+1)
      $toEcho = $toEcho . $json[$i]['route'][$j]['cityTo'] . "  ";
      echo $toEcho;
  }



  echo "<br><br>";
}

echo "<pre>";
echo json_encode($json, JSON_PRETTY_PRINT);
echo "</pre>";

 ?>
