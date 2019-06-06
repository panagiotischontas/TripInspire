<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Trip Inspire</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link href="css/cssIMP.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="bkg_image">
    <div class="indexFooter">
      <div class="logo">
        <a href="index.html">TripInspire</a>
      </div>
      <ul class="nav_barTransparent">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="team.html">Team</a></li>
        <li><a href="produs.html">Contact</a></li>
        <li><a href="about_us.html">About</a></li>
        <li>
          <div class="dropdown">
            <a href="index.html">
              User
            </a>
          </div>
          <div class="dropdown-content">
            <a href="Cart.html">Profile</a>
            <a href="index.html">Log out</a>
          </div>
        </li>
      </ul>
    </div>


    <div class="searchForm">
      <div class="container">
        <form action="#">
          <input type="text" placeholder="Departure city">
          <input type="text" placeholder="Traveled city">
          <input list="continents" placeholder="Destination continent" />
          <datalist id="continents">
            <option value="Asia">Asia
            <option value="Africa">Africa
            <option value="North America">America de Nord
            <option value="South America">America de Sud
            <option value="Europe">Europa
          </datalist>
          <input type="submit" value="Search">
        </form>
      </div>

      <div class="container">
        <form action="#">
          <input type="text" placeholder="Departure city">
          <input type="text" placeholder="Traveled city">
          <input list="continents" placeholder="Destination continent" />
          <datalist id="continents">
            <option value="Asia">Asia
            <option value="Africa">Africa
            <option value="North America">America de Nord
            <option value="South America">America de Sud
            <option value="Europe">Europa
          </datalist>
          <input type="submit" value="Search">
        </form>
      </div>
    </div>
  </div>
  <div id="suggestions">
    <p class="title">Weekly Suggestions</p>
    <div class="cardFather">
      <div class="cardWithPad">
        <div class="card">
          <img src="images/destination-1.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Paris, Franta</p>
            <p class="cardPrice">From: 200 Lei</p>
          </div>
          <div class="card_btn">
            <button>More</button>
          </div>
        </div>
      </div>

      <div class="cardWithPad">
        <div class="card">
          <img src="images/destination-1.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Paris, Franta</p>
            <p class="cardPrice">From: 200 Lei</p>
          </div>
          <div class="card_btn">
            <button>More</button>
          </div>
        </div>
      </div>

      <div class="cardWithPad">
        <div class="card">
          <img src="images/destination-1.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Paris, Franta</p>
            <p class="cardPrice">From: 200 Lei</p>
          </div>
          <div class="card_btn">
            <button>More</button>
          </div>
        </div>
      </div>

      <div class="cardWithPad">
        <div class="card">
          <img src="images/destination-1.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Paris, Franta</p>
            <p class="cardPrice">From: 200 Lei</p>
          </div>
          <div class="card_btn">
            <button>More</button>
          </div>
        </div>
      </div>

      <div class="cardWithPad">
        <div class="card">
          <img src="images/destination-1.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Paris, Franta</p>
            <p class="cardPrice">From: 200 Lei</p>
          </div>
          <div class="card_btn">
            <button>More</button>
          </div>
        </div>
      </div>

      <div class="cardWithPad">
        <div class="card">
          <img src="images/destination-1.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Paris, Franta</p>
            <p class="cardPrice">From: 200 Lei</p>
          </div>
          <div class="card_btn">
            <button>More</button>
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