<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/myfirstwebsite/core/init.php';


if(isset($_POST["feedback_btn_val"])){
   $ffname=$_POST["ffname"];
   $flname=$_POST["flname"];
   $femail=$_POST["femail"];
   $fsubject=$_POST["fsubject"];
   $fmessage=$_POST["fmessage"];
   $feedbackdate=Date("Y-m-d H:i:s");

   mysqli_query($con,"INSERT INTO feedback
   	(ffname,flname,femail,fsubject,fmessage,feedbackdate)
   	VALUES
   	('$ffname','$flname','$femail','$fsubject','$fmessage','$feedbackdate')
   	");

   echo "success";
}

?>