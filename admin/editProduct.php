<?php include "../db/db.php";?>

<div class="catalog">
        <div class="edit-product-container">
            

            <?php

                $productID = $_GET['productID'];
            
                $productsSQL = "SELECT * FROM products WHERE product_id = $productID";
                $query = $connect -> query($productsSQL);

                while($row = $query -> fetch_assoc()){
                    $productName = $row['product_name'];
                    $productPrice = $row['product_price'];
                    $productImage = $row['product_image'];
            ?>
            <form method="post">
                <div class="edit-product-item">
                    <img src="../image/<?php echo $productImage;?>">
                    <div class="name-container">
                        <input type="text" name="name" value="<?php echo $productName;?>">
                    </div>
                    <div class="price-container">
                        <input type="varchar" name="price" value="<?php echo $productPrice;?>">
                    </div>
                    <button name="submit" class="edit-button">Edit</button>
                </div>

                    <?php
                    
                        if(isset($_POST['submit'])){
                            
                            $name = $_POST['name'];
                            $price = $_POST['price'];

                            $updateSQL = "UPDATE products SET product_name = '$name', product_price = '$price' WHERE product_id = $productID";
                            $updateSQLQuery = $connect -> query($updateSQL);

                            if(isset($updateSQLQuery)){
                                header("Location: ./index.php?source=productsCatalog");
                            }

                        }
                    
                    ?>

            </form>
            <?php }?>
        </div>
</div>