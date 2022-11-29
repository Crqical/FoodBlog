<?php 

  $pageUID =   $_GET['uid'];
  
  $viewsDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/ads.json");
  $views = json_decode($viewsDataJson, TRUE); // Converts the data into a PHP 

   foreach ($views as $key => $pageView) {
    if ($key == $pageUID) {
      echo $pageView['views']."<br>";
      
       $pageView['views']++;
       

       $views[$key]['views'] = $pageView['views'];
       echo  $views[$key]['views']."<br>";
    }    
  }

  
  $data = json_encode($views, JSON_PRETTY_PRINT);

  $myfile = fopen("JsonData/ads.json", "w") or die("Unable to open file!");
  $txt = $data;
  fwrite($myfile, $txt);
  fclose($myfile);

?>