<?php 
//session_start();
include("db_con.php");

//$ips=$REMOTE_ADDR;

$token=$_REQUEST['tokenno'];
$hawb=$_REQUEST['hawbno2'];
$origin=$_REQUEST['origin2'];
$destination=$_REQUEST['destination2'];
$media=$_REQUEST['media'];
$awb=$_REQUEST['awbno2'];
$pdate=$_REQUEST['date_time']; 

//echo $hawb,"\n", $origin , "\n" ,$destination ,"\n", $media,"\n",$awb ,"\n", $pdate;
 if($token ==1235)
 {

	$sql="Update shipment set origin='$origin', destination ='$destination', AWB='$awb', pdate='$pdate', media='$media' where HAWB='$hawb'";
	$res=mysql_query($sql);
	echo "<script> alert('HAWB: ".$hawb." is updated.'); </script>";
	echo "<script> window.location='listallmamun.php'; </script>";
 }
 else
 {
 	echo "<script> alert('Token: ".$token." is wrong.'); </script>";
	echo "<script> window.location='listallmamun.php'; </script>";
 }

?>