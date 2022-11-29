<?php 
   $productDataJson = file_get_contents($_SERVER['DOCUMENT_ROOT']."/JsonData/recipes.json");
   $productData = json_decode($productDataJson, TRUE); // Converts the data into a PHP Array

   $subCat = $_GET['cat'];





?>


<section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="breakfast-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="<?php echo $val['images'][0]; ?>" alt="Breakfast"width="400px" height="350px">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2><?php echo $val['name']; ?></h2>
                                <div>

                                      <p>
                                        <?php echo  $val['description']; ?>
                                        <hr>
                                        <?php echo $val['servings']; ?> Servings<br>
                                        <?php echo $val['cooktime'];?> Cook Time <br>
                                        <?php echo $val['type'][0]; ?><br>
                                        <?php echo $val['kind'][0]; ?> <br>
                                      </p>

                                  <a href="recipe.php?uid=<?php echo $key?>"> Continue Reading </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </section>


