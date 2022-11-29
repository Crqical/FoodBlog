<?php session_start(); // Starts the session and it must be the FIRST code in the file.
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
   $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/blogs.json");
   $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array
session_start(); // Starts the session and it must be the FIRST code in the file.
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
                        <h4>Admin Login Only!</h4>
                        <div class="contact-content">
                            <SCRIPT>
function passWord() {
var testV = 1;
var pass1 = prompt('Please Enter Your Password',' ');
while (testV < 3) {
if (!pass1)
history.go(-1);
if (pass1.toLowerCase() == "benrudfoodblog") {
window.open('anayltics.php');
break;
}
testV+=1;
var pass1 =
prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
}
if (pass1.toLowerCase()!="password" & testV ==3)
history.go(-1);
return " ";
}
</SCRIPT>
<CENTER>
<FORM>
<input type="button" value="Enter Protected Area" onClick="passWord()">
</FORM>
</CENTER>
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


<!-- 
    <section id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Book Your Table Now</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="left-image">
                        <img src="img/book_left_image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right-info">
                        <h4>Reservation</h4>
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='day' onchange='this.form.()'>
                                            <option value="">Select day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='hour' onchange='this.form.()'>
                                            <option value="">Select hour</option>
                                            <option value="10-00">10:00</option>
                                            <option value="12-00">12:00</option>
                                            <option value="14-00">14:00</option>
                                            <option value="16-00">16:00</option>
                                            <option value="18-00">18:00</option>
                                            <option value="20-00">20:00</option>
                                            <option value="22-00">22:00</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="name" class="form-control" id="name" placeholder="Full name" required="">
                                    </fieldset> 
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone number" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required class="person" name='persons' onchange='this.form.()'>
                                            <option value="">How many persons?</option>
                                            <option value="1-Person">1 Person</option>
                                            <option value="2-Persons">2 Persons</option>
                                            <option value="3-Persons">3 Persons</option>
                                            <option value="4-Persons">4 Persons</option>
                                            <option value="5-Persons">5 Persons</option>
                                            <option value="6-Persons">6 Persons</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Book Table</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <section class="get-app">
        <div class="container">
            <div class="row">
                <div class="heading">

<!--                                       Ad Space AD SPACE                      -->
                  
<h1>Sponsored Post:</h1>
                  
                  

<html>
<head>
<script type="text/javascript">
  var imageUrls = [
       "https://www.chewboom.com/wp-content/uploads/2020/03/Arby%E2%80%99s-Launches-2-For-6-Everyday-Value-Deal-678x381.jpg"
     , "https://images-cdn.ispot.tv/ad/ZLW7/default-large.jpg"
     , "https://www.subway.com/-/media/Base_Arabic/English/Promotions/Marquees/Mobile/HomeBanner/jan-2018-all-markets-mobile-en.jpg"
     , "https://www.wordstream.com/wp-content/uploads/2021/07/persuasive-ads-coca-cola.jpg"
     , "https://www.inma.org/files/images/blogs/feature_photos/print_september20_hannah_2020-in-ads-1800.jpg"
    , "https://o.quizlet.com/YeYDSUwgmGDFuqltrrQN8w_b.jpg"
    , "https://www.gannett-cdn.com/presto/2020/07/14/USAT/e98ba2b4-25c4-47f4-af22-39f22959f74b-CFH_Hero_Image.jpg"
    , "http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2015/07%20July/20%20Years%20of%20Cows/Original%20EMC%20Billboard.JPG"
    , "https://i.ytimg.com/vi/YxQQhMT33mg/maxresdefault.jpg"
    , "https://s3-prod.adage.com/s3fs-public/20201222-Baskin-Robbins-Cup-Suits_3x2.jpg"
  ];
 var imageLinks = [
       "https://www.arbys.com"
      , "https://www.wendys.com/"
    , "https://www.subway.com"
    , "http://www.coke.com"
    , "http://www.KFC.com"
    , "http://www.skittles.com"
       , "http://www.doritos.com/"
      , "https://www.chick-fil-a.com/"
      , "https://www.chipotle.com/"
     , "https://www.baskinrobbins.com/en"    
  ];

  function getImageHtmlCode() {
    var dataIndex = Math.floor(Math.random() * imageUrls.length);
    var img = '<a href=\"' + imageLinks[dataIndex] + '"><img src="';        
    img += imageUrls[dataIndex];
    img += '\" alt=\"Jorgesys Stackoverflow.com\"/></a>';
    return img;
  }
</script>
</head>
<body bgcolor="white">
<script type="text/javascript">
  document.write(getImageHtmlCode());
</script>
</body>
</html>

<!--                                       Ad Space AD SPACE                      -->
                  
                </div></a>
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