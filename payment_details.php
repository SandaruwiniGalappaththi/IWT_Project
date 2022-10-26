<?php
include "config.php";


if(isset($_POST['submitbtn'])) {
	$card_type = $_POST['cardType'];
	$card_number = $_POST['card_number'];
	$card_holder = $_POST['card_holder'];
	$expiration_date = $_POST['expiry_date'];
	$cvcpin = $_POST['cvcpin'];
	$total = $_POST['total'];
	
	$sql = "INSERT INTO payment VALUES('','$card_type' ,'$card_number', '$card_holder', '$expiration_date', '$cvcpin','$total')";
	if(mysqli_query($con,$sql)) {
		header("Location: paymentPreView.php?cardnumber=$card_number");
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment Details Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="./css/payment_detailsStyle.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
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
<div class="bg-img">
	<div class="rit1">
		<P><font size="200px">  YOU </font> are in good company!</p><br>
	</div>	
	<div class="rit">We appreciate your devoted commitment to our cause.Your generosity will allow us to improve our efforts in helping thode that we serve!!!!<br>Our destination is just never a place a new way of seeing things....</p></div>
	<div  id="animate"><p class="offer">seasonal offers<br><button type="button" id="btn1"class="btn2"onclick="displayOffer()">click here</button></p></div>
	<div  id="animate1"><p class="offer">special offers<br><button type="button" id="btn2"class="btn2" onclick="displayOffer1()">click here</button></p></div>
	<div  id="animate2"><p class="offer">special offers<br><button type="button" id="btn3"class="btn2" onclick="displayOffer2()">click here</button></p></div>

	<div class="payment-form">
			<div class="form-data">
				<h1>Payment Details</h1>
				<form action="payment_details.php" method="POST">
					<center>
						<div class="pmethod">
							<input type="radio" id="visa" name="cardType"  value="visa" checked>
							<label class="img-card visa" for="visa"><img src="./images/Visa.png"></label>
							<input type="radio" id="mastercard" name="cardType" value="master">
							<label class="img-card mastercard" for="mastercard"><img src="./images/master.jpg"></label>
							<input type="radio" id="americanexpress" name="cardType" value="americanexpress">
							<label class="img-card americanexpress" for="americanexpress"><img src="./images/americanexpress.jpg"></label>
						</div>
					</center>
					<div class="form-text">
						<div class="field space form-icon">
							<label class="label">Card number:</label>
							<input type="text" class="input" name="card_number" placeholder="0000 0000 0000 0000" required>
							<i class="far fa-credit-card"></i>
						</div>
						<div class="field space form-icon">
							<label class="label">Card holder:</label>
							<input type="text" class="input" name="card_holder" placeholder="Lihini Lekani" required>
							<i class="fas fa-user"></i>
						</div>
						<div class="field-grp space">
							<div class="field-item form-icon">
								<label class="label">Expiry date:</label>
								<input type="text" class="input" name="expiry_date" placeholder="MM/YY" required>
								<i class="far fa-calendar-alt"></i>
							</div>
							<div class="field-item form-icon">
								<div class="cvv">
									<label class="label">CVV/CVC:</label>
									<div class="tip">?
										<div class="img-cvv">
											<img src="./images/cvv.png">
										</div>
									</div>
								</div>
								<input type="text" class="input" name="cvcpin" placeholder="000" required>
								<i class="fas fa-lock"></i>
							</div>
						</div>
						<div class="total">
						<input type="hidden" class="input" name="total" value="5000" required>
								<h3>Total Payment : $XXXXXX.XX</h3>
						</div>
						<input type="checkbox" id="check" name="checkterms" required onclick="enableButton()">
						<label for="terms">By making payment I hereby agree to the SL Safari Booking
						Terms & Conditions including cancellation policy.</label><br><br>
						<div class="button-type">
							<input type="submit" id="submitbtn" name="submitbtn" value="Next" disabled>
						</div>
					</div>
				</form>
			</div>
	</div>
	<p id="para1"></p>
	<p id="para2"></p>
	<p id="para3"></p>
</div>
<div class="footer">
    <div class="footer-item">
        <!-- Singel footer info -->
        <div class="footer-info">
            <div class="title">SL Safari</div>
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
    <p>&copy; 2020 SL Safari. All rights reserved</p>
</footer>
<script type="text/javascript" src="./js/payment_detailsJava.js"></script>
</body>
</html>