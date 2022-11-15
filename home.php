<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/emilia_kitchen/core/init.php';


  if(!isset($_SESSION['loggedin'])){
    header("location:index.php");
  }
?>



<!DOCTYPE html>
<html>
<head>
	<title>oderpage</title>
	    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

		<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		 <!--Animation plugin-->
		 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

		<!--custom stylesheet-->
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <style type="text/css">
    .fa {
          
          padding-top: 2px;
          padding-bottom:5px;
          font-size: 30px !important;
          color: #F0910C;
     }

    </style>

	</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Logo</a>
          
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
             <li class="dropdown navbar-btn">
                <button class="btn btn-secondary dropdown-toggle nav-btn" type="button" data-toggle="dropdown">
                <span class="caret"></span>MENU FOR THE WEEK</button>
                <ul class="dropdown-menu">
                  <li><a href="assets/images/achu.jpg">ACHU</a></li>
                  <li><a href="assets/images/khati5.jpg">KHATI KHATI</a></li>
                  <li><a href="assets/images/ekwang2.jpg">EKWANG</a></li>
                  <li><a href="assets/images/mbongo1.jpg">MBOGO CHOBI</a></li>
                  <li><a href="assets/images/kwakoko4.jpg">KWAKOKO</a></li>
                  <li><a href="#">ROATED MEAT</a></li>
                  <li><a href="#">NDOLE</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Our Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="navbar-btn">
               <form action="controllers/formhandlers/signout.php" method="POST">
                   <button type="submit" class="btn btn-secondary">Signout</button>
               </form>
            </li>
            <li class="navbar-btn">
                 <button type="button" class="btn btn-secondary nav-btn" data-toggle="modal" data-target="#myModal">Your Feedback</button>
            </li>
            <li class="nav-item">
               <p style="color:#fff; font-size: 15px; text-transform: capitalize; padding:5px 0px 5px 2px;"><?=$customerlname;?></p>
            </li>   
            <li class="navbar-btn">
                <a href=""><i class="fa fa-shopping-cart" title="Your cart is empty" aria-hidden="true"></i></a>
            </li>
        </ul>
           
    </nav>
    <div>
        <h2 style="text-align: center; text-transform: capitalize;">welcome to our home page, add your order to cart.</h2>
    </div>
    
        <div class="container">
            <div class="col-md-12" id="home">
                <div class="col-md-12">  
                <h1 style='font-family: "Times New Roman", Times, serif; margin-left: 30%;'><u>Menus For Today</u></h1><br>  
                    <div class="row">
                        <div class="col-md-3" style="margin-bottom: 10px;"  id="menu">
                            <div  class="card-deck">
                                <div class="card" style="width:600px;">
                                        <img class="card-img-top" src="assets/images/jollofrice.jpg" alt="JOLLOFRICE" style="height:100px; width:100%">
                                    <div class="card-body">
                                        <h6 class="card-title menu-h">JOLLOFRICE</h6>
                                        <p class="card-text">A Plate Cost 8,00&euro;</p>
                                        <a href="assets/images/jollofrice.jpg" alt="JOLLOFRICE" style="width:100%" class="btn btn-success" title="JOLLOFRICE">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 10px;"  id="menu">
                            <div  class="card-deck">
                                <div class="card" style="width:600px;">
                                        <img class="card-img-top" src="assets/images/achu.jpg" alt="ACHU" style="height:100px; width:100%">
                                    <div class="card-body">
                                        <h6 class="card-title menu-h">ACHU</h6>
                                        <p class="card-text">A Plate Cost 10,00&euro;</p>
                                        <a href="assets/images/achu.jpg" alt="ACHU" style="width:100%" class="btn btn-success" title="ACHU">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 10px;"  id="menu">
                            <div  class="card-deck">
                                <div class="card" style="width:600px;">
                                        <img class="card-img-top" src="assets/images/khati5.jpg" alt="KHATI KHATI" style="height:100px; width:100%">
                                    <div class="card-body">
                                        <h6 class="card-title menu-h">KHATI-KHATI</h6>
                                        <p class="card-text">A Plate Cost 10,00&euro;</p>
                                        <a href="assets/images/khati5.jpg" alt="KHATI KHATI" style="width:100%" class="btn btn-success" title="KHATI-KHATI">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 10px;"  id="menu">
                            <div  class="card-deck">
                                <div class="card" style="width:600px;">
                                        <img class="card-img-top" src="assets/images/ekwang2.jpg" alt="EKWANG" style="height:100px; width:100%">
                                    <div class="card-body">
                                        <h6 class="card-title menu-h">EKWANG</h6>
                                        <p class="card-text">A Plate Cost 10,00&euro;</p>
                                        <a href="assets/images/ekwang2.jpg" alt="EKWANG" style="width:100%" class="btn btn-success" title="EKWANG">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3" style="margin-bottom: 10px;" id="menu">
                            <div  class="card-deck">
                                <div class="card" style="width:600px;">
                                        <img class="card-img-top" src="assets/images/mbongo1.jpg" alt="MBONGO-CHOHBI" style="height:100px; width:100%">
                                    <div class="card-body">
                                        <h6 class="card-title menu-h">MBONGO</h6>
                                        <p class="card-text">A Plate Cost 10,00&euro;</p>
                                        <a href="assets/images/mbongo1.jpg" alt="MBONGO CHOHBI" style="width:100%" class="btn btn-success" title="MBONGO-CHOHBI">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 10px;" id="menu">
                            <div  class="card-deck">
                                <div class="card" style="width:600px;">
                                        <img class="card-img-top" src="assets/images/kwakoko4.jpg" alt="KWAKOKO" style="height:100px; width:100%">
                                    <div class="card-body">
                                        <h6 class="card-title menu-h">KWAKOKO</h6>
                                        <p class="card-text">A Plate Cost 10,00&euro;</p>
                                        <a href="assets/images/kwakoko4.jpg" alt="KWAKOKO" style="width:100%" class="btn btn-success" title="KWAKOKO">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 10px;" id="menu">
                            <div  class="card-deck">
                                <div class="card" style="width:600px;">
                                        <img class="card-img-top" src="assets/images/banner.png" alt="ROASTED MEAT AND SALAT" style="height:100px; width:100%">
                                    <div class="card-body">
                                        <h6 class="card-title menu-h">MEAT</h6>
                                        <p class="card-text">A Plate Cost 10,00&euro;</p>
                                        <a href="assets/images/banner.png" alt="ROASTED MEAT AND SALAT" style="width:100%" class="btn btn-success" title="ROASTED-MEAT">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-3" style="margin-bottom: 10px;" id="menu">
                        <div  class="card-deck">
                            <div class="card" style="width:600px;">
                                    <img class="card-img-top" src="assets/images/puffpuff3.jpg" alt="PUFF-PUFF" style="height:100px; width:100%">
                                <div class="card-body">
                                    <h6 class="card-title menu-h">PUFF-PUFF</h6>
                                    <p class="card-text">A Plate Cost 10,00&euro;</p>
                                    <a href="assets/images/puffpuff3.jpg" alt="PUFF-PUFF" style="width:100%" class="btn btn-success" title="PUFF-PUFF">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</body>
</html>