<?php
    session_start(); // Starts the session and it must be the FIRST code in the file.
    require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; 
    unset($_SESSION['siteOwner']);  // Deletes the session variable for "siteOwner".

    // Gets the product data from the items.json file.
    $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/items.json");
    $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array

    $typeFilter = NULL;
    $speciesFilter = NULL;
    $searchTerm = NULL;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['btnSearch'])) {
            $typeFilter = $_POST['typeValue'];
            $speciesFilter = $_POST['genderValue'];

            $searchTerm = $_POST['keyWord'];
                if(strlen($_POST['keyWord'])<1) {
                    $searchTerm = "NULL";
                }

            $whereAreWe = "search btn pressed  | $typeFilter | $speciesFilter | $searchTerm ";
        } else {
            $whereAreWe = "post detected, no search";
        }
    } else {
        $whereAreWe = "navigated, no post";
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
            <?php mainMenu() ?>
                <!-- / .nav .navbar-nav -->

			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Shop</h1>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="widget product-category">
					<h4 class="widget-title">Sort BY</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
					  	<div class="panel panel-default">
                            <div class="panel-body">
                                <form method="post" action="/shop.php">
                                    <select id="species" name="species" class="form-control">
                                        <option>Pet Type</option>
                                        <option>Dog</option>
                                        <option>Cat</option>
                                        <option>Both</option>
                                    </select> <br>
                                    <select id="type" name="type" class="form-control">
                                        <option>Pet Items</option>
                                        <option>Collars</option>
                                        <option>Beds</option>
                                        <option>Clothing</option>
                                        <option>Toys</option>
                                    </select><br>
                                    <select id="price" name="price" class="form-control">
                                        <option>Price</option>
                                        <option>$0-$10</option>
                                        <option>$11-$20</option>
                                        <option>$21+</option>
                                    </select>
                                    <br>
                                    <div class="form-group">
                                        <label for="search">Product Search: </label>
                                        <input  id="search" name="search" class="form-control" type="text" placeholder="Search Here">
                                    </div>
                                    <input class="btn btn-main btn-small btn-round" type="submit" name="btnSearch" value="Search">
                                    <br><br>
                                </form>
                            </div>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
                    <?php
                        foreach ($productData as $key => $val) {
                            echo '<div class="col-md-3">';
                                echo '<div class="product-item">';
                                    echo '<div class="product-thumb">';
                                        echo '<img style="height: 160px" class="img-responsive" src="'.$val['images'][0].'" alt="product-img" />';
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
		</div>
	</div>
</section>




<?php footer() ?>

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
    <!-- Count Down Js -->  <script src="/javascript/file6.js"></script>
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
