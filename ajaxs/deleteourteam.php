<?php
if(isset($_POST['ourteam'],$_POST['image']))
{	
	$ourteamid = $_POST['ourteam'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	if($_POST['image'] != '')
	{
		unlink("../uploads/ourteam/".$_POST['image']);
		unlink("../uploads/ourteam/thumbnail/".$_POST['image']);
	}
	$stmt = $dbh->prepare("delete from ourteam where id = '$ourteamid'");
	$stmt->execute();
	include("../libs/closedb.php");
   exit;
}
?>