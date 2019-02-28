<?php
	include("lib/config.php");
	include("lib/product.php");
	if(isset($_GET["idProduct"])){
	    $idProduct= $_GET["idProduct"];
	    settype($idProduct, "int");
	 }else{
	    $idProduct = 1;
	  }
	  $Product = detailsProduct($idProduct);
	  $row_products = mysqli_fetch_array($Product);
?>
			<a href="detailsProduct.php?idProduct=<?php echo $row_products['id']?>">
				<h5><?php echo $row_products['name'] ?></h5>
				<img src="images/<?php echo $row_products['image_link'] ?>">
				<p><?php echo number_format($row_products['price']).'VND</br>' ?></p>
				<button>Mua</button>
			</a>


