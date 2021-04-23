<?php
	$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
	if($pageWasRefreshed ) {}
	else { if(isset($_GET['id']) && ($_GET['id'] != '' || $_GET['id'] != 0)) { include('libs/views.php'); addViews($_GET['id']); }}

	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/product.php');
	
	if($product['id'] != '') {
		$productpics = array_diff(scandir('uploads/products/'.$product['id']), array('.','..'));
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
<title><?php if(isset($product['title']) && $product['title'] != '') echo $product['title']; ?></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->

<meta name="robots" content="all">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if(isset($product['description']) && $product['description'] != '') echo $product['description']; ?>" />
<meta name="keywords" content="<?php if(isset($cpage['keywords']) && $cpage['keywords'] != '') echo $cpage['keywords']; ?>" />

<meta property="og:app_id"          content="1706099226293211" />
<meta property="og:url"           content="http://blanc-group.net/product.php?id=<?php echo $product['id']; ?>" />
<meta property="og:type"          content="article" />
<meta property="og:title"         content="<?php echo $product['title']; ?>" />
<meta property="og:description"   content="<?php echo $product['description']; ?>" />
<?php for($shareimage=2;$shareimage<count($productpics)+2;$shareimage++) { ?>
<meta property="og:image"         content="http://blanc-group.net/uploads/products/<?php echo $product['id']; ?>/<?php echo $productpics[$shareimage]; ?>" />
<?php } ?>

<link rel="shortcut icon" href="uploads/<?php echo $system['logo']; ?>">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/multiuserselect.css" rel="stylesheet">
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>	
<script type="text/javascript">
	$(function() {	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>

<script type="text/javascript" src="js/socialmedia.js"></script>
<script type="text/javascript">
function gotoproducts(size,color,category,q)
{
	location.href = 'products.php?size='+size+'&color='+color+'&category='+category+'&q='+q;
}
</script>
<style>
.fb_iframe_widget,
.fb_iframe_widget span,
.fb_iframe_widget span iframe[style] {
  min-width: 100% !important;
  width: 100% !important;
}
</style>

<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='86a2931ebf5bee75a5b85d1dd8da0f54' data-cfasync='false' async='async'></script>

</head>
<body>
	<!--top-header-->
	<!--<div class="top-header">
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
							<div class="total">
								<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { ?><span id="totalcart" class="/*simpleCart_total*/"><?php echo str_replace($western_arabic, $eastern_arabic, getCartTotal($ipaddress)); ?></span>
								<?php echo $system['currency']; } else { echo $system['currency']; ?><span id="totalcart" class="/*simpleCart_total*/"><?php echo getCartTotal($ipaddress); ?></span><?php } ?>
							</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						<!--<p><a href="javascript:;" class="simpleCart_empty" onclick="clearcart('<?php echo $ipaddress; ?>')"><?php echo language('emptycart'); ?></a></p>-->
						<!--<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!--top-header-->
	<!--start-logo-->
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
					<li><a href="products.php"><?php language('products'); ?></a></li>
					<li class="active"><?php language('product'); ?></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-3 '; ?> single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-7 '; ?>">	
						<div class="flexslider">							
							 <?php if(!empty($productpics)) { ?>
							  <ul class="slides">
								<?php for($img=2;$img<count($productpics)+2;$img++) { ?>
									<li data-thumb="uploads/products/<?php echo $product['id']; ?>/<?php echo $productpics[$img]; ?>">
										<div class="thumb-image"><img src="uploads/products/<?php echo $product['id']; ?>/<?php echo $productpics[$img]; ?>" data-imagezoom="true" class="img-responsive" alt="<?php echo $product['title']; ?>"/></div>
									</li>
								<?php } ?>								
							  </ul>
							 <?php } ?>
						</div>						
						<!-- FlexSlider -->
						<script src="js/imagezoom.js"></script>
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>						
					</div>
					<div class="col-md-7 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-5 '; ?> single-top-right" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?> >
						<div id="productpadding" class="single-para simpleCart_shelfItem">
						<h2 id="producttitle"><?php echo $product['title']; ?></h2>
							<!-- <div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									<a href="#"> 1 customer review </a>
									
								</div>
							<div class="clearfix"> </div>
							</div> -->
							
							<h5 id="productprice" class="item_price"><?php if($product['oldprice'] != '') { ?><strike><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $product['oldprice']).$system['currency']; else echo $system['currency'].$product['oldprice']; ?></strike> - <?php } ?><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $product['price']).$system['currency']; else echo $system['currency'].$product['price']; ?></h5>
							<p style="text-align: justify;"><?php echo $product['description']; ?></p>
							<form action="develops/addtocart.php" method="POST">
							<br>
							<?php if($product['colors'] != '') { $productcoloors = explode(',', $product['colors']); ?>
								<div class="row">
								<div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-8 col-xs-push-8'; ?>"><?php language('color'); ?></div>
								<div class="col-md-8 col-xs-8 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-2 col-xs-pull-2'; ?>">
									<select id="multiuserselect" size="5" name="color" title="<?php language('selectmatch'); ?>" required="required">
										<?php for($color=0;$color<count($productcoloors);$color++) { ?>
											<option style="height: 30px; background-color: #<?php echo $productcoloors[$color]; ?>;" value="<?php echo $productcoloors[$color]; ?>"></option>
										<?php } ?>
									</select>
								</div>
								</div>
							<?php } ?>
							<?php if($product['sizes'] != '') { $productsizes = explode(',', $product['sizes']); ?>
								<div class="row">
								<div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-8 col-xs-push-8'; ?>"><?php language('size'); ?></div>
								<div class="col-md-8 col-xs-8 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-2 col-xs-pull-2'; ?>">
									<select id="multiuserselect" size="5" name="size" title="<?php language('selectmatch'); ?>" required="required">
										<?php for($size=0;$size<count($productsizes);$size++) { ?>
											<option style="background-color: #73B6E1;" value="<?php echo $productsizes[$size]; ?>"><?php echo $productsizes[$size]; ?></option>
										<?php } ?>
									</select>
								</div>
								</div>
							<?php } ?>
								<div class="row">
									<div class="col-md-3 col-md-offset-1 col-xs-3 col-xs-offset-1 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-push-7 col-xs-push-7'; ?>"><?php language('quantity'); ?></div>
									<div class="col-md-7  col-xs-7 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-7 col-xs-pull-7'; ?>"><input type="number" name="quantity" min="1" max="<?php echo $product['quantity']; ?>" style="width: 30%;" required="required" /></div>
								</div>
								<div class="row" style="padding-top: 25px;">
									<div class="col-md-3 col-md-offset-1 col-xs-3 col-xs-offset-1"><input type="hidden" name="productid" value="<?php echo $product['id']; ?>"></div>
									<div class="col-md-7  col-xs-7 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-4 col-xs-pull-4'; ?>"><input type="submit" class="btn" style="background-color: #000; border: 2px solid #ECECEC; color: #ECECEC" name="addtocart" value="<?php language('addtocart'); ?>"></div>														
								</div>
							</form>
							<!-- <ul class="tag-men">
								<li><span>TAG</span>
								<span class="women1">: Women,</span></li>
								<li><span>SKU</span>
								<span class="women1">: CK09</span></li>
							</ul>
								<a href="#" class="add-cart item_add">ADD TO CART</a> -->
							
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='23640551'></div>
							</div>							
						</div>
					</div>
					<div class="fb-comments" data-href="http://blanc-group.net/product.php?id=<?php echo $product['id']; ?>" data-numposts="3"></div>
					<div class="clearfix"> </div>
				</div>
				<!-- <div class="tabs">
				<ul class="menu_drop">
				<li class="item1"><a href="#"><img src="images/arrow.png" alt="">Description</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images/arrow.png" alt="">Additional information</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images/arrow.png" alt="">Reviews (10)</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images/arrow.png" alt="">Helpful Links</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="images/arrow.png" alt="">Make A Gift</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				</ul>
				</div>-->
				<?php
					$productcategories = explode("|",$product['categories']);
					$relatedproducts = getRelatedProducts($lang_file,$product['id'],$productcategories[0],3);
					if(!empty($relatedproducts))
					{
				?>
				<div class="latestproducts">
					<div class="product-one">
						<?php for($rp=0;$rp<count($relatedproducts);$rp++) { ?>
						<br>
						<div class="col-md-4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { if($rp%3 == 0) echo ' col-md-push-8 '; elseif($rp%3 == 2) echo ' col-md-pull-8 '; } ?> product-left p-left"> 
							<div id="product" class="product-main simpleCart_shelfItem">
							<?php $relatedproductspics[$rp] = array_diff(scandir('uploads/products/'.$relatedproducts[$rp]['id']), array('.','..')); ?>
							<a href="product.php?id=<?php echo $relatedproducts[$rp]['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="uploads/products/<?php echo $relatedproducts[$rp]['id']; ?>/<?php echo $relatedproductspics[$rp][2]; ?>" alt="" />
								<div class="product-bottom">
									<h3><center><?php echo $relatedproducts[$rp]['title']; ?></center></h3>
									<!--<p>Explore Now</p>-->
									<h4><!--<a class="item_add" href="#"><i></i></a>--><center><span class=" item_price"><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $relatedproducts[$rp]['price']).$system['currency']; else echo $system['currency'].$relatedproducts[$rp]['price']; ?></span></center></h4>
								</div>
								<?php if($relatedproducts[$rp]['oldprice'] != '') { ?>
								<div class="srch">
									<span><strike><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $relatedproducts[$rp]['oldprice']).$system['currency']; else echo $system['currency'].$relatedproducts[$rp]['oldprice']; ?></strike></span>
								</div>
								<?php } ?>
							</a>
							</div>
						</div>
						<?php } ?>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php } ?>
			</div>
				<div class="col-md-3 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' col-md-pull-9 '; ?> single-right">
					<div class="w_sidebar">
						<?php
							$categories = getCategories($lang_file);
							if(!empty($categories))
							{ 
						?>
						<section  class="sky-form">
							<h4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?> ><?php language('categories'); ?></h4>
							<div class="row1 scroll-pane">								
								<div class="col col-4">																	
									<?php $k = 1; for($j=0;$j<count($categories);$j++) { ?>
										<label class="radio"><input type="radio" id="category" name="category" value="<?php echo $categories[$j]['childto']; ?>" onclick="gotoproducts('<?php if(isset($_GET['size'])) echo $_GET['size']; ?>','<?php if(isset($_GET['color'])) echo $_GET['color']; ?>',this.value,'<?php if(isset($_GET['q'])) echo $_GET['q']; ?>');" <?php if(isset($_GET['category']) && $_GET['category'] == $categories[$j]['childto']) echo 'checked';?>><i></i><?php echo $categories[$j]['title']; ?></label>
									<?php } ?>								
								</div>
							</div>
						</section>
						<?php } ?>						
						
						<?php 
							$colors = getSelectColor();
							if(!empty($colors))
							{
						?>
						<section class="sky-form" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?> >
							<h4><?php language('colors'); ?></h4>
								<ul class="w_nav2">
									<?php for($co=0;$co<count($colors);$co++) { ?>
										<li><a href="products.php?size=<?php if(isset($_GET['size'])) echo $_GET['size']; ?>&color=<?php echo $colors[$co]['color']; ?>&category=<?php if(isset($_GET['category'])) echo $_GET['category']; ?>&q=<?php if(isset($_GET['q'])) echo $_GET['q']; ?>" style="background-color: #<?php echo $colors[$co]['color']; ?>; height: 45px; width: 45px;"></a></li>
									<?php } ?>
								</ul>
						</section>
						<?php } ?>
							
						<?php 
							$sizes = getSelectSize();
							if(!empty($sizes))
							{
						?>
						<section class="sky-form">
							<h4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo ' dir="rtl"'; ?> ><?php language('sizes'); ?></h4>
							<div class="row1 row2 scroll-pane">
								<div class="col col-4">
									<?php for($si=0;$si<count($sizes);$si++) { ?>
										<label class="radio"><input type="radio" id="size" name="size" value="<?php echo $sizes[$si]['title']; ?>" onclick="gotoproducts(this.value,'<?php if(isset($_GET['color'])) echo $_GET['color']; ?>','<?php if(isset($_GET['category'])) echo $_GET['category']; ?>','<?php if(isset($_GET['q'])) echo $_GET['q']; ?>');" <?php if(isset($_GET['size']) && $_GET['size'] == $sizes[$si]['title']) echo 'checked'; ?>><i></i><?php echo $sizes[$si]['title']; ?></label>
									<?php } ?>
								</div>
							</div>
						</section>
						<?php } ?>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
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
	<?php } else header('Location: index.php'); ?>
