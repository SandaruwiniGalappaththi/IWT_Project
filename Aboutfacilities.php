<!DOCTYPE html>
<html>
<head>
<title>About facilities Page</title>
<link href = "./css/style.css" rel ="stylesheet" type = "text/css">
<link href = "./css/Aboutfacilities.css" rel ="stylesheet" type = "text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Navigation Bar -->
<header>
    <div class="navbar">
        <div class="brand-title">
			<img src="./images/Logo.png" alt="">
		</div>
        <p href="#" class="toggle-button">
            <i id="navbar-icon" class="fas fa-bars"></i>
        </p>
        <div class="navbar-links">
            <ul>
                <li><a href="supun_HTML.html">Home</a></li>
                <li><a href="Aboutfacilities.php">Service</a></li>
                <li><a href="aboutUs.html">About Us</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
                <li><a href="gallery.html">Gallary</a></li>
                <li><a href="vacancies.php">Vacancis</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </div>
    </div>
</header>
    <!-- End of Navigation Bar -->

<div class="headimg">
    <div class="text">About Facilities</div>
</div>

<!-- Test -->
<!-- MAIN (Center website) -->
<div class="main">
  <br><br>
  <h1>WE ARE PROVIDING MORE FACILITIES <br><center> TO OUR CUSTOMORS.</center></h1>
  
  <br><br>

  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('hotel')"> Hotels</button>
    <button class="btn" onclick="filterSelection('vehical')"> vehical Rentals</button>
    <button class="btn" onclick="filterSelection('travel')"> Travel Insurance</button>
    <button class="btn" onclick="filterSelection('package')"> Package Tours</button>
    <button class="btn" onclick="filterSelection('tickets')"> Air Tickets</button>
  </div>
  
  <!-- Portfolio Gallery Grid -->
  <div class="row">

    <!-- Hotels-->
    <div class="column hotel">
      <div class="content">
        <img src="./images/hotel1.jpg" alt="" style="width:100%">
        <h4>Yala Wilde Life Hotel</h4>
        <p>210/2B,Yala,Hambanthota.<br>
		0112-794246</p>
      </div>
    </div>
    <div class="column hotel">
      <div class="content">
      <img src="./images/hotel2.jpg" alt="" style="width:100%">
        <h4>Wawa Rauma Hotel</h4>
        <p>325/3A,Kumana.<br>
		0112-792669</p>
      </div>
    </div>
    <div class="column hotel">
      <div class="content">
      <img src="./images/hotel3.jpg" alt="" style="width:100%">
        <h4>Sith Sewana Hotel.</h4>
        <p>890/4F,Udawalawa Rd,Udawalawa.<br>
		0112-653435</p>
      </div>
    </div>
    <!-- End of Hotels-->
    

    <!-- vehical -->
    <div class="column vehical">
      <div class="content">
       <img src="./images/vehical1.jpg" alt="" style="width:100%">
        <h4>Car Rental Colombo</h4>
        <p>2333/45,4th Lane,Colombo.<br>
		070-2434567</p>
      </div>
    </div>
    <div class="column vehical">
      <div class="content">
      <img src="./images/vehical2.jpg" alt="" style="width:100%">
        <h4>Yasiru Vehical Rental Company</h4>
        <p>34/35,Udawalawa Rd,Udawalawa.<br>
		0115-453427</p>
      </div>
    </div>
    <div class="column vehical">
      <div class="content">
      <img src="./images/vehical3.jpg" alt="" style="width:100%">
        <h4>Safari Vehical Rental Company</h4>
        <p>67/3A,Waliweriya Rd,Kumana.<br>
		077-3245678</p>
      </div>
    </div>
    <!-- End of vehical -->
  

    <!-- Travel -->
    <div class="column travel">
      <div class="content">
        <img src="./images/travel1.jpg" alt="" style="width:100%">
        <h4>Udawalawa National Park.</h4>
        <p>Udawalawa National Park,Udawalawa.<br>
		0112-345678</p>
      </div>
    </div>
    <div class="column travel">
      <div class="content">
      <img src="./images/travel2.jpg" alt="" style="width:100%">
        <h4>Kumana National Bird Park.</h4>
        <p>Kumana National Bird Park,Kumana.<br>
		0112-5634789</p>
      </div>
    </div>
    <div class="column travel">
      <div class="content">
       <img src="./images/travel3.jpg" alt="" style="width:100%">
        <h4>Yala National Park.</h4>
        <p>Yala National Park,$th Lane,Yala.<br>
		0112-565789</p>
      </div>
    </div>
    <!-- End of Travel-->

    <!-- Package -->
    <div class="column package">
      <div class="content">
        <img src="./images/package1.jpg"  alt="" style="width:100%">
        <h4>Yala Safari Sri Lanaka.</h4>
        <p>0112-324567</p>
      </div>
    </div>
    <div class="column package">
      <div class="content">
      <img src="./images/package2.jpg" alt="" style="width:100%">
        <h4>Sri Lanken Travel Deal</h4>
        <p>076-4532134</p>
      </div>
    </div>
    <div class="column package">
      <div class="content">
      <img src="./images/package3.jpg" alt="" style="width:100%">
        <h4>Jungul Safari With Camping</h4>
        <p>0112-905678</p>
      </div>
    </div>
    <!-- End of Package -->

    <!-- tickets -->
    <div class="column tickets">
      <div class="content">
       <img src="./images/airtickets1.jpg" alt="" style="width:100%">
        <h4>Emirates Flights.</h4>
        <p>Maradana,Colombo 9<br>
		076-453659</p>
      </div>
    </div>
    <div class="column tickets">
      <div class="content">
      <img src="./images/airtickets2.jpg" alt="" style="width:100%">
        <h4>France Flights.</h4>
        <p>Katunayaka Rd,Colombo 5<br>
		0112-348909</p>
      </div>
    </div>
    <div class="column tickets">
      <div class="content">
      <img src="./images/airtickets3.jpg" alt="" style="width:100%">
        <h4>Wide Air Flights.</h4>
        <p>213/3A,Nelum Place,Comlombo 5</p>
      </div>
    </div>
    <!-- End of tickets -->
  <!-- END GRID -->
  </div>
  
  <!-- END MAIN -->
  </div>
<!-- End of Test -->




 <script src="./js/Aboutfacilities.js"></script>
  
</body>
</html>

