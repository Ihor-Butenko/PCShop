<?php include "./components/head.php";?>
    
<?php include "./components/navbar/navbar.php";?>

<?php include "../db/db.php";?>

<?php

    if(isset($_GET['source'])){

        $source = $_GET['source'];

        switch($source){

            case "productsCatalog":
                include "catalog.php";
                break;

            case "addPc":
                include "addPc.php";
                break;

            case "activeOrders":
                include "activeOrders.php";
                break;

            case "editProduct":
                include "editProduct.php";
                break; 
            
            case "deleteProduct":
                include "deleteProduct.php";
                break;

            case "addProduct":
                include "addProduct.php";
                break;
                
            default:
                include "catalog.php";
        }

    }

?>

<?php include "./components/footer.php";?>