<?php
	function showProduct()
	{
		global $connect;
		$qr = "
				SELECT * FROM product 
				ORDER BY id DESC
			";
		return mysqli_query($connect,$qr);
	}

	function detailsProduct($idProduct)
	{
		global $connect;
		$qr = "
			SELECT * FROM product
			WHERE id = $idProduct
		";
		return mysqli_query($connect,$qr);
	}
?>

