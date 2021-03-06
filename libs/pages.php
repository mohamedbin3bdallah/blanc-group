<?php

function getnoOfPages()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from pages");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getPageByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from pages where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = $result->fetch();
		$allrows['pageurl'] = $row['pageurl'];
		$allrows['titleen'] = $row['titleen'];
		$allrows['titlear'] = $row['titlear'];
		$allrows['descriptionen'] = $row['descriptionen'];
		$allrows['descriptionar'] = $row['descriptionar'];
		$allrows['keywordsen'] = $row['keywordsen'];
		$allrows['keywordsar'] = $row['keywordsar'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function getPages($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from pages LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['pageurl'] = $row['pageurl'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['descriptionen'] = $row['descriptionen'];
			$allrows[$i]['descriptionar'] = $row['descriptionar'];
			$allrows[$i]['keywordsen'] = $row['keywordsen'];
			$allrows[$i]['keywordsar'] = $row['keywordsar'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function updatePage($id,$pageurl,$titleen,$titlear,$descriptionen,$descriptionar,$keywordsen,$keywordsar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update pages set pageurl = '$pageurl',titleen = '$titleen',titlear = '$titlear',descriptionen = '$descriptionen',descriptionar = '$descriptionar',keywordsen = '$keywordsen',keywordsar = '$keywordsar' where id = '$id'");
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

function insertPage($pageurl,$titleen,$titlear,$descriptionen,$descriptionar,$keywordsen,$keywordsar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `pages` (`pageurl`,`titleen`,`titlear`,`descriptionen`,`descriptionar`,`keywordsen`,`keywordsar`) values ('$pageurl','$titleen','$titlear','$descriptionen','$descriptionar','$keywordsen','$keywordsar')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>