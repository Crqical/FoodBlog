<?php 

session_start(); // Starts the session and it must be the FIRST code in the file.

   $viewsDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/ads.json");
   $views = json_decode($viewsDataJson, TRUE); // Converts the data into a PHP 

?>


<hr>

<?php 
$adCount = 0;


foreach ($views as $key => $pageView) {
      
      echo '<a href="redirect.php?adUID='.$key.'&adURL='.$pageView['URL'].'"><img src="'.$pageView['img'].'"></a><br>';
    
$adCount++;
}

echo '<pre>';
var_dump($adCount);
echo '</pre><hr>';

// $file = "JsonData/pageViews.json";
// if(is_writable($file)) {
//   echo ("$file is writable");
// } else {
//   echo ("$file is not writable");
// }





?>