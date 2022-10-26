<?php
include "config.php";
session_start();
if(isset($_SESSION['email'])){
    $loginEmail = $_SESSION['email'];

    $query = mysqli_query($con,"SELECT * FROM users WHERE email='$loginEmail'");
    $row = mysqli_fetch_array($query);
    
    $userId = $row['id'];
    $userFname = $row['fname'];
    $userLname = $row['lname'];
    $userEmail = $row['email'];
    $userMobile = $row['mobile'];
    $userAdress = $row['address'];
    $userCity = $row['city'];
    $userZip = $row['zip'];
    $useremail = $row['city'];


}else{
    header("Location: register.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>

    <!-- globel css-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- dashboard css-->
    <link rel="stylesheet" href="./css/dashboard.css">
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

    <!-- Dashboard content -->
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="side-content">
                <h2><?php echo $userFname."'s"; ?> Personal Info</h2>
                <div class="profile-pic">
                    <img src="./images/12.jpg" alt="">
                </div>
                
                <ul class="detail-list">
                    <li class="detail">
                        <span><i class="fas fa-user"></i> Name : <strong><?php echo $userFname ." ". $userLname; ?></strong> </span>
                    </li>
                    <li class="detail">
                        <span><i class="fas fa-envelope"></i>  Email : <strong><?php echo $userEmail; ?></strong> </span>
                    </li>
                    <li class="detail">
                        <span><i class="fas fa-user"></i> Mobile: <strong><?php echo $userMobile; ?></strong></span>
                    </li>
                    <li class="detail">
                        <span><i class="fas fa-map-marker-alt"></i> Address: <strong><?php echo $userAdress; ?></strong> </span>
                    </li>
                    <li class="detail">
                        <span><i class="fas fa-map-marked-alt"></i> City: <strong><?php echo $userCity; ?></strong> </span>
                    </li>
                    <li class="detail">
                        <span><i class="fas fa-map-marked-alt"></i> Zip Code: <strong><?php echo $userZip; ?></strong> </span>
                    </li>
                </ul>

                <div class="sidefotter">
                    <ul class="detail-list">
                        <li class="detail">
                            <span><i class="fab fa-cc-visa"></i><strong>Payment Mathod</strong></span>
                        </li>
                        <li class="detail">
                            <span><i class="fas fa-cog"></i><strong><a href="<?php echo "settings.php?userId=".$userId; ?>">Settings</a></strong></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of sidebar -->

        <!-- Main Bar-->
        <div class="main-bar">
            <div class="content">
                <div class="cart-item">
                    <div class="card">
                        <div class="cart-title">Total Trips <i class="fas fa-chart-bar"></i></div>
                        <div class="card-body">1</div>
                        <div class="card-footer">
                            <p><i class="far fa-clock"></i> update : 2:15 am</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cart-title">Upcoming Trips <i class="fas fa-chart-bar"></i></div>
                        <div class="card-body">1</div>
                        <div class="card-footer">
                            <p><i class="far fa-clock"></i> update : 2:15 am</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cart-title">Cansel Trips <i class="fas fa-chart-bar"></i></div>
                        <div class="card-body">1</div>
                        <div class="card-footer">
                            <p><i class="far fa-clock"></i> update : 2:15 am</p>
                        </div>
                    </div>
                </div>
                
                <div class="trip-history">
                    <h2>Trip History</h2>
                    <div class="underline"></div>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Location</th>
                                    <th>Members</th>
                                    <th>Trip Budget (Rs)</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0001</td>
                                    <td>Malabe</td>
                                    <td>5</td>
                                    <td>30,000.00</td>
                                    <td>2020/07/07</td>
                                </tr>
                                <tr>
                                    <td>0002</td>
                                    <td>Sigiriya</td>
                                    <td>7</td>
                                    <td>25,000.00</td>
                                    <td>2020/05/07</td>
                                </tr>
                                <tr>
                                    <td>0001</td>
                                    <td>Galle</td>
                                    <td>15</td>
                                    <td>44,000.00</td>
                                    <td>2020/08/07</td>
                                </tr>
                                <tr>
                                    <td>0001</td>
                                    <td>Galle</td>
                                    <td>15</td>
                                    <td>44,000.00</td>
                                    <td>2020/08/07</td>
                                </tr>
                                <tr>
                                    <td>0001</td>
                                    <td>Galle</td>
                                    <td>15</td>
                                    <td>44,000.00</td>
                                    <td>2020/08/07</td>
                                </tr>
                                <tr>
                                    <td>0001</td>
                                    <td>Galle</td>
                                    <td>15</td>
                                    <td>44,000.00</td>
                                    <td>2020/08/07</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="support-section">
                    <h2>get support your travel agent</h2>
                    <div class="underline"></div>

                    <div class="chat-card">
                        <div class="send-button">
                            <input type="text" placeholder="Type...." name="message">
                            <button><i class="fas fa-paper-plane"></i> Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of main Bar-->
    </div>

    <div class="clear"></div>
    <!-- End of Dashboard content -->

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


<script src="./js/app.js"></script>
</html>