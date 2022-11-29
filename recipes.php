<?php 
session_start(); // Starts the session and it must be the FIRST code in the file.
  require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
   $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/recipes.json");
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
        <title>Tasties - Our Recipes</title>
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


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Recipes</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="breakfast-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/breakfast_menu.jpg" alt="Breakfast">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>Vegan Recipes</h2>
                                <div id="owl-breakfast" class="owl-carousel owl-theme">
                                  <?php 

                                      foreach ($productData as $key => $val) {
                                                if (in_array($kind1, $val['kind'])) {
                                        // if (in_array($subCat, $val['kind']))
                                          //     {
                                                echo '<div class="item col-md-12">
                                                    <div class="food-item">
                                                        <img src="'.$val['images'][0].'" alt="" height="200px">
                                                        <div class="text-content">
                                                            <h4>'.$val['name'].'</h4>
                                                            <p style="overflow: hidden; text-overflow: ellipsis; max-height: 10ch;">'.$val['description'].'</p>
                                                            <a href="recipe.php?uid='.$key.'"> Continue Reading </a>
                                                        </div>
                                                    </div>
                                                </div>'; 
                                                }
            

                                      }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    



    <section class="lunch-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="lunch-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                            <div class="right-image">
                                 <img src="https://templatemo.com/templates/templatemo_507_victory/img/dinner_menu.jpg" alt="">
                            </div>
                        </div>
                          <div class="col-md-7">
                                <h2>Non-Vegan Recipes</h2>
                                <div id="owl-lunch" class="owl-carousel owl-theme">
                  
                                  <?php 

                                      foreach ($productData as $key => $val) {
                                                if (in_array($kind2, $val['kind'])) {
                                                echo '<div class="item col-md-12">
                                                    <div class="food-item">
                                                        <img src="'.$val['images'][0].'" alt="" height="200px">
                                                        <div class="text-content">
                                                            <h4>'.$val['name'].'</h4>
                                                            <p style="overflow: hidden; text-overflow: ellipsis; max-height: 10ch;">'.$val['description'].'</p>
                                                            <a href="recipe.php?uid='.$key.'"> Continue Reading </a>
                                                        </div>
                                                    </div>
                                                </div>'; 
                                                }

                                      }
                                    ?>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <br><br><br><br><br>

<!--     <section class="dinner-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="dinner-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/dinner_menu.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>Dinner Recipes</h2>
                                <div id="owl-dinner" class="owl-carousel owl-theme">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/dinner_item.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Meal Apples Almonds</h4>
                                                <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/lunch_item.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Ditch Corn Art</h4>
                                                <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/breakfast_item.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Kale Chips Art Party</h4>
                                                <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <section id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Sponsored Post:</h1>
                  
                  

<?php 
                    randomAd();
                    adCount();      
                  ?>
                    </div>
                </div>
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

<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>	-->
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