<?php session_start(); // Starts the session and it must be the FIRST code in the file.

$name = strtolower($_POST['fName']); 
        $name = ucfirst($name);

          $email = $_POST ['email'];
           $subject = $_POST ['subject'];
           $message = $_POST ['message'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Pooches</title>

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
  <link rel="stylesheet" href="/CSS/file1.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="/CSS/file2.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="/CSS/file3.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="/CSS/file4.css">
  <link rel="stylesheet" href="/CSS/file5.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/CSS/file6.css">

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
				</div>
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
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

            <!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Contact Us</h1>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
    $firstName = strtolower($_POST['fName']); 
            $firstName = ucfirst($firstName);

        $lastName = strtolower($_POST['lName']); 
            $lastName = ucfirst($lastName);

            $month = $_POST ['month'];
            $year = $_POST ['year'];
            $day = $_POST ['day'];
            $color = $_POST ['color'];
            $phone = $_POST ['phone'];
            $email = $_POST ['email'];
            $url = $_POST ['url'];
            $firstNamelength = strlen("$firstName");
            $lastNamelength = strlen("$lastName");
            $fullBirth= $year."-".$month."-".$day ;

            $fullNamelength = strlen($firstName.$lastName);
            


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dataVis = "visable";
        $formVis = "none";
    } else {
        $dataVis = "none";
        $formVis = "visable";
    }

?>

<style>
    body {
        background-color: <?php echo $color ?>;

    }
    .data{ 
        color: <?php echo$change;?>;

    }
    .dataVis {
        display: <?php echo $dataVis;?>;
    }

    .formVis {
        display: <?php echo $formVis;?>;
    }

</style>


<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="/contact.php" role="form">
         
            <div class="form-group">
                <div class= "formVis">

                    <form action="contact.php" method="post">
                        <label for="fName" >First name:</label><br>
                        <input type="text"name="fName" value="" class="form-control"><br>

                        <label for="lName">Last name:</label><br>
                        <input type="text" class="form-control" name="lName" value =""><br>

                        <label for="url">Phone Number:</label><br>Format / (000)000-0000
                        <input type="text"name="phone" class="form-control" value=""><br>

                        <label for="url">Email:</label><br> Format / ????@gmail.com
                        <input type="text"name="email" class="form-control" value=""><br>

                        <label for="url">Subject:</label><br>
                        <input type="text"name="subject" class="form-control" value=""><br>

                        <label for="url">Message:</label><br>
                        <input type="text"name="message" class="form-control" value=""><br>
                        
                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                        </div>   
                    </form> 

                    <div class="contact-details col-md-8" >
                        <br>
                        <ul class="contact-short-info" >
                            <li>
                            <img class="tf-ion-ios-home" src="https://static.vecteezy.com/system/resources/previews/000/425/085/large_2x/house-icon-vector-illustration.jpg" alt="Girl in a jacket" width="20px">
                                <span>El Cajon, California</span>
                            </li>
                            <li>
                            <img class="tf-ion-ios-home" src="https://static.vecteezy.com/system/resources/previews/002/079/984/large_2x/phone-icon-flat-style-isolated-on-grey-background-telephone-symbol-call-illustration-sign-for-web-and-mobile-app-free-vector.jpg" alt="Girl in a jacket" width="20px">
                                </i>
                                <span>Phone: (619) 668-6000 </span>
                            </li>
                            <li>
                            <img class="tf-ion-ios-home" src="https://cdn-icons-png.flaticon.com/512/44/44386.png" alt="Girl in a jacket" width="20px">
                                <span>Fax: (619) 668-6000</span>
                            </li>
                            <li>
                            <img class="tf-ion-ios-home" src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Girl in a jacket" width="20px">
                                <span>Email: 349632@guhsd.net</span>
                            </li>
                        </ul>
                        <div class="social-icon">
                            
                        </div>
                        <!--/. End Footer Social Links -->
                    </div>
				    <!-- / End Contact Details -->
                </div>
                <!-- FEED BACK AND OUTPUT -->
                <!-- FEED BACK AND OUTPUT -->
                <!-- FEED BACK AND OUTPUT -->
                <!-- FEED BACK AND OUTPUT -->
                <div class="dataVis">
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

                                            echo "First Name: $firstName <br>";
                                            echo "Last Name: $lastName <br>";
                                            echo "Email: $email <br>";
                                            echo "Phone: $phone <br>";
                                            echo "Subject: $subject <br>";
                                            echo "Message: $message <br>";
                                        
                                            ?><hr><br>
                                            
                                            <div class="social-icon">
                                                <h2 class="text-center">Contact Us On FaceBook/Twitter!</h2><br>
                                                <ul>
                                                    <li><a class="fb-icon" href=""><img class="tf-ion-social-facebook" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" alt="Girl in a jacket" width="48px"></i></a></li>
                                                    <li><a href=""><img class="tf-ion-social-twitter" src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" alt="Girl in a jacket" width="48px"></i></a></li>
                                                    <li><a href=""><img class="tf-ion-social-dribbble-outline" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" alt="Girl in a jacket" width="48px"></i></a></li>
                                                    <li><a href=""><img class="tf-ion-social-googleplus-outline" src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" alt="Girl in a jacket" width="48px"></i></a></li>
                                                    <li><a href=""><img class="tf-ion-social-pinterest-outline" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" alt="Girl in a jacket" width="48px"></i></a></li>
                                                </ul>
                                            </div>
                                            <!--/. End Footer Social Links -->
                                            
                                        <a href="/home.php" class="btn btn-main mt-20">Continue Shopping</a><br>
                                        <a href="/contact.php" class="btn btn-main mt-20">Reset Form</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- /.page-warpper -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!-- FEED BACK AND OUTPUT -->
<!-- FEED BACK AND OUTPUT -->
<!-- FEED BACK AND OUTPUT -->
<!-- FEED BACK AND OUTPUT -->
<!-- FEED BACK AND OUTPUT -->

	
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>


    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="/javascript/file1.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="/javascript/file2.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="/javascript/file3.js"></script>
    <!-- Instagram Feed Js -->
    <script src="/javascript/file4.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="/javascript/file5.js"></script>
    <!-- Count Down Js -->
    <script src="/javascript/file6.js"></script>

    <!-- slick Carousel -->
    <script src="/javascript/file7.js"></script>
    <script src="/javascript/file8.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="/javascript/googlemap.js"></script>

    <!-- Main Js File -->
    <script src="/javascript/main.js"></script>
    


  </body>
  </html>