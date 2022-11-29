<?php session_start(); // Starts the session and it must be the FIRST code in the file.
 
    $itemCount = NULL;
    $costOfGoodsItem = NULL;
    $costOfGoodsCart = NULL;
    $taxRate = .05;
    $costOfShipping = 4.99;

foreach ($_SESSION["shoppingCart"] as $key => $item) {
    $costOfGoodsItem = $item['qty']*$item['price'];
    $costOfGoodsCart =  $costOfGoodsCart+$costOfGoodsItem;
    $itemCount++;
}

$costOfTax = $costOfGoodsCart*$taxRate;
$finalCost = $costOfGoodsCart+$costOfTax+$costOfShipping;


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Pets | E-commerce</title>

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
                <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';  ?>
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
                        <h2 class="text-center">For your payment</h2><br>
                        <p>Your Confirmation Number is</p> 
                        <?php
                            echo'#'.(rand() . "<br>");
                        ?>
                        <p>Your Expected Delivery is 
                            <?php
                            $i = 0;
                            $weekday = array(); // Create Array
                            $weekday['1'] = 'Sunday';
                            $weekday['2'] = 'Monday';
                            $weekday['3'] = 'Tuesday';
                            $weekday['4'] = 'Wednesday';
                            $weekday['5'] = 'Thursday';
                            $weekday['6'] = 'Friday';
                            $weekday['7'] = 'Saturday';
                            while ($i < 1) {
                                echo $weekday[rand(1,7)];
                                $i++; 
                            }
                            ?>
                            <br>
                            Your Name is: <?php ?><br>
                            Your Email is: <?php ?><br>
                            Your Phone number is: <?php ?><br>
                            Your Delivery Address is: <?php ?><br>
                            <hr>

                        </p>
                        
                    </div>
                    <div class="product-checkout-details">
                        <div class="block">
                            <h4 class="widget-title">Order Summary</h4>
                            <?php 

                                foreach ($_SESSION["shoppingCart"] as $key => $item) {

                                    $colorData = explode("|",$item['color']);
                                    $color = $colorData[0];
                                    $imageURL = $colorData[1];

                                    echo '
                                    <div class="media product-card">
                                        <a class="pull-left" href="'.$colorData[1].'">
                                        <img class="media-object" src="'.$colorData[1].'" alt="Image" />
                                        </a>
                                        <div class="media-body">
                                        <h4 class="media-heading">'.$item['name'].'</h4>
                                        <p class="price">'.$item['qty'].' x $'.$item['price'].'</p>
                                        </div>
                                    </div>';
                                }
                            ?>
                            <hr>                    
                            <div class="summary-total">
                                <span>Total</span>
                                <span><?php echo money_format('$%i',$finalCost); ?></span>
                            </div><br>
                            <a href="/home.php" class="btn btn-main mt-20">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.page-warpper -->

    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';  ?>

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