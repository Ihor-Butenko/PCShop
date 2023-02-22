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
                <img src="<?php echo $productImage;?>">
                <h1><?php echo $productName;?></h1>
                <div class="price-container">
                    <p><?php echo $productPrice;?></p>
                    <div class="price-button">
                        <a>Change Price</a>
                    </div>
                </div>
            </div>

            <?php }?>





        </div>
    </div>
</div>