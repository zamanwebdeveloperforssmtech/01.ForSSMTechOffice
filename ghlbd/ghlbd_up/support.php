<?php
//session_name();
session_start();
include('connect.php');

if(!isset($_POST['user_id']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Visit Bengal Post</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="login/scripts/script.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<?php
	if(isset($_GET['h']) || $_GET['h'] != '')
	{
		$height = $_GET['h'];
	}
	else
	{
?>
<script language="JavaScript" type="text/javascript">
<!--
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
  location.href="support.php?h="+myHeight;
-->
</script>
<?php
	}
?>
<link href="css/generalrules.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="6CC524" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
      <TR> 
        <TD width="813" height="85" vAlign=top background="item/nav-bkgd.gif" bgColor=#6CC524><IMG height=85 
      src="item/home-nav.gif" width=608 align=top border=0></TD>
        <form name="the_form" id="the_form" method="post" action="support.php">
          <TD width=26 
    background="item/nav-tab-bkgd.gif"><div align="right"><img src="item/home-nav-midd.gif" width="26" height="85"> 
            </div></TD>
          <TD width=9 
    background="item/nav-tab-bkgd.gif">&nbsp;</TD>
          <TD width=113 
    background="item/nav-tab-bkgd.gif"><div align="center"> 
              <TABLE cellSpacing=0 cellPadding=0 width=102 border=0>
                <TBODY>
                  <TR> 
                    <TD width="102"><IMG height=10 
            src="item/space1.gif" width=1></TD>
                  </TR>
                  <TR> 
                    <TD vAlign="bottom"><INPUT  type="text" class="navblack1" id="user_id" name="user_id" 
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" size="14" value="UserName"></TD>
                  </TR>
                  <TR> 
                    <TD vAlign=bottom><INPUT class="navblack1" type="password" id="user_pass" name="user_pass" 
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" size="14" value="Password">
			</TD>
                  </TR>
                  <TR> 
                    <TD vAlign=bottom>
					<input type="hidden" name="h" id="h" value="<?php echo $_GET['h'];?>" />
					<INPUT type="image" 
            src="item/client-login.gif" width="102" height="29" onClick="document.forms[0].submit();"></TD>
                  </TR>
                </TBODY>
              </TABLE>
            </div></TD>
        </FORM>
        <TD width=15 vAlign=top background="item/nav-bkgd.gif"><div align="right"><img src="item/home-nav-right.gif" width="30" height="85"></div></TD>
        <TD width=16 vAlign=top background="item/nav-bkgd.gif">&nbsp;</TD>
      </TR>
    </TBODY>
  </TABLE>
  
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td> 
        <?php include('button.php'); ?>
      </td>
    </tr>
  </table>
  
</div>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#66CC33">
  <tr> 
    <td width="15%" height="287" valign="top"><table width="131" height="288" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td height="288">&nbsp;</td>
        </tr>
      </table></td>
    <td width="73%" rowspan="2" valign="top"><table width="775" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="753" height="137" valign="top" background="item/bgimage.gif">&nbsp;</td>
        </tr>
      </table>
      <div align="center"> 
        <table width="776" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="165" height="540" valign="top"><div align="center"><img src="item/free02b.jpg" width="165" height="171"><br>
                <br>
                <img src="item/home01.jpg" width="165" height="169"> <br>
                <img src="item/home02.jpg" width="165" height="168"> </div></td>
            <td width="610"><div align="center"><br>
                <table width="594" border="0" cellpadding="3">
                  <tr> 
                    <td width="560" height="14"><font color="#000000" size="4" face="Verdana, Arial, Helvetica, sans-serif">Logistic 
                      Support</font></td>
                  </tr>
                  <tr> 
                    <td><hr size="1"></td>
                  </tr>
                </table>
                <table width="575" border="0" cellpadding="3">
                  <tr> 
                    <td width="138" height="6" class="tabfontfocus">&nbsp;</td>
                    <td width="6" height="6" class="tabfontfocus">&nbsp;</td>
                    <td width="210" height="6" class="alert"><strong>Micro Bus 
                      </strong></td>
                    <td width="127" class="alert"><strong>1, Nos </strong></td>
                  </tr>
                  <tr> 
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="alert"><strong>Motor Cycle </strong></td>
                    <td height="14" class="alert"><strong>7 Nos </strong></td>
                  </tr>
                  <tr> 
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="alert"><strong>Private Car </strong></td>
                    <td height="14" class="alert"><strong>1 Nos.</strong></td>
                  </tr>
                  <tr> 
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="alert"><strong>Cover Van</strong></td>
                    <td height="14" class="alert"><strong>7 Nos. </strong></td>
                  </tr>
                  <tr> 
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="tabfontfocus">&nbsp;</td>
                    <td height="14" class="alert"><strong>Pickup Van </strong></td>
                    <td height="14" class="alert"><strong>10 Nos </strong></td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table>
      </div></td>
    <td width="12%" valign="top"><table width="95" height="288" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td height="288">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td width="15%" height="279" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="27" valign="top">&nbsp;</td>
    <td valign="top"><div align="center">
        <table width="774" border="0" align="center">
          <tr> 
            <td> 
              <?php include('footer.html'); ?>
            </td>
          </tr>
        </table>
      </div></td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>
<div align="center">
</body>
</html>
<?php
}
else
{
	$admin_id=$_POST['user_id'];
	$admin_password=$_POST['user_pass'];
	$sql = "Select * from adminsign where admin_id='$admin_id'";
	$result = connect($sql);
	$num_rows = mysql_num_rows($result);
	if($num_rows > 0)
	{
		$myrow = mysql_fetch_row($result);
		if($myrow[1] == $admin_password)
		{
			setcookie('member_ID', $myrow[0],time()+8*60*60);
			setcookie('member_Type', 'Super_Admin',time()+8*60*60);
			header('Location: login_home.php');
		}
		else
		{
			echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
		}
	}
	else
	{
		$sql = "select user_id, password, user_type from employee where user_id= '$admin_id'";
		$result = connect($sql);
		$num_rows = mysql_num_rows($result);
		if($num_rows > 0)
		{
			$myrow = mysql_fetch_row($result);
			if($myrow[1] == $admin_password)
			{
				setcookie('member_ID', $myrow[0],time()+8*60*60);
				if($myrow[2] == 'admin')
				{
					setcookie('member_Type', 'Admin',time()+8*60*60);
				}
				elseif($myrow[2] == 'agent')
				{
					setcookie('member_Type', 'Agent',time()+8*60*60);
				}
				elseif($myrow[2] == 'agent_dom')
				{
					setcookie('member_Type', 'Agent_DOM',time()+8*60*60);
				}
				elseif($myrow[2] == 'admin_dom')
				{
					setcookie('member_Type', 'Admin_DOM',time()+8*60*60);
				}
				else
				{
					setcookie('member_Type', 'Special',time()+8*60*60);
				}
				header('Location: login_home.php');
			}
			else
			{
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
			}
		}
		else
		{
			$prefix = "bexs_";
			$sql = "SELECT login_id, password, employee_type, employee_name, employee_id FROM " . $prefix . "employee e WHERE login_id='" . $_POST['user_id'] . "'";
			$result = connect($sql);
			$num_rows = mysql_num_rows($result);
			$server_time = (gmmktime()+(12*60*60)+(8*60*60));
			//echo date("d M, Y h:i:s A", $server_time);	
			if($num_rows > 0)
			{
				$myrow = mysql_fetch_row($result);
				if($myrow[1] == md5($_POST['user_pass']))
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
					setcookie('TODAY[START]', (gmmktime(0,0,0)+(6*60*60)), $server_time);
					// (gmmktime(0,0,0)-(7*60*60)) - localhost
					// (gmmktime(0,0,0)+(6*60*60)) - web
					//echo date("d M, Y h:i:s A", (gmmktime(0,0,0)-(7*60*60)));
					header('Location: soft/index.php');
				}
				else
				{
					echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
				}
			}
			else
			{
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
			}
		}
	}
}
?>