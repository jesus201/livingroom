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
<body>
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
                  <li><a href="#">ACHU</a></li>
                  <li><a href="#">KHATI KHATI</a></li>
                  <li><a href="#">EKWANG</a></li>
                  <li><a href="#">MBOGO CHOBI</a></li>
                  <li><a href="#">ERRU</a></li>
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
            <p>We have been in Bochum for more than 4 years, your specialty restaurant for African dishes (see menu). <br>All dishes can be ordered for self-collectors and even home delivery. We have a wide range of drinks (see drinks menu), e.g.<br> we also have African beer. As part of our sports bar offer, you can watch football matches live in English with Sky-Sport.<br> Musically, we offer African and western music. We are happy by command to make sure that your occasions, from birthday, wedding parties etc is success.<br><br><br> <a href="#"><button type="button" class="style_btn btn-secondary">LEARN MORE ABOUT US</button></a>
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
            </u>
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
                     <div class="social-media">
                         <a href="#" class="fa fa-facebook"></a>
                         <a href="#" class="fa fa-twitter"></a>
                         <a href="#" class="fa fa-youtube"></a>
                         <a href="#" class="fa fa-instagram"></a>
                     </div>
               </div>
               <div class="col-md-6">
                    
                    <p style="text-align: center; text-transform: uppercase; color:green; font-size: 40px; font-family: sans-serif;font-weight: bold;" id="text_id">signup</p>
     
                     <!--SIGNUP-->
                     <div id="signup" style="display: none;">
                          <p style="background-color:red;color: #fff;padding:5px;margin-top:30px;border-radius:3px;display:none;" id="suc_signup">error</p>
                          <div class="col-md-12 form-group">
                               <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter fname">
                          </div>
                          <div class="col-md-12 form-group">
                               <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Birthdate">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="number" name="id_number" class="form-control" id="id_number" placeholder="Identity Card Number">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="password" name="pword" class="form-control" id="pword" placeholder="Enter Password">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="password" name="cpword" class="form-control" id="cpword" placeholder="Confirm Password">
                          </div>
                          <div class="col-md-12 form-group">
                              <button type="button" id="btn_val" name="btn_val" class="form-control btn btn-success" onclick="signup_validate()">SIGNUP</button>
                          </div>
                          <a style="padding: 15px; color:green; cursor: pointer;" onclick="display_signin()">Aready have an Account!. Login.</a>
                      </div>
                      <!--END OF SIGNUP-->    

                      <!--SIGNIN-->
                      <div id="signin" style="display: block;">
                          <p style="background-color:red;color: #fff;padding:5px;margin-top:30px;border-radius:3px;display:none;" id="suc_signin">error</p>
                           <div class="col-md-12 form-group">
                              <input type="email" name="email_signin" id="email_signin" class="form-control" placeholder="Your Email*">
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="password" name="pword_signin" id="pword_signin" class="form-control" placeholder="Your Password*">
                          </div>
                          <div class="col-md-12 form-group">
                              <button type="button" name="signin_val" id="signin_val" class="btn btn-success form-control" onclick="signin_validate()">SIGNIN</button>
                          </div>
                          <a style="padding: 15px; color:green; cursor: pointer;" onclick="display_signup()">Don't have an Account!. Signup.</a>
                     </div><br><br>
                     <!--END OF SIGNIN-->

                    <div>
                        <div>
                            <h3 style="text-align: center; text-transform: uppercase; color:green; font-size: 20px; font-family: sans-serif;font-weight: bold;">Your feedback will help us improve on our services.</h3>
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
                                <h4 class="modal-title text-success">GIVE US YOUR FEEDBACK</h4>
                                <button type="button" class="close text-success" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                  
                                    <div class="modal-body modal_form">
                                           <form action="index.php" method="POST" onsubmit="return checkformsignup()" id="modal_form">
                                            <h6 style="background: red; color: #fff; display: none;" id="error">error</h6>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                           <input type="text" name="ffname" id="ffname" class="form-control" placeholder="First Name" onkeyup="fadeoutfname()">
                                                      
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                           <input type="text"  name="flname" id="flname" class="form-control" placeholder="Last Name" onkeyup="fadeoutlname()">
                                                        
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                           <input type="email" name="femail" id="femail" class="form-control" placeholder="Your Email" onkeyup="fadeoutemail()">
                                                        
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                           <input type="password" name="fpword" id="fpword" class="form-control" placeholder="Your Password" onkeyup="fadeoutpword()">
                                               
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                           <textarea class="col-md-12 form-control" name="fmessage" rows="5" id="fmessage" placeholder="Your Message here (Enter between 100 to 300 characters)" onkeyup="fadeoutmessage()"></textarea>
                                                        
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                          <button type="button" class="btn btn-success form-control" onclick="contactValidation()"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                                                    </div>
                                               </div>    
                                          </form>     
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
        <p>FombangKenn &copy; 2017. Designed by KennedyFombang. All Rights Reserved.</p>
   </div>>
 
    <br><br><br>
</body>
 <script> 

        function fadeoutfname(){
          jQuery("#error").fadeOut();
        }

        function fadeoutlname(){
          jQuery("#error").fadeOut();
        }

        function fadeoutemail(){
          jQuery("#error").fadeOut();
        }

        function fadeoutpword(){
          jQuery("#error").fadeOut();
        }

        function fadeoutmessage(){
          jQuery("#error")
        }

        function fadeoutcpword(){
          jQuery("#error").fadeOut();
        }

          //SIGNUP VALIDATION  
          function caretaker_validate(){
               var fname = document.getElementById('fname').value;
               var lname = document.getElementById('lname').value;
               var email = document.getElementById('email').value;
               var pword = document.getElementById('pword').value;
               var cpword = document.getElementById('cpword').value;
               var birthdate = document.getElementById('birthdate').value;
               var btn_val = document.getElementById('btn_val').value;


               var data1 = "fname="+fname+"&lname="+lname+"&email="+email+"&pword="+pword+"&cpword="+cpword+"&birthdate="+birthdate+"&btn_val="+btn_val;


              jQuery.ajax({
                    
                    url:"controllers/formhandlers/validate.php",
                    method:"POST",
                    data:data1,
                    cache:false,


                    success:function(data1){
                        
                         if(data1=="success"){
                             jQuery("#suc").fadeIn();
                             jQuery("#suc").html("Email validation successful");
                             jQuery("#suc").css("background-color","green");

                            //EMPTY the empty the inputfields after clicking the validate button
                             jQuery("#fname").val('');
                             jQuery("#lname").val('');
                             jQuery("#email").val('');
                             jQuery("#pword").val('');
                             jQuery("#cpword").val('');
                             jQuery("#birthdate").val('');
                             //END OF EMPTY the inputfields after clicking the validate button     

                             //setTimeout to erase(fadeOut) the success text after display 
                             setTimeout(function(){
                                  jQuery("#suc").fadeOut();
                             }, 2000);
                              //End of setTimeout text   

                             window.location.replace('home.php'); //Direct you to another page after signingup, in this case (home.php).
                         
                         }

                          if(data1=="error"){
                             jQuery("#suc").fadeIn();
                             jQuery("#suc").html("Email did not validate");
                             jQuery("#suc").css("background-color","red");

                             //EMPTY the inputfields after clicking the validate button
                           
                             jQuery("#email").val('');
                             jQuery("#pword").val('');
                             jQuery("#cpword").val('');
                             jQuery("#birthdate").val('');
                            //END OF EMPTY the inputfields after clicking the validate button  

                            //setTimeout to erase(fadeOut) the error text after display 
                            setTimeout(function(){
                                  jQuery("#suc").fadeOut();
                             }, 2000);
                            //End of setTimeout text 

                         }
                    
                    },

                    error:function(){

                         alert("error");
                    }



              })

          }
       //END OF SIGNIN VALIDATION

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
      // //End of Signup / Signin Toggle             

     </script>
</html>