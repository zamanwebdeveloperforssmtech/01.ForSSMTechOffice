
/.. <img src="images/globe.jg" height="300px" width="510px"  /> ./
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="login/scripts/script.js"></script>
<title>omexbd.com</title>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<!-- <link href="css/generalrules.css" rel="stylesheet" type="text/css"> -->

<style type="text/css">
.flash
{
height:200px;
width:240px;
float:left;
margin:0px 10px 10px 10px;
border:solid 1px green;
}

.left_ber_img
{
height:200px;
width:240px;
float:left;
margin:10px;
border:solid 1px green;
}

.table
{
border:solid 1px green;
}

.table1
{
width:200px;
height:185px;
border:solid 1px green;
}

.table2 {border:solid 1px green;
}
</style>

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
  location.href="index.php?h="+myHeight;
-->
</script>


<?php
	}
?>
</head>

<body onload="startTime()">
<div id="wrapper">
  <div class="container">
    <!--banner started -->
    <div class="banner">
      <div class="banner_top"> </div>
      <div class="top_menu">
        <div class="menu_left">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact_us.php">Contact </a></li>
            <li><a href="webmail">&nbsp;Webmail</a></li>
          </ul>
        </div>
        <div class="menu_middle">
          <table cellpadding="0px" cellspacing="0px" border="0" width="734px" height="50px" style="font-family:arial; font-size:13px">
            <tr>
              <td colspan="3" align="center" width="253px" style="border-right:solid 1px #FF9900; ">
				<b>&nbsp;International Tracking</b> 
			  </td>
			  
			  <td colspan="3" align="center"  width="253px"  style="border-right:solid 1px #FF9900; ">
				<b>&nbsp;&nbsp;&nbsp;&nbsp;Domestic Tracking</b> 
			  </td>
			  
				  <td colspan="3" rowspan="2"> 
				  	<table border="0" cellpadding="0" cellspacing="0" height="50px" width="225px">
							<tr>
								<td>
									<form name="the_form" id="the_form" method="post" action="index.php">
									  <tr>
										<td  style="padding-left:3px"><b>User Name</b> </td>
										<td><input type="text" class="navblack1" id="user_id" name="user_id" onfocus="if (this.value==this.defaultValue) 
																	this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="UserName" size="12" maxlength="40" />
										</td>
										<td rowspan="2">
											<input type="hidden" name="h" id="h" value="<?php echo $_GET['h'];?>" />
										
											<input name="button" type="button" onclick="document.forms[0].submit();" value="Login" />
											
											</td>
									  </tr>
									  <tr>
										<td  style="padding-left:3px"><b>Password</b> </td>
										<td><input class="navblack1" type="password" id="user_pass" name="user_pass" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Password" size="12" maxlength="20" /></td>
									  </tr>
									</form>
								</td>
							</tr>
						</table>
				
				  </td>
			  </td>
            </tr>
			
            <tr style="font-size:12px">
              <form action="shipment.php" method="post" target="window.open('shipment.php','Tracking Info','status=1,toolbar=1,location=no')"> 
				<td style="padding-left:3px">
					<b>AWB No</b> 
				</td>
				
				<td >
					<input name="track_no" type="text" size="23" maxlength="25" height="30px"  onfocus="if (this.value==this.defaultValue) 
											this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter your Number"/>
                </td>
				
                <td cellpadding="3px" style="border-right:solid 1px #FF9900">
					<input type="submit" value=" GO " name="submit" />
                </td>
				
              </form>
			  
             <form action="shipment_dom.php" method="post" target="window.open('shipment_dom.php','Tracking Info','status=1,toolbar=1,location=no')">
                <td style="padding-left:3px">
					<b>CN / Ref No</b> 
				</td>
				
                <td>
					<input name="track_no" type="text" size="20" maxlength="25" onfocus="if (this.value==this.defaultValue) 
						this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter your Number"/>
                </td>
				
                <td style="border-right:solid 1px #FF9900">
					<input type="submit" name="submit" value=" GO " />
                </td>
				
              </form>
            </tr>
		
          </table>
        </div>
		
	  </div>
	  
	  
	  
    </div>
    <div id="write">
      <div class="left_ber">
        <div class="main_menu">
          <ul>
            <li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="about.php">About company</a></li>
            <li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="terms_condition.php">Terms & Condition </a> </li>
            <li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="service.php">Our Service </a></li>
            <li><img src="images/arrow.png" height="9" width="13" style="padding-right:7px"  /><a href="feed_back.php">Feedback </a></li>
          </ul>
        </div>
        <div class="image_left">
          <table height="440px" cellpadding="0px" cellspacing="0px" >
            <tr>
              <td ><div class="flash">
                  <embed src="flash/uncle_f.swf" height="200px" width="240px";> </embed>
              </div></td>
            </tr>
            <tr>
              <td><div class="left_ber_img"> <img src="images/bg.jpg" height="200px" width="240px"  /> </div></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="middle_ber">
        <div class="scroll">
          <h3 style="font:arial; font-size:20px">
            <marquee style="background:#009A39; color:#FFFFFF; text-align:center; font-family:arial; padding:0px 5px 0px 5px" height="30px" direction="left"; 
								scrollamount="1">
              Excellent Service - Low Cost
            </marquee>
          </h3>
          <img src="images/image.gif" height="293" width="507" />
          <h1 style="text-align:center; font:arial; color:#FF0000; padding-top:15px">Welcome to Omex</h1>
          <p style="font-family:tahoma; line-height:22px; text-align:justify; font-size:15px; padding:10px 14px 16px 14px"> <b>Overseas Mail Express;</b> a wing of Bengal Courier & Parcel Express has been operating throughout the nation and the World wide strong professionalism since long. 
            We have understand the customer needs & expectation from their own unique requirements. In order to foster these need we have started our
            business operations by associating ourselves with world leading express delivery service provider like DHL, Fedex, TNT, Aramex, OCS, Dpex, 
            First flight etc. form Bangladesh directly and from Dubai, Singapore, Hong kong as an interrogator. All local and World Wide strategic offices are
            staffed by friendly, Professional and highly trained personnel with utmost knowledge and experienced in every area of our business to ensure the best 
            possible attention for your document and parcel. We are capable to provide excellent service at a low cost.</p>
        </div>
      </div>
      <div class="right_ber">
        <div class="right_text1">
          <div class="table1">
            <table width="200px" border="0" style="text-align:center; font-size:14px;  font-family:arial" height="165px" >
              <tr border="1">
                <td colspan="3" bordercolor="#000066" border="1"; bgcolor="#009A39"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> WHY CHOOSE ME </strong> </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td >Reliability </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Security </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Transparency </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Sustainability </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Flexibility </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="right_text2">
          <div class="table1">
            <table width="200px" border="0" style="text-align:center; font-size:14px;  font-family:arial" height="165px" >
              <tr>
                <td colspan="3" bordercolor="#000066" bgcolor="#009A39"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> INTERNATIONAL SERVICE </strong></td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp; &nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td >Air Express </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Air Freight </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Sea Freight </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Clearing & Forwarding </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Import & Export </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="right_text3">
          <div class="table1">
            <table width="200px" border="0" style="text-align:center; font-size:14px;  font-family:arial" height="180px" >
              <tr>
                <td colspan="3" bordercolor="#000066" bgcolor="#009A39"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> DOMESTIC SERVICE </strong></td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp; &nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td >Same day delivery </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Time Sensitive delivery </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Security delivery </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Next day delivery </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Value added service </td>
              </tr>
              <tr  style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14" /> </td>
                <td>Online feedback </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--secnod_img end-->
    <!--last_text started -->
    <div class="last_text">
      <div class="last_bg">
        <table height="60xp" width="100%" border="0">
          <th><img src="images/calculator.gif" height="36" width="36" /></th>
            <td>&nbsp;<a href="#">Calculator</a></td>
            <th><img src="images/calender.gif" height="36" width="36" /></th>
            <td>&nbsp;<a href="#">Calendar</a></td>
            <th><img src="images/holiday.gif" height="36" width="36" /></th>
            <td>&nbsp;<a href="#">Holiday</a></td>
            <th><img src="images/weight.gif" height="36" width="36" /></th>
            <td>&nbsp;<a href="#">Volumetric Weight</a></td>
          </table>
      </div>
    </div>
    <!--last_text end -->
    <div class="footer">
      <div class="footer_bg">
        <table width="100%" cellpadding="0px" cellspacing="0px" border="0" style="font-family:arial">
          <tr>
            <td><p style="color:#FF9900; font-size:14px; font-weight:bold; padding-left:20px">Copy right &copy; Bengal Courier</p></td>
            <td><p style="text-align:right; padding-right:10px">Powered by <b style="color:white; font-size:15px"><a href="http://ssmtech.net" target="_blank">SSM Technology</a></b></p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>



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
			$server_time = (mktime()+(19*60*60));
			//echo date("d M, Y h:i:s A", $server_time) . '<br>';
			
			//$server = (mktime(0,0,0)-(8*60*60));   //localhost
			
			if(date("H")>=13 && date("H")<=23)
			{
				$server = (mktime(0,0,0)+(11*60*60)); //web
			}
			else
			{
				$server = (mktime(0,0,0)); //web
				
			}
			//echo date("d M, Y h:i:s A", $server) . '<br>';
			

			if($num_rows > 0)
			{
				$myrow = mysql_fetch_row($result);
				if($myrow[1] == $_POST['user_pass'])
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