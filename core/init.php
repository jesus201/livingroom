<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/emilia_kitchen/config.php';

ob_start();

session_start();

 $con=mysqli_connect("localhost","root","","emilia_kitchen");

 if(mysqli_connect_errno()){
 	echo "error connecting ". mysqli_connect_errno();
 	die();


 }

 if(isset($_SESSION['loggedin'])){
	$userloggedin=$_SESSION['loggedin'];

    $sql=mysqli_query($con,"SELECT * FROM customer WHERE customer_id='$userloggedin'");
    $row=mysqli_fetch_assoc($sql);

    $customerfname=$row['fname'];
    $customerlname=$row['lname'];
    $customeremail=$row['email'];
    $customerbirthdate=$row['birthdate'];
}

?>