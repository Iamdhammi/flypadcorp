<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-US-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flypadcorp - Welcome to FlypadExt</title>

        <link rel="shortcut icon" href="assets/images/logo/3.png">
        <!-- Stylesheet  -->

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="assets/css/style.css">
       
        <!-- Animate.css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        
        <link rel="stylesheet" type="text/css" href="assets/css/full-slider.css">
    

        <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

        <!-- Font-awesome-->
        <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!-- Icomoon font -->
        <link rel="stylesheet" href="assets/css/icomoon.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <!-- Iconic font -->
        <link rel="stylesheet" href="assets/fonts/iconic/css/material-design-iconic-font.css">

        <!-- Bootstrap  -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

         <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        
        <style>html {scroll-behavior: smooth;}</style>

    </head>
<body>

        <div class="fh5co-loader">
            <div class="loader"></div>   
        </div>
        
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">   
                    <div class="col-xs-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#homepage"><img src="assets/images/logo/1.png"></a>
                        </div>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Our Ideas</a></li>
                                <li><a href="about.php">Meet Us</a></li>
                                <li><a href="flypadext.php">FlypadExt</a></li>
                                <li><a href="#about">Blog</a></li>
                                <li class="active"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>  

        <a class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white" href="#"><i></i></a>
        <div class="fh5co-offcanvas">
            <ul>
                <li class="active"><a href="index.php"><i class="icon-home"></i> Home</a></li>
                <li><a href="#services"><i class="icon-rocket"></i> Our Ideas</a></li>
                <li><a href="about.php"><i class="zmdi zmdi-collection-folder-image"></i> Meet Us</a></li>
                <li><a href="#pricing"><i class="fa fa-money"></i> FlypadExt</a></li>
                <li><a href="#about"><i class="icon-info"></i> Blog</a></li>
                <li><a href="contact.php"><i class="icon-user"></i> Contact</a></li>
            </ul>
            <ul class="social-icons">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
        </div>
        <!-- End Navigation -->


       <!-- Page title -->
            <div class="page-title parallax parallax3">
                <div class="container">                 
                     <div class="content">
                        <h4>Get in touch with us.</h4>
                        <hr>
                        <div class="header-text btn">
                            <h1><span id="head-title1"></span></h1>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Contact Info -->

            <div class="contact_info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-1">
                            <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                                <!-- Contact Item -->
                                <div class="col-lg-4 contact_info_item d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_image"><img src="assets/images/contact_1.png" alt=""></div>
                                    <div class="contact_info_content">
                                        <div class="contact_info_title">Phone</div>
                                        <div class="contact_info_text">+38 068 005 3570</div>
                                    </div>
                                </div>

                                <!-- Contact Item -->
                                <div class="col-lg-4 contact_info_item d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_image"><img src="assets/images/contact_2.png" alt=""></div>
                                    <div class="contact_info_content">
                                        <div class="contact_info_title">Email</div>
                                        <div class="contact_info_text">fastsales@gmail.com</div>
                                    </div>
                                </div>

                                <!-- Contact Item -->
                                <div class="col-lg-4 contact_info_item d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_image"><img src="assets/images/contact_3.png" alt=""></div>
                                    <div class="contact_info_content">
                                        <div class="contact_info_title">Address</div>
                                        <div class="contact_info_text">10 Suffolk at Soho, London, UK</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->

            <div class="contact_form">
                <div class="container">
                    <div class="formy">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-1">
                            <div class="contact_form_container">
                                <div class="contact_form_title">Get in Touch</div>

                                <form action="contact.php" method="post" id="contact_form">
                                    <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                        <input type="text" name="name" id="contact_form_name" class="contact_form_name input_field" placeholder="Full Name" required="required" data-error="Name is required.">
                                        <input type="text" name="email" id="contact_form_email" class="contact_form_email input_field" placeholder="Email" required="required" data-error="Email is required.">
                                        
                                    </div>
                                    <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                        <input type="text" name="contact" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Phone">
                                        <input type="text" name="contact" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Phone">
                                    </div>
                                    <div class="contact_form_text">
                                        <textarea id="contact_form_message" name="message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                    </div>
                                    <div class="contact_form_button">
                                        <button type="submit" class="button order_button"><a>Send Message</a></button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel"></div>
            </div>



            <!-- Start Footer Section-->
            <footer class="footer">
              <div class="container">

                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <address>
                                <strong>FLYPADCORP</strong><br><br>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.<br><br>
                                Founded and launched in 2018.<br>
                                <ul class="social-icon text-left">
                                    <li><a href="https://facebook.com/creenixorg" class="fa fa-facebook"></a></li>
                                    <li><a href="https://instagram.com/creenixorg" class="fa fa-instagram"></a></li>
                                    <li><a href="https://twitter.com/creenixorg" class="fa fa-twitter"></a></li>
                                    <li><a href="https://linkedin.com/creenix" class="fa fa-linkedin"></a></li>
                                </ul>
                            </address>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                            <address>
                               <strong>Get started</strong><br><br>
                                <p><a href="landing-page.html#services"><i class="fa fa-angle-right"></i> &nbsp;Our Ideas</a></p>
                                <p><a href="about.html"><i class="fa fa-angle-right"></i> &nbsp;Meet us</a></p>
                                <p><a href="projects.html"><i class="fa fa-angle-right"></i> &nbsp;FlypadExt</a></p>
                                <p><a href="contact.html"><i class="fa fa-angle-right"></i> &nbsp;Contact us</a></p>
                            </address>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                            <address>
                                <strong>Useful Links</strong><br><br>
                                <p><a href="landing-page.html#services"><i class="fa fa-angle-right"></i> &nbsp;Our Blog</a></p>
                                <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Privacy Policy</a></p>
                                <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Refund Policy</a></p>
                                <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Terms of use</a></p>
                                <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Get Hired</a></p>
                            </address>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <address>
                                <strong>Subscribe to our newsletter</strong><br><br>
                                Stay tuned to more exquisite packages at lower cost. No fixed price, No extra charges! Let us know your budget<br><br>
                                <div class="footer-newsletter">
                                <form class="" action="php/subscribe.php" method="post">
                                   <div> <input type="text" class="control bor" placeholder="Email" required><div>
                                   <div><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="subscribe-submit"><img src="assets/images/send.png"></button></div>
                                </form>
                                </div>
                            </address>
                        </div>
                    </div>
                   </div>
             </div>
              
                
                <div class="footer-foot">
                  <hr style="width:99%!important; border: 0.5px solid white!important; margin-top: 0px;">
                  <div class="copyright" >
                    <div>
                      <center>
                        <div class="copyright-text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> <a href="http://flypadcorp.com/">Flypadcorp</a>. All Rights Reserved.</p>
                        </div>
                      </center>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
            <!-- End Footer Section-->
          





         <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
        
        <!-- jQuery for slider-->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Waypoints for gototop -->
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <!-- Plugin JavaScript for navbar shrink-->
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/cbpAnimatedHeader.js"></script>

        <script src="assets/js/select2.min.js"></script>
        <script>
            $(".js-select2").each(function(){
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>

        <!-- Plugins for navbar toggle -->
        <script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="assets/plugins/greensock/animation.gsap.min.js"></script>
        <script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="assets/plugins/easing/easing.js"></script>

        <!-- Custom js for loader-->
        <script src="assets/js/custom.js"></script>
        <!-- Main for gototop-->
        <script src="assets/js/main.js"></script>

        <!-- parallax background -->
        <script src="assets/js/parallax.js"></script>

        <!-- animations -->
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/jquery.nav.js"></script>
        <script src="assets/js/jquery.parallax.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/counter.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
        <script src="assets/js/typed.js"></script>
        <script>
          $(function(){
              $("#head-title1").typed({
                strings: ["24/7 Support^1000", "Follow @flypadcorp on Instagram and Twitter^1000" ,"Call Us Or Send Us a Message^1000"],
                typeSpeed: 100,
                loop: true,
                startDelay: 100
              });
          });
        </script>
        
</body>
</html>