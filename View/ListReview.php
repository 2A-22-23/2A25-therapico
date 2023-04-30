<?php
include '../Controller/reviewR.php';
$reviewR= new reviewR();
$list = $reviewR->Listreview();
?>




<html>
  
<head>
<meta name="color-scheme" content="Light">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="msapplication-navbutton-color" content="#061948">
<meta name="theme-color" content="#061948">
<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">

		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  </head>
    <body>
         <style>
*{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
}
.testimonials{
  padding: 40px 0;
  background: #f1f1f1;
  color: #434343;
  text-align: center;
}
.inner{
  max-width: 1200px;
  margin: auto;
  overflow: hidden;
  padding: 0 20px;
}

.border{
  width: 160px;
  height: 5px;
  background: #6ab04c;
  margin: 26px auto;
}

.row{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.col{
  flex: 33.33%;
  max-width: 33.33%;
  box-sizing: border-box;
  padding: 15px;
}
.testimonial{
  background: #fff;
  padding: 30px;
}
.testimonial img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
.name{
  font-size: 20px;
  text-transform: uppercase;
  margin: 20px 0;
}
.stars{
  color: #6ab04c;
  margin-bottom: 20px;
}


@media screen and (max-width:960px) {
.col{
  flex: 100%;
  max-width: 80%;
}
}

@media screen and (max-width:600px) {
.col{
  flex: 100%;
  max-width: 100%;
}
}
            </style>
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
            <li><a href="ListReview.php">Reviews</a></li>
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
            <li>
            <a href="add_paiment.php"><img src="images/icon/money.png"></a>
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
       
       <div class="testimonials">
      <div class="inner">
        <h1>Reviews</h1>                
        <div class="border"></div>
        <div class="row">
<?php
        foreach ($list as $review) {
        ?>
            <tr>
            
          <div class="col">
            <div class="testimonial">
              <img src="images/user.png" alt="">
              <div class="name"><?= $review['fullname']; ?></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
              <?= $review['review']; ?>
              </p>
            </div>
          </div>
               
                
             
      
        
                              
               
        
            </tr>
        <?php
        }
        ?>

<center><a href="addReview.php"> <img src="images/addreview.png" > </a></center>

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

              