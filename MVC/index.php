<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trip Inspire</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div id="bkg_image">
      <ul class="logo">
        <li>
          <a class="active" href="index.html">Trip Inspire</a>
        </li>
      </ul>
      <ul  class="nav_barTransparent">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="static_pages/team.html">Team</a></li>
        <li><a href="produs.html">Contact</a></li>
        <li><a href="static_pages/about_us.html">About</a></li>

<?php
if(isset($_SESSION['u_id'])){
  $first = $_SESSION['u_first'];
  $last = $_SESSION['u_last'];
  echo "<li><a href=\"about_us.html\">$first $last</a></li>";

}
else {
  echo "  <li><a href=\"view/login.php\">Login</a></li>";
  echo "  <li><a href=\"view/register.php\">Register</a></li>";
}
 ?>


      </ul>


      <div class="searchForm">
        <div class="container">
          <div class="diana_form1">
           <form action="#">
             <select name="" class="formSearch" placeholder="Keyword search">

					  <option hidden>Departure City</option>

					  <option value="">All</option>

					  <!--START countries starting with A-->
                      <option value="">Afghanistan</option>
                      <option value="">Albania</option>
                      <option value="">Algeria</option>
                      <option value="">Andorra</option>
					  <option value="">Angola</option>
					  <option value="">Antigua and Barbuda</option>
					  <option value="">Argentina</option>
                      <option value="">Armenia</option>
                      <option value="">Australia</option>
                      <option value="">Austria</option>
					  <option value="">Azerbaijan</option>
					  <!--END countries starting with A-->

					  <!--START countries starting with B-->
                      <option value="">Bahrain</option>
                      <option value="">Bangladesh</option>
                      <option value="">Barbados</option>
                      <option value="">Belarus</option>
					  <option value="">Belgium</option>
					  <option value="">Belize</option>
					  <option value="">Benin</option>
                      <option value="">Bolivia</option>
                      <option value="">Bosnia and Herzegovina</option>
                      <option value="">Botswana</option>
					  <option value="">Brazil</option>
					  <option value="">Brunei</option>
					  <option value="">Bulgaria</option>
                      <option value="">Burkina Faso</option>
                      <option value="">Burma</option>
                      <option value="">Burundi</option>
					  <!--END countries starting with B-->

					  <!--START countries starting with C-->
                      <option value="">Cape Verde</option>
                      <option value="">Cambodia</option>
                      <option value="">Cameroon</option>
                      <option value="">Canada</option>
					  <option value="">Central African Republic</option>
					  <option value="">Chad</option>
					  <option value="">Chile</option>
                      <option value="">China</option>
                      <option value="">Colombia</option>
                      <option value="">Comoros</option>
					  <option value="">Costa Rica</option>
					  <option value="">Cote d’Ivoire</option>
					  <option value="">Croatia</option>
                      <option value="">Cuba</option>
                      <option value="">Cyprus</option>
                      <option value="">Czech Republic</option>
					  <!--END countries starting with C-->

					  <!--START countries starting with D-->
                      <option value="">Democratic Republic of the Congo</option>
                      <option value="">Denmark</option>
                      <option value="">Djibouti</option>
                      <option value="">Dominica</option>
					  <option value="">Dominican Republic</option>
					  <!--END countries starting with D-->

					  <!--START countries starting with E-->
                      <option value="">Ecuador</option>
                      <option value="">Egypt</option>
                      <option value="">El Salvador</option>
                      <option value="">Equatorial Guinea</option>
					  <option value="">Eritrea</option>
					  <option value="">Estonia</option>
					  <option value="">Eswatini</option>
                      <option value="">Ethiopia</option>
                      <!--END countries starting with E-->

					  <!--START countries starting with F-->
                      <option value="">Fiji</option>
                      <option value="">Finland</option>
                      <option value="">France</option>
                      <!--END countries starting with F-->

					  <!--START countries starting with G-->
                      <option value="">Gabon</option>
                      <option value="">Georgia</option>
                      <option value="">Germany</option>
                      <option value="">Ghana</option>
					  <option value="">Greece</option>
					  <option value="">Grenada</option>
					  <option value="">Guatemala</option>
                      <option value="">Guinea</option>
                      <option value="">Guinea-Bissau</option>
                      <option value="">Guyana</option>
					  <!--END countries starting with G-->

					  <!--START countries starting with H-->
                      <option value="">Haiti</option>
                      <option value="">Honduras</option>
                      <!--END countries starting with H-->

					   <!--START countries starting with I-->
                      <option value="">Iceland</option>
                      <option value="">India</option>
                      <option value="">Indonesia</option>
                      <option value="">Iran</option>
					  <option value="">Iraq</option>
					  <option value="">Israel</option>
					  <option value="">Italy</option>
                      <!--END countries starting with I-->

					  <!--START countries starting with J-->
                      <option value="">Jamaica</option>
                      <option value="">Japan</option>
                      <option value="">Jordan</option>
                      <!--END countries starting with J-->

					  <!--START countries starting with K-->
                      <option value="">Kazakhstan</option>
                      <option value="">Kenya</option>
                      <option value="">Kiribati</option>
                      <option value="">Kuwait</option>
					  <option value="">Kyrgyzstan</option>
					  <!--END countries starting with K-->

					  <!--START countries starting with L-->
                      <option value="">Laos</option>
                      <option value="">Latvia</option>
                      <option value="">Lebanon</option>
                      <option value="">Lesotho</option>
					  <option value="">Liberia</option>
					  <option value="">Libya</option>
					  <option value="">Liechtenstein</option>
                      <option value="">Lithuania</option>
                      <option value="">Luxembourg</option>
                      <!--END countries starting with L-->

					   <!--START countries starting with M-->
                      <option value="">Madagascar</option>
                      <option value="">Malawi</option>
                      <option value="">Malaysia</option>
                      <option value="">Maldives</option>
					  <option value="">Mali</option>
					  <option value="">Malta</option>
					  <option value="">Marshall Islands</option>
                      <option value="">Mauritania</option>
                      <option value="">Mauritius</option>
                      <option value="">Mexico</option>
					  <option value="">Micronesia</option>
					  <option value="">Moldova</option>
					  <option value="">Monaco</option>
                      <option value="">Mongolia</option>
                      <option value="">Montenegro</option>
                      <option value="">Morocco</option>
					  <option value="">Mozambique</option>
					  <!--END countries starting with M-->

					   <!--START countries starting with N-->
                      <option value="">Namibia</option>
                      <option value="">Nauru</option>
                      <option value="">Nepal</option>
                      <option value="">New Zealand</option>
					  <option value="">Nicaragua</option>
					  <option value="">Niger</option>
					  <option value="">Nigeria</option>
                      <option value="">Norway</option>
                      <!--END countries starting with N-->

					  <!--START countries starting with O-->
                      <option value="">Oman</option>
                      <!--END countries starting with O-->

					   <!--START countries starting with P-->
                      <option value="">Pakistan</option>
                      <option value="">Palau</option>
                      <option value="">Panama</option>
                      <option value="">Papua New Guinea</option>
					  <option value="">Paraguay</option>
					  <option value="">Peru</option>
					  <option value="">Philippines</option>
                      <option value="">Poland</option>
					  <option value="">Portugal</option>
                      <!--END countries starting with P-->

					  <!--START countries starting with Q-->
                      <option value="">Qatar</option>
                      <!--END countries starting with Q-->

					   <!--START countries starting with R-->
                      <option value="">Republic of the Congo</option>
                      <option value="">Romania</option>
                      <option value="">Russia</option>
                      <option value="">Rwanda</option>
					  <!--END countries starting with R-->

					  <!--START countries starting with S-->
                      <option value="">Saint Kitts and Nevis</option>
                      <option value="">Saint Lucia</option>
                      <option value="">Saint Vincent and the Grenadines</option>
                      <option value="">Samoa</option>
					  <option value="">San Marino</option>
					  <option value="">Sao Tome and Principe</option>
					  <option value="">Saudi Arabia</option>
                      <option value="">Senegal</option>
                      <option value="">Serbia</option>
                      <option value="">Seychelles</option>
					  <option value="">Sierra Leone</option>
					  <option value="">Singapore</option>
					  <option value="">Slovakia</option>
                      <option value="">Slovenia</option>
                      <option value="">Somalia</option>
                      <option value="">South Africa</option>
					  <option value="">South Sudan</option>
					  <option value="">Spain</option>
					  <option value="">Sri Lanka</option>
					  <option value="">Sudan</option>
                      <option value="">Suriname</option>
                      <option value="">Sweden</option>
                      <option value="">Switzerland</option>
					  <option value="">Syria</option>
					  <!--END countries starting with S-->

					  <!--START countries starting with T-->
                      <option value="">Tajikistan</option>
                      <option value="">Tanzania</option>
                      <option value="">Thailand</option>
                      <option value="">Timor-Leste</option>
					  <option value="">Togo</option>
					  <option value="">Tonga</option>
					  <option value="">Trinidad and Tobago</option>
                      <option value="">Tunisia</option>
                      <option value="">Turkey</option>
                      <option value="">Turkmenistan</option>
					  <option value="">Tuvalu</option>
					  <!--END countries starting with T-->

					  <!--START countries starting with U-->
                      <option value="">USA</option>
                      <option value="">Uganda</option>
                      <option value="">Ukraine</option>
                      <option value="">Uruguay</option>
					  <option value="">Uzbekistan</option>
					  <!--END countries starting with U-->

					  <!--START countries starting with V-->
                      <option value="">Vanuatu</option>
                      <option value="">Venezuela</option>
                      <option value="">Vietnam</option>
                      <!--END countries starting with V-->

					  <!--START countries starting with Y-->
                      <option value="">Yemen</option>
                      <!--END countries starting with Y-->

					   <!--START countries starting with Z-->
                      <option value="">Zambia</option>
                      <option value="">Zimbabwe</option>
                      <!--END countries starting with Z-->



                    </select>
             <input class="formSearch" type="text" placeholder="Destination Continent">
             <datalist id="continents">
                <option value="Asia">Asia
                <option value="Africa">Africa
                <option value="North America">America de Nord
                <option value="South America">America de Sud
                <option value="Europe">Europa
             </datalist>
             <select class="formSearch" placeholder="Keyword search">

					  <option hidden>Countries</option>

					  <option value="">All</option>

					  <!--START countries starting with A-->
                      <option value="">Afghanistan</option>
                      <option value="">Albania</option>
                      <option value="">Algeria</option>
                      <option value="">Andorra</option>
					  <option value="">Angola</option>
					  <option value="">Antigua and Barbuda</option>
					  <option value="">Argentina</option>
                      <option value="">Armenia</option>
                      <option value="">Australia</option>
                      <option value="">Austria</option>
					  <option value="">Azerbaijan</option>
					  <!--END countries starting with A-->

					  <!--START countries starting with B-->
                      <option value="">Bahrain</option>
                      <option value="">Bangladesh</option>
                      <option value="">Barbados</option>
                      <option value="">Belarus</option>
					  <option value="">Belgium</option>
					  <option value="">Belize</option>
					  <option value="">Benin</option>
                      <option value="">Bolivia</option>
                      <option value="">Bosnia and Herzegovina</option>
                      <option value="">Botswana</option>
					  <option value="">Brazil</option>
					  <option value="">Brunei</option>
					  <option value="">Bulgaria</option>
                      <option value="">Burkina Faso</option>
                      <option value="">Burma</option>
                      <option value="">Burundi</option>
					  <!--END countries starting with B-->

					  <!--START countries starting with C-->
                      <option value="">Cape Verde</option>
                      <option value="">Cambodia</option>
                      <option value="">Cameroon</option>
                      <option value="">Canada</option>
					  <option value="">Central African Republic</option>
					  <option value="">Chad</option>
					  <option value="">Chile</option>
                      <option value="">China</option>
                      <option value="">Colombia</option>
                      <option value="">Comoros</option>
					  <option value="">Costa Rica</option>
					  <option value="">Cote d’Ivoire</option>
					  <option value="">Croatia</option>
                      <option value="">Cuba</option>
                      <option value="">Cyprus</option>
                      <option value="">Czech Republic</option>
					  <!--END countries starting with C-->

					  <!--START countries starting with D-->
                      <option value="">Democratic Republic of the Congo</option>
                      <option value="">Denmark</option>
                      <option value="">Djibouti</option>
                      <option value="">Dominica</option>
					  <option value="">Dominican Republic</option>
					  <!--END countries starting with D-->

					  <!--START countries starting with E-->
                      <option value="">Ecuador</option>
                      <option value="">Egypt</option>
                      <option value="">El Salvador</option>
                      <option value="">Equatorial Guinea</option>
					  <option value="">Eritrea</option>
					  <option value="">Estonia</option>
					  <option value="">Eswatini</option>
                      <option value="">Ethiopia</option>
                      <!--END countries starting with E-->

					  <!--START countries starting with F-->
                      <option value="">Fiji</option>
                      <option value="">Finland</option>
                      <option value="">France</option>
                      <!--END countries starting with F-->

					  <!--START countries starting with G-->
                      <option value="">Gabon</option>
                      <option value="">Georgia</option>
                      <option value="">Germany</option>
                      <option value="">Ghana</option>
					  <option value="">Greece</option>
					  <option value="">Grenada</option>
					  <option value="">Guatemala</option>
                      <option value="">Guinea</option>
                      <option value="">Guinea-Bissau</option>
                      <option value="">Guyana</option>
					  <!--END countries starting with G-->

					  <!--START countries starting with H-->
                      <option value="">Haiti</option>
                      <option value="">Honduras</option>
                      <!--END countries starting with H-->

					   <!--START countries starting with I-->
                      <option value="">Iceland</option>
                      <option value="">India</option>
                      <option value="">Indonesia</option>
                      <option value="">Iran</option>
					  <option value="">Iraq</option>
					  <option value="">Israel</option>
					  <option value="">Italy</option>
                      <!--END countries starting with I-->

					  <!--START countries starting with J-->
                      <option value="">Jamaica</option>
                      <option value="">Japan</option>
                      <option value="">Jordan</option>
                      <!--END countries starting with J-->

					  <!--START countries starting with K-->
                      <option value="">Kazakhstan</option>
                      <option value="">Kenya</option>
                      <option value="">Kiribati</option>
                      <option value="">Kuwait</option>
					  <option value="">Kyrgyzstan</option>
					  <!--END countries starting with K-->

					  <!--START countries starting with L-->
                      <option value="">Laos</option>
                      <option value="">Latvia</option>
                      <option value="">Lebanon</option>
                      <option value="">Lesotho</option>
					  <option value="">Liberia</option>
					  <option value="">Libya</option>
					  <option value="">Liechtenstein</option>
                      <option value="">Lithuania</option>
                      <option value="">Luxembourg</option>
                      <!--END countries starting with L-->

					   <!--START countries starting with M-->
                      <option value="">Madagascar</option>
                      <option value="">Malawi</option>
                      <option value="">Malaysia</option>
                      <option value="">Maldives</option>
					  <option value="">Mali</option>
					  <option value="">Malta</option>
					  <option value="">Marshall Islands</option>
                      <option value="">Mauritania</option>
                      <option value="">Mauritius</option>
                      <option value="">Mexico</option>
					  <option value="">Micronesia</option>
					  <option value="">Moldova</option>
					  <option value="">Monaco</option>
                      <option value="">Mongolia</option>
                      <option value="">Montenegro</option>
                      <option value="">Morocco</option>
					  <option value="">Mozambique</option>
					  <!--END countries starting with M-->

					   <!--START countries starting with N-->
                      <option value="">Namibia</option>
                      <option value="">Nauru</option>
                      <option value="">Nepal</option>
                      <option value="">New Zealand</option>
					  <option value="">Nicaragua</option>
					  <option value="">Niger</option>
					  <option value="">Nigeria</option>
                      <option value="">Norway</option>
                      <!--END countries starting with N-->

					  <!--START countries starting with O-->
                      <option value="">Oman</option>
                      <!--END countries starting with O-->

					   <!--START countries starting with P-->
                      <option value="">Pakistan</option>
                      <option value="">Palau</option>
                      <option value="">Panama</option>
                      <option value="">Papua New Guinea</option>
					  <option value="">Paraguay</option>
					  <option value="">Peru</option>
					  <option value="">Philippines</option>
                      <option value="">Poland</option>
					  <option value="">Portugal</option>
                      <!--END countries starting with P-->

					  <!--START countries starting with Q-->
                      <option value="">Qatar</option>
                      <!--END countries starting with Q-->

					   <!--START countries starting with R-->
                      <option value="">Republic of the Congo</option>
                      <option value="">Romania</option>
                      <option value="">Russia</option>
                      <option value="">Rwanda</option>
					  <!--END countries starting with R-->

					  <!--START countries starting with S-->
                      <option value="">Saint Kitts and Nevis</option>
                      <option value="">Saint Lucia</option>
                      <option value="">Saint Vincent and the Grenadines</option>
                      <option value="">Samoa</option>
					  <option value="">San Marino</option>
					  <option value="">Sao Tome and Principe</option>
					  <option value="">Saudi Arabia</option>
                      <option value="">Senegal</option>
                      <option value="">Serbia</option>
                      <option value="">Seychelles</option>
					  <option value="">Sierra Leone</option>
					  <option value="">Singapore</option>
					  <option value="">Slovakia</option>
                      <option value="">Slovenia</option>
                      <option value="">Somalia</option>
                      <option value="">South Africa</option>
					  <option value="">South Sudan</option>
					  <option value="">Spain</option>
					  <option value="">Sri Lanka</option>
					  <option value="">Sudan</option>
                      <option value="">Suriname</option>
                      <option value="">Sweden</option>
                      <option value="">Switzerland</option>
					  <option value="">Syria</option>
					  <!--END countries starting with S-->

					  <!--START countries starting with T-->
                      <option value="">Tajikistan</option>
                      <option value="">Tanzania</option>
                      <option value="">Thailand</option>
                      <option value="">Timor-Leste</option>
					  <option value="">Togo</option>
					  <option value="">Tonga</option>
					  <option value="">Trinidad and Tobago</option>
                      <option value="">Tunisia</option>
                      <option value="">Turkey</option>
                      <option value="">Turkmenistan</option>
					  <option value="">Tuvalu</option>
					  <!--END countries starting with T-->

					  <!--START countries starting with U-->
                      <option value="">USA</option>
                      <option value="">Uganda</option>
                      <option value="">Ukraine</option>
                      <option value="">Uruguay</option>
					  <option value="">Uzbekistan</option>
					  <!--END countries starting with U-->

					  <!--START countries starting with V-->
                      <option value="">Vanuatu</option>
                      <option value="">Venezuela</option>
                      <option value="">Vietnam</option>
                      <!--END countries starting with V-->

					  <!--START countries starting with Y-->
                      <option value="">Yemen</option>
                      <!--END countries starting with Y-->

					   <!--START countries starting with Z-->
                      <option value="">Zambia</option>
                      <option value="">Zimbabwe</option>
                      <!--END countries starting with Z-->



                    </select>

             <select class="formSearch">
                <option value="">Economy Class</option>
                <option value="">Business Class</option>
             </select>


           </form>
        </div>


        </div>
        <div class="container">
          <div class="diana_form2">
           <form action="#">
             <input class="formSearch" type="text" placeholder="Departure Date">
             <input class="formSearch" type="text" placeholder="Return Date">
             <input class="formSearch"  placeholder="Adults" />
             <input class="formSearch"  placeholder="Children" />
             <br />
             <input style="margin-top:20px;float:right; margin-right:30px;cursor:pointer;" class="formSearch" type="submit" value="Search">
           </form>
          </div>
        </div>
    </div>
    </div>
    <div id="suggestions">
      <p  class="title">Weekly Suggestions</p>
      <div  class="cardFather">
        <div  class="cardWithPad">
          <div class="card">
              <img src="images/destination-1.jpg" alt="dest">
              <div class="card_container">
                <p  class="cardLocation">Paris, Franta</p>
                <p  class="cardPrice">From:  200 Lei</p>
              </div>
              <div class="card_btn">
                <button>More</button>
              </div>
            </div>
        </div>

        <div  class="cardWithPad">
          <div class="card">
              <img src="images/destination-1.jpg" alt="dest">
              <div class="card_container">
                <p  class="cardLocation">Paris, Franta</p>
                <p  class="cardPrice">From:  200 Lei</p>
              </div>
              <div class="card_btn">
                <button>More</button>
              </div>
            </div>
        </div>

        <div  class="cardWithPad">
          <div class="card">
              <img src="images/destination-1.jpg" alt="dest">
              <div class="card_container">
                <p  class="cardLocation">Paris, Franta</p>
                <p  class="cardPrice">From:  200 Lei</p>
              </div>
              <div class="card_btn">
                <button>More</button>
              </div>
            </div>
        </div>

        <div  class="cardWithPad">
          <div class="card">
              <img src="images/destination-1.jpg" alt="dest">
              <div class="card_container">
                <p  class="cardLocation">Paris, Franta</p>
                <p  class="cardPrice">From:  200 Lei</p>
              </div>
              <div class="card_btn">
                <button>More</button>
              </div>
            </div>
        </div>

        <div  class="cardWithPad">
          <div class="card">
              <img src="images/destination-1.jpg" alt="dest">
              <div class="card_container">
                <p  class="cardLocation">Paris, Franta</p>
                <p  class="cardPrice">From:  200 Lei</p>
              </div>
              <div class="card_btn">
                <button>More</button>
              </div>
            </div>
        </div>

        <div  class="cardWithPad">
          <div class="card">
              <img src="images/destination-1.jpg" alt="dest">
              <div class="card_container">
                <p  class="cardLocation">Paris, Franta</p>
                <p  class="cardPrice">From:  200 Lei</p>
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
