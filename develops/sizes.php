<?php

//include('../classes/ResizeImage.php');
if(isset($_COOKIE['admin']))
{
	include('../libs/sizes.php');
	$admin = $_COOKIE['admin'];
	
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;	
	$noOfsizes = getnoOfSizes();
	
	$totalPages = ceil($noOfsizes / $resultsPerPage);

	if(isset($_POST['savesize']))
	{
		unset($_POST['savesize']);
		if(exist('sizes','title',$_POST['title']))
		{
			if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateSize($_POST['oldid'],$_POST['title']);
			else insertSize($_POST['title']);
		}
		header('location: sizes.php');
	}
}
else header('location: ../index.php');
?>