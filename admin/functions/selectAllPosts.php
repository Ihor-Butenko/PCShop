<?php include ".././db/db.php";?>
<?php

    function selectAll($table){

        global $connect;
        
        $SQL = "SELECT * FROM $table";
        $query = $connect -> query($SQL);

        while($row = $query -> fetch_assoc()){
            $productID = $row['product_id'];
            $productName = $row['product_name'];
            $productPrice = $row['product_price'];
            $productImage = $row['product_image'];?>
            <form method="post">
                <div class="product-item">
                    <img src="../image/<?php echo $productImage;?>">
                    <h1><?php echo $productName;?></h1>
                    <div class="price-container">
                        <p><?php echo $productPrice . "$";?></p>
                    </div>
                    <div class="button-container">
                        <div class="button" id="left"><a href="./index.php?source=editProduct&productID=<?php echo $productID;?>">Edit Product</a></div>
                        <div class="button" id="right"><a href="./index.php?source=deleteProduct&productID=<?php echo $productID;?>">Delete Product</a></div>
                    </div>
                </div>
            </form>

    <?php }
    }
    ?>