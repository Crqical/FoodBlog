<?php
session_start(); // Starts the session and it must be the FIRST code in the file.
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';

$name = strtolower($_POST['fName']); 
        $name = ucfirst($name);

          $email = $_POST ['email'];
           $subject = $_POST ['subject'];
           $message = $_POST ['message'];

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
        <title>Tasties - Contact page</title>
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
                    <h1>Post Your Own Recipe!</h1>
                    <p>Here you can submit your own recipe for a chance to be featured on our blog page!</p>
                </div>
            </div>
        </div>
    </section>



    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>Post Your Recipes Here!</h2>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="fName" label for="fName"  type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                </fieldset>
                                <fieldset>
                                    <input name="email" label for="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                                <fieldset>
                                    <input name="phone" type="text" label for="phone" class="form-control" id="phone" placeholder="Your phone..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <textarea name="message" label for="message" rows="6" class="form-control" id="message" placeholder="Your recipe..." required=""></textarea>
                                </fieldset>
                                <fieldset>
                                    <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-heading contact-info">
                       <h2>Contact Info</h2>
                        <p>
                          <hr>
                      
                        <p>
<?php
                          Name: echo "First Name: $firstName <br>";
                          echo "<br>";
                          Email: echo "Email: $email <br>";
                          echo "<br>";
                          Phone: echo "Phone Number: $phone <br>";
                          echo "<br>";
                          Message: echo "Your Recipe: $message <br>"; ?>
                          <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section id="book-table">
        <div class="container">
            <div class="row">
                <?php 
                    randomAd();
                    adCount();      
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