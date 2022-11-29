<?php
    session_start(); // Starts the session and it must be the FIRST code in the file.


    // Gets the product data from the items.json file.
    $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/items.json");
    $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array
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

        a:hover {
            color: blue;
        }

    </style>


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
  <link rel="shortcut icon" type="image/x-icon" href="https://i.pinimg.com/736x/ee/aa/23/eeaa23e8ee7df71f341c4967a2d07ef1.jpg" />
  
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
            <!-- Site     Logo -->
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
			<div class="col-md-4 col-xs-12 col-sm-4"></section><!-- End Top Header Bar -->
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
 
    <footer class="  text-center" id="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-media">
                    <h2> 
                    <html>
                        <head> <hr>
                            <title>Detect Browser in JavaScript</title>
                        </head>
                        <body>
                            <h1></h1>
                            <script>
                                var browserName = (function (agent) {
                                switch (true) {
                                    case agent.indexOf("edge") > -1: return "MS Edge";
                                    case agent.indexOf("edg/") > -1: return "Edge ( chromium based)";
                                    case agent.indexOf(    "opr") > -1 && !!window.opr: return "Opera";
                                    case agent.indexOf("chrome") > -1 && !!window.chrome: return "Chrome";
                                    case agent.indexOf("trident") > -1: return "MS IE";
                                    case agent.indexOf("firefox") > -1: return "Mozilla Firefox";
                                    case agent.indexOf("safari") > -1: return "Safari";
                                    default: return "other";
                                }
                            })(window.navigator.userAgent.toLowerCase());

                            document.querySelector("h1").innerText="You are using "+ browserName +" browser!";  
                            </script>
                        </body>
                    </html> </h2><br>
                    
                    <div class="" role="alert"><i class=""></i><?php 
                         echo $_SESSION["cartMessage"]."<br>";
                         $_SESSION["cartMessage"] = '';
                        //  echo count($_SESSION["shoppingCart"]);
                        ?>
                    </div>
                </div>
                <!-- / .nav .navbar-nav -->

			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<!-- https://codyhouse.co/demo/hero-slider/index.html -->
<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicon/favicon-16x16.png">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="Hero_Slider/File1.css"> 
<link rel="stylesheet" href="Hero_Slider/file2.css"> 
<link rel="stylesheet" href="css/demo.css"> 
<title>Hero Slideshow | CodyHouse</title>
</head>
<body>
<header class="cd-header">
<!-- <div class="cd-header__logo"><a href="#0"><img src="assets/cd-logo.svg" alt="Logo"></a></div> -->
<!-- <nav class="cd-header__nav js-cd-header__nav">
<ul> -->
<!-- <li><a href="#0">Home</a></li>
<li><a href="#0">Portfolio</a></li>
<li><a href="#0">Contact</a></li> -->
</ul>
</nav> 
</header>
<section class="cd-hero js-cd-hero js-cd-autoplay">
    <ul class="cd-hero__slider">
        <li class="cd-hero__slide cd-hero__slide--selected js-cd-slide">
            <div class="cd-hero__content cd-hero__content--full-width">
                <h2>Pooches</h2>
                <p>Leading Pet Brand for Accessiories.</p>
                <a href="shop.php" class="cd-hero__btn">Check out our Shop!</a>
            </div> 
        </li>
        <li class="cd-hero__slide js-cd-slide">
            <div class="cd-hero__content cd-hero__content--half-width">
                <h2>Questions/Comments?</h2>
                <p>Please click on the links to access our Contact Page. </p>
                <a href="contact.php" class="cd-hero__btn">Questions</a>
                <a href="contact.php" class="cd-hero__btn cd-hero__btn--secondary">Comments</a>
            </div> 
            <div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
                <img src="https://i.pinimg.com/736x/ee/aa/23/eeaa23e8ee7df71f341c4967a2d07ef1.jpg" height="400px" alt="Pooches">
            </div> 
        </li>
        <li class="cd-hero__slide js-cd-slide">
            <div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
                <img src="https://d3544la1u8djza.cloudfront.net/APHI/Blog/2020/05-14/How+Do+Dogs+Get+Hernias+_+ASPCA+Pet+Insurance+_+shiba+inu+with+an+orange+collar+resting+on+a+tan+chair-min.jpg" alt="tech 2">
            </div> 
            <div class="cd-hero__content cd-hero__content--half-width">
                <h2>Done Purchasing?</h2>
                <p>Head Over to Cart to finalize you're order.</p>
                <a href="cart.php" class="cd-hero__btn">Cart</a>
                <a href="#0" class="cd-hero__btn cd-hero__btn--secondary">Search Products</a>
            </div> 
        </li>
    </ul> 
    <div class="cd-hero__nav js-cd-nav">
        <nav>
            <span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>
            <ul>
                <li><a href="#0">Pooches</a></li>
                <li><a href="#0">Help</a></li>
                <li><a href="#0">Cart</a></li>
                <!-- <li><a href="#0">Image</a></li> -->
            </ul>
        </nav>
    </div> 
</section> 
<main class="cd-main-content">

</main> 

<div class="demo-avd demo-avd-cf demo-avd--dark js-demo-avd" style="bottom: 30px; left: 30px; top: auto;"></div>
<script src="Hero_Slider/file1.js"></script> 
<!-- <script src="Hero_Slider/file2.js"></sc -->



<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Trendy Products</h2>
			</div>
		</dv>
		<div class="row">
            <?php
                foreach ($productData as $key => $val) {
                    echo '<div class="col-md-4">';
                        echo '<div class="product-item">';
                            echo '<div class="product-thumb">';
                                echo '<img style="height: 200px" class="img-responsive" src="'.$val['images'][0].'" alt="product-img" />';
                                echo '<div class="preview-meta">';
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="product-content">';
                                echo '<h4><a href="/product.php?uid='.$key.'">'.$val['name'].'</a></h4>';
                                echo '<p class="price">$'.$val['price'].'</p>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
		</div>
	</div>
</section>


<section class="section instagram-feed">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>SPOOFES Copyright ©2022</h2>
                  
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="instagram-slider" id="instafeed" data-accessToken="IGQVJYeUk4YWNIY1h4OWZANeS1wRHZARdjJ5QmdueXN2RFR6NF9iYUtfcGp1NmpxZA3RTbnU1MXpDNVBHTzZAMOFlxcGlkVHBKdjhqSnUybERhNWdQSE5hVmtXT013MEhOQVJJRGJBRURn"></div>
			
            </div>
		</div>
	</div>
</section>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; 
?>


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
