<?php

// if('FR'==null)
//   define("FR", "https://www.ryanair.com/ro/ro/booking/home/");
// if('W6'==null)
//   define("W6", "https://wizzair.com/ro-ro#/booking/select-flight/");



  $countryCode = ["AF", "AL", "DZ", "AS", "AD", "AO", "AI", "AQ", "AG", "AR", "AM", "AW", "AU", "AT", "AZ", "BS", "BH", "BD", "BB", "BY", "BE", "BZ", "BJ", "BM", "BT", "BO", "BQ", "BA", "BW", "BV", "BR", "IO", "BN", "BG", "BF", "BI", "KH", "CM", "CA", "CV", "KY", "CF", "TD", "CL", "CN", "CX", "CC", "CO", "KM", "CG", "CD", "CK", "CR", "HR", "CU", "CW", "CY", "CZ", "CI", "DK", "DJ", "DM", "DO", "EC", "EG", "SV", "GQ", "ER", "EE", "ET", "FK", "FO", "FJ", "FI", "FR", "GF", "PF", "TF", "GA", "GM", "GE", "DE", "GH", "GI", "GR", "GL", "GD", "GP", "GU", "GT", "GG", "GN", "GW", "GY", "HT", "HM", "VA", "HN", "HK", "HU", "IS", "IN", "ID", "IR", "IQ", "IE", "IM", "IL", "IT", "JM", "JP", "JE", "JO", "KZ", "KE", "KI", "KP", "KR", "KW", "KG", "LA", "LV", "LB", "LS", "LR", "LY", "LI", "LT", "LU", "MO", "MK", "MG", "MW", "MY", "MV", "ML", "MT", "MH", "MQ", "MR", "MU", "YT", "MX", "FM", "MD", "MC", "MN", "ME", "MS", "MA", "MZ", "MM", "NA", "NR", "NP", "NL", "NC", "NZ", "NI", "NE", "NG", "NU", "NF", "MP", "NO", "OM", "PK", "PW", "PS", "PA", "PG", "PY", "PE", "PH", "PN", "PL", "PT", "PR", "QA", "RO", "RU", "RW", "RE", "BL", "SH", "KN", "LC", "MF", "PM", "VC", "WS", "SM", "ST", "SA", "SN", "RS", "SC", "SL", "SG", "SX", "SK", "SI", "SB", "SO", "ZA", "GS", "SS", "ES", "LK", "SD", "SR", "SJ", "SZ", "SE", "CH", "SY", "TW", "TJ", "TZ", "TH", "TL", "TG", "TK", "TO", "TT", "TN", "TR", "TM", "TC", "TV", "UG", "UA", "AE", "GB", "US", "UM", "UY", "UZ", "VU", "VE", "VN", "VG", "VI", "WF", "EH", "YE", "ZM", "ZW"];

class FiltersModel{

  public $tstring;
  public $controller;
  public $filters;
  public $tari;
  public $conn;
  public $OnAir;
  public $filterDepartureCity;
  public $filterCities;
  public $filterDate;
  public $filterPass;
  public $filterPrice;
  public $filterWeather;


  public function __construct($c, $conn){
    $this->controller = $c;
         $this->conn = $conn;
    $this->filters = array( "Continente" => array("Asia", "America de Sud", "America de nord", "Africa", "Europa", "Australia"),
    "tara" => array("Romania", "Italia", "Spania", "Franta"),
     "orase" => array("iasi", "bucuresti", "timisoara"),
     "clasa" => array("Business", "Eco"),
     "escala" => array("Zbor direct", "Maxim 1 escala", "Maxim 2 escale"));
     $this->getTari();
     $this->getAir();


      $this->filterCities = array();
      $this->filterPass  = array();
      $this->filterPrice = array();
      $this->filterWeather = array();

     // echo $this->conn;

  }
//adauga restul parametrilor in getFlight -> toate filtrele
  public function getFlight($filterDepartureCity,  $filterCities,  $filterDate,  $filterPrice){
    if(!isset($filterDepartureCity)){
      $filterDepartureCity = "IAS";
    }
    $myUrl = "https://api.skypicker.com/flights?select_airlines=FR,W6&limit=5000&fly_from=" . $filterDepartureCity . "&fly_to=";

if(!isset($filterCities[0])){
  //all
  // $filterCities = getAllCities();
  $filterCities[0] = "PAR";
}

if(!isset($filterDate)){
  $filterDate = date("d/m/Y", strtotime("+1 day"));
}


if(!isset($filterPrice[0])){
  $filterPrice[0] = 1;
  $filterPrice[1] = 38000;
}

    $myUrl = $myUrl . $filterCities[0];
    for($i=1; $i<count($filterCities); $i=$i+1)
      $myUrl = $myUrl . ',' . $filterCities[$i];
    $myUrl = $myUrl . "&date_from=" .$filterDate;
    $myUrl = $myUrl . "&price_from=".  $filterPrice[0]   . "&price_to=" . $filterPrice[1];
    // echo $myUrl;
    // $URLL = "https://api.skypicker.com/flights?fly_to=IT,FR&date_from=08/08/2019&date_to=08/09/2019";
    // define('URL2', $URLL);
echo $myUrl;
    $c = curl_init();
    curl_setopt ($c, CURLOPT_URL, $myUrl);
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


  function getWeather2($city, $country, $date){
  $myUrl = "https://api.weatherbit.io/v2.0/forecast/daily?city=" . $city . ",". $country . "&key=9ad9717f138149cbb2cae294afbfe2a1";
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

  function getPicture($city){
    $city = str_replace(' ', '', $city);
    $myUrl = "https://api.unsplash.com/search/photos?page=1&query=" . $city . "&client_id=f6aef88a05b0f479eeaf9a633aae06b6cdd49d93cdfb038b08afe2bbf056d9d2";
    // define('URL2', $myUrl);
    $c = curl_init ();
    curl_setopt ($c, CURLOPT_URL, $myUrl);
    curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec ($c);
    curl_close ($c);
    // echo htmlentities ($res);
    $res =  json_decode($res, true);
    if(isset($res['results'])){
    $results = $res['results'];
      if(isset($results[0])){
        $firstRes = $results[0];
        if(isset($firstRes['urls'])){
          $urls = $firstRes['urls'];
          if(isset($urls['small'])){
            $arr=$urls['small'];

          }else if(isset($urls['regular'])){
              $arr=$urls['regular'];

            }else if(isset($urls['full'])){
              $arr=$urls['full'];

            }else if(isset($urls['raw'])){
              $arr=$urls['raw'];
                }else{
                  echo"nu avem imagine"; //adauga una default
                }
              }else{
                echo "nu avem urls";
              }
            }else{
              echo "nu avem nimic in results";
            }
          }else{
            echo "nu are result";
          }

    if(isset($arr)){
      echo "<img src=\"" . $arr . "\">";
    }

  }



public function generateFilterFormWithScroll($idForm, $idInput, $valueInput, $titlu){
    echo "<div class=\"form1\" id=\"". $idForm  ."\">";
    echo "<div class=\"textfonts\">".$titlu."</div> <br>";

    for ($i=0; $i <count($idInput) ; $i++) {
      echo "  <label class=\"container\">
            <input type=\"checkbox\" name=\"". $idInput[$i] ."\"> ".  $valueInput[$i]  ."
            <span class=\"checkmark\"></span>
        </label><br>";
    }
    echo"</div>";
  }


  public function generateFilterForm($idForm, $idInput, $valueInput, $titlu){
      echo "<div class=\"form\" id=\"". $idForm  ."\">";
        echo "<div class=\"textfonts\">".$titlu."</div> <br>";

      for ($i=0; $i <count($idInput) ; $i++) {
        echo "  <label class=\"container\">
              <input type=\"checkbox\" name=\"". $idInput[$i] ."\"> ".  $valueInput[$i]  ."
              <span class=\"checkmark\"></span>
          </label><br>";
      }
      echo"</div>";
    }

public function generateFilterCrit($idInput, $valueInput){
  for ($i=0; $i <count($idInput) ; $i++) {
    echo "  <label class=\"container\">
          <input type=\"checkbox\" name=\"". $idInput[$i] ."\"> ".  $valueInput[$i]  ."
          <span class=\"checkmark\"></span>
      </label><br>";
  }
}

// function escale($esc){
//     $esc = $esc-1;
//     $toEcho = $toEcho . " cu escala la: ";
//     for($j=0;$j<$esc; $j=$j+1)
//       $toEcho = $toEcho . $json[$i]['route'][$j]['cityTo'] . "  ";
//
// }


function getLink($airline, $air1, $air2, $dateForFR, $dateForAll){
  $link = "";
  if($airline == "FR"){
    $link = "https://www.ryanair.com/ro/ro/booking/home/" .$air1. "/".$air2 ."/" . $dateForFR . "//" . "1/0/0/0";
      // $link = $link .  "<br><br>";
  }
  else if($airline == "W6"){
    $link = "https://wizzair.com/ro-ro#/booking/select-flight/" .$air1. "/".$air2 ."/" . $dateForFR . "/null" . "/1/0/0/0";
    // $link = $link .  "<br><br>";
  } else{
    $link = "https://www.skyscanner.ro/transport/flights/"  .$air1. "/".$air2 ."/" . $dateForAll . "//?adults=1&children=0&adultsv2=1&childrenv2=&infants=0&cabinclass=economy&rtn=1&preferdirects=false&outboundaltsenabled=false&inboundaltsenabled=false#results";
  }
  return $link;
}

function getTari(){

  $this->tari = array();
  $this->OnAir = array();
// echo $this->conn . " ";
  $sql = "SELECT distinct continent FROM continente";
  $result = mysqli_query($this->conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  for($i = 0; $i < $resultCheck; $i = $i+1){
    $row = mysqli_fetch_assoc($result);

    $ContCurr = $row['continent'];
    $newArray = $ContCurr;
    $this->tari[$newArray] = array();

    $sql2 = "SELECT tara FROM continente where trim(continent) like '%" . $ContCurr ."%'";
    // echo $sql2;
    $result2 = mysqli_query($this->conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);

    for ($j=0; $j < $resultCheck2; $j++) {
      $row2 = mysqli_fetch_assoc($result2);

      $CurrCountry = $row2['tara'];
      array_push($this->tari[$newArray], $CurrCountry);
      // echo $CurrCountry;
      // $this->OrAir[$CurrCountry] = array();
    }
}
}

public function getAir(){


  foreach ($this->tari as $c => $t) {
    // echo $c .  ": ";
    for($i = 0; $i <count($t); $i = $i+1){
      // echo $t[$i] . ", ";
      $this->OnAir[$t[$i]] = array();

      $sql = "SELECT oras, aeroport FROM aeroporturi where tara like '%" . $t[$i] . "%';";
      // echo $sql;
      $result = mysqli_query($this->conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      // echo $resultCheck;

      for($k = 0; $k < $resultCheck; $k = $k+1){
        $row = mysqli_fetch_assoc($result);
        $CurrOras = $row['oras'];
        $CurrAir = $row['aeroport'];
        $newArray = array($CurrOras, $CurrAir);
        // echo "aici: " . $t[$i] . "--";
        array_push($this->OnAir[$t[$i]], $newArray);
        // echo $t[$i][0][0] . " > " . $t[$i][0][1] . " " ;
      }
    }

  }

    // foreach ($this->OnAir as $c => $t) {
    //   echo $c . ": " . count($t); //tara
    //   echo "<br /><br />";
    // for ($h=0; $h < count($t); $h++) {
    //     echo $t[$h][0] . "--> " . $t[$h][1] . ",      ";
    // }

  //}

}


}
