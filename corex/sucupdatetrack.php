
<?php 
//session_start();
include("db_con.php");


$serial_no=$_REQUEST['serial_no'];
$location=$_REQUEST['location'];
$activity=$_REQUEST['activity'];
$pdate=$_REQUEST['date_time'];

//echo $serial_no,"\n", $location, "\n" ,$activity ,"\n", $pdate;


	$sql="Update tracking set location ='$location', activity  ='$activity', pdate ='$pdate', pdate='$pdate' where serial = '$serial_no'";
	$res=mysql_query($sql);
	if($res)
	{
		echo "<script> alert('Informaton is updated.'); </script>";
		echo "<script> window.location='modifytrack.php'; </script>";	
	}
	else
	{
	 	echo "<script> alert('Information is wrong.'); </script>";
		echo "<script> window.location='modifytrack.php'; </script>";
 	}

?>