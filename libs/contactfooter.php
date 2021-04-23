<?php

function getContact()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select * from contact");
	if(!empty($result))
	{
		$row = $result->fetch();
		include("libs/closedb.php");
		return $row;
	}
}

?>