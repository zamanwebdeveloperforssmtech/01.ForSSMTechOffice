<?php 
include('db_conn.php');


$hawb_no=$_REQUEST['hawb_num'];
$origin=$_REQUEST['origin'];
$destination=$_REQUEST['destination'];
$through=$_REQUEST['through'];
$awb_no=$_REQUEST['awb_num'];
$date=$_REQUEST['post_date'];
$edate=$_REQUEST['edate'];
$shipper=$_REQUEST['shipper'];
$receiver=$_REQUEST['receiver'];
$prduct=$_REQUEST['product'];
$stutus=$_REQUEST['status'];

$smobile=$_REQUEST['smobile'];
$semail=$_REQUEST['semail'];
$saddress=$_REQUEST['saddress'];
$rmobile=$_REQUEST['rmobile'];
$remail=$_REQUEST['remail'];
$raddress=$_REQUEST['raddress'];


$agentname=$_REQUEST['agentname'];
$refname=$_REQUEST['refname'];
$cLocation=$_REQUEST['cLocation'];

$pcs=$_REQUEST['pcs'];
$weight=$_REQUEST['weight'];
$pdescription=$_REQUEST['pdescription'];


$res=modify_tract($hawb_no, $origin, $destination, $through, $awb_no, $date, $shipper, $receiver, $prduct, $stutus,$smobile,$semail,$saddress,$rmobile,$remail,$raddress,$edate,$agentname,$refname,$cLocation,$pcs,$weight,$pdescription);

if($res)
{
	echo "<script> alert('information successfully Updated'); </script>";
	echo "<script> window.location='login_view.php?page=admin.php'; </script>";
	
}
else
{
	echo "<script> alert('information is wrong'); </script>";
	echo "<script> window.location='login_view.php?page=admin.php'; </script>";
}


?>