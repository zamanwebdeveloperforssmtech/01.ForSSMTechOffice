<?php
include("db_con.php");

$serial=$_REQUEST['sirialno'];
$token=$_REQUEST['tokenno'];
$hawb=$_REQUEST['hawbno'];
$location=$_REQUEST['location'];
$activity=$_REQUEST['activity'];
$day=$_REQUEST['day'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
$hour=$_REQUEST['hour'];
$minute=$_REQUEST['minute'];
$endshipment=$_REQUEST['delivered'];
$pdate= $year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':00';
//echo $serial,"\n", $location, "\n",$activity, "\n",$pdate,"\n",$endshipment ;



 if($token ==1235)
 {
	if($endshipment=='Yes')
	{
		$sql="Update shipment set status='delivered' where serial='$serial'";
		$res=mysql_query($sql)or die("status query problem.");
	}
		$lstt=giveserial("tracking");
		$sql="Insert into tracking values('$lstt', '$serial', '$activity', '$location', '$pdate')";
		$res=mysql_query($sql) or die("insert tracking query problem");
		echo "<script> alert('data update is successful.'); </script>";
		echo "<script> window.location='listall.php'; </script>";
	
	
 }
 else
 {
 	echo "<script> alert('Token: ".$token." is wrong.'); </script>";
	echo "<script> window.location='listall.php'; </script>";
 }


function giveserial() {
	$sql="Select serial from tracking order by serial desc limit 1";
	$res=mysql_query($sql);
	
	if($res)
	{
		$id=mysql_fetch_array($res);
	//	echo $id[0] ;
		$id1=$id[0]+1;
	//	echo $id1[0] ;
	}
	else 
	{
		echo "<script> window.location='listall.php'; </script>";
	}
	return $id1;
	

}
?>