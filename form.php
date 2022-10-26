<?php

include "config.php";

if(isset($_POST["btsubmit"])){


	$agent = $_POST['agent'];
	$fristname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$mobile = $_POST['telephone'];
	$email = $_POST['email'];
	$adults = $_POST['adults'];
	$children = $_POST['children'];
	$checkbox = $_POST['checkBy'];
	$interests="";  
        foreach($checkbox as $chk1)  
           {  
              $interests.= $chk1.",";  
           } 
	$hotel = $_POST['accommodation'];
	$budget = $_POST['amount'];
	$like_go = $_POST['time'];
	$req = $_POST['requirement'];


	$sql = "INSERT INTO agentbooking VALUES('','$agent' ,'$fristname','$lastname','$mobile','$email','$adults','$children','$interests','$hotel','$budget','$like_go','$req')";
	if(mysqli_query($con,$sql)) {

		header("Location: agentformview.php?email=$email");
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
}

?>