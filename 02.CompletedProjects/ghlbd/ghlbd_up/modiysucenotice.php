<?php 
include('db_conn.php');


$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$id=$_REQUEST['id'];

$res=modify_nitce($id,$title, $description);

if($res)
{
	echo "<script> alert('information successfully added'); </script>";
	echo "<script> window.location='login_view.php?page=addnotice.php'; </script>";
	
}
else
{
	echo "<script> alert('information is wrong'); </script>";
	echo "<script> window.location='login_view.php?page=addnotice.php'; </script>";
}


?>