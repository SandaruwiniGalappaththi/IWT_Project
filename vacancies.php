<?php 
include "config.php";

$message = false;
if(isset($_POST['applyBtn'])){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];


    $query = mysqli_query($con,"INSERT INTO vacancies VALUES('','$firstName','$lastName', '$email','$mobile','$address')");

    if($query){
        $message = true;
    }


    
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancies</title>

    <!-- globel css-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Vacancies css-->
    <link rel="stylesheet" href="./css/vacancies.css">

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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Vacancies</h1>
            <div class="under-line">
                <div class="underline-line"></div>
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Job list -->
    <section class="job-list">
        <h1>Our Popular Jobs</h1>
        <br>
        <div class="row">
            <div class="card">
                <img src="./images/bg1.jpg" class="card-img" alt="">
                <div class="card-title">Job Title</div>
                <div class="card-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, quisquam?..</p>
                </div>
                <button>Apply Now</button>
            </div>
   
            <div class="card">
                <img src="./images/bg2.jpg" class="card-img" alt="">
                <div class="card-title">Job Title</div>
                <div class="card-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, quisquam?..</p>
                </div>
                <button>Apply Now</button>
            </div>
   
            <div class="card">
                <img src="./images/bg3.jpg" class="card-img" alt="">
                <div class="card-title">Job Title</div>
                <div class="card-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, quisquam?..</p>
                </div>
                <button>Apply Now</button>
            </div>
   
            <div class="card">
                <img src="./images/bg4.jpg" class="card-img" alt="">
                <div class="card-title">Job Title</div>
                <div class="card-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, quisquam?..</p>
                </div>
                <button>Apply Now</button>
            </div>
        </div>
    </section>
    <!--End of Job list -->


    <!-- Apply Now section -->
    <div class="section apply">
        <h1>Apply Now</h1>
        <div class="form-row">
            <form action="vacancies.php" method="POST">
                <p>
                    <label for="">First Name : </label>
                    <input type="text" placeholder="First Name" name="firstname">
                </p>
                <p>
                    <label for="">Last Name : </label>
                    <input type="text" placeholder="Last Name" name="lastname">
                </p>
                <p>
                    <label for="">Email : </label>
                    <input type="email" placeholder="email" name="email">
                </p>
                <p>
                    <label for="">Contact Number : </label>
                    <input type="text" placeholder="Mobile number" name="mobile">
                </p>
                <!--
                <p>
                    <label for="">Position : </label>
                    <select class="custom-select" name="Position" >
                        <option value="">lorem</option>
                        <option value="">lorem</option>
                        <option value="">lorem</option>
                        <option value="">lorem</option>
                      </select>
                </p>-->
                <p>
                    <label for="">Adress : </label>
                    <input type="text" placeholder="Adress" name="address">
                </p>
                <p> 
                    <label for=""></label>
                    <input type="submit" name="applyBtn" value="Apply">
                </p>
            </form>
            <?php
                if($message){
                    $print = "<p class='jobmessage'>Thank You! Your Form Submit</p>";
                    echo $print;
                }

            ?>
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