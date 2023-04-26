<?php

include '../Controller/reviewR.php';

$error1 = "";
// create contact
$review = null;

// create an instance of the controller for contact 
$reviewR  = new reviewR();

// check if all required fields are set in the POST request
if (

  isset($_POST["cin_p"]) &&
  isset($_POST["fullname"]) &&
  isset($_POST["email"]) &&
  isset($_POST["review"]) 
) {
  // check if all required fields are non-empty
  if (
	!empty($_POST["cin_p"]) &&
    !empty($_POST['fullname']) &&
    !empty($_POST["email"]) &&
    !empty($_POST["review"]) 
  ) {
    // create a new contact object with the input values
    $review = new review(
		null,
	  $_POST['cin_p'],
      $_POST['fullname'],
      $_POST['email'],
      $_POST['review']
    );

    

    // add the contact  to the database
    $reviewR->addreview($review);
    header('Location:index.html');
  } else {
    $error1 = "Missing information";
  }
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Therapico</title>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

		

			<!-- 
			=============================================
				Theme Header One
			============================================== 
			-->
			<header class="header-two">
				<div class="top-header">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-12">
								<ul class="left-widget">
									<li>Phone: +216 72 206 452</li>
									<li>
										<div id="polyglotLanguageSwitcher">
											<form >
												<select id="polyglot-language-options">
													<option id="en" value="en" selected>English</option>
													<option id="fr" value="fr">French</option>
													<option id="de" value="de">German</option>
													<option id="it" value="it">Italian</option>
													<option id="es" value="es">Spanish</option>
												</select>
											</form>
										</div> <!-- End #polyglotLanguageSwitcher -->
									</li>
								</ul>
							</div>
							<div class="col-md-6 col-sm-4 col-12">
								<ul class="social-icon">
									<!--	<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="https://www.facebook.com/malekjendoubii"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="si.html">Connexion</a></li>-->
									<li><a href="sign.html">Sign in/up</a></li>
									

									<li><button style="background-color:black ; border-color: white;color: #ccd1dd  "onclick="myFunction()"> Dark Mode</button></li>

								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo"><a href="index.html"><img class="logmer" src="images/logo/mylogo.png" alt=""></a></div>
							<!-- ============== Menu Warpper ================ -->
							<div class="menu-wrapper float-left">
								<nav id="mega-menu-holder" class="clearfix">
									<ul class="clearfix">
										<li class="active"><a href="index.html">Home</a></li>
										<li><a href="about.html">ABOUT US</a></li>
										
										<li><a href="service.html">Services</a></li>
										<li><a href="#">Services Presentation</a>
											<ul class="dropdown">
												<li><a href="blog.html">Patients' Service</a></li>
												<li><a href="blog-r.html">Blog Right Sidebar</a></li>
												<li><a href="blog-details.html">Blog Post</a></li>
											</ul>
										</li>
										<li><a href="addcontact.php">contact</a></li>
									</ul>
								</nav> <!-- /#mega-menu-holder -->
							</div> <!-- /.menu-wrapper -->
							<div class="right-widget float-right">
								<ul>
									<li class="cart-icon">
										<a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
									</li>
									<li class="search-option">
										<div class="dropdown">
											<button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
											<form class="dropdown-menu">
												<input type="text" Placeholder="Enter Your Search">
												<button><i class="fa fa-search"></i></button>
											</form>
										</div>
									</li>
								</ul>
							</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header>  <!-- /.header-one -->

			<!--
                        =============================================
                            Conatct us Section
                        ==============================================
                        -->
			<div class="contact-us-section section-spacing margintop-70">
				<div class="container">
					<div class="theme-title-one">
						<h2> HOW WAS YOUR EXPERIENCE ? </h2>
						<h6>It will be uploaded Anonymously </h6>
						
				
					</div> <!-- /.theme-title-one -->
				
				<div class="clearfix main-content no-gutters row">
						<div class="col-lg-5 col-12"><img src="images/contact.jpg"></div>
						<div class="col-lg-7 col-12">
						<div id="error1">
        <?php echo $error1; ?>
    </div>
      
						<div class="form-wrapper">

					<form action="" method="POST"  class="theme-form-one form-validation">
									<div class="row">
										
									<div class="col-sm-6 col-12"><input type="number"   id="cin_p"  placeholder="ID Card" name="cin_p"></div>
										<div class="col-sm-6 col-12"><input type="text"   id="fullname"  placeholder="Fullname" name="fullname"></div>
										<div class="col-sm-6 col-12"><input type="text"   id="email"  placeholder="E-mail" name="email"></div>
									
								
		
										<div class="col-12"><textarea placeholder="Review"  id="review" name="review"></textarea></div>
									</div> 
									 <!-- /.row  -->
									 <input type="submit" value="SEND REVIEW" class="theme-button-one">

								</form>  
							
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
				
				
			</div> <!-- /.contact-us-section -->



			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<!--<div class="google-map-two section-spacing"><div class="map-canvas"></div></div>--> 
			<div id="google_map"></div>




			<!--
			=============================================
				Compnay Branch Address
			==============================================
			-->




			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-two">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12 logo-widget">
								<div class="logo"><a href="index.html"><img class="logmer" src="images/logo/mylogo.png" alt=""></a></div>
								<p>Socials:</p>
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.logo-widget -->
							<div class="col-lg-2 col-sm-6 col-12 footer-list">
								<h6 class="title">EXPLORE</h6>
								<ul>
									<li><a href="about.html">About us</a></li>
									<li><a href="service.html">Service</a></li>
									<li><a href="blog.html">Service Presentation</a></li>
									<li><a href="addcontact.php">Contact us</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-lg-3 col-sm-6 col-12 footer-gallery">
								<h6 class="title">Gallery</h6>
								<div class="wrapper">
									<div class="row">
										<div class="col-4">
											<a href="images/footer/1.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/footer/1.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/footer/2.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/footer/2.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/footer/3.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/footer/3.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/footer/4.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/footer/4.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/footer/5.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/footer/5.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/footer/6.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/footer/6.jpg" alt=""></a>
										</div>
									</div>
								</div>
							</div> <!-- /.footer-gallery -->
							
							<div class="col-lg-3 col-sm-6 col-12 contact-widget">
								<h6 class="title">CONTACT</h6>
								<ul>
									<li>
										<i class="flaticon-direction-signs"></i>
									 108 Rue des pyramides, Cite Erriadh , Governorate Tunis .
									</li>
									<li>
										<i class="flaticon-multimedia-1"></i>
										<a href="#">Therapico.Care@gmail.com</a>
									</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<a href="#">+216 72 206 452</a>
									</li>
								</ul>
							</div> <!-- /.contact-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<p>DebuggerZ &copy; Copyrights 2023  / All Rights Reserved. </p>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer-two -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			



		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	    <!-- menu  -->
		<script src="vendor/menu/src/js/jquery.slimmenu.js"></script>

		<!-- js count to -->
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuGD3coNF7878XNZo0CulQkXUhGiB2X1k"></script>
		<script src="js/googlemap.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		<script>
			function myFunction() {
		  var element = document.body;
		  
		  element.classList.toggle("dark-mode");
		}
			</script>
			<script>
				let docTitle = document.title;
window.addEventListener("blur",() => {document.title = "Come back :("; })
window.addEventListener("focus",() => {document.title = doTitle; })

			</script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>

















