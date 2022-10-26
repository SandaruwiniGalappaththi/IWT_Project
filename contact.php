<?php

include "config.php";

	if(isset($_GET['email'])){
		$email = $_GET['email'];

		$query = mysqli_query($con,"SELECT * FROM contactinfo WHERE email='$email'");
		$row = mysqli_fetch_array($query);

		$id = $row['contactid'];
		$contactemail = $row['email'];
		$about = $row['about'];
		$Message = $row['message'];

	}


	if(isset($_POST['update'])){

		$contactID = $_POST['id'];
		$Email = $_POST["email"];
		$About = $_POST["about"];
		$Message = $_POST["message"];
		
		
		$sql = "UPDATE contactinfo SET contactid='$contactID',email='$Email',about='$About',message='$Message'";
			
			if(mysqli_query($con,$sql)) {
				header("Location: ContactUs.php?cemail=$Email");
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
	
		
	}


    if(isset($_POST['delete'])){

        $contactID = $_POST['id'];
        $sql = "DELETE FROM contactinfo WHERE contactid='$contactID'";
            
        if(mysqli_query($con,$sql)) {
            header("Location: ContactUs.php");
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    
    }
	
   	
?>



	




<!doctype html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="./css/contact_CSS.css">
	<link rel="stylesheet" href="./css/supun_CSS.css">
    <link rel="stylesheet" href="./css/about_CSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	<!-- Content of the page-->
	
	<img src="./images/leopard1.jpg" style="width:100%; height:600px;">
	
	<center><div id="topicOfDestinations">...... View Details ......</div>	
	
	
	<div id="divSet">
		<form method="POST" action="contact.php">
			<h3>Edit Form</h3>
			<input type="hidden" class="input" name="id" value="<?php echo $id; ?>" >
			<input type="email" placeholder="email:" class="form" id="email" name="email"  value="<?php echo $contactemail; ?>">
			<input type="text" placeholder="About what:" class="form" name="about" value="<?php echo $about; ?>">
			<input type="text" placeholder="Message:" class="form" name="message" value="<?php echo $Message; ?>">

            <button type="submit" id="subBtn" name="update">UPDATE</button>
            <button type="submit" id="subBtn" name="delete">DELETE</button>

        </form>  
	</div>
    <div>
		<div id="divSet2">
			<div class="details">                
                <p><span><i class="fa fa-envelope"></i></span>email: Hello@gamil.com</p>
                <p><span><i class="fa fa-phone-alt"></i></span>Hotline: +94 123 456 789/ +94 234 567 891</p>
                <p><span><i class="fa fa-map-marker-alt"></i></span>Head Office: Malabe, Sri Lanka<p>
                <p>........................................<p>
            </div>
		</div>
		<div id="divSet2">
			<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8932452096305!2d79.95290691472044!3d6.903368295011805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2572da44e8d2d%3A0x7f822e963ecf933a!2sMain%20Bus%20Stand%20-%20Malabe!5e0!3m2!1sen!2slk!4v1601182025762!5m2!1sen!2slk" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
		</div>	
	</div>
	
	<hr style="height:2px;border-width:0;color:gray;background-color:gray; width:75%;"></center>
	
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
                        <li><span><i class="fa fa-envelope"></i></span> Hello@gamil.com</li>
                        <li><span><i class="fa fa-phone-alt"></i></span> +123 456 789</li>
                        <li><span><i class="fa fa-map-marker-alt"></i></span> Malabe, Sri Lanka</li>
                    </ul>
                </div>
            </div>
            <!-- End of Singel footer info -->

            <!-- Singel footer info -->
            <div class="footer-info">
                <div class="title">Let’s Get Social</div>
                <div class="info-content">
                    <p class="social-icon">
                        <i class="fa fa-facebook-f"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-pinterest-p"></i>
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