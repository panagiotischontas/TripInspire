<!DOCTYPE html>
<html>


<?php


require_once '../controller/FiltersController.php';
require_once '../model/FiltersModel.php';
require_once '../BDconn.php';

session_start();
$controller = new FiltersController();
// echo $conn;
$model = new FiltersModel($controller, $conn);

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
                $model->generateFilterForm($idForm, $idInput, $valueInput);

                $idForm = "tara";
                $i = 0;
                foreach ($model->OnAir as $key => $value) {
                  $idInput[$i] = $key;
                  $valueInput[$i] = $key;
                  $i=$i+1;
                }
                $model->generateFilterForm($idForm, $idInput, $valueInput);


                $idForm = "orase";
                $i = 0;
                foreach ($model->OnAir as $key => $t) {
                  for ($h=0; $h < count($t); $h++) {
                    $idInput[$i] = $t[$h][0];
                    $valueInput[$i] = $t[$h][0];
                    $i=$i+1;
                   }

                }
                $model->generateFilterForm($idForm, $idInput, $valueInput);


                $idForm = "Clasa";
                $idInput = ["Business", "Eco"];
                $valueInput = ["Business", "Eco"];
                $model->generateFilterForm($idForm, $idInput, $valueInput);

                ?>


                <div class="form">

                  <?php
                    $idInput = ["Zbor direct", "Maxim 1 escala", "Maxim 2 escale"];
                    $valueInput = ["Zbor direct", "Maxim 1 escala", "Maxim 2 escale"];
                    $model->generateFilterCrit($idInput, $valueInput);
                  ?>
                    <!--<h1>Custom Checkboxes</h1>-->

                    <section class="range-slider">
                        <span class="rangeValues"></span>
                        <input value="0" min="0" max="38000" step="50" type="range" name="minPrice">
                        <input value="38000" min="0" max="38000" step="50" type="range" name="maxPrice">
                    </section> <br>   <br><br>      <br>     <br>    <br>
                    <section class="range-slider">
                        <span class="rangeValues"></span>
                        <input value="-50" min="-50" max="60" step="5" type="range">
                        <input value="60" min="-50" max="60" step="5" type="range">
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
          $dateFlight = "20/08/2019";
          $dateForFR = "2019-08-20";
          $dateForAll = "190820";

            //apelam kiwiApi cu parametrii:   $filterDepartureCity;  $filterCities;  $filterDate;  $filterPass;  $filterPrice;  $filterWeather;

            $json = $model->getFlight($model->filterDepartureCity, $model->filterCities, $model->filterDate  , $model->filterPass  , $model->filterPrice , $model->filterWeather); // cu parametru vect Filters
            //$json = getFlight($flyFrom, $countryCode,$date_from);
            // $json = $model->getFlight("BUH", ["IT"], $dateFlight,$dateFlight,1,1000);
            for($i=0; $i<5; $i=$i+1){ //$i<count($json)


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



                    echo"<p>". $json[$i]['routes'][0][1] ."</p>
                    <p> <b>To:</b> 16/06/2018</p>";
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
        <button type="submit" class="cardsButton"><a href= "<?php echo $link; ?>" > Buy</a></button>
      </div> -->


  </div>
</div>
    <?php
          }
           ?>
        </div>
    </div>

    <div class="main-content3">
        <div class="wrapper">
            <?php
for ($i=10; $i < 20; $i++) {
  // code...
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
      displayElement.innerHTML = slide1 + "$ - " + slide2 + "$";


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
