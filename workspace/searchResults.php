<?php
    echo '<div class="col-md-3">';
        echo '<div class="product-item">';
            echo '<div class="product-thumb">';
                echo '<img style="height: 160px" class="img-responsive" src="'.$val['images'][0].'" alt="product-img" />';
                echo '<div class="preview-meta">';
                echo '</div>';
            echo '</div>';
            echo '<div class="product-content">';
                echo '<h4><a href="/product.php?uid='.$key.'">'.$val['name'].'</a></h4>';
                echo '<p class="price">$'.$val['price'].'</p>';
            echo '</div>';
        echo '</div>';
    echo '</div>';

?>