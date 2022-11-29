<?php 
session_start(); // Starts the session and it must be the FIRST code in the file.
require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';
   $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/recipes.json");
   $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array

  $uid =  $_GET['uid'];


 foreach ($productData as $key => $val) {
        if ($_GET['uid']==$key)
            {
                require $_SERVER['DOCUMENT_ROOT'].'/includes/recipePage.php';
            }
    }
?>
 