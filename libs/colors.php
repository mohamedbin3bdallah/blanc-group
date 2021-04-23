<?php

function getnoOfColors()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from colors");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getColors($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from colors LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['color'] = $row['color'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
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

function updateColor($id,$color)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update colors set color = '$color' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertColor($color)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `colors` (`color`) values ('$color')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>