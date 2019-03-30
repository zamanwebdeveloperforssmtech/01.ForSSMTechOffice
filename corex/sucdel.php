<?php

include('db_con.php');
if($_REQUEST)
{
	$client_id=$_POST['r'];
	
	if($client_id !="")
	{
		$res=del_client($client_id);
		if($res)
		{
			echo "<script> alert('information successfully Deleted'); </script>";
			echo "<script> window.location='delete.php'; </script>";
		}
		else
		{
				echo "<script> window.location='delete.php'; </script>";
		}

	}

	else
	{
	echo "<script> alert('Please Select Item!'); </script>";
	echo "<script> window.location='delete.php'; </script>";

	}
}

?>