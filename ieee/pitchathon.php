<?php
session_start();
if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['location']) && !empty($_POST['college']) && !empty($_POST['ieee_member']))
{
    $_SESSION['email']=$_POST['email'];
    $_SESSION['name']=$_POST['name'];
    $_SESSION['phone']=$_POST['phone'];
    $_SESSION['location']=$_POST['location'];
    $_SESSION['college']=$_POST['college'];
    $_SESSION['ieee_member']=$_POST['ieee_member'];
}
else
{
   //do nothing
}
if(isset($_SESSION['name']))
 {
    //do nothing
 }
 else
 {
    header("Location: index.php");
    exit;
 }
?>

<!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href="https://sharonpraju.github.io/Zynact/assests/img/apple-icon.png">
   <link rel="icon" type="image/png" href="https://sharonpraju.github.io/Zynact/assests/img/zynact_fav_1.png">
   <title>
    Zynact : Free Web Hosting | Digital Solutions
   </title>
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Nucleo Icons -->
   <link href="https://sharonpraju.github.io/Zynact/assests/css/nucleo-icons.css" rel="stylesheet" />
   <!-- CSS Files -->
   <link href="https://sharonpraju.github.io/Zynact/assests/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
   <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165588900-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-165588900-1');
  </script>
 </head>
 
 <body class="register-page">
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://zynact.com/index.html">
          <span>Zynact</span>
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                Zynact
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-link text-white" href="https://zynact.com/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link text-white" href="https://zynact.com/contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link text-white" href='https://hosting.zynact.com/support.php'>Support</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link text-white" href ='https://hosting.zynact.com/faq.php'>FAQ</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="btn btn-simple btn-success" href ='https://hosting.zynact.com/index.php'>Free Web Hosting</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!-- End Navbar -->
   <div class="wrapper">
    <div class="modal fade modal-black" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; margin-top:-150px;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="tim-icons icon-simple-remove text-white"></i>
            </button>
            <div class="text-muted text-center ml-auto mr-auto">
              <h3 class="mb-0">Guidelines</h3>
            </div>
          </div>
          <div class="modal-body">
            <div class="text-center text-muted mb-4 mt-3">
              <small>Topics Or Areas</small>
            </div>
              <small><p><b>1. Cyber security.</b></p></small>
              <small><p><b>2. Problems faced by women and children.</b></p></small>
              <small><p><b>3. Energy conservation</b></p></small>
              <small><p><b>4. Agriculture, economy and future bussiness.</b></p></small>
              <small><p><b>5. Pandemic issues</b></p></small>
              <div class="text-center text-muted mb-4 mt-3">
                <small>General Instructions</small>
              </div>
                <small><p><b>No solutions are required, only the problem is to be submitted</b></p></small>
                <small><p><b>The Identified problem should be under the given five fields</b></p></small>
                <small><p><b>Participants can give the maximum number of problem statements identified.</b></p></small>
                <small><p><b>Try to point out as much problems regarding the respective areas.</b></p></small>
                <small><p><b>The event starts from May 14 to 18 and you can register and participate before deadline.</b></p></small>
                <small><p><b>Multiple entries are allowed.</b></p></small>
                <small><p><b>From each entries the best one will be selected and awarded.</b></p></small>
                <small><p><b>eCertificates will be awarded to all participants.</b></p></small>

          </div>
        </div>
      </div>
    </div>
     <div class="section section-signup">
        <div class="container">
         <center>
            <div class="col-lg-6 mb-lg-auto">
                <div class="card card-register">
                <h4 class="card-title"></h4>
                  <div class="card-body">
                    <form class="form" action="register.php" method="post">
                        <center><h3>Online Pitchthon</h3></center>
                    

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-book-bookmark"></i>
                        </div>
                      </div>
                            <select class="form-control" size="1" name="area" required>
                              <option class="dropdown-item" value="" disabled selected>Area</option>
				              <option class="dropdown-item" value="Cyber security">Cyber security</option>
				              <option class="dropdown-item" value="Problems faced by women and children">Problems faced by women and children</option>
				              <option class="dropdown-item" value="Energy conservation">Energy conservation</option>
				              <option class="dropdown-item" value="Agriculture, economy and future bussiness">Agriculture, economy and future bussiness</option>
				              <option class="dropdown-item" value="Pandemic issues">Pandemic issues</option>
				            </select>
                    </div>



                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-caps-small"></i>
                                </div>
                            </div>
                        <input type="text" class="form-control" name="title" placeholder="&nbsp; Title" required autocomplete="off">
                        </div>
                        <div class="input-group">
                          <textarea class="form-control" name="description" placeholder="&nbsp; Short Description" style="height:100px; max-height: 100px;" required autocomplete="off"></textarea>
                        </div>
                        <br>
                    <center>
                        <input type="submit" class="btn btn-info btn-round btn-lg" value="Submit">
                    </center>
                    </form>
                  </div>
                  
                </div>
              </div>
         </center>
        </div>
     </div>
     <br><br><br><br>
     <?php include '../ad.html'; ?>
     <br><br>
     <?php include '../ad1.html'; ?>
     <br><br>
     <footer class="footer"  style="margin-bottom: -70px;">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h1 class="title"><img class="img_footer" src="https://sharonpraju.github.io/Zynact/assests/img/zynact_logo.png" style="width: 150px;"></h1>
              <a href="https://www.gogetssl.com" style="margin-left: 20px;"><img src="https://www.gogetssl.com/skin/i/ggssl-site-seal-v1-dark.png" /></a>
            </div>
            <div class="col-md-3">
              <ul class="nav">
                <li class="nav-item">
                  <a href="https://hosting.zynact.com/index.php" class="nav-link">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://hosting.zynact.com/terms.php" class="nav-link">
                    Terms and Condition
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="nav">
                <li class="nav-item">
                  <a href="https://zynact.com/contact.html" class="nav-link">
                    Contact Us
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://hosting.zynact.com/index.php" class="nav-link">
                    Free web hosting
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3 class="title div_2">Follow us:</h3>
              <div class="btn-wrapper profile">
                <a href="" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/zynact/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a href="" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-dribbble"></i>
                </a>
              </div>
              <br>
              <b>Crafted With <i class="tim-icons icon-heart-2"></i> From Zynact</b>
            </div>
          </div>
        </div>
      </footer>
   </div>
   <!--   Core JS Files   -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/popper.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/bootstrap.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/perfect-scrollbar.jquery.min.js"></script>
   <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/bootstrap-switch.js"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!-- Chart JS -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/chartjs.min.js"></script>
   <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/moment.min.js"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
   <!-- Black Dashboard DEMO methods, don't include it in your project! -->
   
   <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
 
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5e9ccb5469e9320caac54d95/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  
  </body>
 
 </html>
 







<!--
=========================================================
* BLK Design System- v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/blk-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->

