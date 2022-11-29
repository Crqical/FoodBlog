<?php
    session_start(); // Starts the session and it must be the FIRST code in the file.

    if(isset($_GET['clearItem'])) {
        // id index exists
        $removeItem = $_GET['clearItem'];
        // echo "item #$removeItem will be cleared";
        unset($_SESSION['shoppingCart'] [$removeItem]);
        
        header('Location: /cart.php');

    } elseif (isset($_POST['btnCheckout'])) {


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



    } elseif (isset($_POST['btnUpdateQty'])) {
        // Assume btnSubmit 
        
        $newQty = $_POST['qty'];
        $itemKey = $_POST['itemKey'];

        echo "update qty for item #$itemKey to $newQty";

        $_SESSION["shoppingCart"][$itemKey]['qty'] = $newQty;

        header('Location: /cart.php');

    } elseif (isset($_POST['btnRemove'])) {
        // Assume btnSubmit 
        echo "Remove Items clicked";
        
        unset($_SESSION['shoppingCart']);

        header('Location: /search.php');

    } elseif (isset($_POST['btnOrder'])) {
        // Assume btnSubmit 

        header('Location: /checkoutRedirect.php');

    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dataVis = "visable";
        $formVis = "none";
    } else {
        $dataVis = "none";
        $formVis = "visable";
    }


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
					<h1 class="page-name">Checkout</h1>

				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">

                <form  action="/checkout.php" method="post" class="checkout-form">
                    <div class="block billing-details">
                        <h4 class="widget-title">Shipping Details</h4>
                            <div class="form-group">
                                <select class="form-control" id="shippingSpeed">
                                    <option value="" selected="selected">Select Shipping</option>
                                    <option value="AL">Standard 10 days</option>
                                    <option value="AK">Express 3 days</option>
                                    <option value="AZ">Overnight 1 day</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="user_address">Address</label>
                                <input type="text" class="form-control" id="user_address" placeholder="">
                            </div>
                            <div class="checkout-country-code clearfix">
                                <div class="form-group">
                                <label for="user_post_code">Zip Code</label>
                                <input type="text" class="form-control" id="user_post_code" name="zipcode" value="">
                                </div>
                                <div class="form-group" >
                                <label for="user_city">City</label>
                                <input type="text" class="form-control" id="user_city" name="city" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="user_country">
                                    <option value="" selected="selected">Select a State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                    </div>
                    <div class="block">
                        <h4 class="widget-title">Payment Information</h4>
                        <p>Credit Card Details (Secure payment)</p>
                        <div class="checkout-product-details">
                            <div class="payment">
                                <div class="card-details">
                                    <div class="form-group">
                                        <label for="full_name">Full Name</label>
                                        <input type="text" class="form-control" id="full_name" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="full_name">Email Address</label>
                                        <input type="text" class="form-control" id="full_name" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="card-number">Card Number <span class="required">*</span></label>
                                        <input  id="card-number" class="form-control"   type="tel" placeholder="•••• •••• •••• ••••">
                                    </div>
                                    <div class="form-group half-width padding-right">
                                        <label for="card-expiry">Expiry (MM/YY) <span class="required">*</span></label>
                                        <input id="card-expiry" class="form-control" type="tel" placeholder="MM / YY">
                                    </div>
                                    <div class="form-group half-width padding-left">
                                        <label for="card-cvc">Card Code <span class="required">*</span></label>
                                        <input id="card-cvc" class="form-control"  type="tel" maxlength="4" placeholder="CVC" >
                                    </div>
                                    <p>Billing Details </p>
                                    <div class="form-group">
                                        <label for="user_address">Address</label>
                                        <input type="text" class="form-control" id="user_address" placeholder="">
                                    </div>
                                    <div class="checkout-country-code clearfix">
                                        <div class="form-group">
                                            <label for="user_post_code">Zip Code</label>
                                            <input type="text" class="form-control" id="user_post_code" name="zipcode" value="">
                                        </div>
                                        <div class="form-group" >
                                            <label for="user_city">City</label>
                                            <input type="text" class="form-control" id="user_city" name="city" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="user_country">
                                            <option value="" selected="selected">Select a State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <input type="submit" name="btnOrder" class="btn btn-main mt-20" value="Place Order">
                                    <br>
                                    <input type="submit" name="btnRemove" class="btn btn-main mt-20" value="Reset">
                                    
                                </div>
                            </div>
                        </div>
                  </div>
                </form>
            </div>
            <div class="col-md-4">
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
                     <ul class="summary-prices">
                        <li>
                           <span>Total number of Items:</span>
                           <span class="price"><?php echo count($_SESSION["shoppingCart"]);?></span>
                        </li>
                        <li>
                           <span>Subtotal:</span>
                           <span class="price"><?php echo money_format('$%i',$costOfGoodsCart); ?></span>
                        </li>
                        <li>
                           <span>Shipping:</span>
                           <span><?php echo money_format('$%i',$costOfShipping); ?></span>
                        </li>
                     </ul>
                     <div class="summary-total">
                        <span>Total</span>
                        <span><?php echo money_format('$%i',$finalCost); ?></span>
                     </div>
                     <div class="verified-icon">
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <input class="form-control" type="text" placeholder="Enter Coupon Code">
                  </div>
                  <button type="submit" class="btn btn-main">Apply Coupon</button>
               </form>
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
    


  </body>
  </html>