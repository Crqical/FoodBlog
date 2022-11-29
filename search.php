<?php 
session_start(); // Starts the session and it must be the FIRST code in the file.
  require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
   $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/recipes.json");
   $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array

  $subCat = $_GET['cat'];




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
        <title>Tasties Search Page</title>
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
                    <h1>Search For Recipes!</h1>
                    <p></p>
                </div>
            </div>
        </div>
    </section><br>

<section class="breakfast-menu">
  <div class="container">
      <div class="row">
          <div class="breakfast-menu-content" style="text-align: center">

            <h3><form action="search.php" method="GET" name="">
              <input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Search By Keywords"><br><br>
              <select type="text" name="u" value="<?php echo isset($_GET['u']) ? $_GET['u'] : ''; ?>">
                <option value="NULL"></option>
                <option value="vegan">Vegan</option>
                <option value="non-vegan">Non-Vegan</option>
              </select><br><br>
              <input type="submit" name="" value="Search">
            </form></h3>

          </div>
      </div>
  </div>
</section><br>
<hr>
<section>
  <div class="container">
      <div class="row">
        <?php
          $uid =  $_GET['uid'];
          $k = $_GET['k'];
          $u = $_GET['u'];

            //k = searrch by description
            //u = search by vegan / non-vegan


             foreach ($productData as $key => $val) {


                if ($k == NULL && $u == NULL) {
                  require $_SERVER['DOCUMENT_ROOT'].'/includes/catCard.php';
                }

                if ($k == NULL ) {
                   // echo "k is null <br>";
                    if ($val['kind'][0]== $u) {
                        require $_SERVER['DOCUMENT_ROOT'].'/includes/catCard.php';
                    }
                } elseif ($u == "NULL" ) {
                  // echo "u is null <br>";
                  if (strpos($val['description'], $k) !== false) {
                    require $_SERVER['DOCUMENT_ROOT'].'/includes/catCard.php';
                  }  
                } elseif (strpos($val['description'], $k) !== false && $val['kind'][0] == $u) {
                       require $_SERVER['DOCUMENT_ROOT'].'/includes/catCard.php';
                    
                }  

            }
      ?>







      </div>
  </div>
<section/>

    <section class="sign-up">
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