<?php include "../db/db.php";?>

<div class="catalog">
    <div class="wrapper">
        <div class="product-container">
            

            <?php
            
                $productsSQL = "SELECT * FROM products";
                $query = $connect -> query($productsSQL);

                while($row = $query -> fetch_assoc()){

                    $productName = $row['product_name'];
                    $productPrice = $row['product_price'];
                    $productImage = $row['product_image'];

    
            ?>

            <div class="product-item">
                <img src="../image/<?php echo $productImage;?>">
                <h1><?php echo $productName;?></h1>
                <div class="price-container">
                    <p><?php echo $productPrice . "$";?></p>
                    <div class="price-button">
                        <a class="price-text">Change Price</a>
                    </div>
                </div>
                <div class="button-container">
                    <div class="button" id="left"><a>View All</a></div>
                    <div class="button" id="right"><a>Edit Product</a></div>
                </div>
            <?php }?>
                <form method="post">
                    <div class="input-container">
                        <input name="new-price" type="varchar" placeholder="000">
                        <button type="submit" name="submit-price">Submit</button>

                        <?php

                            if(isset($_POST["submit-price"])){

                                $newPrice = $_POST["new-price"];

                                $updatePriceSQL = "UPDATE products SET product_price = $newPrice";
                                $updateQuery = $connect -> query($updatePriceSQL);

                                if(isset($updateQuery)){
                                    header("Location: index.php?source=productsCatalog");
                                }

                            }                        
                        
                        ?>
                    

                    </div>
                </form>

            </div>


            <div class="popup" id="mypopup">
                <div class="wrapper">
                        <div class="addPc_top_container">
                            <div class="addPc_top_text_container">
                                ADD PC
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>