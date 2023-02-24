<?php include "../db/db.php";?>

<?php

    if(isset($_GET['productID'])){

        $productID = $_GET['productID'];

        $deleteSQL = "DELETE FROM products WHERE product_id = $productID";
        $deleteQuery = $connect -> query($deleteSQL);

        if(isset($deleteQuery)){
            header("Location: ./index.php?source=productsCatalog");
        }

    }

?>