<?php 
session_start();
include('db_conn.php');

$track_no = $_REQUEST['track_no'];


					/*echo "<script> alert('information successfully added'); </script>";*/
					echo "<script> window.location='destinationprint.php?track_no=".$track_no."'; </script>";
			
		
			

?>

