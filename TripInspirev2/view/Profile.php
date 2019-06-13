<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TripInspire</title>
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/contact.css" rel="stylesheet" type="text/css">
  <link href="../css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/filters.css">


    <link rel="stylesheet" href="../css/check.css">
    <link rel="stylesheet" href="../css/range.css">

   







</head>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  
  document.getElementById("myDropdown").classList.toggle("show");
  
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

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
        <div class="dropdown">
          <a href="#" onclick="myFunction()" class="dropbtn">User</a>
          <div id="myDropdown" class="dropdown-content">
            <a href="Profile.php">Profile</a>
            <a href="login.php">Log out</a>
            
          </div>
      </div>
    </div>

</div>











<div class="main-contentz">
                            <div class="wrapperz">
                                <div class="box clearfix">
                                    <div class="box-leftz">
                                        <img src="../images/user.jpg" alt="location">
                                    </div>
                                    <div class="box-rightz">
                                        <div class="search-bar-boxRightText">
                                            <p class="bold">
                                            <?php
                                                session_start();
                                                echo $_SESSION['u_first']. ' ' . $_SESSION['u_last'];
                                            ?></p>
                                            <p>~traveler~</p>
                                            <p> <b>Active:</b> 1</p>
                                            <p> <b>Interested:</b> 4</p>
                                            <p> <b>Past:</b> 2</p>
                                            <br>
                                            <p> <b><a href="password.php">Change your password</a></b> </p>
                                        </div>
                                        <div class="search-bar-boxRightButtons">

                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
    </div>





<div class="filterContent">

  
    <!-- <p class="boldz">Active</p>     -->
    <div class="main-content4">
        <p class="boldz">Active</p>     
                                <div class="wrapper2">
                                        
                                    <div class="box clearfix">
                                        <div class="box-left">
                                            <img src="../images/bucovina.jpg" alt="location">
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

                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
    </div>
    
    <div class="vl"></div>
    
    <!-- <p class="boldz">Interested</p> -->
    <div class="main-content5">
        
        <p class="boldz">Interested</p>
        <div class="wrapper2">
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/bucovina.jpg" alt="location">
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
                            
                        
                        <button type="submit" class="cardsButton"><a href="#">Remove</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>

                    </div>

                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/prahova.jpg" alt="location">
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
                      
                        <button type="submit" class="cardsButton"><a href="#">Remove</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/sibiu.jpg" alt="location">
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
                        
                        <button type="submit" class="cardsButton"><a href="#">Remove</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/5.jpg" alt="location">
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
                        
                        <button type="submit" class="cardsButton"><a href="#">Remove</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/6.jpg" alt="location">
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
                        
                        <button type="submit" class="cardsButton"><a href="#">Remove</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/4.jpg" alt="location">
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
                        <button type="submit" class="cardsButton"><a href="#">Remove</a></button>
                        <button type="submit" class="cardsButton"><a href="#">Buy</a></button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="v2"></div>
 
    
    <!-- <p class="boldz">Past</p> -->
    <div class="main-content6">
        <p class="boldz">Past</p>
        <div class="wrapper2">
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/bucovina.jpg" alt="location">
                </div>
                <div class="box-right2">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Bucovina, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 124RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                       
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/prahova.jpg" alt="location">
                </div>
                <div class="box-right2">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Prahova, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 155RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/sibiu.jpg" alt="location">
                </div>
                <div class="box-right2">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Sibiu, Romania</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 180RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                        
            </div>
                               
                    </div>
                </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/5.jpg" alt="location">
                </div>
                <div class="box-right2">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Paris, France</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 250RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                   
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/6.jpg" alt="location">
                </div>
                <div class="box-right2">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Barcelona, Spain</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 322RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                   
                    </div>
                </div>
            </div>
            <div class="box clearfix">
                <div class="box-left">
                    <img src="../images/4.jpg" alt="location">
                </div>
                <div class="box-right2">
                    <div class="search-bar-boxRightText">
                        <p class="bold">Athens, Greece</p>
                        <p>Two ways/one way</p>
                        <p> <b>From:</b> 10/06/2018</p>
                        <p> <b>To:</b> 16/06/2018</p>
                        <p> <b>Price:</b> 342RON</p>
                    </div>
                    <div class="search-bar-boxRightButtons">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>







<footer class="newsletter">
    <div>
      <p class="titleText">Subscribe to our newsletter</p>
      <p class="newsText">Subscribe to our newsletter to
        give you awesome ideas about places to visit</p>
      <div class="newslBtns">
        <form action="#" class="newsForm">
          <input type="mail" class="mailbox" placeholder="Enter email">
          <input type="submit" value="Subscribe" class="newsSubmit">
        </form>
      </div>
    </div>
  </footer>


</body>
</html>