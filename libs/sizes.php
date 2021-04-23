<?php

function getnoOfSizes()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from sizes");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getSizes($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from sizes LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function updateSize($id,$title)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update sizes set title = '$title' where id = '$id'");
	$stmt->execute();
	include("../libs/closedb.php");
}

function exist($table,$field,$value)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select id from {$table} where {$field} = '$value'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	if(empty($row)) return 1;
	else return 0;
}

function insertSize($title)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `sizes` (`title`) values ('$title')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>