<?php
include "config.php";
session_start();




if(isset($_GET['userId'])){
   $userId = $_GET['userId'];

   $query = mysqli_query($con,"SELECT * FROM users WHERE id='$userId'");
   $row = mysqli_fetch_array($query);
   
   $userFname = $row['fname'];
   $userLname = $row['lname'];
   $userEmail = $row['email'];
   $userMobile = $row['mobile'];
   $userAdress = $row['address'];
   $userCity = $row['city'];
   $userZip = $row['zip'];
   $useremail = $row['city'];

}else{
    //header("Location: dashboard.php");
}

if(isset($_POST['update'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];

    $query = mysqli_query($con,"UPDATE users SET fname='$firstName',lname='$lastName',email='$email',mobile='$mobile',address='$address',city='$city',zip='$zip' WHERE id='$userId'");

    if($query){
        header("Location: dashboard.php");
        $_SESSION['email']= $email;
    }
}

if(isset($_POST['delete'])){
    $query = mysqli_query($con, "DELETE FROM users WHERE id='$userId'");
    if($query){
        header("Location: register.php");
        echo "<script>alert('Account deleted')</script>";
    }else{
        echo "<script>alert('Error deleted')</script>";
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <!-- globel css-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Vacancies css-->
    <link rel="stylesheet" href="./css/register.css">
     <!-- FOnt Awosom -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
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
            <h1><i class="fas fa-cog"></i> Settings</h1>
            <p>Edit your details</p>
            <br>
            <form action="settings.php?userId=<?php echo $userId;?>" method="POST">
                <p>
                    <input type="text" placeholder="First Name" name="fname" required value="<?php echo $userFname; ?>">
                </p>
                <p>
                    <input type="text" placeholder="Last Name" name="lname" required value="<?php echo $userLname; ?>">
                </p>
                <p>
                    <input type="email" placeholder="email" name="email" required value="<?php echo $userEmail; ?>">
                </p>
                <p>
                    <input type="text" placeholder="Mobile number" name="mobile" required value="<?php echo $userMobile; ?>">
                </p>
                <p>
                    <input type="text" placeholder="Adress" name="address" required value="<?php echo $userAdress; ?>">
                </p>
                <p>
                    <input type="text" placeholder="City" name="city" required value="<?php echo $userCity; ?>">
                </p>
                <p>
                    <input type="text" placeholder="Zip" name="zip" required value="<?php echo $userZip; ?>">
                </p>
                <p> 
                    <input type="submit" name="update" value="Update">
                </p>
                <p> 
                    <input  class="delete-btn" type="submit" name="delete" value="Delete My Account">
                </p>
            </form>
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