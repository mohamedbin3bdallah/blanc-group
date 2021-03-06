<?php
include('libs/lang.php');
include('libs/systemandpage.php');
include('libs/cart.php');
include('libs/productsfront.php');
include('libs/contactfooter.php');
$contact = getContact();

$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');

$system = getSystem();
$cpage = getPage(basename($_SERVER["SCRIPT_FILENAME"]),$lang_file);
$ipaddress = hash('sha256', $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'], FALSE);

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 9;
$startResults = ($page - 1) * $resultsPerPage;

if(isset($_GET['size'],$_GET['color'],$_GET['category'],$_GET['q']))	$noOfproducts = getnoOfProducts($_GET['q'],$_GET['category'],$_GET['size'],$_GET['color']);
else $noOfproducts = getnoOfAllProducts();

$totalPages = ceil($noOfproducts / $resultsPerPage);

if(isset($_GET['size'],$_GET['color'],$_GET['category'],$_GET['q']))	$products = getProducts($lang_file,$_GET['q'],$_GET['category'],$_GET['size'],$_GET['color'],$startResults,$resultsPerPage);
else $products = getAllProducts($lang_file,$startResults,$resultsPerPage);

$flcategories = getFLevelCategories($lang_file);
?>