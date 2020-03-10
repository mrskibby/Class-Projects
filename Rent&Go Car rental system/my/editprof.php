<!DOCTYPE html>
<?php $username = $_GET['id']; ?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Rent&Go</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
input[type=text] {
  width: 50%;
  padding: 10px;
  margin: 3px 0;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px;
}

input[type=text]:focus {
  background-color: yellow;
}

input[type=submit]{
  background-color: yellow;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                       <i class="fa fa-map-marker"></i> Skudai, Johor Bahru, Malaysia
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +60 0123456789
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Weekdays 09.00 - 17.00 Weekends 09.00 - 15.30
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="index.html">Home</a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="car-right-sidebar.html">Cars</a>

                                </li>
                                <li><a href="help-desk.html">Help Desk</a></li>
                                <li><a href="user-map.php">Delivery</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="contact.html">Contact</a></li>
								<li class="active"><a href="Account.php">Account</a></li>
								<li><a href="booking.html">Booking</a></li>
								<li><a href="Log out\index.html">Log Out</a></li>

                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Profile Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Customer</h2>
						 <img style="width:20%; length: 20%;" src="assets/img/profile.png" alt="JSOFT"><div><br>
                        <span class="title-line"><i class="fa fa-car"></i></span>

					</div>

					<br>
					<br>
					<div class="btn-group">


				<!-- <button type="button" onclick ="location.href='Account.html';" class="btn btn-secondary">Edit Profile</button> -->
				<button type="button" onclick ="location.href='message.html';" class="btn btn-secondary">Message</button>
				<!--<button  type="button" onclick ="#" class="btn btn-secondary">Settings</button>-->

				</div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="col">
                <!-- Section Title Start -->
				<!----Here supposed to start php for the registered info---->

                    <div class="section-title  text-center">
                        <h3>Edit Profile Info</h3>
                        <span class="title-line"><i class="fa fa-car"></i></span>

					</div>
					<form action="editprof_handler.php?id=<?php echo $username ?>" method="post">
						<form>
						<label for="fname">First Name</label> <br>
						<input type="text" id="fname" name="fname"> <br>
						<label for="lname">Last Name</label> <br>
						<input type="text" id="lname" name="lname"><br>
						<label for="fname">Phone Number</label> <br>
						<input type="text" id="phoneNo" name="phoneNo"> <br>
						<label for="lname">Email</label> <br>
						<input type="text" id="email" name="email"> <br><br>

						<input type="submit" value="Submit">
						</form>


						<!--<label><strong>First Name</strong></label><br>
						<label><strong>Last Name</strong></label><br>
						<label><strong>Phone Number</strong></label><br>
						<label><strong>Email</strong></label><br> -->

						</div>
                </div>

                <!-- Section Title End -->
            </div>

			 <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="col">
                <!-- Section Title Start -->
				<!----Here supposed to start php for the registered info---->

                   <!-- <div class="section-title  text-center">
                        <h3>Booked Car</h3>
                        <span class="title-line"><i class="fa fa-car"></i></span>

					</div>
						<div class="table">
						<table width="100%" border="0">
						<tr bgcolor='#CCCCCC'>
							<td><label><strong>Location</strong></label></td>
							<td><label><strong>Pick Date</strong></label></td>
							<td><label><strong>Return Date</strong></label></td>
							<td><label><strong>Car Type</strong></label></td>
							<td><label><strong>Update</strong></label></td>
						</tr>

						</table>
						</div>
                </div>

                <!-- Section Title End -->
            </div>

		<!-- Get Data From Database Start -->


		<!-- Get Data From Database End -->


        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>
