<?php 
include('db_conn.php');


$hawb_no=$_REQUEST['hawb_no'];
$serial_shipment=$_REQUEST['ship_serial'];
$location=$_REQUEST['current_location'];
$activity=$_REQUEST['activity'];
$post_date=$_REQUEST['post_date'];
$end_shipment=$_REQUEST['end_shipment'];

$res=add_tract($hawb_no, $serial_shipment, $location, $activity, $post_date, $end_shipment);

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