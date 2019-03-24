<?php

include('db_conn.php');
if($_REQUEST)
{
	$client_id=$_POST['r'];
	
	if($client_id !="")
	{
		$res=del_client($client_id);
		if($res)
		{
			echo "<script> alert('information successfully Deleted'); </script>";
			echo "<script> window.location='login_view.php?page=deletetrack.php'; </script>";
		}
		else
		{
				echo "<script> window.location='login_view.php?page=deletetrack.php'; </script>";
		}

	}

	else
	{
	echo "<script> alert('Please Select Item!'); </script>";
	echo "<script> window.location='login_view.php?page=deletetrack.php'; </script>";

	}
}

?>