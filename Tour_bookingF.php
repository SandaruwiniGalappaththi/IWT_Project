<?php
include "config.php";

if(isset($_POST['submit'])){
  $first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['mobile'];
	$location = $_POST['location'];
  $sixYear = $_POST['6'];
  $twelveYears = $_POST['12'];
  $eighteenYears = $_POST['18'];
  $price = $_POST['price'];
	$day = $_POST['day'];
	$aday = $_POST['aday'];
	
	
 
  

   $sql = "INSERT INTO booked_trips VALUES('','$first_name','$last_name','$email','$number','$location','$sixYear','$twelveYears','$eighteenYears','$price','$day','$aday')";
    if(mysqli_query($con,$sql)) {
        header("Location: bookingPreView.php?bemail=$email");
    } 

	
}
	
	
?>


<!DOCTYPE html>
<html>
<head>
<title>Tour Booking Form Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href = "./css/style.css" rel ="stylesheet" type = "text/css">
<link href = "./css/Tour_bookingF.css" rel ="stylesheet" type = "text/css">

</head>
<body >


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


<!-- HeroSlider section -->
<section class="heroSlider">
  <!-- image slider -->
<div class="imageslide">
  <!--end of image slider -->
    
    <div class="mySlides fade" style="display:block;">
   
      <img src="./images/slide1.jpg" style="width:100%">
      
    </div>
  
    <div class="mySlides fade">
      
      <img src="./images/slide2.jpg" style="width:100%">
      
    </div>
  
    <div class="mySlides fade">
      
      <img src="./images/slide3.jpg" style="width:100%">
      
    </div>
    <div class="mySlides fade">
      
      <img src="./images/slide4.jpg" style="width:100%">
      
    </div>
    <div class="mySlides fade">
      
      <img src="./images/slide5.jpg" style="width:100%">
      
    </div>
  <div class="mySlides fade">
      
      <img src="./images/slide6.jpg" style="width:100%">
      
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>  
  
  <div class="sliderBtn">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
  </div>
  
  <!-- End image slider -->
</section>
<!-- End of HeroSlier -->

<!-- main heading -->
<center>
  <h1 class="topic">tour booking form</h1>
</center>
<!-- end of main heading -->

<!-- details section -->
<div class="details">
  <div class="left-content">
      <h2>what we are provide you</h2>

      <ul>
        <li><b>Arrange Hoels</b></li><br>
        <li><b>Arrange Car Rentals</b></li><br>
        <li><b>Arrange Travel Insurance</b></li><br>
        <li><b>Arrange Package Tours</b></li><br>
        <li><b>Arrange Air Tickets</b></li><br>
      </ul>
  </div>
  <div class="right-content">
    <h2>personal Details</h2>

    <form method="POST" action="Tour_bookingF.php" id="personalDetails">
	
      <div class="form-group">
        <p>
          <label for="">First Name</label>
          <input type="text"  id="" placeholder="First name" name ="fname">
        </p>
        <p>
          <label for="">Last Name</label>
          <input type="text" id="" placeholder="Last name"  name="lname">
        </p>

      </div>

      <div class="form-group">
        <p>
          <label for="">Email</label>
          <input type="email" id="" placeholder="email" name ="email">
        </p>
        <p>
          <label for="">Phone</label>
          <input type="text"  id="" placeholder="Mobile Number" name="mobile">
        </p>

      </div>

      <h2>Tour Details</h2>

      <p>
        <label for="">Location</label>
        <select class="select-place" name="location">
            <option value="udawalawa">Udawalawe National Park</option>
            <option value="Minneriya">Minneriya National Park</option>
            <option value="Wilpattu">Wilpattu National Park</option>
            <option value="Wasgamuwa">Wasgamuwa National Park</option>
            <option value="Kumana">Kumana National Park</option>
            <option value="Bundala">Bundala National Park</option>
        </select>
      </p>
      
      <p>
        <label for="">Number of Gursts</label>
        <ul class ="years" name="year[]">
          <span>6 to 12 years <input name="6" id="6years" type="number" max="100" value ="1"></span>
          <span>12 to 18 years <input name="12" id="12years" type="number" max="100" value ="1"></span>
          <span>Above 18<input name="18" id="18years" type="number" max="100" value ="1">
        </ul>
      </p>


      <div class="form-group">
        <p>
          <label for="">Booking Date</label>
          <input type ="date" id="bookdate" name="day" required>
        </p>
        <p>
          <label for="">Arrive Date </label>
          <input type ="date" id="arrivedate" name="aday" required>
        </p>
      </div>

      
        <div class="total">
          <h3>Total Paymet : </h3>
          <input type="hidden" id="totalpriceinput" name="price"> 
          <h3 class="price">Rs. <span id="totalPrice">0</span>.00</h3>
        </div>
      

      <p class="btn">
        <button class="formBtn" id="calculator">calculate Total</button>
      </p>

      <input type ="checkbox" class ="inputstyle" id="checkBox" oneclick ="enableButton()">Accept privacy policy and terms.
      <p class="btn">
        <button class="formBtn" type="submit" name="submit">Submit Button</button>
      </p>
    </form>
  </div>
</div>

    <!-- Globel Footer -->
    <div class="footer">
        <div class="footer-item">
            <!-- Singel footer info -->
            <div class="footer-info">
                <div class="title">Company name</div>
                <div class="info-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, alias!</p>
                </div> 
            </div>
            <!-- End of Singel footer info -->

            <!-- Singel footer info -->
            <div class="footer-info">
                <div class="title">Contact Info</div>
                <div class="info-content">
                    <ul>
                        <li><span><i class="fas fa-envelope"></i></span> Hello@gamil.com</li>
                        <li><span><i class="fas fa-phone-alt"></i></span> +123 456 789</li>
                        <li><span><i class="fas fa-map-marker-alt"></i></span> Malabe, Sri Lanka</li>
                    </ul>
                </div>
            </div>
            <!-- End of Singel footer info -->

            <!-- Singel footer info -->
            <div class="footer-info">
                <div class="title">Let’s Get Social</div>
                <div class="info-content">
                    <p class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-pinterest-p"></i>
                    </p>
                </div>
            </div>
            <!-- End of Singel footer info -->
        </div>
    </div>
    <footer>
        <p>&copy; 2020 Company Name. All rights reserved</p>
    </footer>
    <!-- End of Globel Footer -->
  <script type="text/javascript" src="./js/Tour_bookingF.js"></script>
</body>
</html>