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
	    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
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
						        <li class="active"><a href="#">FlypadExt</a></li>
						        <li><a href="#about">Blog</a></li>
						        <li><a href="contact.php">Contact</a></li>
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
                <li><a href="#"><i class="icon-rocket"></i> Our Ideas</a></li>
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
            <div class="page-title parallax parallax4">
                <div class="container">                 
                     <div class="content">
		                <h4>We've got the special packages for you.</h4>
		                <hr>
		                
		            </div>
                </div>

            </div>





 <!-- Checkout section -->
        <section>
            <form action="data.php" method="post">
                <div class="container">
                    <div class="st-center" style="background: url(assets/images/logo-icon-4.png) no-repeat scroll center">
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 m-lr-auto m-b-50">
                            <div class="p-lr-40 how-shadow1 p-t-30 p-b-40 m-l-63 m-lr-0-xl p-lr-15-sm">
                                <div class="text-center bor12">
                                    <h2 class="mtext-109 cl2 p-b-30">Proceed to Order</h2>
                                </div><br>
                                <div class="stext-111">
                                    <h4 style="line-height: 1.6923;">Blog : <?php echo $web_price1; ?></h4>
                                    <p><h4>Job Delivery : 3 working days</h4></p>
                                </div><br>
                                <div class="stext-111">
                                    <h4 style="line-height: 1.6923;"><strong>Packages Include</strong></h4>
                                    <h4><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Responsive</h4>
                                    <h4><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Single Domain</h4>
                                    <h4><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Best Hosting Servers</h4>
                                    <h4><i class="icon-check" style="color: #71aa68;"></i> &nbsp; 4Gb Bandwidth Storage</h4>
                                    <h4><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Multiple Custom Emails</h4>
                                    <h4><i class="icon-check" style="color: #71aa68;"></i> &nbsp; SEO Optimization</h4>
                                    <h4><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Double Admin Account</h4>
                                </div><br>
                                <div class="stext-109 cl2">
                                    <h5 style="color: #71aa68;">Would you prefer a bugdet?</h5>
                                </div>
                                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                    <select class="sell js-select2" id="showform" onchange="showhideForm(this.value);">
                                        <option value="no">Select option..</option>
                                        <option value="yes">Yes, i want a bugdet</option>
                                        <option value="no">No, the price is fine</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="bg0 m-b-12" id="pick" style="display:none">
                                    <div class="stext-109 cl2">
                                        <h5 style="color: #71aa68; padding-bottom: 10px;"><font style="color: #ff0000">*</font> Note that some packages will be limited once a budget is set <font style="color: #ff0000">*</font>
                                        </h5>
                                    </div>
                                    <i class="icon"><?php echo $symbol ?></i>
                                    <?php echo $price_range; ?>
                                </div>
                                <div id="job" class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                    <select name="des" class="sell js-select2">
                                        <option>Job Description</option>
                                        <option>Fashion</option>
                                        <option>News</option>
                                        <option>Inspirational</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="bor8 bg0 m-b-12">
                                    <textarea name="message" class="form-control stext-111 cl8 plh3 size-111 p-lr-15" rows="4" placeholder="Anything you need tell us?"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12 m-lr-auto m-b-50">
                            <div class="how-shadow1 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                                <h4 class="mtext-109 cl2 p-b-30 text-center">Order Details</h4>
                                <div class="flex-w flex-t bor12 p-b-13">
                                    <div class="">
                                        <span class="stext-110 cl2">Please fill out all fields</span>
                                    </div>
                                    
                                </div>
                                <div class="size-2009 p-r-18 p-r-0-sm w-full-ssm">
                                    <div class="p-t-15">
                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Full name" required>
                                            
                                        </div>
                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                            <select name="country" class="sell js-select2">
                                                <option>Select Country...</option>
                                                <?php
                                                    $product_array = $db_handle->runQuery("SELECT * FROM country ORDER BY id ASC");
                                                    if (!empty($product_array)) {
                                                    foreach($product_array as $key=>$value){
                                                ?>
                                                <option><?php echo $product_array[$key]["name"]; ?></option>
                                                <?php
                                                }
                                                }
                                                ?>
                                                <
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State of residence" required>
                                        </div>
                                        <div class="bor8 bg0 m-b-22">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Address" required>
                                        </div>
                                        <div class="bor8 bg0 m-b-22">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="contact" placeholder="Contact no" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-t p-t-27 p-b-33">
                                    <input type="checkbox" name="validate" <?php if (isset($validate) && $validate=="agree") echo "checked";?> value="agree" required>&nbsp;&nbsp;<span class="stext-111 cl8 ">I agree to the <a href="" style="color: #999; text-decoration: none; border-bottom: 1px dotted;">Terms of use</a></span>
                                </div>
                                <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Place Order
                                </button>
                            </div>
                       </div>
                    </div>
                </div>
            </form>
        </section>




















            <!-- Start Footer Section-->
            <footer class="footer pt-80">
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
              $("#head-title").typed({
                strings: ["We make websites^1000", "24/7 available for hire^1000" ,"Web design with diffence and solitude^1000"],
                typeSpeed: 100,
                loop: true,
                startDelay: 100
              });
          });
        </script>
        
</body>
</html>