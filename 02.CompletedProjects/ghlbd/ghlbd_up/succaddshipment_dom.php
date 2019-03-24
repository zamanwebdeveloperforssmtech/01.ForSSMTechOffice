<?php 
include('db_conn.php');


$hawb_no=$_REQUEST['hawb_num'];
$origin=$_REQUEST['origin'];
$destination=$_REQUEST['destination'];
$date=$_REQUEST['post_date'];
$shipper=$_REQUEST['shipper'];
$receiver=$_REQUEST['receiver'];
$prduct=$_REQUEST['product'];
$stutus=$_REQUEST['status'];

$res=add_shipment_dom($hawb_no, $origin, $destination, $date, $shipper, $receiver, $prduct, $stutus);

if($res)
{
	echo "<script> alert('information successfully added'); </script>";
	echo "<script> window.location='login_view.php?page=addtract_dom.php'; </script>";
	
}
else
{
	echo "<script> alert('information is wrong'); </script>";
	echo "<script> window.location='login_view.php?page=addtract_dom.php'; </script>";
}


?>