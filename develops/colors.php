<?php

//include('../classes/ResizeImage.php');
if(isset($_COOKIE['admin']))
{
	include('../libs/colors.php');
	$admin = $_COOKIE['admin'];
	
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;	
	$noOfcolors = getnoOfColors();
	
	$totalPages = ceil($noOfcolors / $resultsPerPage);

	if(isset($_POST['savecolor']))
	{
		unset($_POST['savecolor']);
		if(exist('colors','color',$_POST['color']))
		{
			if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateColor($_POST['oldid'],$_POST['color']);
			else insertColor($_POST['color']);
		}
		header('location: colors.php');
	}
}
else header('location: ../index.php');
?>