<?php include "../db/db.php";?>
<?php include "functions/selectPost.php"?>

<div class="catalog">
        <div class="edit-product-container">
        
            <?php
            
                if(isset($_GET['productID'])){
                    
                    $productId = $_GET['productID'];

                    select("products", $productId);

                }
            
            ?>
        </div>
</div>