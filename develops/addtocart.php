<?php
	include('../libs/addtocart.php');
	if(isset($_POST['addtocart']))
	{
		unset($_POST['addtocart']);
		if(isset($_POST['color'],$_POST['size'],$_POST['quantity'],$_POST['productid']))
		{
			$product = getProductByID($_POST['productid']);
			if($product['id'] != '')
			{
				$colorpos = strpos($product['colors'], $_POST['color']);
				$sizepos = strpos($product['sizes'], $_POST['size']);
				if($colorpos !== false && $sizepos !== false)
				{
					if($_POST['quantity'] >= 1 && $_POST['quantity'] <= $product['quantity'])
					{
						$ipaddress = hash('sha256', $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'], FALSE);
						if(countIpCart($ipaddress))
						{
							insertCart($product['id'],$product['titleen'],$product['titlear'],$product['price'],$_POST['quantity'],$product['price']*$_POST['quantity'],$_POST['color'],$_POST['size'],$ipaddress);
							updateProductQuantity($product['id'],$product['quantity']-$_POST['quantity']);
							header('Location: ../products.php');
						}
						else header('Location: ../index.php');
					}
					else header('Location: ../index.php');
				}
				else header('Location: ../index.php');
			}
			else header('Location: ../index.php');
		}
		else header('Location: ../index.php');
	}
	else header('Location: ../index.php');
?>