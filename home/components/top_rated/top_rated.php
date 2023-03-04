<?php include "../db/db.php";?>

<div>
	<div class="top_rated_products_h">

		<h1>Top Rated Products</h1>

	</div>
	<div>
		<div>
			<div>


				<?php
				
				
					$selectAllProductsSQL = "SELECT * FROM products LIMIT 5";
					$selectAllProductsQuery = $connect -> query($selectAllProductsSQL);


					if(isset($selectAllProductsQuery)){

						while($row = $selectAllProductsQuery -> fetch_assoc()){

							$pName = $row['product_name'];
							$pPrice = $row['product_price'];
							$pImg = $row['product_image'];
							
							?>

										<p>PREMIUM LAPTOPS</p>

									</div>
									<div>

										<i class="fa-regular fa-heart"></i>
										<i class="fa-solid fa-arrow-right-arrow-left"></i>

									</div>
									<div>

										<img src="../image/<?php echo $pImg;?>" alt="" height="200rem">

									</div>
									<div>

										<h4 class="huinia"><?php echo $pName;?></h4>

									</div>
									<div>

										<h4><?php echo $pPrice;?>$</h4>

									</div>
								</div>
						<?php } ?>
					<?php }?>
	</div>
</div>