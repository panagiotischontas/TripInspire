<?php




class FiltersController{

  public $model;
  public $countryCode;
  public $ok;


  public function __construct(){
    $this->countryCode = array("Afghanistan" => array("AF"), "Albania" => array("AL"), "Algeria" => array("DZ"), "American Samoa" => array("AS"), "Andorra" => array("AD"), "Angola" => array("AO"), "Anguilla" => array("AI"), "Antarctica" => array("AQ"), "Antigua and Barbuda" => array("AG"), "Argentina" => array("AR"), "Armenia" => array("AM"), "Aruba" => array("AW"), "Australia" => array("AU"), "Austria" => array("AT"), "Azerbaijan" => array("AZ"), "Bahamas" => array("BS"), "Bahrain" => array("BH"), "Bangladesh" => array("BD"), "Barbados" => array("BB"), "Belarus" => array("BY"), "Belgium" => array("BE"), "Belize" => array("BZ"), "Benin" => array("BJ"), "Bermuda" => array("BM"), "Bhutan" => array("BT"), "Bolivia" => array("BO"), "Bonaire" => array("BQ"), "Bosnia and Herzegovina" => array("BA"), "Botswana" => array("BW"), "Bouvet Island" => array("BV"), "Brazil" => array("BR"), "British Indian Ocean Territory" => array("IO"), "Brunei Darussalam" => array("BN"), "Bulgaria" => array("BG"), "Burkina Faso" => array("BF"), "Burundi" => array("BI"), "Cambodia" => array("KH"), "Cameroon" => array("CM"), "Canada" => array("CA"), "Cape Verde" => array("CV"), "Cayman Islands" => array("KY"), "Central African Republic" => array("CF"), "Chad" => array("TD"), "Chile" => array("CL"), "China" => array("CN"), "Christmas Island" => array("CX"), "Cocos (Keeling) Islands" => array("CC"), "Colombia" => array("CO"), "Comoros" => array("KM"), "Congo" => array("CG"), "Democratic Republic of the Congo" => array("CD"), "Cook Islands" => array("CK"), "Costa Rica" => array("CR"), "Croatia" => array("HR"), "Cuba" => array("CU"), "Curacao" => array("CW"), "Cyprus" => array("CY"), "Czech Republic" => array("CZ"), "Cote d Ivoire" => array("CI"), "Denmark" => array("DK"), "Djibouti" => array("DJ"), "Dominica" => array("DM"), "Dominican Republic" => array("DO"), "Ecuador" => array("EC"), "Egypt" => array("EG"), "El Salvador" => array("SV"), "Equatorial Guinea" => array("GQ"), "Eritrea" => array("ER"), "Estonia" => array("EE"), "Ethiopia" => array("ET"), "Falkland Islands (Malvinas)" => array("FK"), "Faroe Islands" => array("FO"), "Fiji" => array("FJ"), "Finland" => array("FI"), "France" => array("FR"), "French Guiana" => array("GF"), "French Polynesia" => array("PF"), "French Southern Territories" => array("TF"), "Gabon" => array("GA"), "Gambia" => array("GM"), "Georgia" => array("GE"), "Germany" => array("DE"), "Ghana" => array("GH"), "Gibraltar" => array("GI"), "Greece" => array("GR"), "Greenland" => array("GL"), "Grenada" => array("GD"), "Guadeloupe" => array("GP"), "Guam" => array("GU"), "Guatemala" => array("GT"), "Guernsey" => array("GG"), "Guinea" => array("GN"), "Guinea-Bissau" => array("GW"), "Guyana" => array("GY"), "Haiti" => array("HT"), "Heard Island and McDonald Islands" => array("HM"), "Holy See (Vatican City State)" => array("VA"), "Honduras" => array("HN"), "Hong Kong" => array("HK"), "Hungary" => array("HU"), "Iceland" => array("IS"), "India" => array("IN"), "Indonesia" => array("ID"), "Iran, Islamic Republic of" => array("IR"), "Iraq" => array("IQ"), "Ireland" => array("IE"), "Isle of Man" => array("IM"), "Israel" => array("IL"), "Italy" => array("IT"), "Jamaica" => array("JM"), "Japan" => array("JP"), "Jersey" => array("JE"), "Jordan" => array("JO"), "Kazakhstan" => array("KZ"), "Kenya" => array("KE"), "Kiribati" => array("KI"), "Korea, Democratic People s Republic of" => array("KP"), "Korea, Republic of" => array("KR"), "Kuwait" => array("KW"), "Kyrgyzstan" => array("KG"), "Lao People s Democratic Republic" => array("LA"), "Latvia" => array("LV"), "Lebanon" => array("LB"), "Lesotho" => array("LS"), "Liberia" => array("LR"), "Libya" => array("LY"), "Liechtenstein" => array("LI"), "Lithuania" => array("LT"), "Luxembourg" => array("LU"), "Macao" => array("MO"), "Macedonia, the Former Yugoslav Republic of" => array("MK"), "Madagascar" => array("MG"), "Malawi" => array("MW"), "Malaysia" => array("MY"), "Maldives" => array("MV"), "Mali" => array("ML"), "Malta" => array("MT"), "Marshall Islands" => array("MH"), "Martinique" => array("MQ"), "Mauritania" => array("MR"), "Mauritius" => array("MU"), "Mayotte" => array("YT"), "Mexico" => array("MX"), "Micronesia, Federated States of" => array("FM"), "Moldova, Republic of" => array("MD"), "Monaco" => array("MC"), "Mongolia" => array("MN"), "Montenegro" => array("ME"), "Montserrat" => array("MS"), "Morocco" => array("MA"), "Mozambique" => array("MZ"), "Myanmar" => array("MM"), "Namibia" => array("NA"), "Nauru" => array("NR"), "Nepal" => array("NP"), "Netherlands" => array("NL"), "New Caledonia" => array("NC"), "New Zealand" => array("NZ"), "Nicaragua" => array("NI"), "Niger" => array("NE"), "Nigeria" => array("NG"), "Niue" => array("NU"), "Norfolk Island" => array("NF"), "Northern Mariana Islands" => array("MP"), "Norway" => array("NO"), "Oman" => array("OM"), "Pakistan" => array("PK"), "Palau" => array("PW"), "Palestine, State of" => array("PS"), "Panama" => array("PA"), "Papua New Guinea" => array("PG"), "Paraguay" => array("PY"), "Peru" => array("PE"), "Philippines" => array("PH"), "Pitcairn" => array("PN"), "Poland" => array("PL"), "Portugal" => array("PT"), "Puerto Rico" => array("PR"), "Qatar" => array("QA"), "Romania" => array("RO"), "Russian Federation" => array("RU"), "Rwanda" => array("RW"), "Reunion" => array("RE"), "Saint Barthelemy" => array("BL"), "Saint Helena" => array("SH"), "Saint Kitts and Nevis" => array("KN"), "Saint Lucia" => array("LC"), "Saint Martin (French part)" => array("MF"), "Saint Pierre and Miquelon" => array("PM"), "Saint Vincent and the Grenadines" => array("VC"), "Samoa" => array("WS"), "San Marino" => array("SM"), "Sao Tome and Principe" => array("ST"), "Saudi Arabia" => array("SA"), "Senegal" => array("SN"), "Serbia" => array("RS"), "Seychelles" => array("SC"), "Sierra Leone" => array("SL"), "Singapore" => array("SG"), "Sint Maarten (Dutch part)" => array("SX"), "Slovakia" => array("SK"), "Slovenia" => array("SI"), "Solomon Islands" => array("SB"), "Somalia" => array("SO"), "South Africa" => array("ZA"), "South Georgia and the South Sandwich Islands" => array("GS"), "South Sudan" => array("SS"), "Spain" => array("ES"), "Sri Lanka" => array("LK"), "Sudan" => array("SD"), "Suriname" => array("SR"), "Svalbard and Jan Mayen" => array("SJ"), "Swaziland" => array("SZ"), "Sweden" => array("SE"), "Switzerland" => array("CH"), "Syrian Arab Republic" => array("SY"), "Taiwan" => array("TW"), "Tajikistan" => array("TJ"), "United Republic of Tanzania" => array("TZ"), "Thailand" => array("TH"), "Timor-Leste" => array("TL"), "Togo" => array("TG"), "Tokelau" => array("TK"), "Tonga" => array("TO"), "Trinidad and Tobago" => array("TT"), "Tunisia" => array("TN"), "Turkey" => array("TR"), "Turkmenistan" => array("TM"), "Turks and Caicos Islands" => array("TC"), "Tuvalu" => array("TV"), "Uganda" => array("UG"), "Ukraine" => array("UA"), "United Arab Emirates" => array("AE"), "United Kingdom" => array("GB"), "United States" => array("US"), "United States Minor Outlying Islands" => array("UM"), "Uruguay" => array("UY"), "Uzbekistan" => array("UZ"), "Vanuatu" => array("VU"), "Venezuela" => array("VE"), "Viet Nam" => array("VN"), "British Virgin Islands" => array("VG"), "US Virgin Islands" => array("VI"), "Wallis and Futuna" => array("WF"), "Western Sahara" => array("EH"), "Yemen" => array("YE"), "Zambia" => array("ZM"), "Zimbabwe" => array("ZW"));


  }

  public function setModel($model){
    $this->model = $model;
  }



  public function getInput(){
    $this->model->filterDepartureCity="";
    $this->model->filterDate = "";
    $this->model->filterPrice[0] = 0;
    $this->model->filterPrice[1] = 38000;
    $this->model->filterWeather[0] = -50;
    $this->model->filterWeather[1] = 60;
    $this->model->filterCities = array();
    //GET THE DEPARTURE CITY
    $this->model->filterDepartureCity = "IAS"; //default


    //GET THE DEPARTURE DATE
    $this->model->filterDate = date("d/m/Y", strtotime("+1 day"));

if(isset($_GET['minPrice'])){
    $this->model->filterPrice[0] = $_GET['minPrice'];
  }
  if(isset($_GET['maxPrice'])){
    $this->model->filterPrice[1] =  $_GET['maxPrice'];
  }

  if(isset($_GET['minWeather'])){
      $this->model->filterWeather[0] = $_GET['minWeather'];
    }
    if(isset($_GET['maxWeather'])){
      $this->model->filterWeather[1] =  $_GET['maxWeather'];
    }

  if(isset($_GET['Direct-Flight'])){
    $this->model->filterStops = 0;
  }
  if(isset($_GET['Layover'])){
    $this->model->filterStops = 3;
  }



    foreach ($this->model->tari as $key => $value) {
      //key = continent
      if(isset($_GET[$key])){
        //ia toate aeroporturile din continentul KEY

        //incepand cu tarile
        // echo "value: " . count($value);
        for ($i=0; $i < count($value); $i++) {
          //acum luam fiecare aeroport
          // echo "onair: : " . count($this->model->OnAir[$value[$i]]);
          // echo $value[$i] . " ";
          for ($j=0; $j < count($this->model->OnAir[$value[$i]]); $j++) {
            // echo $this->model->OnAir[$value[$i]][$j][1] . " ";
            if(!in_array($this->model->OnAir[$value[$i]][$j][1],  $this->model->filterCities)){
                array_push($this->model->filterCities, $this->model->OnAir[$value[$i]][$j][1]);
            }
          }
        }

      }
    }

    foreach ($this->model->OnAir as $key => $value) {
    //key = tara
      if(isset($_GET[$key])){
        //ia toate aeroporturile din tarile KEY
        // echo $value[0][0] . " " ;
        for ($i=0; $i < count($value); $i++) {
          //acum luam fiecare aeroport
          //for ($j=0; $j < count($this->model->OnAir[$value[$i]]); $j++) {
            if(!in_array($value[$i][1],  $this->model->filterCities)){
                array_push($this->model->filterCities, $value[$i][1]);
            }
          //}
        }

      }
    }


    foreach ($this->model->OnAir as $key => $t) {
      for ($h=0; $h < count($t); $h++) {
      // $t[$h][0] = oras &&  $t[$h][1] = aeroport
        if(isset($_GET[$t[$h][0]])){
          if(!in_array($this->model->OnAir[$key][$h][1],  $this->model->filterCities)){
              array_push($this->model->filterCities, $this->model->OnAir[$key][$h][1]);
          }
        }

      }

    }

// echo  count($this->model->filterCities) . " ";
// for ($i=0; $i < count($this->model->filterCities); $i++) {
//    echo $this->model->filterCities[$i] . " ";
// }
//
// for ($i=0; $i <count($this->model->filterCities) ; $i++) {
//   echo $this->model->filterCities[$i] . " ";
// }

// foreach ($this->countryCode as $key => $value) {
  // echo $key . " --> " . $value[0];
//}
$this->model->finalFilterCities = array();
foreach ($this->model->OnAir as $key => $value) {
//key = tara
    // echo $value[0][0] . " " ;
    $this->ok=2;
    $temp = array(-1);
    for ($i=0; $i < count($value); $i++) {
      $this->ok=1;
      //acum luam fiecare aeroport
      //for ($j=0; $j < count($this->model->OnAir[$value[$i]]); $j++) {
      // echo "verificam: " . $value[$i][1];
      array_push($temp, $value[$i][1]);
        if(!in_array($value[$i][1],  $this->model->filterCities )){
          // echo "tara: " . $key . " aeroport: " . $value[$i][1] . " ";
          $this->ok=-1;
          break;
        }
      //}
    }
    if(isset($this->countryCode[$key][0]))
    // echo $key . " " . $this->countryCode[$key][0] . ", ";

    if($this->ok==1 && isset($this->countryCode[$key][0])){
      // echo "de cate ori??" .  $key . " " . $this->countryCode[$key][0] . ", ";
      array_push($this->model->finalFilterCities, $this->countryCode[$key][0]);

    } else{
      //il punem pe temp
      if($temp[0] != -1)
      for ($j=0; $j < count($temp); $j++) {
        array_push($this->model->finalFilterCities, $temp[$i]);
      }

    }


  }
}





}
