<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/cart.php');
	setcookie('business', $system['paiementemail']);
	setcookie('currency_code', $system['paypalcurrency']);
	setcookie('ipaddress', $ipaddress);
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php if(isset($cpage['title']) && $cpage['title'] != '') echo $cpage['title']; ?></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if(isset($cpage['description']) && $cpage['description'] != '') echo $cpage['description']; ?>" />
<meta name="keywords" content="<?php if(isset($cpage['keywords']) && $cpage['keywords'] != '') echo $cpage['keywords']; ?>" />
<link rel="shortcut icon" href="uploads/<?php echo $system['logo']; ?>">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			

<script type="text/javascript" src="js/carts.js"></script>
<script type="text/javascript">
function gotoproducts(size,color,category,q)
{
	location.href = 'products.php?size='+size+'&color='+color+'&category='+category+'&q='+q;
}
</script>
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">						
						<div class="box">
							<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
								<a href="lang.php?lang=en&<?php echo basename($_SERVER['REQUEST_URI']); ?>" style="text-decoration: none; color: #fff;">English</a>
							<?php } else { ?>
								<a href="lang.php?lang=ar&<?php echo basename($_SERVER['REQUEST_URI']); ?>" style="text-decoration: none; color: #fff;">عربي</a>
							<?php } ?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="checkout.php">
							<?php $yourcart = getCartTotal($ipaddress); ?>
							<?php  if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
								<div class="total">
									<span id="totalcart" class="/*simpleCart_total*/"><?php echo str_replace($western_arabic, $eastern_arabic, $yourcart['sum']); ?></span>
									<?php echo $system['currency']; ?>
								</div>
								<div id="circle"><?php echo str_replace($western_arabic, $eastern_arabic, $yourcart['count']); ?></div>
							<?php } else { ?>
								<div class="total">
									<?php echo $system['currency']; ?>
									<span id="totalcart" class="/*simpleCart_total*/"><?php echo $yourcart['sum']; ?></span>
								</div>
								<div id="circle"><?php echo $yourcart['count']; ?></div>
							<?php } ?>
							<img id="cartimg" src="images/cart-1.png" alt="" />
						</a>
						<!--<p><a href="javascript:;" class="simpleCart_empty" onclick="clearcart('<?php echo $ipaddress; ?>')"><?php echo language('emptycart'); ?></a></p>-->
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<center><a href="index.php"><img class="img-responsive" src="uploads/<?php echo $system['logo']; ?>" width="19%;" /></a></center>
		<a href="index.php"><h3><?php echo $system['websitename']; ?></h3></a>
		<h5><?php echo $system['slogan']; ?></h5>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-3'; ?>" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>>
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="index.php"><?php language('home'); ?></a></li>						
						<?php if(!empty($flcategories)) { ?>
						<?php for($i=0;$i<count($flcategories);$i++) { ?>
						<li class="grid"><a href="products.php?cat=<?php echo $flcategories[$i]['childto']; ?>"><?php echo $flcategories[$i]['title']; ?></a>
							<div class="mepanel" style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'right: 0%;'; else echo 'left: 0%;'; ?>">
								<div class="row">
								<?php $mlcategories[$i] = getMLevelCategories($flcategories[$i]['childto'],$lang_file); if(!empty($mlcategories[$i])) { ?>
									<?php $k = 1; for($j=0;$j<count($mlcategories[$i]);$j++) { ?>									
										<?php if(substr_count($mlcategories[$i][$j]['childto'], ',') == 1 && $k == 1) { ?><div class="col1 me-one"><h4><a href="products.php?size=&color=&category=<?php echo $mlcategories[$i][$j]['childto']; ?>&q="><?php echo $mlcategories[$i][$j]['title']; ?></a></h4><?php }										
										elseif(substr_count($mlcategories[$i][$j]['childto'], ',') > substr_count($mlcategories[$i][$j-1]['childto'], ',')) { $k == 0; ?><ul><li><a href="products.php?size=&color=&category=<?php echo $mlcategories[$i][$j]['childto']; ?>&q="><?php echo $mlcategories[$i][$j]['title']; ?></a></li></ul></div><?php }
										elseif(substr_count($mlcategories[$i][$j]['childto'], ',') == substr_count($mlcategories[$i][$j-1]['childto'], ',')) { $k == 0; ?><li><a href="products.php?size=&color=&category=<?php echo $mlcategories[$i][$j]['childto']; ?>&q="><?php echo $mlcategories[$i][$j]['title']; ?></a></li><?php }
										elseif(substr_count($mlcategories[$i][$j+1]['childto'], ',') == 1 && $k == 0) { $k == 1; ?><li><a href="products.php?size=&color=&category=<?php echo $mlcategories[$i][$j]['childto']; ?>&q="><?php echo $mlcategories[$i][$j]['title']; ?></a></li></ul></div><?php }
									} } ?>
								</div>
							</div>
						</li>
						<?php } } ?>
						
						<li class="grid"><a href="contact.php"><?php language('contact'); ?></a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				</div>
				<div class="col-md-3<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-9'; ?>"> 
					<div class="search-bar">
						<input type="text" value="<?php if(isset($_GET['q'])) echo $_GET['q']; else language('search'); ?>" id="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('search'); ?>';}">
						<input type="submit" value="" onclick="gotoproducts('<?php if(isset($_GET['size'])) echo $_GET['size']; ?>','<?php if(isset($_GET['color'])) echo $_GET['color']; ?>','<?php if(isset($_GET['category'])) echo $_GET['category']; ?>',search.value);">
					</div>
					<div class="clearfix"> </div>
				</div>				
			</div>
		</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>>
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php"><?php language('home'); ?></a></li>
					<li class="active"><?php language('checkout'); ?></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->	
	<div class="ckeckout">
		<div class="container">
			<div class="ckeck-top heading">
				<h2><?php language('checkout'); ?></h2>
			</div>
			<div class="ckeckout-top" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>>
			<?php
				$carts = getCarts($lang_file,$ipaddress,$startResults,$resultsPerPage);
				if(!empty($carts))
				{
			?>
			<div class="cart-items">
			 <h3><?php language('mycartproducts').language(' '); if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo '('.str_replace($western_arabic, $eastern_arabic, count($carts)).')'; else echo '('.count($carts).')'; ?></h3>
			
			<div class="in-check" >
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table" style="border: 3px solid rgba(135, 135, 135, 0.7); text-align: center;">
								<tr class="catrtableheader" style="background-color: rgba(191, 191, 191, 0.7); height: 75px;">
									<td width="25%"><h4><strong><?php language('product'); ?></strong></h4></td>
									<td><h4><strong><?php language('title'); ?></strong></h4></td>
									<td><h4><strong><?php language('unitprice'); ?></strong></h4></td>
									<td><h4><strong><?php language('quantity'); ?></strong></h4></td>
									<td><h4><strong><?php language('total'); ?></strong></h4></td>
									<td><h4><strong><?php language('address'); ?></strong></h4></td>
									<td style="width: 125px;"><h4><strong><?php language('paymethod'); ?></strong></h4></td>
									<td style="width: 75px;"></td>
								</tr>
								<?php for($i=0;$i<sizeof($carts);$i++) { ?>
									<?php $cartpic[$i] = array_diff(scandir('uploads/products/'.$carts[$i]['product']), array('.','..')); ?>
									<tr id="tr-<?php echo $carts[$i]['id']; ?>">
										<form method="POST">
										<td width="25%"><?php if(!empty($cartpic[$i])) { ?><img class="img-responsive" src="uploads/products/<?php echo $carts[$i]['product']; ?>/<?php echo $cartpic[$i][2]; ?>"><?php } ?></td>
										<td><?php echo $carts[$i]['title']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $carts[$i]['price']).$system['currency']; else echo $system['currency'].$carts[$i]['price']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $carts[$i]['quantity']); else echo $carts[$i]['quantity']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $carts[$i]['price']*$carts[$i]['quantity']).$system['currency']; else echo $system['currency'].$carts[$i]['price']*$carts[$i]['quantity']; ?></td>
										<td>
											<?php language('phone'); ?><br><input type="text" class="form-control" name="phone" value="<?php if(isset($_COOKIE['phone'])) echo $_COOKIE['phone']; ?>" pattern="[0-9]*" title="<?php language('quantitymatch'); ?>" maxlength="11" required="required" />
											<br><br>
											<?php language('address'); ?><br><textarea name="address" class="form-control" rows="3" required="required"><?php if(isset($_COOKIE['address'])) echo $_COOKIE['address']; ?></textarea>
										</td>
										<td style="width: 125px;">											
											<?php if($cansale == 1) { ?>
											<input type="hidden" name="id" value="<?php echo $carts[$i]['id']; ?>">
											<!--<button onClick="location.href='check.php?id=<?php echo $carts[$i]['id']; ?>'"><?php language('checkout'); ?></button>-->
											<br><br>
											<input type="submit" name="paypal" value="<?php language('paypal'); ?>" formaction="paypal.php" class="btn btn-info" style="width: 125px;">
											<br><br>
											<input type="submit" name="ondelivery" value="<?php language('ondelivery'); ?>" formaction="ondelivery.php" class="btn btn-info" style="width: 125px;">
											<?php } else { echo '<div style="color: red;">'; language('cantbuy'); echo '</div>'; } ?>
										</td>
										<td style="width: 75px; background: url('images/close.png') no-repeat center 75px;" onclick="deletecart('<?php echo $carts[$i]['id'];?>','<?php echo $carts[$i]['product'];?>','<?php echo $ipaddress;?>','<?php echo $carts[$i]['quantity'];?>')"></td>										
										</form>
									</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>				
			</div>
			<?php } else { echo '<div style="font-size: 200%;">'; language('yourcartisempty'); echo '</div>'; } ?>
		 </div>
		</div>
	</div>	
	
	<!--end-ckeckout-->
	<!--information-starts-->
	<div class="information" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>>
		<div class="container">
			<div class="infor-top">
				<div class="col-md-4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-8'; ?> infor-left">
					<h3><?php language('followus'); ?></h3>
					<ul>
						<li><i class="fa fa-facebook fa-fw"></i><a href="<?php echo $contact['facebook']; ?>" target="_blank"><h6><?php language('facebook'); ?></h6></a></li>
						<li><i class="fa fa-twitter fa-fw"></i><a href="<?php echo $contact['twitter']; ?>" target="_blank"><h6><?php language('twitter'); ?></h6></a></li>
						<li><i class="fa fa-instagram fa-fw"></i><a href="<?php echo $contact['instagram']; ?>" target="_blank"><h6><?php language('instagram'); ?></h6></a></li>
					</ul>
				</div>
				<div class="col-md-4 infor-left">
					<h3><?php language('links'); ?></h3>
					<ul>
						<li><a href="index.php"><p><?php language('home'); ?></p></a></li>
						<li><a href="about.php"><p><?php language('about'); ?></p></a></li>
						<li><a href="products.php"><p><?php language('products'); ?></p></a></li>
						<li><a href="contact.php"><p><?php language('contact'); ?></p></a></li>						
					</ul>
				</div>				
				<div class="col-md-4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-8'; ?> infor-left">
					<h3><?php language('address'); ?></h3>
					<h4><?php echo $contact['address'.$lang_file]; ?></h4>
					<p><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<!--<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!--footer-end-->	
</body>
</html>