<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/aboutfront.php');
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
<link href="css/mycss.css" rel="stylesheet" type="text/css" media="all" />
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
	<div class="container">
	<div class="row new-header">
		<div class="col-md-3 col-xs-3">
			<div class="box">
				<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?>
					<a href="lang.php?lang=en&<?php echo basename($_SERVER['REQUEST_URI']); ?>">English</a>
				<?php } else { ?>
					<a href="lang.php?lang=ar&<?php echo basename($_SERVER['REQUEST_URI']); ?>">عربي</a>
				<?php } ?>
			</div>
		</div>
		<div class="col-md-6 col-xs-6">
			<div class="logo">
			<center><a href="index.php"><img class="img-responsive" src="uploads/<?php echo $system['logo']; ?>" width="19%;" /></a></center>
			<a href="index.php"><h3><?php echo $system['websitename']; ?></h3></a>
			<h5><?php echo $system['slogan']; ?></h5>
			</div>
		</div>
		<div class="col-md-3 col-xs-3">
			<div class="cart box_1">
				<a href="checkout.php">
					<div class="total">
						<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?><span id="totalcart" class="/*simpleCart_total*/"><?php echo str_replace($western_arabic, $eastern_arabic, getCartTotal($ipaddress)); ?></span>
						<?php echo $system['currency']; } else { echo $system['currency']; ?><span id="totalcart" class="/*simpleCart_total*/"><?php echo getCartTotal($ipaddress); ?></span><?php } ?>
					</div>
					<img src="images/cart-2.png" alt="" />
				</a>			
			</div>
		</div>
	</div>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-3'; ?>" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>>
				<div class="top-nav">
					<ul class="memenu skyblue" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>><li class="active"><a href="index.php"><?php language('home'); ?></a></li>
						<li class="grid"><a href="#"><?php language('men'); ?></a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one" style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float: right;'; ?>">
										<h4><a href="products.php?size=&color=&category=Men,Underwear&q="><?php language('underwear'); ?></a></h4>
										<ul>
											<li><a href="products.php?size=&color=&category=Men,Underwear,Boxer&q="><?php language('boxer'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Men,Underwear,Undershirt&q="><?php language('undershirt'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Men,Underwear,Long Underwear&q="><?php language('longunderwear'); ?></a></li>
										</ul>
									</div>
									<div class="col1 me-one" style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float: right;'; ?>">
										<h4><a href="products.php?size=&color=&category=Men,Homewear&q="><?php language('homewear'); ?></a></h4>
										<ul>
											<li><a href="products.php?size=&color=&category=Men,Homewear,Pajama&q="><?php language('pajama'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Men,Homewear,Sweatpant&q="><?php language('sweatpant'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Men,Homewear,Towel&q="><?php language('towel'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Men,Homewear,Robe&q="><?php language('robe'); ?></a></li>
										</ul>	
									</div>
									<div class="col1 me-one" style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float: right;'; ?>">
										<h4><a href="products.php?size=&color=&category=Men,Socks&q="><?php language('socks'); ?></a></h4>
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#"><?php language('kids'); ?></a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one" style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float: right;'; ?>">
										<h4><a href="products.php?size=&color=&category=Kids,Underwear&q="><?php language('underwear'); ?></a></h4>
										<ul>
											<li><a href="products.php?size=&color=&category=Kids,Underwear,Boxer&q="><?php language('boxer'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Kids,Underwear,Undershirt&q="><?php language('undershirt'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Kids,Underwear,Long Underwear&q="><?php language('longunderwear'); ?></a></li>
										</ul>
									</div>
									<div class="col1 me-one" style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float: right;'; ?>">
										<h4><a href="products.php?size=&color=&category=Kids,Homewear&q="><?php language('homewear'); ?></a></h4>
										<ul>
											<li><a href="products.php?size=&color=&category=Kids,Homewear,Pajama&q="><?php language('pajama'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Kids,Homewear,Sweatpant&q="><?php language('sweatpant'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Kids,Homewear,Towel&q="><?php language('towel'); ?></a></li>
											<li><a href="products.php?size=&color=&category=Kids,Homewear,Robe&q="><?php language('robe'); ?></a></li>
										</ul>	
									</div>
									<div class="col1 me-one" style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float: right;'; ?>">
										<h4><a href="products.php?size=&color=&category=Kids,Socks&q="><?php language('socks'); ?></a></h4>
									</div>
								</div>
							</div>
						</li>						
						<li class="grid"><a href="contact.php"><?php language('contact'); ?></a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-9'; ?>">
				<div class="search-bar">
					<input type="text" value="<?php if(isset($_GET['q'])) echo $_GET['q']; else language('search'); ?>" id="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('search'); ?>';}">
					<input type="submit" value="" onclick="gotoproducts('<?php if(isset($_GET['size'])) echo $_GET['size']; ?>','<?php if(isset($_GET['color'])) echo $_GET['color']; ?>','<?php if(isset($_GET['category'])) echo $_GET['category']; ?>',search.value);">
				</div>
				<div class="clearfix"> </div>
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
					<li class="active"><?php language('about'); ?></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->	
	<div class="ckeckout" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?> >
		<div class="container">
			<div class="ckeck-top heading">
				<h2><?php language('about'); ?></h2>
			</div>
			<div class="ckeckout-top">
				<?php echo '<div><h3>'; language('vision'); echo '<h3></div>'; ?>
				<?php echo '<div style="text-align: justify"><h4><p>'.$about['vision'].'</p><h4></div>'; ?>
			</div>
			<br><br><br>
			<div class="ckeckout-top">
				<?php echo '<div><h3>'; language('mission'); echo '<h3></div>'; ?>
				<?php echo '<div style="text-align: justify"><h4><p>'.$about['mission'].'</p><h4></div>'; ?>
			</div>
		</div>
	</div>	
	
	<!--end-ckeckout-->
	<!--information-starts-->
	<div class="information" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>>
		<div class="container">
			<div class="infor-top">
				<center>
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
				</center>
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