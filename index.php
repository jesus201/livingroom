
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/emilia_kitchen/core/init.php';

  if(isset($_SESSION['loggedin'])){
    header("location:home.php");
  }

?>



<!DOCTYPE html>
<html>
<head>
	<title>EMILIAS'S KITCHEN</title>
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

</head>
<body">
    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Logo</a>
          
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
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
                <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Our Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
            </li>
             <li class="navbar-btn">
                 <a href="#contact"><button type="button" class="btn btn-secondary nav-btn">Signin | Signup</button></a>
            </li>
            <li class="navbar-btn">
                 <button type="button" class="btn btn-secondary nav-btn" data-toggle="modal" data-target="#myModal">Your Feedback</button>
            </li>
        </ul>
           
    </nav>
    <div>
        <h1 style="text-align: center;text-transform: uppercase;padding: 40px;">WELCOME TO EMILIA'S LIVING-ROOM RESTAURANT</h1>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/bg1.jpg" style="height:600px; width:100%" class="image-size" alt="jollofrice">
            </div>
            <div class="carousel-item">
                <img src="assets/images/bg2.jpg" style="height:600px; width:100%"  class="image-size" alt="jollofrice">
            </div>
            <div class="carousel-item">
               <img src="assets/images/bg3.jpg" style="height:600px; width:100%" class="image-size" alt="jollofrice">
            </div>
            <div class="carousel-item">
               <img src="assets/images/bg4.jpg" style="height:600px; width:100%" class="image-size" alt="jollofrice">
            </div>
            <div class="carousel-item">
               <img src="assets/images/bg5.jpg" style="height:600px; width:100%" class="image-size" alt="jollofrice">
            </div>
        </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
               <span class="carousel-control-next-icon"></span>
            </a>

      </div>
        <div class="container">
            <div class="col-md-12" id="home">
                <div class="col-md-8">  
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
            <div class="col-md-4">
                <div class="row"></div>
            </div>
        </div>
   </div>
    <div id="about" class="bg-success">
       <div class="container" style="color: #fff; padding: 20px; text-align: center; font-size: 20px;">
            <h1 style="font-size: 40px;text-transform: capitalize;">African restaurant in Bochum.</h1><br><br>
            <p>We have been in Bochum for more than 4 years, your specialty restaurant for African dishes (see menu). <br>All dishes can be ordered for self-collectors and even home delivery. We have a wide range of drinks (see drinks menu), e.g.<br> we also have African beer. As part of our sports bar offer, you can watch football matches live in English with Sky-Sport.<br> Musically, we offer African and western music. We are happy by command to make sure that your occasions, from birthday, wedding parties etc is success.<br><br><br> <a href="about.php"><button type="button" class="style_btn btn-secondary">LEARN MORE ABOUT US</button></a>
       </div>
    </div>
    <div id="services" style="background-color: #f1e5f9;">
        <div class="container" style="padding: 20px; text-align: center; font-size: 20px;">
            <h1 style="font-size: 40px;margin-top: 15px;">We provide oustanding Services and Benefits.</h1><br><br>
            <p>Always placing our guest and customers first, our team has as it's utmost priority to make sure that all customers are well satisfied and happy.<br> We provide a wide range of customer services. Just to mention a few.</p>
            <u>
                <li>We offer home delivery services.</li>
                <li>50% carwash discount to all customers.</li>
                <li>Customers are ushered in from the door to their tables.</li>
                <li>Children play corner with nanny to look after them.</li>
                <li>Free Wifi.</li>
                <li>Flat rate on all soft drinks.</li>
            </u><br><br>
        </div>
    </div>
    <div id="contact"><br><br><br>
        <div class=" container">
           <div class="row">
              <h1 style="font-size: 40px;text-align: center;text-transform: capitalize;margin-bottom: 40px;">create an account and place your order from your location.</h1><br><br>
               <div class="col-md-6 "><br><br><br>
                 
                   <p style="font-size: 25px;">Signup with us and place your order confortably even from your home. Creating an account,<br> you will be receiving our daily updates on menus, discounts, coupons and more.</p>
                   <h2 style="font-size: 35px;margin-top: 15px;">Our Opening hours:</h2>
                      <p>We are open:<br> Monday to Sunday from 18:00 to 05:00.<br> Friday and Saturday from 22:00 clock we have our DJ.<br> You can reach us by phone: +49 (0) 2345867327 or mobile: 0172/62 56 827.</p>

                     <p>NOTICE: Smoking is not allowed inside the restaurant, but of course a corner has been arranged ouside to smoking.</p>
                     <div>
                         <p class="font-weight-bold">Visit Our Restaurant and enjoy the taste of our food.<br>For more contact details and direction <a  href="contact.php"><button type="button" class="btn btn-success btn_contact">CLICK HERE</button></a></p>
                     </div> 
                     <div class="social-media">
                         <a href="https://www.facebook.com/ken_fombang@yahoo.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                         <a href="#" class="fa fa-twitter"></a>
                         <a href="#" class="fa fa-youtube"></a>
                         <a href="#" class="fa fa-instagram"></a>
                     </div>
               </div>
               <div class="col-md-6">
                    
                    <p style="text-align: center; text-transform: uppercase; color:green; font-size: 40px; font-family: sans-serif;font-weight: bold;" id="text_id">signup</p>
     
                     <!--SIGNUP-->
                     <div id="signup" style="display: none;">
                          <h6 style="background-color:red; height: 35px;color: #fff; font-size: 20px; text-align: center; opacity: 0.6; padding:5px;margin-top:30px;margin-left:15px;margin-right: 15px; border-radius:4px;display:none;" id="suc_signup">error</h6>
                          <div class="col-md-12 form-group">
                               <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name" onkeyup="fadeoutfname()">
                          </div>
                          <div class="col-md-12 form-group">
                               <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name" onkeyup="fadeoutlname()">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Birthdate" onkeyup="fadeoutbirthday()">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="number" name="id_number" class="form-control" id="id_number" placeholder="Identity Card Number" onkeyup="fadeoutidnumber()">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" onkeyup="fadeoutemail()">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="password" name="pword" class="form-control" id="pword" placeholder="Enter Password" onkeyup="fadeoutpword()">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="password" name="cpword" class="form-control" id="cpword" placeholder="Confirm Password" onkeyup="fadeoutcpword()">
                          </div>
                          <div class="col-md-12 form-group">
                              <button type="button" id="signup_btn_val" name="signup_btn_val" class="form-control btn btn-success" onclick="customer_signup()">SIGNUP</button>
                          </div>
                          <a style="padding: 15px; color:green; cursor: pointer;" onclick="display_signin()">Aready have an Account!. Login.</a>
                      </div>
                      <!--END OF SIGNUP-->    

                      <!--SIGNIN-->
                      <div id="signin" style="display: block;">
                          <p style="background-color:red; height: 35px;color: #fff; font-size: 20px; text-align: center; opacity: 0.6; padding:3px;margin-top:30px;margin-left:15px;margin-right: 15px; border-radius:4px;display:none;" id="suc_signin">error</p>
                           <div class="col-md-12 form-group">
                              <input type="email" name="email_signin" id="email_signin" class="form-control" placeholder="Your Email" onkeyup="fadeoutemail()">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="password" name="pword_signin" id="pword_signin" class="form-control" placeholder="Your Password" onkeyup="fadeoutpword()">
                          </div>
                          <div class="col-md-12 form-group">
                              <button type="button" name="signin_btn_val" id="signin_btn_val" class="btn btn-success form-control" onclick="customer_signin()">SIGNIN</button>
                          </div>
                          <a style="padding: 15px; color:green; cursor: pointer;" onclick="display_signup()">Don't have an Account!. Signup.</a>
                     </div><br><br>
                     <!--END OF SIGNIN-->

                    <div>
                        <div>
                            <h3 style="text-align: center; text-transform: uppercase; color:green; font-size: 20px; font-family: sans-serif;font-weight: bold;">Your feedback will help us improve our services.</h3>
                        </div><br>
                        <div class="text-center">
                           <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                              FEEDBACK
                            </button>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                           <div class="modal-dialog">
                                <div class="modal-content animated flipInY">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title text-success">GIVE US YOUR FEEDBACK PLEASE!</h4>
                                    <button type="button" class="close text-success" data-dismiss="modal">&times;</button>
                                </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="style_feedback">
                                            <h6 style="background: red; border-radius: 4px; height: 30px; text-align: center; color: #fff; padding:5px; opacity: 0.6; display: none;" id="ferror">feedback error</h6>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="ffname" id="ffname" class="form-control" placeholder="Your First Name Please.." onkeyup="fadeoutffname()">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="flname" id="flname" class="form-control" placeholder="Your Last Name Please.."  onkeyup="fadeoutflname()">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <input type="email" name="femail" id="femail" class="form-control" placeholder="Your Email Please.." onkeyup="fadeoutfemail()">
                                                </div> 
                                                <div class="col-md-12 form-group">
                                                   <input type="text" name="fsubject" id="fsubject" class="form-control" placeholder="Your Subject Please.." onkeyup="fadeoutfsubject()">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <textarea class="col-md-12 form-control" name="fmessage" rows="5" id="fmessage" placeholder="Your Message here Please.. (Enter between 100 to 300 characters)" onkeyup="fadeoutfmessage()"></textarea>
                                                    
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <button type="button" onclick="checkformfeedback()" name="feedback_btn_val" id="feedback_btn_val" class="form-control btn btn-success">Send</button>
                                                </div>
                                            </div>
                                        </div>    
                                    </div> 

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>
                        <!--End Modal-->

                    </div>
              </div>
                
           </div>
         </div>
    </div><br><br><br>
   <div class="footer bg-success">
        <p>FombangKenn &copy; 2022. Designed by KennedyFombang. All Rights Reserved.</p>
   </div>>
 
    <br><br><br>
</body>
 <script>

 //BEGINING VALIDATION SIGNUP
 function customer_signin(){

     //check if user has entered email
        var email_signin = document.getElementById("email_signin").value;
        if (email_signin =="") { 

                jQuery("#suc_signin").fadeIn();
                jQuery("#suc_signin").html("Please Enter Your Email.");
                jQuery("#suc_signin").css("background-color","red");

                setTimeout( () => {
                        jQuery("#suc_signin").fadeOut();
                }, 2000);

                 jQuery("#email_signin").focus();
 
                return false;


        }

        //check if user has entered password
        var pword_signin = document.getElementById("pword_signin").value;
        if (pword_signin =="") { 

                jQuery("#suc_signin").fadeIn();
                jQuery("#suc_signin").html("Please Enter Your Password.");
                jQuery("#suc_signin").css("background-color","red");


                setTimeout( () => {
                        jQuery("#suc_signin").fadeOut();
                }, 2000);

                jQuery("#pword_signin").focus();
                
                return false;


        }


        var email_signin = document.getElementById('email_signin').value;
        var pword_signin = document.getElementById('pword_signin').value;
        var signin_btn_val = document.getElementById('signin_btn_val').value;

        var data2 = "email_signin="+email_signin+"&pword_signin="+pword_signin+"&signin_btn_val="+signin_btn_val;

        
        jQuery.ajax({

            url:"controllers/formhandlers/signin.php",
            method:"POST",
            data:data2,
            cache:false,

            success:function(data2){

                if(data2=="success"){
                   jQuery("#suc_signin").fadeIn();
                   jQuery("#suc_signin").html("Signin was successful");
                   jQuery("#suc_signin").css("background-color","green");   


                   jQuery("#email_signin").val('');
                   jQuery("#pword_signin").val('');


                  //remove message after 2sec   
                setTimeout(function(){
                     jQuery("#suc_signin").fadeOut();
                }, 2000);
                // //end setTimeout

                 window.location.replace('home.php'); //Direct you to another page after signingup, in this case (home.php).

                }
                if(data1=="error"){
                   jQuery("#suc_signin").fadeIn();
                   jQuery("#suc_signin").html("Signin was not successful");
                   jQuery("#suc_signin").css("background-color","red");

                    
                   jQuery("#email_signin").val('');
                   jQuery("#pword_signin").val('');
                        
                //remove message after 2sec 
                setTimeout(function(){
                     jQuery("#suc_signin").fadeOut();
                }, 2000);
                // //end setTimeout
                }
             
           },
            error:function(){
                alert("error");
            }

        
        });
     } 

                  //BEGINING VALIDATION SIGNUP
                    function fadeoutfname(){
                      jQuery("#suc_signup").fadeOut();
                    }

                    function fadeoutlname(){
                      jQuery("#suc_signup").fadeOut();
                    }

                     function fadeoutbirthday(){
                      jQuery("#suc_signup").fadeOut();
                    }

                     function fadeoutidnumber(){
                      jQuery("#suc_signup").fadeOut();
                    }

                    function fadeoutemail(){
                      jQuery("#suc_signup").fadeOut();
                    }

                    function fadeoutpword(){
                      jQuery("#suc_signup").fadeOut();
                    }

                    function fadeoutcpword(){
                      jQuery("#suc_signup").fadeOut();
                    }

          
          function customer_signup(){

                    if(jQuery("#fname").val()==""){
                    jQuery("#suc_signup").fadeIn();
                    jQuery("#suc_signup").html("Please enter your first name");
                    jQuery("#suc_signup").css("background-color","red");
                    

                    jQuery("#fname").focus();

                    return false;
                }

                if(jQuery("#lname").val()==""){
                    jQuery("#suc_signup").fadeIn();
                    jQuery("#suc_signup").html("Please enter your last name");
                    jQuery("#suc_signup").css("background-color","red");
                    
                    jQuery("#lname").focus();

                    return false;
                }

                if(jQuery("#birthdate").val()==""){
                    jQuery("#suc_signup").fadeIn();
                    jQuery("#suc_signup").html("Please enter your birthdate");
                    jQuery("#suc_signup").css("background-color","red");
                    
                    jQuery("#birthdate").focus();

                    return false;
                }

                 if(jQuery("#id_number").val()==""){
                    jQuery("#suc_signup").fadeIn();
                    jQuery("#suc_signup").html("Please enter your id_number");
                     jQuery("#suc_signup").css("background-color","red");
                    
                    jQuery("#id_number").focus();

                    return false;
                }

                var email= document.getElementById("email").value;
                if(email==""){
                   jQuery("#suc_signup").fadeIn();
                   jQuery("#suc_signup").html("Please enter your email");
                   jQuery("#suc_signup").css("background-color","red");
                   
                   jQuery("#email").focus();

                   return false;
                }

                var pword = document.getElementById("pword").value;
                if(pword==""){
                    jQuery("#suc_signup").fadeIn();
                    jQuery("#suc_signup").html("Please enter your pass word");
                    jQuery("#suc_signup").css("background-color","red");
                    jQuery("#pword").focus();

                    return false;
                }

                var cpword = document.getElementById("cpword").value;
                if(cpword==""){
                    jQuery("#suc_signup").fadeIn();
                    jQuery("#suc_signup").html("Please confirm your pass word");
                    jQuery("#suc_signup").css("background-color","red");
                    jQuery("#cpword").focus();

                    return false;
                }


                if (jQuery("#pword").val()!="" && jQuery("#cpword").val()!=""){
                  
                  if(jQuery("#pword").val()!=jQuery("#cpword").val()){
                    jQuery("#suc_signup").fadeIn()
                    jQuery("#suc_signup").html("Your confirm password does not match password")

                    jQuery("#cpword").focus();

                    return false;
                  }
               }





               var fname=document.getElementById('fname').value;
               var lname=document.getElementById('lname').value;
               var birthdate=document.getElementById('birthdate').value;
               var id_number=document.getElementById('id_number').value;
               var email=document.getElementById('email').value;
               var pword=document.getElementById('pword').value;
               var cpword=document.getElementById('cpword').value;
               var signup_btn_val = document.getElementById('signup_btn_val').value;


               var data1="fname="+fname+"&lname="+lname+"&birthdate="+birthdate+"&id_number="+id_number+"&email="+email+"&pword="+pword+"&cpword="+cpword+"&signup_btn_val="+signup_btn_val;
              

              jQuery.ajax({
                    
                    url:"controllers/formhandlers/signup.php",
                    method:"POST",
                    data:data1,
                    cache:false,


                    success:function(data1){
                        
                         if(data1=="success"){

                             jQuery("#suc_signup").fadeIn();
                             jQuery("#suc_signup").html("Email validation successful");
                             jQuery("#suc_signup").css("background-color","green");

                            //EMPTY the empty the inputfields after clicking the validate button
                             jQuery("#fname").val('');
                             jQuery("#lname").val('');
                             jQuery("#birthdate").val('');
                             jQuery("#id_number").val('');
                             jQuery("#email").val('');
                             jQuery("#pword").val('');
                             jQuery("#cpword").val('');
                             //END OF EMPTY the inputfields after clicking the validate button     

                             //setTimeout to erase(fadeOut) the success text after display 
                             setTimeout(function(){
                                  jQuery("#suc_signup").fadeOut();
                             }, 2000);
                              //End of setTimeout text   
                            

                             window.location.replace('home.php'); //Direct you to another page after signingup, in this case (home.php).
                         
                           
                         }

                          if(data1=="error"){
                             jQuery("#suc_signup").fadeIn();
                             jQuery("#suc_signup").html("Email did not validate");
                             jQuery("#suc_signup").css("background-color","red");

                             //EMPTY the inputfields after clicking the validate button
                           
                             jQuery("#email").val('');
                             jQuery("#pword").val('');
                             jQuery("#cpword").val('');
                            //END OF EMPTY the inputfields after clicking the validate button  

                            //setTimeout to erase(fadeOut) the error text after display 
                            setTimeout(function(){
                                  jQuery("#suc_signup").fadeOut();
                             }, 2000);
                            //End of setTimeout text 

                         }
                    
                    },

                    error:function(){

                         alert("error");
                    }



              })

          }

       //END OF VALIDATION SIGNUP


    //Feedback Validation
    function fadeoutffname(){
          jQuery("#ferror").fadeOut();
     }

     function fadeoutflname(){
          jQuery("#ferror").fadeOut();
     }

     function fadeoutfemail(){
          jQuery("#ferror").fadeOut();
     }

     function fadeoutfsubject(){
          jQuery("#ferror").fadeOut();
     }

     function fadeoutfmessage(){
          jQuery("#ferror").fadeOut();
     }


     function checkformfeedback(){
        
          if(jQuery("#ffname").val()==""){
               jQuery("#ferror").fadeIn();
               jQuery("#ferror").html("Please Enter Your First Name.");
               

               jQuery("#ffname").focus();

               return false;
          }


         if(jQuery("#flname").val()==""){
               jQuery("#ferror").fadeIn();
               jQuery("#ferror").html("Please Enter Your Last Lame.");
               
               jQuery("#flname").focus();

               return false;
          }

           if(jQuery("#femail").val()==""){
               jQuery("#ferror").fadeIn();
               jQuery("#ferror").html("Please Enter Your Email.");

               jQuery("#femail").focus();

               //  setTimeout( () => {
               //          jQuery("#ferror").fadeOut();
               //  }, 2000);

               return false;
           }


       var fsubject = document.getElementById("fsubject").value;
         if(fsubject==""){
          jQuery("#ferror").fadeIn();
          jQuery("#ferror").html("Please Enter The Subject Of Your Message.");
          jQuery("#fsubject").focus();

          return false;
     }

       var fmessage = document.getElementById("fmessage").value;
         if(fmessage==""){
          jQuery("#ferror").fadeIn();
          jQuery("#ferror").html("Please Enter a Message.");
          jQuery("#fmessage").focus();

          return false;

     }else if(fmessage.length < 100 || fmessage.length > 300){
          jQuery("#ferror").fadeIn();
          jQuery("#ferror").html("Please Enter message of more than 100 and less than 300 characters.");
          jQuery("#fmessage").focus();

          return false;
          
     }
     


        var ffname=document.getElementById('ffname').value;
        var flname=document.getElementById('flname').value;
        var femail=document.getElementById('femail').value;
        var fsubject=document.getElementById('fsubject').value;
        var fmessage=document.getElementById('fmessage').value;
        var feedback_btn_val=document.getElementById('feedback_btn_val').value;
     
        var data4="ffname="+ffname+"&flname="+flname+"&femail="+femail+"&fsubject="+fsubject+"&fmessage="+fmessage+"&feedback_btn_val="+feedback_btn_val;

        
        jQuery.ajax({

          url:"controllers/formhandlers/feedback.php",
          method:"POST",
          data:data4,
          cache:false,

          success:function(data4){
              
            if(data4=="success"){
              jQuery("#ferror").fadeIn();
              jQuery("#ferror").html("Feedback Succesfully Validated");
              jQuery("#ferror").css("background-color","green");

                setTimeout( () => {
                        jQuery("#ferror").fadeOut();
                }, 2000);

            jQuery("#ffname").val('');
            jQuery("#flname").val('');
            jQuery("#femail").val('');
            jQuery("#fsubject").val('');
            jQuery("#fmessage").val('');
            
            
            }

            if(data4=="error"){
              jQuery("#ferror").fadeIn();
              jQuery("#ferror").html("Feedback Did Not Validate");
              jQuery("#ferror").css("background-color","red");
            }
          },

          error:function(){
            alert("error");
          }

        });
    
}
    //End Feedback Validation


      //Signup / Signin Toggle
      function display_signup(){
                  jQuery("#signup").css("display","block");
                  jQuery("#signin").css("display","none");
                  jQuery("#text_id").html("SIGNUP");
              }

      function display_signin(){
                 jQuery("#signin").css("display","block");
                 jQuery("#signup").css("display","none");
                 jQuery("#text_id").html("SIGNIN");
              } 
       //End of Signup / Signin Toggle  

     </script>
</html>