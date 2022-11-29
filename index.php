<?php session_start(); // Starts the session and it must be the FIRST code in the file.
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
   $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/blogs.json");
   $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array

  $subCat = $_GET['cat'];
  $uid =  $_GET['uid'];
  $kind1 = "vegan";
  $kind2 = "non-vegan";


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory HTML CSS Template
https://templatemo.com/tm-507-victory
-->
        <title>Tasties</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Delecious Food Recipes and Blogs</h2>
                    <div class="primary-button">
                        <a href="recipes.php">Check Out our Recipes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/cook_01.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>Post your Recipes!</h4>
                        <div class="contact-content">
                            <span>Click on this link!</span>
                            <h6> <a href="inquires.php">Inquires</a> </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/cook_02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="categories.php?cat=breakfast">
                        <img src="img/cook_breakfast.png" alt="Breakfast">
                        <h4>Breakfast</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="categories.php?cat=lunch">
                        <img src="img/cook_lunch.png" alt="Lunch">
                        <h4>Lunch</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="categories.php?cat=dinner">
                        <img src="img/cook_dinner.png" alt="Dinner">
                        <h4>Dinner</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="categories.php?cat=desserts">
                        <img src="img/cook_dessert.png" alt="Desserts">
                        <h4>Desserts</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="book-table">
        <div class="container">
            <div class="row">

 <h1>Sponsored Post</h1>
                  <?php 
                    randomAd();
                    adCount();      
                  ?>

            </div>
        </div>
    </section>
     

    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Blog posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php

               foreach ($productData as $key => $val) {
                 
                echo '<div class="col-md-6">
                    <div class="blog-post">
                        <img src="'.$val['images'][0].'" alt="" height="250px">
                        <div class="right-content">
                            <h4>'.$val['name'].'</h4>
                            <span>'.$val['themes'][0].', '.$val['themes'][1].', '.$val['themes'][2].'</span>
                            <p style="overflow: hidden; text-overflow: ellipsis; max-height: 20ch;">'.$val['content'].'</p>
                            <div class="text-button">
                                <a href="blogPage.php?uid='.$key.'">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>';
                 
               }
                ?>
                
            </div>
        </div>
    </section>




    <footer>
     <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>