<?php include "../db/db.php";?>

<div class="catalog">
        <div class="edit-product-container" id="add">
            <form method="post" enctype="multipart/form-data">
                <div class="edit-product-item">
                <div class="file-input">
                    <input type="file" id="file" class="file" name="image">
                    <label for="file">Select image</label>
                </div>
                    <div class="name-container">
                        <input type="text" id="img" name="name">
                    </div>
                    <div class="price-container">
                        <input type="varchar" name="price">
                    </div>
                    <button name="submit" class="edit-button">Add</button>
                </div>
            </form>

            <?php
            
                if(isset($_POST['submit'])){
                    
                    $productName = $_POST['name'];
                    $productPrice = $_POST['price'];

                    $productImage = $_FILES['image']['name'];
                    $productImageTemp = $_FILES['image']['tmp_name'];

                    move_uploaded_file($productImageTemp, "../image/$productImage");

                    $insertSQL = "INSERT INTO products(product_name, product_price, product_image) VALUES (\"$productName\", \"$productPrice\", \"$productImage\")";
                    $insertSQLQuery = $connect -> query($insertSQL);

                    if(isset($insertSQLQuery)){
                        header("Location: index.php?source=productsCatalog");
                    }

                }
            
            ?>



        </div>
</div>