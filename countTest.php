<?php 

session_start(); // Starts the session and it must be the FIRST code in the file.


   $pageUID =   $_GET['uid'];

   $viewsDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/ads.json");
   $views = json_decode($viewsDataJson, TRUE); // Converts the data into a PHP 

?>


<hr>

<?php 

 foreach ($views as $key => $pageView) {
  if ($key == $pageUID) {
     $pageView['views']++;
     echo $pageView['views'];
     $views[$key]['views']=$pageView['views'];
  
  } 
 
}

$data = json_encode($views, JSON_PRETTY_PRINT);



    $myfile = fopen("JsonData/ads.json", "w") or die("Unable to open file!");
    $txt = $data;
    fwrite($myfile, $txt);
    fclose($myfile);




echo '<pre>';
var_dump($data);
echo '</pre><hr>';

// $file = "JsonData/pageViews.json";
// if(is_writable($file)) {
//   echo ("$file is writable");
// } else {
//   echo ("$file is not writable");
// }





?>