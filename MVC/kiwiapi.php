<?php

define ("FR", "https://www.ryanair.com/ro/ro/booking/home/");
define("W6", "https://wizzair.com/ro-ro#/booking/select-flight/");



$countryCode = ["AF", "AL", "DZ", "AS", "AD", "AO", "AI", "AQ", "AG", "AR", "AM", "AW", "AU", "AT", "AZ", "BS", "BH", "BD", "BB", "BY", "BE", "BZ", "BJ", "BM", "BT", "BO", "BQ", "BA", "BW", "BV", "BR", "IO", "BN", "BG", "BF", "BI", "KH", "CM", "CA", "CV", "KY", "CF", "TD", "CL", "CN", "CX", "CC", "CO", "KM", "CG", "CD", "CK", "CR", "HR", "CU", "CW", "CY", "CZ", "CI", "DK", "DJ", "DM", "DO", "EC", "EG", "SV", "GQ", "ER", "EE", "ET", "FK", "FO", "FJ", "FI", "FR", "GF", "PF", "TF", "GA", "GM", "GE", "DE", "GH", "GI", "GR", "GL", "GD", "GP", "GU", "GT", "GG", "GN", "GW", "GY", "HT", "HM", "VA", "HN", "HK", "HU", "IS", "IN", "ID", "IR", "IQ", "IE", "IM", "IL", "IT", "JM", "JP", "JE", "JO", "KZ", "KE", "KI", "KP", "KR", "KW", "KG", "LA", "LV", "LB", "LS", "LR", "LY", "LI", "LT", "LU", "MO", "MK", "MG", "MW", "MY", "MV", "ML", "MT", "MH", "MQ", "MR", "MU", "YT", "MX", "FM", "MD", "MC", "MN", "ME", "MS", "MA", "MZ", "MM", "NA", "NR", "NP", "NL", "NC", "NZ", "NI", "NE", "NG", "NU", "NF", "MP", "NO", "OM", "PK", "PW", "PS", "PA", "PG", "PY", "PE", "PH", "PN", "PL", "PT", "PR", "QA", "RO", "RU", "RW", "RE", "BL", "SH", "KN", "LC", "MF", "PM", "VC", "WS", "SM", "ST", "SA", "SN", "RS", "SC", "SL", "SG", "SX", "SK", "SI", "SB", "SO", "ZA", "GS", "SS", "ES", "LK", "SD", "SR", "SJ", "SZ", "SE", "CH", "SY", "TW", "TJ", "TZ", "TH", "TL", "TG", "TK", "TO", "TT", "TN", "TR", "TM", "TC", "TV", "UG", "UA", "AE", "GB", "US", "UM", "UY", "UZ", "VU", "VE", "VN", "VG", "VI", "WF", "EH", "YE", "ZM", "ZW"];


function getFlight($flyFrom, $flyToArray,$date_from, $date_to){
  if(!isset($flyFrom)){
    $flyFrom = "RO";
  }
  $myUrl = "https://api.skypicker.com/flights?&limit=5000&fly_from=" . $flyFrom . "&fly_to=";
  $myUrl = $myUrl . $flyToArray[0];
  for($i=1; $i<count($flyToArray); $i=$i+1)
    $myUrl = $myUrl . ',' . $flyToArray[$i];
  $myUrl = $myUrl . "&date_from=" .$date_from .  "&date_to=" . $date_to;
  // $URLL = "https://api.skypicker.com/flights?fly_from=OTP&fly_to=ORY&date_from=08/08/2019&date_to=08/08/2019";
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


$flyFrom="OTP";
$flyToArray = ["NY"];
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
