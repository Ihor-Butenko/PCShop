<?php include "../db/db.php";?>
<?php include "functions/selectAllPosts.php"?>

<div class="catalog">
    <div class="wrapper">
        <div class="product-container">
            <?php selectAll("products");?>
        </div>
    </div>
</div>