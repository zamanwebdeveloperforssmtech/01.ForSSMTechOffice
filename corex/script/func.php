<?
	$baseurl = "http://www.corex-bd.com/";
	$basefolder="";
	function connectdb()
	{	$host="localhost";
		$user="root";
		$pass="";
		$dbname = "corexbd_track";
		$db=mysql_connect($host,$user,$pass) or
				die("Could not connect to Central server!");
		mysql_select_db($dbname,$db) or
				die("Could not select database!");
	}

	function getresult($sql)
	{
		$rs=mysql_query($sql);
		return $rs;
	}

function wynsf($wynsf_cmd, $wynsf_what) {
//echo $wynsf_cmd;
$wynsf_rs=mysql_query($wynsf_cmd);
$wynsf_data=mysql_fetch_array($wynsf_rs);
$wynsf_value=$wynsf_data[$wynsf_what];

return $wynsf_value;

}

function giveserial($tablename) {
	$giveserialret=wynsf("Select serial from ".$tablename." order by serial desc limit 1", "serial");
	if($giveserialret=='') {
		$giveserialret=1;
	} else {
		$giveserialret=$giveserialret+1;
	}
return $giveserialret;
}

	?>