<?php session_start(); // Starts the session and it must be the FIRST code in the file.

    // Gets the product data from the items.json file.
    $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/items.json");
    $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array


    $itemCount = NULL;
    $costOfGoodsItem = NULL;
    $costOfGoodsCart = NULL;
    $taxRate = .05;
    $costOfShipping = 4.99;

    foreach ($_SESSION["shoppingCart"] as $key => $item) {
        $costOfGoodsItem = $item['qty']*$item['price'];
        $costOfGoodsCart =  $costOfGoodsCart+$costOfGoodsItem;
        $itemCount = $item['qty'];
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
  <link rel="shortcut icon" type="image/x-icon" href="https://i.pinimg.com/736x/ee/aa/23/eeaa23e8ee7df71f341c4967a2d07ef1.jpg" />
  
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
  <link rel="stylesheet" href="/CSS/bootstrap.css">

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

            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
            
		</div><!-- / .container -->
	</nav>
</section>


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="page-wrapper">
    <div class="cart shopping">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="block">
                        <div class="product-list">
                        <h4>Total number of Items: <?php echo count($_SESSION["shoppingCart"]);?></h4><br>
                            
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="">Item Name</th>
                                            <th class="">Item Price</th>
                                            <th class="">Quantity</th>
                                            <th class="">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php

                                        foreach ($_SESSION["shoppingCart"] as $key => $item) {

                                            $colorData = explode("|",$item['color']);
                                            $color = $colorData[0];
                                            $imageURL = $colorData[1];

                                            echo '<tr class="">
                                                    <td class="">
                                                        <div class="product-info">
                                                            <img width="80" src="'.$colorData[1].'" alt="" />
                                                            <a href="#!">'.$item['name'].'</a>
                                                        </div>
                                                    </td>
                                                    <td class="">$'.$item['price'].'</td>
                                                    <form action="/checkout.php" method="post">
                                                        <td class=""><input type="number" name="qty" min="1" max="30" value="'.$item['qty'].'"></td>

                                                        <td class="">
                                                            <input type="hidden" name="itemKey" value="'.$key.'"><br>

                                                            <input type="submit" name="btnUpdateQty" value="Update Qty"><br><br>
                                                        </form>
                                                        <form action="/checkout.php" method="post">
                                                            <a class="product-remove" href="/checkout.php?clearItem='.$key.'">Remove Item #'.$key.'</a>
                                                        </form>
                                                    </td>
                                                </tr>';
                                        }

                                    ?>
                                   

                                </tbody>
                                </table>
                                <hr>
                                <?php echo "Cart Subtotal: ".money_format('$%i',$costOfGoodsCart);?><br>
                                <?php echo "Tax Rate: ".$taxRate; ?><hr>
                                <?php echo "Total Cost: ".money_format('$%i',$finalCost); ?>
                            
                                
            
                                <form action="/checkout.php" method="post">
                                    <input type="submit" name="btnCheckout" class="btn btn-main pull-right" value="Checkout"><br><br>

                                    <hr>
                                    <input type="submit" name="btnRemove" class="btn btn-main pull-right" value="Reset"><br><br><br><br>
                                </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    <script src="/javascript/file6.js"></script>
    <!-- slick Carousel -->
    <script src="/javascript/file7.js"></script>
    <script src="/javascript/file8.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="/javascript/googlemap.js"></script>

    <!-- Main Js File -->
    <script src="/javascript/main.js"></script> 
    <script src="/javascript/changeColor.js"></script>
    


  </body>
  </html>
