<?php session_start(); // Starts the session and it must be the FIRST code in the file.
    

    if ( $_SESSION["shoppingCart"] == NULL) {
          //Cart doesn't exist, so create one
        $_SESSION["shoppingCart"] = [];
    } else {
          //Cart exists so do nothing
    }

    $qty = $_POST['qty'];
    $color = $_POST['productColor'];
    $uid = $_POST['uid'];
  
    $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/items.json");
    $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array

    foreach ($productData as $key => $val) {
        if ($key == $uid) {
            $name = $val['name'];
            $price = $val['price'];

        }
       
    }

    $_SESSION["cartItem"]  = array("uid"=>$uid, "name"=>$name, "price"=>$price, "qty"=>$qty, "color"=>$color);
    array_push( $_SESSION["shoppingCart"],$_SESSION["cartItem"]);
    
    $_SESSION["cartMessage"] = '<div class="alert alert-success alert-common alert-solid" role="alert"><i class="">You added '.$qty.' '.$name.' to your shopping cart.</i><?php';

    header('Location: /home.php');

    // echo '<pre>';
    // var_dump($_SESSION['cartItem']);
    // echo '</pre>';

    // echo '<hr>';

    // echo '<pre>';
    // var_dump($_SESSION['shoppingCart']);
    // echo '</pre>';

?>