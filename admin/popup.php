<?php ob_start();?>

<?php include "../db/db.php";?>

<?php

    if(isset($_POST['submit'])){

        $productName = $_POST['product-name'];
        $productPrice = $_POST['product-price'];

        $productImg = $_FILES['image']['name'];
        $productImgTemp = $_FILES['image']['tmp_name'];

        move_uploaded_file($productImgTemp, "../image/$productImg");  
        
        $insertProductSQL = "INSERT INTO products(product_name, product_price, product_image) VALUES (\"$productName\", \"$productPrice\", \"$productImg\")";
        $insertProductQuery = $connect -> query($insertProductSQL);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Popupcss/popup.css">
</head>
<body>
    <div class="popup" id="mypopup">
        <div class="wrapper">
            <form method="post" enctype="multipart/form-data">
                <div class="addPc_top_container">
                    <div class="addPc_top_text_container">
                        New Pc   
                    </div>
                    <div class="addPc_top_buttons_container">
                        <button class="button" id="close">Close</button>
                        <button class="button" id="save" name="submit">Save</button>
                    </div>
                </div>
                <div class="addPc_main_input_container" >
                    <div class="input-item" id="popup_main_containers">
                        <label for="#product-name">Pc Name</label>
                        <input id="product-name" type="text" name="product-name">
                    </div>
                    <div class="input-item" id="popup_main_containers">
                        <label for="#product-price">Price</label>
                        <input id="product-price" type="varchar" name="product-price">
                    </div>
                    <div class="input-item">
                        <label for="#product-image">Imge</label>
                        <input id="product-price" type="file" name="image">
                    </div>
                </div>
            </form>    
            </div>
        </div>
    </div>
</body>
</html>