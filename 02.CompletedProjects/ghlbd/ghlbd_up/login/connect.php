<?php
$prefix = "bexs_";

function connect($sql)
{
	$link= mysql_connect('localhost','root','');
	if (!$link):
		echo "Could not Connect: %s\n", mysql_error();
		exit();
	endif;
	mysql_select_db('shifaintl', $link);

	$result = mysql_query($sql);
	if (!$result) {
	    die('Could not query:' . mysql_error());
	}
	mysql_close($link);

	return $result;
}
?>