<?php 


function randomAd() {
  $viewsDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/ads.json");
  $views = json_decode($viewsDataJson, TRUE); // Converts the data into a PHP 
  
  $adCount = 0;
  foreach ($views as $key => $pageView) {
    $adCount++;
  }
  
  $adNumber = rand(0,($adCount-1));


  $ad = array_values($views); 


$keys = array_keys($views);
$key = $keys[$adNumber];

  
  global $adKey;
  $adKey = $key;
  
// echo $adNumber."<br>";
// // echo  $x."<br>";
// echo  $key."<br>";
echo '<a href="redirect.php?adUID='.$key.'&adURL='.$ad[$adNumber]['url'].'"><img src="'.$ad[$adNumber]['img'].'"></a><br>';
}


function adCount() {
 global $adKey;
  
  $pageUID =   $adKey;
  
  $viewsDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/ads.json");
  $views = json_decode($viewsDataJson, TRUE); // Converts the data into a PHP 

   foreach ($views as $key => $pageView) {
    if ($key == $pageUID) {
      // echo $pageView['views']."<br>";
      
       $pageView['views']++;
       

       $views[$key]['views'] = $pageView['views'];
       // echo  $views[$key]['views']."<br>";
    }    
  }

  
  $data = json_encode($views, JSON_PRETTY_PRINT);

  $myfile = fopen("JsonData/ads.json", "w") or die("Unable to open file!");
  $txt = $data;
  fwrite($myfile, $txt);
  fclose($myfile);
  
}



// function viewCount() {


//   foreach ($views as $key => $pageView) {
//   if ($key == $pageUID) {
//      $pageView['views']++;
//      echo $pageView['views'];
//      $views[$key]['views']=$pageView['views'];
  
//   } 
//   }
// $data = json_encode($views, JSON_PRETTY_PRINT);



//     $myfile = fopen("JsonData/ads.json", "w") or die("Unable to open file!");
//     $txt = $data;
//     fwrite($myfile, $txt);
//     fclose($myfile);




// echo '<pre>';
// var_dump($data);
// echo '</pre><hr>';

// $file = "JsonData/pageViews.json";
// if(is_writable($file)) {
//   echo ("$file is writable");
// } else {
//   echo ("$file is not writable");
// }







?>

