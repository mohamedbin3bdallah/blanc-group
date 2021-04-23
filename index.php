<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/index.php');
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
<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='86a2931ebf5bee75a5b85d1dd8da0f54' data-cfasync='false' async='async'></script>

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
	<!--banner-starts-->
	<?php $slider = array_diff(scandir('uploads/slider'), array('.','..')); ?>
	<?php if(!empty($slider)) { ?>
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <?php for($sl=2;$sl<count($slider)+2;$sl++) { ?>
					<li>
						<img src="uploads/slider/<?php echo $slider[$sl]; ?>" alt=""/>
					</li>
				<?php } ?>				
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<?php } ?>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
			 <script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--about-starts-->
	
	<!--about-starts-->
	<?php $values = getValues($lang_file); ?>
	<?php if(!empty($values)) { ?>
	<div class="about"> 
		<div class="container">
			<div class="about-top grid-1">
				<?php for($va=0;$va<count($values);$va++) { ?>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="uploads/values/<?php echo $values[$va]['image']; ?>" alt=""/>
						<figcaption>
							<h2><?php echo $values[$va]['title']; ?></h2>
							<p><?php echo $values[$va]['description']; ?></p>	
						</figcaption>			
					</figure>
				</div>
				<?php } ?>				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!--about-end-->
	
	<!--<?php $products = getProducts($lang_file,$startResults,$resultsPerPage); ?>
	<?php if(!empty($products)) { ?>
	<div class="about"> 
		<div class="container">
			<div class="about-top grid-1">
				<?php for($i=0;$i<count($products);$i++) { ?>
					<div class="col-md-4 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { if($i%3 == 0) echo ' col-md-push-8'; elseif($i%3 == 2) echo ' col-md-pull-8'; } ?> about-left">
						<a href="product.php?id=<?php echo $products[$i]['id']; ?>">
							<figure class="effect-bubba">
								<?php $productpics[$i] = array_diff(scandir('uploads/products/'.$products[$i]['id']), array('.','..')); ?>
								<img class="img-responsive" src="uploads/products/<?php echo $products[$i]['id']; ?>/<?php echo $productpics[$i][2]; ?>" alt="">
								<figcaption>
									<h2><?php echo $products[$i]['title']; ?></h2>
									<p><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo $system['currency'].str_replace($western_arabic, $eastern_arabic, $products[$i]['price']); else echo $system['currency'].$products[$i]['price'] ?></p>
								</figcaption>			
							</figure>
						</a>
					</div>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> -->
	<?php } ?>
	<!--about-end-->
	<!--product-starts-->
	<?php $products = getProducts($lang_file,$startResults,$resultsPerPage); ?>
	<?php if(!empty($products)) { ?>
	<div class="product"> 
		<div class="container">
			<div class="product-top">
				<div class="product-one">
				<?php for($i=0;$i<count($products);$i++) { ?>
					<?php if($i%4 == 0) echo '<br><div class="row">'; ?>
					<div class="col-md-3 <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') { if($i%4 == 0) echo ' col-md-push-9'; elseif($i%4 == 1) echo ' col-md-push-3'; elseif($i%4 == 2) echo ' col-md-pull-3'; else echo ' col-md-pull-9'; } ?> product-left">
						<div  id="product" class="product-main simpleCart_shelfItem">
							<?php $productpics[$i] = array_diff(scandir('uploads/products/'.$products[$i]['id']), array('.','..')); ?>
							<a href="product.php?id=<?php echo $products[$i]['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="uploads/products/<?php echo $products[$i]['id']; ?>/<?php echo $productpics[$i][2]; ?>" alt="" />
							<div class="product-bottom">
								<h3><center><?php echo $products[$i]['title']; ?></center></h3>
								<!--<p>Explore Now</p>-->
								<h4><!--<a class="item_add" href="#"><i></i></a>--><center><span class=" item_price"><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $products[$i]['price']).$system['currency']; else echo $system['currency'].$products[$i]['price']; ?></span></center></h4>
							</div>
							<?php if($products[$i]['oldprice'] != '') { ?>
							<div class="srch">
								<span><strike><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo str_replace($western_arabic, $eastern_arabic, $products[$i]['oldprice']).$system['currency']; else echo $system['currency'].$products[$i]['oldprice']; ?></strike></span>
							</div>
							<?php } ?>
							</a>
						</div>
					</div>
					<?php if($i%4 == 3 || $i == count($products)-1) echo '</div>'; ?>
				<?php } ?>
					<div class="clearfix"></div>
				</div>
				
			</div>
			<div class="row">
			<div class="col-md-4 col-md-offset-5">			
				<nav>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>">
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li style="<?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!--product-end-->
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