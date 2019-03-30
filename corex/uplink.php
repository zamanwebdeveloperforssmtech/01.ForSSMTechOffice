<html>
<head>
<title>COREX Server</title>
</head>
<body>
<?
include_once("script/func.php");
connectdb();
$ips=$REMOTE_ADDR;

$lastsync=$_GET["lastsync"];

$ls = strtotime($lastsync);
$month=date("m", $ls);
$day=date("d", $ls);
$year=date("Y", $ls);
$ts = mktime(0, 0, 0, $month, ($day-7), $year);

$lastsynci=date("Y-m-d H:i:s");
$rs=getresult("Select * from tracking where pdate>='$lastsync'");
$row=mysql_num_rows($rs);

echo $lastsync;

echo '[ddt script version="1.0"]';
echo '[author]Partha[/author]';
echo '[title]Corex Shipment Update Since: '.date("d M y, g:i a", strtotime($lastsync)).'[/title]';
echo '[content]';

for($i=0;$i<$row;$i++) {
	$data=mysql_fetch_array($rs);
	$serial=$data["sid"];
	$awb=wynsf("Select * from shipment where serial='$serial'", "AWB");
	$hawb=wynsf("Select * from shipment where serial='$serial'", "HAWB");
	$location=$data["location"];
	$activity=$data["activity"];
	$dated=date("d M Y @ g:i a", strtotime($data["pdate"]));
	echo "[line][hawb]".$hawb."[/hawb][awb]".$awb."[/awb][location]".$location."[/location][status]".$activity."[/status][date]".$dated."[/date][/line]";
}

echo '[/content]';
echo '[/ddt]';
echo '<img src="int.jpg" border="0">';
?>
</body>
</html>