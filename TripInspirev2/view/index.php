<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TripInspire</title>
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/navbar_newsletter.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/calendar.css"/>
    <link rel="stylesheet" href="../css/calendar.css"/>
    <link href="../css/cssIMP.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="../javascript/pureJSCalendar.js"></script>
    

</head>

<body>
<div id="bkg_image">
    <div class="indexFooter">
      <div class="logo">
        <a href="index.php">TripInspire</a>
      </div>
      <ul class="nav_barTransparent">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about_us.php">About</a></li>
        <?php
            session_start();
            if(isset($_SESSION['u_id'])){
                echo '<li>
                <div class="dropdown">
                  <a href="index.html">
                    User
                  </a>
                </div>
                <div class="dropdown-content">
                  <a href="Profile.php">Profile</a>
                  <a href="login.php">Log out</a>
                </div>
              </li>
              ';
            }
            else
                echo ' <li><a href="login.php">Login</a></li>';
        ?>     
      </ul>
    </div>
    <div class="searchForm">
        <div class="container">
            <form action="#" id="form-wrapper">
                

                
            

                <form autocomplete="off" action="/index.php">
                        <div class="autocomplete" >
                            <input id="myInput" type="text" name="myCountry" placeholder="From...">
                        </div>
                        
                </form>

                <script type="text/javascript" src="../javascript/countries.js"></script>


                <input type="text" class="checkDate" id="checkOut" value="Check-in date" isCalendar="false"
                       onclick="setCalendar(this)"/>
                <input list="packages" placeholder="Continents"/>

                <datalist id="packages">
                    <option value="Asia">Asia
                    <option value="Australia">Australia
                    <option value="Europe">Europe
                    <option value="North America">North America
                    <option value="South America">South America
                </datalist> 

                <input type="submit" value="Search" onclick="window.location.href='filters.html'">

            </form>
        </div>
    </div>
</div>
<div id="suggestions">
    <p class="title">Weekly Suggestions</p>
    <div class="cardFather">
        <div class="cardWithPad">
            <div class="card">
                <img src="../images/destination-1.jpg" alt="dest">
                <div class="card_container">
                    <p class="cardLocation">Paris, Franta</p>
                    <p class="cardPrice">From: 200 Lei</p>
                </div>
                <div class="card_btn">
                    <button>Add</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
        <div class="cardWithPad">
            <div class="card">
                <img src="../images/destination-1.jpg" alt="dest">
                <div class="card_container">
                    <p class="cardLocation">Paris, Franta</p>
                    <p class="cardPrice">From: 200 Lei</p>
                </div>
                <div class="card_btn">
                    <button>Add</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
        <div class="cardWithPad">
            <div class="card">
                <img src="../images/destination-1.jpg" alt="dest">
                <div class="card_container">
                    <p class="cardLocation">Paris, Franta</p>
                    <p class="cardPrice">From: 200 Lei</p>
                </div>
                <div class="card_btn">
                    <button>Add</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
        <div class="cardWithPad">
            <div class="card">
                <img src="../images/destination-1.jpg" alt="dest">
                <div class="card_container">
                    <p class="cardLocation">Paris, Franta</p>
                    <p class="cardPrice">From: 200 Lei</p>
                </div>
                <div class="card_btn">
                    <button>Add</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
        <div class="cardWithPad">
            <div class="card">
                <img src="../images/destination-1.jpg" alt="dest">
                <div class="card_container">
                    <p class="cardLocation">Paris, Franta</p>
                    <p class="cardPrice">From: 200 Lei</p>
                </div>
                <div class="card_btn">
                    <button>Add</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
        <div class="cardWithPad">
            <div class="card">
                <img src="../images/destination-1.jpg" alt="dest">
                <div class="card_container">
                    <p class="cardLocation">Paris, Franta</p>
                    <p class="cardPrice">From: 200 Lei</p>
                </div>
                <div class="card_btn">
                    <button>Add</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
    </div>
</div>  

<?php
    error_reporting(E_ERROR | E_PARSE);
    $_SESSION['page']="index.php";
    include 'newsletter.php';
  ?>

</body>
</html>