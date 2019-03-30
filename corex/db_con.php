<?php
	$host="localhost";
		$user="corex_tracking";
		$pass="mainuddin2012";
		$dbname = "corex_tracking";
		$db=mysql_connect($host,$user,$pass) or
				die("Could not connect to Central server!");
		mysql_select_db($dbname,$db) or
				die("Could not select database!");




function del_client($client_id)
{
	foreach($client_id as $var)
	{
		$sql="Delete from tracking  where serial='$var'";
		$res=mysql_query($sql) or die (mysql_error());
	}
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}
}		
?>