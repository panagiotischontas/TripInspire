<?php

function getWeather2($city, $country, $date){
$myUrl = "https://api.weatherbit.io/v2.0/forecast/daily?city=" . $city . "&key=9ad9717f138149cbb2cae294afbfe2a1";
define('URL2', $myUrl);

$c = curl_init ();
curl_setopt ($c, CURLOPT_URL, URL2);
curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec ($c);
curl_close ($c);
// echo htmlentities ($res);
$res =  json_decode($res, true);
$array = $res['data'];
// echo json_encode($array);

// echo count($array);
$i = 0;
$temp_min = 0;
$temp_max = 0;
for($i = 0; $i < count($array); $i=$i+1){
  if($array[$i]['datetime'] == $date){
    $temp_min =  $array[$i]['min_temp'];
    $temp_max =  $array[$i]['max_temp'];

  }
}

$temp_array = [$temp_min, $temp_max];
$json = array('temp-min' => $temp_array[0], 'temp-max' => $temp_array[1]);
return $json;
//


}

$json = getWeather2("Iasi", "romania", "2019-06-13");
echo json_encode($json);





function getWeather($city, $country){
$myUrl = "api.openweathermap.org/data/2.5/weather?q=" . $city . ",". $country . "&APPID=ff676835b9a09d7af3501e243eb47d2c";
define('URL', $myUrl);

$c = curl_init ();
curl_setopt ($c, CURLOPT_URL, URL);
curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec ($c);
curl_close ($c);
// echo htmlentities ($res);
$res =  json_decode($res, true);
$array = $res['main'];
$temp_min =  $array['temp_min'];
$temp_max =  $array['temp_max'];

$temp_array = [$temp_min, $temp_max];
$json = array('temp-min' => $temp_array[0], 'temp-max' => $temp_array[1]);
return $json;

}

// $json = getWeather("Iasi", "ro");
// echo json_encode($json);


// $curs_valutar = $res['usd'];
//
// if(isset($_GET['amount'])){
//   $conv = $_GET['amount'];
//   $usd = $conv / $curs_valutar;
//
//   // echo "Suma in USD: " . $suma_usd;
//
//   $j = array('usd' => $usd);
//   echo  json_encode($j);
//
// } else{
//   echo "Variabila amount nu are valoare!";
// }

 ?>
