<?php
include "config.php";
session_start();

if(isset($_GET['email'])){
   $email = $_GET['email'];

   $query = mysqli_query($con,"SELECT * FROM agentbooking WHERE email='$email'");
   $row = mysqli_fetch_array($query);
   
    $agentId = $row['id'];
    $agent = $row['agent'];
    $fristname = $row['fname'];
    $lastname = $row['lname'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $adults = $row['adults'];
    $children = $row['children'];
    $interests = $row['interests']; 
    $hotel = $row['hotel_type'];
    $budget = $row['budget'];
    $like_go = $row['like_go'];
    $req = $row['req'];


}else{
    //header("Location: dashboard.php");
}

if(isset($_POST['update'])){

    $formId = $_POST['id'];
    $agent = $_POST['agent'];
	$fristname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$mobile = $_POST['telephone'];
	$email = $_POST['email'];
	$adults = $_POST['adults'];
	$children = $_POST['children'];
	$hotel = $_POST['accommodation'];
	$budget = $_POST['amount'];
	$like_go = $_POST['time'];
    $req = $_POST['requirement'];
    
   

    $query = mysqli_query($con,"UPDATE agentbooking SET agent='$agent',fname='$fristname',lname='$lastname',mobile='$mobile',
    email='$email',adults='$adults',children='$children',hotel_type='$hotel',budget='$budget',like_go='$like_go',req='$req' WHERE id='$formId'");

    if($query){
        header("Location: Tour_bookingF.php");
    }
}

if(isset($_POST['delete'])){
    $formId = $_POST['id'];
    $query = mysqli_query($con, "DELETE FROM agentbooking WHERE id='$formId'");
    if($query){
        
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
    <link rel="stylesheet" href="./css/agentformpre.css">
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
  
  <div class="section">
  <div class="container">
    <form id="form" action="agentformview.php" method="POST" class="form">
        <h2>Agent Booking Form Preview</h2>
        <div class="form-control">
            <input type="hidden" class="input" name="id" value="<?php echo $agentId; ?>" >
          <label for="username">Agent</label>
          <input type="text" name="agent" id="" placeholder="Enter username" value="<?php echo $agent ?>">
        </div>

        <div class="form-control">
          <label for="email">First Name</label>
          <input type="text" name="firstname" id="" placeholder="First Name"  value="<?php echo $fristname ?>">
        </div>
        <div class="form-control">
          <label for="email">Last Name</label>
          <input type="text" name="lastname" id="lastname" placeholder="Last Name"  value="<?php echo $lastname ?>">
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="email" name="email" id="" placeholder="Enter Email"  value="<?php echo $email ?>">
        </div>
        <div class="form-control">
          <label for="email">Mobile</label>
          <input type="text" name="telephone" id="" placeholder="Enter Mobile"  value="<?php echo $mobile ?>" >
        </div>
        <div class="form-control">
          <label for="email">adults</label>
          <input type="number" name="adults" id="" placeholder="Enter adults"  value="<?php echo $adults ?>"> 
        </div>
        <div class="form-control">
          <label for="email">Childern</label>
          <input type="number" name="children" id="" placeholder="Enter Childern"  value="<?php echo $children ?>">
        </div>
        <div class="form-control">
          <label for="email">accommadation</label>
          <input type="text" name="accommodation" id="" placeholder="Enter accommadation"  value="<?php echo $hotel ?>">
        </div>
        <div class="form-control">
          <label for="email">budget</label>
          <input type="text" name="amount" id="" placeholder="Enter budget"  value="<?php echo $budget ?>">
        </div>
        <div class="form-control">
          <label for="email">would you like</label>
          <input type="text" name="time" id="" placeholder="would you like"  value="<?php echo $like_go ?>">
        </div>
        <div class="form-control">
          <label for="email">Requirement</label>
          <input type="text" name="requirement" id="" placeholder="Enter Requirement"  value="<?php echo $req ?>">
        </div>

        <button type="submit" name="update" class="update">Update</button>
        <button type="submit" name="delete" class="delete" >Delete</button>
    </form>
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
  <script src="./script.js"></script>
</body>
</html>