<?php 
session_start(); // Starts the session and it must be the FIRST code in the file.
$pageUID =   $_GET['adUID'];
$clicksDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/ads.json");
$clicks = json_decode($clicksDataJson, TRUE); // Converts the data into a PHP 

 foreach ($clicks as $key => $pageView) {
  if ($key == $pageUID) {
    // echo $pageUID.'<br>';
    // echo $pageView['clicks'].'<br>';
    $pageView['clicks']++;
    // echo $pageView['clicks'].'<br>';
     $clicks[$pageUID]['clicks']=$pageView['clicks'];
  
  } 
 
}

$data = json_encode($clicks, JSON_PRETTY_PRINT);

    $myfile = fopen("JsonData/ads.json", "w") or die("Unable to open file!");
    $txt = $data;
    fwrite($myfile, $txt);
    fclose($myfile);

header("Location: https://www.".$_GET['adURL']);


?>



