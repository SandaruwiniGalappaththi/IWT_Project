<?php
include "config.php";



if(isset($_GET['cardnumber'])){
    $cardnumber = $_GET['cardnumber'];

    $query = mysqli_query($con,"SELECT * FROM payment WHERE card_number='$cardnumber'");
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $card_type = $row['card_type'];
	$card_number = $row['card_number'];
	$card_holder = $row['card_holder'];
	$expiration_date = $row['expiration_date'];
	$cvcpin = $row['cvcpin'];
    $total = $row['total_payment'];
    
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';

}

if(isset($_POST['update'])){

    $cardId = $_POST['id'];
    $card_type = $_POST['cardtype'];
	$card_number = $_POST['card_number'];
	$card_holder = $_POST['card_holder'];
	$expiration_date = $_POST['expiry_date'];
	$cvcpin = $_POST['cvcpin'];
	$total = $_POST['Bill'];
	
	
    $sql = "UPDATE payment SET card_type='$card_type',card_number='$card_number',card_holder='$card_holder',expiration_date='$expiration_date', cvcpin='$cvcpin',total_payment='$total' WHERE id='$cardId' ";
        
        if(mysqli_query($con,$sql)) {
            echo 'Data Update sucessfully';
            header("Location: dashboard.php");
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

	
}

if(isset($_POST['delete'])){

    $cardId = $_POST['id'];
    $sql = "DELETE FROM payment WHERE id='$cardId'";
        
    if(mysqli_query($con,$sql)) {
        echo 'Data deleted sucessfully';
    } 
    else {
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
<div class="pbg-img">
	<div class="payment-formp">
			<div class="pform-data">
				<h1>PreView Payment</h1>
				<form action="paymentPreView.php" method="POST">
					<div class="form-text">
                        <input type="hidden" class="input" name="id" value="<?php echo $id; ?>" >
                        <div class="field space form-icon">
							<label class="label">Card Type:</label>
							<input type="text" class="input" name="cardtype" placeholder="Visa" value="<?php echo $card_type ?>" required>
							<i class="far fa-credit-card"></i>
						</div>
						<div class="field space form-icon">
							<label class="label">Card number:</label>
							<input type="text" class="input" name="card_number" placeholder="0000 0000 0000 0000"  value="<?php echo $card_number ?>" required>
							<i class="far fa-credit-card"></i>
						</div>
						<div class="field space form-icon">
							<label class="label">Card holder:</label>
							<input type="text" class="input" name="card_holder" placeholder="Lihini Lekani"  value="<?php echo $card_holder ?>" required>
							<i class="fas fa-user"></i>
						</div>
						<div class="field-grp space">
							<div class="field-item form-icon">
								<label class="label">Expiry date:</label>
								<input type="text" class="input" name="expiry_date" placeholder="MM/YY"  value="<?php echo $expiration_date ?>" required>
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
								<input type="text" class="input" name="cvcpin" placeholder="000" required value="<?php echo $cvcpin ?>">
								<i class="fas fa-lock"></i>
							</div>
						</div>
						<div class="total">
						<input type="text" class="input" name="Bill" value="<?php echo $total ?>"  >
			
						</div>
						
                    </div>
                    <div class="Crudbutton">
                        <input type="submit" id="crudBtn" class="pay" name="pay" value="Pay" >
                        <input type="submit" id="crudBtn" class="update" name="update" value="update" >
                        <input type="submit" id="crudBtn" class="delete" name="delete" value="delete" >
					</div>
				</form>
			</div>
	</div>

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