<?php 
session_start();
include('db_conn.php');

$emp_id = $_REQUEST['emp_id'];
$name = $_REQUEST['employeename'];
$pre_address =$_REQUEST['preadress'];
$per_address = $_REQUEST['peraddress'];
$gender = $_REQUEST['gender'];
$date_of_birth =$_REQUEST['dateofbirth'];
$contact_no=$_REQUEST['contactno'];
$user_type=$_REQUEST['usertype'];
$blood_group=$_REQUEST['bloodgroup'];
$email=$_REQUEST['emailaddress'];
//$pic=$_REQUEST['imagem'];
//echo $pic;

	
						
							if ($_POST['MAX_FILE_SIZE'] >= $_FILES['imagem']['size']) 
 	 						{
		
								if(is_uploaded_file($_FILES['imagem']['tmp_name']))
								{
							
									$imagename = $_FILES['imagem']['name'];
									$source = $_FILES['imagem']['tmp_name'];
									$target = "employee_pic/".$imagename;
			
									 move_uploaded_file($source, $target);
							//		copy ($_FILES['imagem']['tmp_name'], "pic/".$_FILES['imagem']['name']) or die ('Could not upload'); 

					 
							//		 $qry="INSERT INTO employee(employee_name, designation,  present_address, permanent_address, gender, date_of_birth, contact_no, blood_group, email, user_id, password, user_type, picture) VALUES
								//			('$name', '$disignation', '$pre_address', '$per_address', '$gender', '$date_of_birth', '$contact_no', '$blood_group',  '$email', '$user_id', '$password', '$user_type',  '" . $_FILES['imagem']['name'] . "')";
										
									$qry = "UPDATE employee set employee_name = '$name', present_address = '$pre_address', permanent_address = '$per_address',  gender = '$gender', date_of_birth = '$date_of_birth', contact_no = '$contact_no', blood_group = '$blood_group', email = '$email', user_id = '$user_id', password = '$password', user_type = '$user_type', picture = '" . $_FILES['imagem']['name'] . "' where employee_id = '$emp_id'";	
	
										if(mysql_query($qry) or die(mysql_error()))
										{
											echo "<script> alert('information successfully Modify'); </script>";
											echo "<script> window.location='login_view.php?page=selectstu.php'; </script>";
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
						  		echo "<script> alert('picture size is lager size 100 KB '); </script>";
						  		echo "<script> window.location='login_view.php?page=employeeadd.php'; </script>";
							}	
			  
			 			
		

	

?>

