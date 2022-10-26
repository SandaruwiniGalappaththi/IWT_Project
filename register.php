<?php
include "config.php";
session_start();


if(isset($_POST['submitBtn'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $password = $_POST['password'];
    $password = md5($password); //encrypt password
    $role  = $_POST['role'];

    $query = mysqli_query($con,"INSERT INTO users VALUES('','$firstName','$lastName', '$email','$mobile','$address','$city','$zip','$password','$role')");

    if($query){
        $_SESSION['email']=$email;
        header("Location: dashboard.php");
       
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- globel css-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Vacancies css-->
    <link rel="stylesheet" href="./css/register.css">
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
    

     <!-- Register From -->
     <div class="section register-form">
         <div class="form-row">
            <h1>Register Now</h1>
            <form action="register.php" method="POST">
                <p>
                    <input type="text" placeholder="First Name" name="fname" required>
                </p>
                <p>
                    <input type="text" placeholder="Last Name" name="lname" required>
                </p>
                <p>
                    <input type="email" placeholder="email" name="email" required>
                </p>
                <p>
                    <input type="text" placeholder="Mobile number" name="mobile" required>
                </p>
                <p>
                    <input type="text" placeholder="Adress" name="address" required>
                </p>
                <p>
                    <input type="text" placeholder="City" name="city" required>
                </p>
                <p>
                    <input type="text" placeholder="Zip" name="zip" required>
                </p>
                <p>
                    <input type="password" placeholder="password" name="password" required>
                </p>

                <span>Please select your gender</span>
                <div class="radio">
                    <div>
                        <input type="radio" id="role" name="role" value="traveler">
                        <label for="role">become a traveler</label><br>
                    </div>
                    
                    <div>
                        <input type="radio" id="role" name="role" value="driver">
                    <label for="role">become a safari driver</label><br>

                    </div>
                    
                </div>
                
                <p> 
                    <input type="submit" name="submitBtn" value="Register">
                </p>
            </form>
            <h6>
                <a href="login.html">you have alrady Account ? Sign In</a>
            </h6>
        </div>
    </div>
    <!-- Apply Now section -->
    


    
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
</body>
</html>