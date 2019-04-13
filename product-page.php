<?php
	require_once('config.php');
	$pageTitle = "Apple iMac 27\"";
	include("./templates/_head.php");
	
	$sql = "SELECT * FROM `products` WHERE id = " . intval($_GET['id']);
	$result = $db->query($sql);
	$product = $result->fetch(PDO::FETCH_ASSOC);
?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			
			<?php include("./templates/_header.php"); ?>

			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				
				<?php include("./templates/_aside.php"); ?>

				<!-- Center Part -->
				<div class="col-md-9">
					<div class="product-title"><?=$product['title']?></div>

					<div class="row">
						<div class="col-6">
							<img src="img/products/<?=$product['img']?>" alt="$product['title']?>">
						</div>
						<div class="col-6">
							<div class="product-price"><?=$product['price']?> руб</div>
							<a href="order.php?id=<?=$product['id']?>" class="product-btn-order">Сделать заказ</a>
							<div class="product-desc">
								<p><?=$product['description']?></p>
							</div>

						</div>
					</div>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/_footer.php"); ?>
