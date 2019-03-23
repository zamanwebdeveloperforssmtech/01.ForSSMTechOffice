<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to GHL International</title>
</head>
<?php
	if(isset($_GET['page']))
	{
		$get_var = $_GET['page'];
		
		/*<?php echo $get_var;?>*/


		$i = 0;
		foreach($_REQUEST as $key=>$value)
		{
			if($i == 0)
			{
				$get_var .= "?" . $key . "=" . $value;
			}
			else
			{
				$get_var .= "&" . $key . "=" . $value;
			}
			$i +=1;
		}
	}
	
?>
<frameset rows="20%,*,3%" frameborder="1" border="0" framespacing="0">

  <frame src="login_head.html" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" />
  <frame src="login_view.php" name="mainFrame" scrolling="No" noresize="noresize" id="mainFrame" />
  <frame src="admin_footer.html" name="bottomFrame" scrolling="No" noresize="noresize" id="bottomFrame" />
</frameset>
<noframes><body>
</body>
</noframes></html>
