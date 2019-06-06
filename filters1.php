<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TripInspire</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/contact.css" rel="stylesheet" type="text/css">
  <link href="css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link href="css/filters.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/check.css">
    <link rel="stylesheet" href="css/range.css">

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
      displayElement.innerHTML = slide1 + "°C - " + slide2 + "°C";
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




</head>

<body>
<div class="navbar">
    <div class="logo">
    <a href="index.html">Trip Inspire</a>
    </div>

    <div class="pages">
        <a href="index.html">Home</a>
        <a href="team.html">Team</a>
        <a class="active" href="contact.html">Contact</a>
        <a class="activeForNav2" href="about_us.html">About</a>
        <a href="login.html">Login</a>
    </div>

</div>

















<div class="filterContent">

    <div clas="main-content">
        <div class="filtersLeft">
                <div class="form">


                    <!--<div  class="tab-group">
                    <!--<h1>Near</h1>-->
                    <!--</div>-->
                    <label class="container">
                        <input type="checkbox">Beach
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Mountains
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Countryside
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Anywhere
                        <span class="checkmark"></span>
                    </label><br>



                </div>


                <div class="form">



                    <!--<h1>Custom Checkboxes</h1>-->
                    <label class="container">
                        <input type="checkbox">One
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Two
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Three
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Four
                        <span class="checkmark"></span>
                    </label><br>

                    <label class="container">
                        <input type="checkbox">One
                        <span class="checkmark"></span>
                    </label><br>


                </div>

                <div class="form">



                    <!--<h1>Custom Checkboxes</h1>-->
                    <label class="container">
                        <input type="checkbox">One
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Two
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Three
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Four
                        <span class="checkmark"></span>
                    </label><br>

                    <label class="container">
                        <input type="checkbox">One
                        <span class="checkmark"></span>
                    </label><br>


                </div>


                <div class="form">



                    <!--<h1>Custom Checkboxes</h1>-->
                    <label class="container">
                        <input type="checkbox">One
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Two
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Three
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Four
                        <span class="checkmark"></span>
                    </label><br>

                    <label class="container">
                        <input type="checkbox">One
                        <span class="checkmark"></span>
                    </label><br>
                    <label class="container">
                        <input type="checkbox">Two
                        <span class="checkmark"></span>
                    </label><br>


                    <section class="range-slider">
                        <span class="rangeValues"></span>
                        <input value="0" min="0" max="38000" step="50" type="range">
                        <input value="38000" min="0" max="38000" step="50" type="range">
                    </section>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <section class="range-slider">
                        <span class="rangeValues"></span>
                        <input value="-50" min="-50" max="60" step="5" type="range">
                        <input value="60" min="-50" max="60" step="5" type="range">
                    </section>
                    

                    <button type="submit" class="button button-block" />Search</button>
                </div>
        </div>
    </div>

    <div class="main-content2">
        <div class="wrapper">
            <div class="box clearfix">
                <div class="box-left">
                    <img src="bucovina.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Bucovina, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 124RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>

                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="prahova.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Prahova, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 155RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="sibiu.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Sibiu, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 180RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="5.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Paris, France</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 250RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="6.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Barcelona, Spain</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 322RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="4.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Athens, Greece</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 342RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content3">
        <div class="wrapper">
            <div class="box clearfix">
                <div class="box-left">
                    <img src="bucovina.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Bucovina, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 124RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="prahova.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Prahova, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 155RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="sibiu.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Sibiu, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 180RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="5.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Paris, France</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 250RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="6.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Barcelona, Spain</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 322RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="4.jpg" alt="location">
                </div>
                <div class="box-right">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Athens, Greece</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 342RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        <button type="submit" class="cardsButton"><a href="#">View</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Add</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>








<footer class="newsletter">
    <p class="titleText">Subscribe to our newsletter</p>
    <p class="newsText">Subscribe to our newsletter to
        give you awesome ideas about places to visit</p>
    <form action="#" class="newsForm">
        <input type="mail" class="mailbox" placeholder="Enter email">
        <input type="submit" value="Subscribe" class="newsSubmit">
    </form>
</footer>
</body>
</html>