<?php
    if ($_GET['logout'] =='yes')  {
        unset($_SESSION['username']);
    }

    if (isset($_POST['btn_login'])) {
        $_SESSION['username'] = $_POST['username'];
        $isLoggedIn = '1';

    } elseif (!empty($_SESSION['username'])) {
        $isLoggedIn = '1';

    } else {
        $isLoggedIn = '0';
    }


    $notLoggedIn =  '<form action = "/home.php" method = "post"> <input type="text" name="username"> &nbsp <input type="submit" value="Log In" name="btn_login"> </div> </form>';
    $loggedIn = $_SESSION['']."&nbsp &nbsp <a href='/home.php?logout=yes' input class=btn btn-main btn-small btn-round'>Logout</a>";


    if ( $isLoggedIn == '1') {
        $logInStatus = $loggedIn;
    } else {
        $logInStatus = $notLoggedIn;
    }

        echo '
                <div class="contact-number">
    
                    '.$_SESSION['username'].'
                    
                    
                </div>';
?>

<?php echo "$logInStatus" ?>