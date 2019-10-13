<?php
	ob_start();
	session_start();


    $con=mysqli_connect('localhost','root','',"websitedbmsfinal");
	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>