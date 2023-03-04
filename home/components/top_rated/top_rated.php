<?php include "../db/db.php";?>

<div class="top-rated-wrapper">
	<div class="top_rated_products_header">

		<h1>Top Rated Products</h1>

	</div>
	<div class="products-container">
	<?php
				
				
				$selectAllProductsSQL = "SELECT * FROM products LIMIT 5";
				$selectAllProductsQuery = $connect -> query($selectAllProductsSQL);


				if(isset($selectAllProductsQuery)){

					while($row = $selectAllProductsQuery -> fetch_assoc()){

						$pName = $row['product_name'];
						$pPrice = $row['product_price'];
						$pImg = $row['product_image'];
						
						?>
		<div class="item-product">

								<div class="icon-container">
									<div class="heart-icon"><i class="fa-regular fa-heart"></i></div>
									<div class="arrow-icon"><i class="fa-solid fa-arrow-right-arrow-left"></i></div>
								</div>
								<div>
									<img src="../image/<?php echo $pImg;?>" alt="" height="200rem">
								</div>
								<div>
									<h4 class="pname"><?php echo $pName;?></h4>
								</div>
								<div>
									<h4 class="price"><?php echo $pPrice;?>$</h4>
								</div>
							</div>
		<?php }?>
		<?php } ?>
	</div>
</div>