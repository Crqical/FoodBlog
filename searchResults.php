<?php
session_start(); // Starts the session and it must be the FIRST code in the file.
?>
    echo '<div class="col-md-6">
          <div class="blog-item">
            <img src="'.$val['images'][0].'" alt="" width="300px" height="450px">
            <div class="down-content" style="height:300px;">
                <h4>'.$val['name'].'</h4>
                <span>'.$val['type'][0].' / '.$val['kind'][0].'</span>
                <p>'.$val['description'].'</p>
                <div class="text-button">
                    <a href="recipe.php?uid='.$key.'">Continue Reading</a>
                </div>
            </div>
        </div>
    </div>';
       
?>