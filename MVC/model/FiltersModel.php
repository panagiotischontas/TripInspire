<?php

// if('FR'==null)
//   define("FR", "https://www.ryanair.com/ro/ro/booking/home/");
// if('W6'==null)
//   define("W6", "https://wizzair.com/ro-ro#/booking/select-flight/");

// require_once '../err.php';

  $countryCode = array("Afghanistan" => array("AF"), "Albania" => array("AL"), "Algeria" => array("DZ"), "American Samoa" => array("AS"), "Andorra" => array("AD"), "Angola" => array("AO"), "Anguilla" => array("AI"), "Antarctica" => array("AQ"), "Antigua and Barbuda" => array("AG"), "Argentina" => array("AR"), "Armenia" => array("AM"), "Aruba" => array("AW"), "Australia" => array("AU"), "Austria" => array("AT"), "Azerbaijan" => array("AZ"), "Bahamas" => array("BS"), "Bahrain" => array("BH"), "Bangladesh" => array("BD"), "Barbados" => array("BB"), "Belarus" => array("BY"), "Belgium" => array("BE"), "Belize" => array("BZ"), "Benin" => array("BJ"), "Bermuda" => array("BM"), "Bhutan" => array("BT"), "Bolivia" => array("BO"), "Bonaire" => array("BQ"), "Bosnia and Herzegovina" => array("BA"), "Botswana" => array("BW"), "Bouvet Island" => array("BV"), "Brazil" => array("BR"), "British Indian Ocean Territory" => array("IO"), "Brunei Darussalam" => array("BN"), "Bulgaria" => array("BG"), "Burkina Faso" => array("BF"), "Burundi" => array("BI"), "Cambodia" => array("KH"), "Cameroon" => array("CM"), "Canada" => array("CA"), "Cape Verde" => array("CV"), "Cayman Islands" => array("KY"), "Central African Republic" => array("CF"), "Chad" => array("TD"), "Chile" => array("CL"), "China" => array("CN"), "Christmas Island" => array("CX"), "Cocos (Keeling) Islands" => array("CC"), "Colombia" => array("CO"), "Comoros" => array("KM"), "Congo" => array("CG"), "Democratic Republic of the Congo" => array("CD"), "Cook Islands" => array("CK"), "Costa Rica" => array("CR"), "Croatia" => array("HR"), "Cuba" => array("CU"), "Curacao" => array("CW"), "Cyprus" => array("CY"), "Czech Republic" => array("CZ"), "Cote d Ivoire" => array("CI"), "Denmark" => array("DK"), "Djibouti" => array("DJ"), "Dominica" => array("DM"), "Dominican Republic" => array("DO"), "Ecuador" => array("EC"), "Egypt" => array("EG"), "El Salvador" => array("SV"), "Equatorial Guinea" => array("GQ"), "Eritrea" => array("ER"), "Estonia" => array("EE"), "Ethiopia" => array("ET"), "Falkland Islands (Malvinas)" => array("FK"), "Faroe Islands" => array("FO"), "Fiji" => array("FJ"), "Finland" => array("FI"), "France" => array("FR"), "French Guiana" => array("GF"), "French Polynesia" => array("PF"), "French Southern Territories" => array("TF"), "Gabon" => array("GA"), "Gambia" => array("GM"), "Georgia" => array("GE"), "Germany" => array("DE"), "Ghana" => array("GH"), "Gibraltar" => array("GI"), "Greece" => array("GR"), "Greenland" => array("GL"), "Grenada" => array("GD"), "Guadeloupe" => array("GP"), "Guam" => array("GU"), "Guatemala" => array("GT"), "Guernsey" => array("GG"), "Guinea" => array("GN"), "Guinea-Bissau" => array("GW"), "Guyana" => array("GY"), "Haiti" => array("HT"), "Heard Island and McDonald Islands" => array("HM"), "Holy See (Vatican City State)" => array("VA"), "Honduras" => array("HN"), "Hong Kong" => array("HK"), "Hungary" => array("HU"), "Iceland" => array("IS"), "India" => array("IN"), "Indonesia" => array("ID"), "Iran, Islamic Republic of" => array("IR"), "Iraq" => array("IQ"), "Ireland" => array("IE"), "Isle of Man" => array("IM"), "Israel" => array("IL"), "Italy" => array("IT"), "Jamaica" => array("JM"), "Japan" => array("JP"), "Jersey" => array("JE"), "Jordan" => array("JO"), "Kazakhstan" => array("KZ"), "Kenya" => array("KE"), "Kiribati" => array("KI"), "Korea, Democratic People s Republic of" => array("KP"), "Korea, Republic of" => array("KR"), "Kuwait" => array("KW"), "Kyrgyzstan" => array("KG"), "Lao People s Democratic Republic" => array("LA"), "Latvia" => array("LV"), "Lebanon" => array("LB"), "Lesotho" => array("LS"), "Liberia" => array("LR"), "Libya" => array("LY"), "Liechtenstein" => array("LI"), "Lithuania" => array("LT"), "Luxembourg" => array("LU"), "Macao" => array("MO"), "Macedonia, the Former Yugoslav Republic of" => array("MK"), "Madagascar" => array("MG"), "Malawi" => array("MW"), "Malaysia" => array("MY"), "Maldives" => array("MV"), "Mali" => array("ML"), "Malta" => array("MT"), "Marshall Islands" => array("MH"), "Martinique" => array("MQ"), "Mauritania" => array("MR"), "Mauritius" => array("MU"), "Mayotte" => array("YT"), "Mexico" => array("MX"), "Micronesia, Federated States of" => array("FM"), "Moldova, Republic of" => array("MD"), "Monaco" => array("MC"), "Mongolia" => array("MN"), "Montenegro" => array("ME"), "Montserrat" => array("MS"), "Morocco" => array("MA"), "Mozambique" => array("MZ"), "Myanmar" => array("MM"), "Namibia" => array("NA"), "Nauru" => array("NR"), "Nepal" => array("NP"), "Netherlands" => array("NL"), "New Caledonia" => array("NC"), "New Zealand" => array("NZ"), "Nicaragua" => array("NI"), "Niger" => array("NE"), "Nigeria" => array("NG"), "Niue" => array("NU"), "Norfolk Island" => array("NF"), "Northern Mariana Islands" => array("MP"), "Norway" => array("NO"), "Oman" => array("OM"), "Pakistan" => array("PK"), "Palau" => array("PW"), "Palestine, State of" => array("PS"), "Panama" => array("PA"), "Papua New Guinea" => array("PG"), "Paraguay" => array("PY"), "Peru" => array("PE"), "Philippines" => array("PH"), "Pitcairn" => array("PN"), "Poland" => array("PL"), "Portugal" => array("PT"), "Puerto Rico" => array("PR"), "Qatar" => array("QA"), "Romania" => array("RO"), "Russian Federation" => array("RU"), "Rwanda" => array("RW"), "Reunion" => array("RE"), "Saint Barthelemy" => array("BL"), "Saint Helena" => array("SH"), "Saint Kitts and Nevis" => array("KN"), "Saint Lucia" => array("LC"), "Saint Martin (French part)" => array("MF"), "Saint Pierre and Miquelon" => array("PM"), "Saint Vincent and the Grenadines" => array("VC"), "Samoa" => array("WS"), "San Marino" => array("SM"), "Sao Tome and Principe" => array("ST"), "Saudi Arabia" => array("SA"), "Senegal" => array("SN"), "Serbia" => array("RS"), "Seychelles" => array("SC"), "Sierra Leone" => array("SL"), "Singapore" => array("SG"), "Sint Maarten (Dutch part)" => array("SX"), "Slovakia" => array("SK"), "Slovenia" => array("SI"), "Solomon Islands" => array("SB"), "Somalia" => array("SO"), "South Africa" => array("ZA"), "South Georgia and the South Sandwich Islands" => array("GS"), "South Sudan" => array("SS"), "Spain" => array("ES"), "Sri Lanka" => array("LK"), "Sudan" => array("SD"), "Suriname" => array("SR"), "Svalbard and Jan Mayen" => array("SJ"), "Swaziland" => array("SZ"), "Sweden" => array("SE"), "Switzerland" => array("CH"), "Syrian Arab Republic" => array("SY"), "Taiwan" => array("TW"), "Tajikistan" => array("TJ"), "United Republic of Tanzania" => array("TZ"), "Thailand" => array("TH"), "Timor-Leste" => array("TL"), "Togo" => array("TG"), "Tokelau" => array("TK"), "Tonga" => array("TO"), "Trinidad and Tobago" => array("TT"), "Tunisia" => array("TN"), "Turkey" => array("TR"), "Turkmenistan" => array("TM"), "Turks and Caicos Islands" => array("TC"), "Tuvalu" => array("TV"), "Uganda" => array("UG"), "Ukraine" => array("UA"), "United Arab Emirates" => array("AE"), "United Kingdom" => array("GB"), "United States" => array("US"), "United States Minor Outlying Islands" => array("UM"), "Uruguay" => array("UY"), "Uzbekistan" => array("UZ"), "Vanuatu" => array("VU"), "Venezuela" => array("VE"), "Viet Nam" => array("VN"), "British Virgin Islands" => array("VG"), "US Virgin Islands" => array("VI"), "Wallis and Futuna" => array("WF"), "Western Sahara" => array("EH"), "Yemen" => array("YE"), "Zambia" => array("ZM"), "Zimbabwe" => array("ZW"));

class FiltersModel{

  public $tstring;
  public $controller;
  public $filters;
  public $tari;
  public $conn;
  public $OnAir;
  public $filterDepartureCity;
  public $filterCities;
  public $finalFilterCities;
  public $filterDate;
  public $filterPass;
  public $filterPrice;
  public $filterWeather;

  public $OraseAfisate;


  public function __construct($c, $conn){
    $this->controller = $c;
         $this->conn = $conn;
    // $this->filters = array( "Continente" => array("Asia", "America de Sud", "America de nord", "Africa", "Europa", "Australia"),
    // "tara" => array("Romania", "Italia", "Spania", "Franta"),
    //  "orase" => array("iasi", "bucuresti", "timisoara"),
    //  "clasa" => array("Business", "Eco"),
    //  "escala" => array("Zbor direct", "Maxim 1 escala", "Maxim 2 escale"));
     $this->getTari();
     $this->getAir();


      $this->filterCities = array();
      $this->filterPass  = array();
      $this->filterPrice = array();
      $this->filterWeather = array();
      $this->OraseAfisate = array();

     // echo $this->conn;

  }
//adauga restul parametrilor in getFlight -> toate filtrele
  public function getFlight($filterDepartureCity,  $filterCities,  $filterDate,  $filterPrice){
    if(!isset($filterDepartureCity)){
      $filterDepartureCity = "IAS";
    }
    $myUrl = "https://api.skypicker.com/flights?&limit=5000&curr=EUR&fly_from=" . $filterDepartureCity . "&fly_to=";

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
    echo $myUrl;
    // $URLL = "https://api.skypicker.com/flights?fly_to=IT,FR&date_from=08/08/2019&date_to=08/09/2019";
    // define('URL2', $URLL);
// echo $myUrl;
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
$data = 0;
if(isset($res['data']))
    $data = $res['data'];
    return $data;

  }


  function getWeather2($city, $date){
    ini_set('max_execution_time', 300);
  $myUrl = "https://api.weatherbit.io/v2.0/forecast/daily?city=" . $city . "&key=9ad9717f138149cbb2cae294afbfe2a1";
  // define('URLVREME', $myUrl);

  $c = curl_init ();
  curl_setopt ($c, CURLOPT_URL, $myUrl);
  curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
  $res = curl_exec ($c);
  curl_close ($c);
  // echo htmlentities ($res);
  $res =  json_decode($res, true);
  if(isset($res['data'])){
    $array = $res['data'];
  } else{
    //nu avem data
    return -1;
  }
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
            <input type=\"checkbox\" name=\"". $idInput[$i] ."\"";

            if(isset($_GET[$idInput[$i]])){
              echo "checked";
            }
            echo "> ".  $valueInput[$i]  ."
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
        <input type=\"checkbox\" name=\"". $idInput[$i] ."\"";

        if(isset($_GET[$idInput[$i]])){
          echo "checked";
        }
        echo "> ".  $valueInput[$i]  ."
              <span class=\"checkmark\"></span>
          </label><br>";
      }
      echo"</div>";
    }

public function generateFilterCrit($idInput, $valueInput){
  for ($i=0; $i < count($idInput) ; $i++) {
    echo "  <label class=\"container\">
    <input type=\"checkbox\" name=\"". $idInput[$i] ."\"";

    if(isset($_GET[$idInput[$i]])){
      echo "checked";
    }
    echo "> ".  $valueInput[$i]  ."
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
$this->AllCities = array();

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
        array_push($this->AllCities, $CurrOras);
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
