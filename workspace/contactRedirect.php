

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="CSS/file1.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="CSS/file2.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="CSS/file3.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="CSS/file4.css">
  <link rel="stylesheet" href="CSS/file5.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="CSS/file6.css">

</head>

<body id="body">
    <!-- Start Top Header Bar -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">

                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Site Logo -->
                    <div class="logo text-center">
                        <a href="index.html">
                            <!-- replace logo here -->
                            <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                                    font-family="AustinBold, Austin" font-weight="bold">
                                    <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                        <text id="AVIATO">
                                            <tspan x="108.94" y="325">POOCH</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    </ul><!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="/home.php">Home</a>
					</li><!-- / Home -->

					<!-- contact -->
					<li class="dropdown ">
						<a href="/contact.php">Contact</a>
					</li><!-- / contact -->

					<!-- shop -->
					<li class="dropdown ">
						<a href="/shop.php">Shop</a>
					</li><!-- Shop -->
                    
					<!-- cart -->
					<li class="dropdown ">
						<a href="/cart.php">Cart</a>
					</li><!-- cart -->
                    
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>
<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
       
          <h2 class="text-center">Thank You!</h2>
          <h2 class="text-center">We Apriciate your Feedback</h2><br>

<hr>
          <?php

            echo "Name: $name <br>";
            echo "Email: $email <br>";
            echo "Subject: $subject <br>";
            echo "Message: $message <br>";
         
            ?><hr><br>

          <a href="/home.php" class="btn btn-main mt-20">Continue Shopping</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.page-warpper -->

<footer class="footer section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <ul class="footer-menu text-uppercase">
                        <li>
                            <a href="contact.html">CONTACT</a>
                        </li>
                        <li>
                            <a href="shop.html">SHOP</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="contact.html">PRIVACY POLICY</a>
                        </li>
                    </ul>
                    <p class="copyright-text"> Designed &amp; Developed by Eibil Yousibe / Angela Buchman</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="javascript/file1.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="javascript/file2.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="javascript/file3.js"></script>
    <!-- Instagram Feed Js -->
    <script src="javascript/file4.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="javascript/file5.js"></script>
    <!-- Count Down Js -->
    <script src="javascript/file6.js"></script>

    <!-- slick Carousel -->
    <script src="javascript/file7.js"></script>
    <script src="javascript/file8.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="javascript/googlemap.js"></script>

    <!-- Main Js File -->
    <script src="javascript/main.js"></script>
    


  </body>
  </html>