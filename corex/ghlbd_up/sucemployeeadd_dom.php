<?php 
session_start();
include('db_conn.php');

$name = $_REQUEST['employeename'];
$pre_address =$_REQUEST['preadress'];
$per_address = $_REQUEST['peraddress'];
$gender = $_REQUEST['gender'];
$date_of_birth =$_REQUEST['dateofbirth'];
$contact_no=$_REQUEST['contactno'];
$user_id =$_REQUEST['employeeid'];
$password=$_REQUEST['password'];
$user_type=$_REQUEST['usertype'];
$blood_group=$_REQUEST['bloodgroup'];
$email=$_REQUEST['emailaddress'];
//$pic=$_REQUEST['imagem'];


	$query = "Select user_id from employee where user_id  = '$user_id'";
	$result = mysql_query($query) or die(mysql_error());
	if(mysql_fetch_array($result))
	{
		echo "<script> alert('Please Change The User ID, Its Already Exists !'); </script>";
		echo "<script> window.location='login_view.php?page=agentadd_dom.php'; </script>";
		
	}
	else
	{

		if (isset($_FILES['imagem']['tmp_name']))
		{
				$dd=$_FILES['imagem']['name'];
			//	echo $dd;
				$sql="select * from employee where picture='$dd'";
				$res=mysql_query($sql) or die(mysql_error());
					if(mysql_fetch_array($res))
					{
					
							echo "<script> alert('Please Change the picture name. this picture name already submitted'); </script>";
							echo "<script> window.location='login_view.php?page=agentadd_dom.php'; </script>";
					
					}
					else
					{
					
				
				
							if ($_POST['MAX_FILE_SIZE'] >= $_FILES['imagem']['size']) 
 	 						{
		
								if(is_uploaded_file($_FILES['imagem']['tmp_name']))
								{
							
									$imagename = $_FILES['imagem']['name'];
									$source = $_FILES['imagem']['tmp_name'];
									$target = "employee_pic/".$imagename;
			
									 move_uploaded_file($source, $target);
							//		copy ($_FILES['imagem']['tmp_name'], "pic/".$_FILES['imagem']['name']) or die ('Could not upload'); 

					 
									 $qry="INSERT INTO employee(employee_name,  present_address, permanent_address, gender, date_of_birth, contact_no, blood_group, email, user_id, password, user_type, picture) VALUES
											('$name', '$pre_address', '$per_address', '$gender', '$date_of_birth', '$contact_no', '$blood_group',  '$email', '$user_id', '$password', '$user_type',  '" . $_FILES['imagem']['name'] . "')";
	
	
										if(mysql_query($qry) or die(mysql_error()))
										{
											echo "<script> alert('information successfully added'); </script>";
											echo "<script> window.location='login_view.php?page=agentadd_dom.php'; </script>";
										}
										else 
		   								{
			            					$messages[]= mysql_error();
           								}	
		
									}
									else
									{
										echo "Problem in upload!";
										exit(0);	
									}
							}
							else
							{
						  		echo "<script> alert('picture size is lager size 26 KB '); </script>";
						  		echo "<script> window.location='login_view.php?page=agentadd_dom.php'; </script>";
							}	
			  		}
			 			
			}
			else
			{
      	  			echo "<script> alert('Please select the picture '); </script>";
			  		echo "<script> window.location='login_view.php?page=agentadd_dom.php'; </script>";
		    }

	}
	

?>

