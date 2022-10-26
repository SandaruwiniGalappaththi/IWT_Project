<?php
include "config.php";
$message = false;

if(isset($_POST['loginBtn'])){

    $email = $_POST['email'];
    $pass =  $_POST['password'];
    $password = md5($pass);

    $select_user = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $query = mysqli_query($con, $select_user);

    $check_user = mysqli_num_rows($query);

    if($check_user == 1){
        header("location: dashboard.php?msg='LogginSuccess'");
    }
    else{
        $message = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="./css/loginStyle.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/agent detailsStyle.css">
</head>
<body>
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
<div style="background-image:url('./images/leopard.jpg');">
	<div class="login-form">
		<div class="form-row">
			<h1>Login your account</h1>
			<form action="login.php" method="POST">
			<p>
				<input type="email" name="email" placeholder="E-mail" required>
			</p>
			<p>
				<input type="password" name="password" placeholder="Password" required>
			</p>      
			<center>
				<button type="submit" class="login-btn" name="loginBtn">Login</button>
            </center>
            <?php 

            if($message){  
                echo "
                <div class='alert-danger'>
                    <strong> Check your email and Password</strong>
                </div>
            ";
            }
            ?>
            </form>
            
			<div class="bottom-text">
				<input type="checkbox" name="remember" checked> Remember me
				<a href="#">Forgot Password?</a> 
			</div>
			<div class="seperator"><b>or</b></div>
			<div class="socials">
				<a href="htpps://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
				<a href="htpps://www.twitter.com"><i class="fab fa-twitter"></i></a>
				<a href="htpps://www.google-plus.com"><i class="fab fa-google-plus"></i></a>
			</div>
            </form>
            <p>not Register? <a href="register.php">Crate Account</a></p>
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
<script type="text/javascript" src="./js/agent detailsJava.js"></script>
</body>
</html>