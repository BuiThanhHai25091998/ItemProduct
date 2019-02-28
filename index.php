<?php
	include("lib/config.php");
	include("lib/product.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Ban Hang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="head">
		<div style="color: red" class="box-hearder">
			<a href="#">Product</a>
		</div>
		<div class="header">
			<?php 
				$showProduct = showProduct();
				while ($row_Product = mysqli_fetch_array($showProduct)){
					$idProduct = $row_Product['id'];
			?>
			<a href="detailsProduct.php?idProduct=<?php echo $row_Product['id']?>">
				<h5><?php echo $row_Product['name'] ?></h5>
				<img src="images/<?php echo $row_Product['image_link'] ?>">
				<p><?php echo number_format($row_Product['price']).'VND</br>' ?></p>
				<button>Chi Tiet</button>
			</a>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>