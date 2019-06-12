<!DOCTYPE html>
<html>


<?php

header("Content-Type: text/html; charset=ISO-8859-1");

require_once '../controller/FiltersController.php';
require_once '../model/FiltersModel.php';
require_once '../BDconn.php';
require_once '../fctDate.php';

session_start();
$controller = new FiltersController();
// echo $conn;
$model = new FiltersModel($controller, $conn);
for ($i=0; $i < count($model->AllCities); $i++) {
  echo $model->AllCities[$i] . " " ;
}
$controller->setModel($model);

 ?>

<head>
  <meta charset="utf-8">
  <title>TripInspire</title>
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/contact.css" rel="stylesheet" type="text/css">
  <link href="../css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link href="../css/filters.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="../css/check.css">
    <link rel="stylesheet" href="../css/range.css">


</head>

<body>
<div class="navbar">
    <div class="logo">
    <a href="index.php">Trip Inspire</a>
    </div>

    <div class="pages">
        <a href="index.php">Home</a>
        <a href="team.php">Team</a>
        <a class="active" href="contact.php">Contact</a>
        <a href="about_us.php">About</a>
        <a href="login.php">Login</a>
    </div>

</div>


<div class="filterContent">

    <div clas="main-content">
        <div class="filtersLeft">
          <form mathod="GET" action="#">
                <?php
                $idForm = "Continente";
                $i = 0;
                foreach ($model->tari as $key => $value) {
                  $idInput[$i] = $key;
                  $valueInput[$i] = $key;
                  $i=$i+1;
                }
                $model->generateFilterForm($idForm, $idInput, $valueInput, "Everywhere in..");

                $idForm = "tara";
                $i = 0;
                foreach ($model->OnAir as $key => $value) {
                  $idInput[$i] = $key;
                  $valueInput[$i] = $key;
                  $i=$i+1;
                }
                $model->generateFilterFormWithScroll($idForm, $idInput, $valueInput, "Everywhere in..");


                $idForm = "orase";
                $i = 0;
                foreach ($model->OnAir as $key => $t) {
                  for ($h=0; $h < count($t); $h++) {
                    $idInput[$i] = $t[$h][0];
                    $valueInput[$i] = $t[$h][0];
                    $i=$i+1;
                   }

                }
                $model->generateFilterFormWithScroll($idForm, $idInput, $valueInput,"Everywhere in..");

                //
                // $idForm = "Clasa";
                // $idInput = ["Business", "Eco"];
                // $valueInput = ["Business", "Eco"];
                // $model->generateFilterForm($idForm, $idInput, $valueInput, "Class");

                ?>


                <div class="form">

                  <?php
                    $idInput = ["Direct-Flight", "Layover"];
                    $valueInput = ["Direct-Flight", "Layover"];
                    $model->generateFilterCrit($idInput, $valueInput);
                  ?>
                    <!--<h1>Custom Checkboxes</h1>-->

                    <section class="range-slider">
                        <span class="rangeValues"></span>
                        <?php if(isset($_GET['minPrice'])){
                          echo "<input value=\"".$_GET['minPrice']."\" min=\"0\" max=\"38000\" step=\"50\" type=\"range\" name=\"minPrice\">";
                        }else{
                      echo"<input value=\"0\" min=\"0\" max=\"38000\" step=\"50\" type=\"range\" name=\"minPrice\">";
                      }
                      if(isset($_GET['maxPrice'])){
                        echo "<input value=\"".($_GET['maxPrice'])."\" min=\"0\" max=\"38000\" step=\"50\" type=\"range\" name=\"maxPrice\">";
                        }else{
                      echo "<input value=\"38000\" min=\"0\" max=\"38000\" step=\"50\" type=\"range\" name=\"maxPrice\">";
                        }
                        ?>
                    </section> <br>   <br><br>      <br>     <br>    <br>
                    <section class="range-slider">
                        <span class="rangeValues"></span>

<?php
                        if(isset($_GET['minWeather'])){
                          echo "<input value=\"".$_GET['minWeather']."\" min=\"-50\" max=\"60\" step=\"5\" type=\"range\" name=\"minWeather\">";
                        }else{
                        echo"<input value=\"-50\" min=\"-50\" max=\"60\" step=\"5\" type=\"range\" name=\"minWeather\">";
                        }
                        if(isset($_GET['maxWeather'])){
                        echo "<input value=\"".$_GET['maxWeather']."\" min=\"-50\" max=\"60\" step=\"5\" type=\"range\"name=\"maxWeather\">";
                        }else{
                        echo "<input value=\"60\" min=\"-50\" max=\"60\" step=\"5\" type=\"range\"name=\"maxWeather\">";
                      }?>




                    </section>


                    <button type="submit" class="button button-block" name="submitFilters" />Search</button>
                </div>
              </form>

              <?php
                if(isset($_GET['submitFilters'])){
                  $controller->getInput();
                }
               ?>
        </div>
    </div>

    <div class="main-content2">
        <div class="wrapper">

          <?php
          //$model->getFilters(); ->in vect Filters sa zicem
          $dateFlight = "20/06/2019";
          $dateForFR = "2019-06-20";
          $dateForAll = "190620";

          //apelam kiwiApi cu parametrii:   $filterDepartureCity;  $filterCities;  $filterDate;  $filterPrice;  $filterWeather;
          $model->filterDate = "20/06/2019";
          $json = $model->getFlight($model->filterDepartureCity, $model->$finalFilterCities, $model->filterDate, $model->filterPrice); // cu parametru vect Filters
          //$json = getFlight($flyFrom, $countryCode,$date_from);
          // $json = $model->getFlight("BUH", ["IT"], $dateFlight,$dateFlight,1,1000);
          if($json != 0){
            $lg = count($json)/2+1;
          for($i=0; $i<$lg; $i=$i+1){ //$i<count($json)


          //verifica criteriul cu vremea
          $earlier = new DateTime(date("Y-m-d", strtotime("now")));
          $later = new DateTime(getDateFormat($model->filterDate,"wizz"));
          $diff = $later->diff($earlier)->format("%a");
          // echo $diff . " ";

          $rezVreme = array(0,0);


          if(!in_array($json[$i]['cityTo'], $model->OraseAfisate)){
            array_push($model->OraseAfisate, $json[$i]['cityTo']);
          }else{
            continue;
          }
          if($diff < 16){
            $rezVreme = $model->getWeather2($json[$i]['cityTo'], $model->filterDate);
            if($rezVreme != -1){
              if(isset($rezVreme[0]) && isset($rezVreme[0]))
                if(!($rezVreme[0] == 0 && $rezVreme[1] == 0)){
                  //verific
                  echo $rezVreme[0], $model->filterWeather[0] , $rezVreme[1] , $model->filterWeather[1] . " ";
                  if($rezVreme[0] < $model->filterWeather[0] || $rezVreme[1] > $model->filterWeather[1])
                    continue;
                }
            }
          }

          echo "<div class=\"box clearfix\">
              <div class=\"box-left\"><img src=\"../sibiu.jpg\" alt=\"location\">";


           // $model->getPicture($json[$i]['cityTo']);
             // <img src=\"../sibiu.jpg\" alt=\"location\">


          echo "  </div>
            <div class=\"box-right\">
                <div class=\"search-bar-boxRightText\">";
                echo "<p class=\"bold\">" . $json[$i]['cityTo'] .  "</p>";

                if (count($json[$i]['route']) == 1) {
                  // code...
                  $toEcho = " Zbor direct";
                  $link="#";
                      $link =  $model->getLink($json[$i]['airlines'][0], $json[$i]['routes'][0][0], $json[$i]['routes'][0][1], $dateForFR,$dateForAll);
                      // echo $link;
                }else{
                  $link= "https://www.skyscanner.ro/transport/flights/"  .$json[$i]['routes'][0][0]. "/".$json[$i]['routes'][0][1] ."/" . $dateForAll . "//?adults=1&children=0&adultsv2=1&childrenv2=&infants=0&cabinclass=economy&rtn=1&preferdirects=false&outboundaltsenabled=false&inboundaltsenabled=false#results";
                  $esc=count($json[$i]['route'])-1;
                  $toEcho = " cu escala la: ";
                  for($j=0;$j<$esc; $j=$j+1)
                    $toEcho = $toEcho . $json[$i]['route'][$j]['cityTo'] . "  ";
                }



                echo"<p>".  $toEcho ."</p>
                <p> ".$json[$i]['routes'][0][1]."</p>";
                echo "<p> <b>Price:</b>". $json[$i]['price'] . " EUR" ."</p>";
                echo "</div>  <div class=\"search-bar-boxRightButtons\">
                    <button type=\"submit\" class=\"cardsButton\"><a href=\"#\">View</a></button>
                  <button type=\"submit\" class=\"cardsButton\"><a href=\"profile.php\">Add</a></button>
                  <button type=\"submit\" class=\"cardsButton\"><a href='".$link."'>Buy</a></button>
                </div>";
          ?>
    <!-- </div>  <div class="search-bar-boxRightButtons">
          <button type="submit" class="cardsButton"><a href="#">View</a></button>
        <button type="submit" class="cardsButton"><a href="profile.php">Add</a></button>
        <button type="submit" class="cardsButton"><a href= "<?php //echo $link; ?>" > Buy</a></button>
      </div> -->


  </div>
</div>
    <?php
          }
        }
           ?>
        </div>
    </div>

    <div class="main-content3">
        <div class="wrapper">
            <?php
for ($i=$lg+1; $i < count($json); $i++) {
  // code...

  $earlier = new DateTime(date("Y-m-d", strtotime("now")));
  $later = new DateTime(getDateFormat($model->filterDate,"wizz"));
  $diff = $later->diff($earlier)->format("%a");
  // echo $diff . " ";

  $rezVreme = array(0,0);
  if(!in_array($json[$i]['cityTo'], $model->OraseAfisate)){
    array_push($model->OraseAfisate, $json[$i]['cityTo']);
  }else{
    continue;
  }

  if($diff < 16){
    $rezVreme = $model->getWeather2($json[$i]['cityTo'], $model->filterDate);
    if($rezVreme != -1){
      if(isset($rezVreme[0]) && isset($rezVreme[0]))
        if(!($rezVreme[0] == 0 && $rezVreme[1] == 0)){
          //verific
          echo $rezVreme[0], $model->filterWeather[0] , $rezVreme[1] , $model->filterWeather[1] . " ";
          if($rezVreme[0] < $model->filterWeather[0] || $rezVreme[1] > $model->filterWeather[1])
            continue;
        }
    }
  }



  echo "<div class=\"box clearfix\">
      <div class=\"box-left\">    <img src=\"../sibiu.jpg\" alt=\"location\">";
  // $model->getPicture($json[$i]['cityTo']);
  echo "</div>
    <div class=\"box-right\">
        <div class=\"search-bar-boxRightText\">";
        echo "<p class=\"bold\">" . $json[$i]['cityTo'] .  "</p>";
        echo"<p> <b>From:</b> 10/06/2018</p>
        <p> <b>To:</b> 16/06/2018</p>";
        echo "<p> <b>Price:</b>". $json[$i]['price'] . " EUR" ."</p>";
        echo "</div>";
        ?>
        <div class="search-bar-boxRightButtons">
            <button type="submit" class="cardsButton"><a href="#">View</a></button>
            <button type="submit" class="cardsButton"><a href="profile.php">Add</a></button>
            <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
        </div>
    </div>
  </div>
  <?php
} ?>

<!-- <div>
  <button>Salveaza filtrele!!</button>
</div> -->
        </div>
    </div>

</div>



<!-- newsletter -->
<script>
    function getVals(){
  // Get slider values
  var parent = this.parentNode;
  var slides = parent.getElementsByTagName("input");
    var slide1 = parseFloat( slides[0].value );
    var slide2 = parseFloat( slides[1].value );
  // Neither slider will clip the other, so make sure we determine which is larger
  if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }

  var displayElement = parent.getElementsByClassName("rangeValues")[0];
      displayElement.innerHTML = slide1 + "EUR -> " + slide2 + "EUR";


}

window.onload = function(){
  // Initialize Sliders
  var sliderSections = document.getElementsByClassName("range-slider");
      for( var x = 0; x < sliderSections.length; x++ ){
        var sliders = sliderSections[x].getElementsByTagName("input");
        for( var y = 0; y < sliders.length; y++ ){
          if( sliders[y].type ==="range" ){
            sliders[y].oninput = getVals;
            // Manually trigger event first time to display values
            sliders[y].oninput();
          }
        }
      }
}
</script>


</body>
</html>
