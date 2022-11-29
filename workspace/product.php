<?php
    session_start(); // Starts the session and it must be the FIRST code in the file.

    // Gets the product data from the items.json file.
    $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/items.json");
    $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array

    $uid = $_GET['uid'];

    foreach ($productData as $key => $val) {
        if ($key == $uid) {
            $name = $val['name'];
            $price = $val['price'];
            $description = $val['description'];
            $type = $val['type'];
            $color = $val['color'];
            $images = $val['images'];
            $qty = $val['qty'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>POOCHES</title>

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

                <!-- Navbar Links -->
                <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';  ?>
                <!--/.navbar-collapse -->
                <hr>
                
            </div><!-- / .container -->
           
            
                
          
        </nav>
    </section>
    <section class="single-product">
        <div class="container">
            <div class="row mt-20">
                <div class="col-md-5">
                    <div class='item active'>
                        <img style="width: 460px" id="imageDisplayed" src='<?php echo $images[0];?>' alt='' />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-details">
                        <h2><?php echo $name;?></h2><br>
                        <h4 class="product-price"><?php echo money_format('$%i',$price);?></h4>
                        <br>
                        
                        <form action="/cartAddRedirect.php" method="post">

                            <div class="product-size">
                                <span>Color:</span>
                                <select class="form-control" name="productColor" id="productColor" onchange="updateImage()">
                                    <?php
                                        foreach ($color as $color){
                                            echo '<option value="'.$color[0].'|'.$color[1].'">'.$color[0].' </option>';
                                        } 
                                    ?>  
                                </select>
                            </div>

                            <div class="product-quantity">
                                <span>Quantity:</span>
                                <div class="product-quantity-slider">
                                    <input type="number" name="qty" min="1" max="30" value="<?php $item['qty'] ?>">
                                </div>

                            </div><br><br>

                            <input type="submit" value="Submit">
                              
                            <input type="hidden" name="uid" value="<?php echo $uid;?>">
                        </form>

                    </div><br><br>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="tabCommon mt-20">
                                <div class="tab-content patternbg">
                                    <div id="details" class="tab-pane fade active in">
                                        <h4>Product Description</h4>
                                        <p><?php echo $description;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script>

                function updateImage() {
                var colorValue = document.getElementById("productColor").value;
                    colorValue = colorValue.split('|');

                    var colorName = colorValue[0];
                    var colorURL = colorValue[1];

                    // Change the Displayed Images URL
                    document.getElementById("imageDisplayed").src = colorURL;
                // alert(colorName);
            }
            
       </script>

  </body>
</html>