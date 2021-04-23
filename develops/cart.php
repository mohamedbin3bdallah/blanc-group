<?php

include('libs/lang.php');
include('libs/systemandpage.php');
include('libs/cart.php');
include('libs/carts.php');
include('libs/contactfooter.php');
$contact = getContact();

$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');

$system = getSystem();
$cpage = getPage(basename($_SERVER["SCRIPT_FILENAME"]),$lang_file);
$ipaddress = hash('sha256', $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'], FALSE);
$cansale = countIpSale($ipaddress);
setcookie('cansale', $cansale);

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 9;
$startResults = ($page - 1) * $resultsPerPage;
$noOfcarts = getnoOfCarts($ipaddress);
$totalPages = ceil($noOfcarts / $resultsPerPage);

$flcategories = getFLevelCategories($lang_file);

?>