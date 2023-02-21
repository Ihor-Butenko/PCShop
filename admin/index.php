<?php include "./components/head.php";?>
    
<?php include "./components/navbar/navbar.php";?>

<?php

    if(isset($_GET['source'])){

        $source = $_GET['source'];

        switch($source){

            case "productsCatalog":
                include "catalog.php";
                break;

            case "activeOrders":
                include "activeOrders.php";
                break;

            
                
            default:
                include "statistic.php";
        }

    }

?>

<?php include "./components/footer.php";?>