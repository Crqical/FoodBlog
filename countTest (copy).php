<?php 

session_start(); // Starts the session and it must be the FIRST code in the file.


   $pageUID =   $_GET['uid'];

   $clicksDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/ads.json");
   $clicks = json_decode($clicksDataJson, TRUE); // Converts the data into a PHP 

?>


<hr>

<?php 

 foreach ($clicks as $key => $pageView) {
  if ($key == $pageUID) {
     $pageView['clicks']++;
     echo $pageView['clicks'];
     $clicks[$key]['clicks']=$pageView['clicks'];
  
  } 
 
}

$data = json_encode($clicks, JSON_PRETTY_PRINT);



    $myfile = fopen("JsonData/ads.json", "w") or die("Unable to open file!");
    $txt = $data;
    fwrite($myfile, $txt);
    fclose($myfile);




echo '<pre>';
var_dump($data);
echo '</pre><hr>';

// $file = "JsonData/pageclicks.json";
// if(is_writable($file)) {
//   echo ("$file is writable");
// } else {
//   echo ("$file is not writable");
// }





?>