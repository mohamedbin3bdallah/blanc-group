<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/contactfront.php');
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
					<a href="lang.php?lang=ar&<?php echo basename($_SERVER['REQUEST_URI']); ?>">????????</a>
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
					<li class="active"><?php language('contact'); ?></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--contact-start-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h2><?php language('contact'); ?></h2>
			</div>
				<div class="contact-text" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?>>
				<div class="col-md-3  <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-9 '; ?> contact-left">
						<div class="address">
							<h5><?php language('address'); ?></h5>
							<p><?php echo $contact['address'.$lang_file]; ?></p>
						</div>
						<div class="address">
							<!--<h5>Address1</h5>-->
							<p><?php if(isset($contact['phone']) && $contact['phone'] != '') { language('phone'); if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ':'.str_replace($western_arabic, $eastern_arabic, $contact['phone']); else echo ':'.$contact['phone']; } ?>
							<span><?php if(isset($contact['mobile']) && $contact['mobile'] != '') { language('mobile'); if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ':'.str_replace($western_arabic, $eastern_arabic, $contact['mobile']); else echo ':'.$contact['mobile']; } ?></span>
							<?php if(isset($contact['email']) && $contact['email'] != '') { language('email'); ?>:<a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a><?php } ?></p>
						</div>
					</div>
					<div class="col-md-9 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-3 '; ?> contact-right">
						<form action="develops/message.php" method="POST">
							<input type="text" name="name" pattern="[a-zA-Z ]*" placeholder="<?php language('name'); ?>" required="">
							<input type="text" name="phone" pattern="[0-9]*" placeholder="<?php language('phone'); ?>" required="">
							<input type="text"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="<?php language('email'); ?>" required="">
							<textarea name="message" placeholder="<?php language('message'); ?>" required=""></textarea>
							<input type="hidden" name="contactemail" value="<?php if(isset($contact['email']) && $contact['email'] != '') echo $contact['email']; else echo 'info@blanc-group.net'; ?>">
							<div class="submit-btn">
								<input type="submit" name="sendmessage" value="<?php language('send'); ?>">
							</div>
						</form>
					</div>	
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--contact-end-->
	<!--map-start-->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
	</div>
	<!--map-end-->
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
					<p>?? 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!--footer-end-->	
</body>
</html>