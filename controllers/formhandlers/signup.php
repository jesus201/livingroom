<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/myfirstwebsite/core/init.php';

if(isset($_POST['signup_btn_val'])){
	$fname=strip_tags($_POST['fname']);
	$lname=strip_tags($_POST['lname']);
	$birthdate=strip_tags($_POST['birthdate']);
	$id_number=strip_tags($_POST['id_number']);
	$email=strip_tags($_POST['email']);
	$pword=strip_tags($_POST['pword']);
	$cpword=strip_tags($_POST['cpword']);
	$dateregister=date("Y-m-d H:i:s");
	$username=$fname.''.$lname;

	$sql=mysqli_query($con,"SELECT * FROM customer WHERE email='$email'");
	    if(mysqli_num_rows($sql)==0){
		mysqli_query($con,"INSERT INTO customer
			(fname,lname,birthdate,id_number,email,pword,dateregister,username)
			VALUES
			('$fname','$lname','$birthdate','$id_number','$email','$pword','$dateregister','$username')
			");


	    $sql=mysqli_query($con, "SELECT customer_id FROM customer WHERE email='$email'");
        $row=mysqli_fetch_assoc($sql);

        $_SESSION['loggedin']=$row['customer_id'];
	    //header("location:../../home.php");	 	

		 echo "success";
		 }else{
		 echo "error";
		}

}

?>