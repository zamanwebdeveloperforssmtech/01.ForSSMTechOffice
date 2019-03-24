<?php
session_start();
include('connect.php');

if(isset($_POST['do']) && $_POST['do'] == 'Login')
{
	$sql = "SELECT login_id, password, employee_type, employee_name, employee_id FROM " . $prefix . "employee e WHERE login_id='" . $_POST['u_id'] . "' ";
	$result = connect($sql);
	$num_rows = mysql_num_rows($result);
	$server_time = (gmmktime()+(12*60*60)+(8*60*60));
	//echo date("d M, Y h:i:s A", $server_time);
	
	//$server = (mktime(0,0,0)-(8*60*60));   //localhost
	$server = (mktime(0,0,0)+(6*60*60)); //web
	echo date("d M, Y h:i:s A", $server);

	if($num_rows > 0)
	{
		$myrow = mysql_fetch_row($result);
		if($myrow[1] == md5($_POST['u_pass']))
		{
			setcookie('USER[ID]', $myrow[4], $server_time);
			if($myrow[2] == 1)
			{
				setcookie('USER[TYPE]', 'admin', $server_time);
			}
			elseif($myrow[2] == 2)
			{
				setcookie('USER[TYPE]', 'scb', $server_time);
			}
			
			setcookie('USER[NAME]', $myrow[3], $server_time);
			setcookie('H', $_POST['h'], $server_time);
			setcookie('TODAY[START]', $server, $server_time);
			header('Location: index.php');
		}
		else
		{
			header('Location: ../login/index.php?page=message_bad&h=' . $_POST['h'] . '&m=' . htmlentities('User Name / Password does not Matched!!!'));
		}
	}
	else
	{
		header('Location: ../login/index.php?page=message_bad&h=' . $_POST['h'] . '&m=' . htmlentities('User Name / Password does not Matched!!!'));
	}
}

if(isset($_POST['do']) && $_POST['do'] == 'Change_Pass')
{
	if($_POST['old_pass'] == '' || $_POST['new_pass'] == '' || $_POST['re_new_pass'] == '')
	{
		header('Location: view.php?page=message_bad&m=' . htmlentities('No fields can be left blank'));
	}
	else
	{
		if($_POST['new_pass'] != $_POST['re_new_pass'])
		{
			header('Location: view.php?page=message_bad&m=' . htmlentities('Your new Passwords are not matched'));
		}
		else
		{
			$sql = "SELECT password FROM " . $prefix . "employee WHERE employee_id='" . $_COOKIE['USER']['ID'] . "'";
			$result = connect($sql);
			$myrow = mysql_fetch_row($result);
			if($myrow[0] == md5($_POST['old_pass']))
			{
				$sql = "UPDATE " . $prefix . "employee SET password='" . md5($_POST['new_pass']) . "' WHERE employee_id='" . $_COOKIE['USER']['ID'] . "'";
				$result = connect($sql);
				$m[0] = 'Your Password is successfully changed';
				$m[1] = 'Success';
			}
			else
			{
				$m[0] = 'Your Old Password is not matched. Please try again!!!';	
				$m[1] = 'Wrong';
			}
			$result = $m;

			if($result[1] == 'Success')
			{
				header('Location: view.php?page=message_good&m=' . htmlentities($result[0]));
			}
			else
			{
				header('Location: view.php?page=message_bad&m=' . htmlentities($result[0]));
			}
		}
	}
}

?>