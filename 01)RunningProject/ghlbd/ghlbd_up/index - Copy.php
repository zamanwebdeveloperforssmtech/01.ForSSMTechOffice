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
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />


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
             <li><a href="about.php">About company</a></li>
             <li><a href="service.php">Our Service </a></li>
             <li><a href="terms_condition.php">Terms & Condition </a> </li>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="feed_back.php">Feedback </a></li>
            <li><a href="webmail">&nbsp;Webmail</a></li> 
          </ul>
        </div>
        <div class="menu_middle">
     
        </div>
		
	  </div>
      
       <div class="top_menu">
  <div class="slider-wrapper theme-default">
  
  
  
  
  
  
  
  
  
  
                    <div id="slider" class="nivoSlider"> 
                    <img src="slider/1.jpg" data-thumb="demo/images/toystory.jpg" alt="" /> 
                    <img src="slider/2.jpg" data-thumb="demo/images/up.jpg" alt="" title="This is an example of a caption" />
                     <img src="slider/3.jpg" data-thumb="demo/images/walle.jpg" alt="" data-transition="slideInLeft" />
                      <img src="slider/4.jpg" data-thumb="demo/images/nemo.jpg" alt="" title="#htmlcaption" /> </div>  
                    </div>
   
	  </div>     
      
      <h3 style="font:arial; font-size:15px">
            <marquee style="background:#009A39; color:#FFFFFF; text-align:center; font-family:arial; padding:0px 5px 0px 5px" height="30px" direction="left"; 
								scrollamount="1">
            Our Service Area &nbsp;&nbsp;|&nbsp;&nbsp; 
        <span style="color:#ffffff;"><b>Asia :</b> Bahrain, Bangladesh, Bhutan, Cambodia, China, India, Indonesia, Iran, Iraq, Japan, Jordan, North Korea, South Korea, Kuwait, Lebanon, Malaysia, Oman, Pakistan, Philippines, Qatar, Saudi Arabia, Sri Lanka, Syria, Thailand, United Arab Emirates, Uzbekistan, Yemen</span>&nbsp;&nbsp;|&nbsp;&nbsp;
        <span style="color:#FFFFFF;"><b>Africa :</b> Cameroon, Ghana,  Egypt, Kenya, Libya, Morocco, Nigeria, Senegal, South Africa, Sudan </span>&nbsp;&nbsp;|&nbsp;&nbsp;
        <span style="color:#FFFFFF;"><b>Australia :</b> Australia, New Zealand </span>&nbsp;&nbsp;|&nbsp;&nbsp;
        <span style="color:#FFFFFF;"><b>Europe :</b> Albania, Austria, Belgium, Bulgaria, Cyprus, Denmark, Finland, France, Germany, Italy, Netherlands, Norway, Poland, Portugal, Romania, Russia, Spain, Sweden, Switzerland, United Kingdom </span>&nbsp;&nbsp;|&nbsp;&nbsp;
        <span style="color:#FFFFFF;"><b>South America :</b> Brazil, Colombia, Argentina, Chile, Ecuador, Paraguay, French Guiana </span>
        <span style="color:#FFFFFF;"><b>North America :</b> Barbados, Canada, Jamaica, Mexico, USA </span> 
            </marquee>
          </h3>  
      
      
      
      
      
      
      
      
      
      
      
	  
    </div>
    <div id="write">
      <div class="left_ber">
       
        <div class="image_left1">
        <div class="table1u">
         <table cellpadding="0px" cellspacing="0px" width="243" height=203>
          
              <form action="shipment.php" method="post" target="window.open('shipment.php','Tracking Info','status=1,toolbar=1,location=no')"> 
			
            
              <tr  >             
                <td colspan="3" bordercolor="#000066" border="1" bgcolor="#009A39" align="center"><strong style="font-family:arial;padding:1px; font-size:16px; color:#ffffff; text-align:center"> TRACK SHIPMENT</strong> </td>
              </tr>
                <tr>
                <td colspan="3" align="center" font-size:18px; color:#ffffff;>
					<b>You Can Track Your Shipment by Our Way bill No.</b> 
                    
				</td>
				 </tr>
                 
                   <tr>
                <td colspan="3" align="center">
					<b>International Tracking</b> 
				</td>
				 </tr>
                 
                <tr>
				<td width="20" ></td>
				<td >
					<input name="track_no" type="text" size="23" maxlength="25" height="30px"  onfocus="if (this.value==this.defaultValue) 
											this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter your way bill No."/>
                </td>
				
                <td cellpadding="3px" style="border-right:solid 1px #FF9900">
					<input type="submit" value=" GO " name="submit" />
                </td>
				
              </form>
              </tr>
			 
          </table>
          
           <div class="table1u2">
         <table cellpadding="0px" cellspacing="0px"  width="243">
          
			 
             <form action="shipment_dom.php" method="post" target="window.open('shipment_dom.php','Tracking Info','status=1,toolbar=1,location=no')">
             
               <tr  >
                <td colspan="3"  align="center"><strong style="font-family:arial;padding:5px; font-size:14px; color:#ffffff; text-align:center"> </strong> </td>
              </tr>
                <tr>
                <td colspan="3" align="center">
					<b>Domestic Tracking</b> 
				</td>
				 </tr>
                <tr>
                <td width="20"></td>
                <td>
					<input name="track_no" type="text" size="23" maxlength="25" onfocus="if (this.value==this.defaultValue) 
						this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter your CN / Ref No"/>
                </td>
				
                <td style="border-right:solid 1px #FF9900">
					<input type="submit" name="submit" value=" GO " />
                </td>
				
              </form>
            </tr>
          </table>
          </div>
          
          
          
          
          
          
          
          
          </div>
          <br/>
         
          
          <table height="200px" cellpadding="0px" cellspacing="0px" >
           
            <tr>
              <td>
            
              <div class="left_ber_img"> <img src="images/bg.jpg" height="200px" width="240px"  /> </div>
              
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="middle_ber">
        <div class="scroll">
                  
          <h1 style="text-align:center; font:arial; color:#FF0000; padding-top:15px">Welcome to Omex</h1>
          <p style="font-family:tahoma; line-height:22px; text-align:justify; font-size:15px; color:#878a86;padding:10px 14px 16px 14px"> <b>Overseas Mail Express;</b> a wing of Bengal Courier & Parcel Express has been operating throughout the nation and the World wide strong professionalism since long. 
            We have understand the customer needs & expectation from their own unique requirements. In order to foster these need we have started our
            business operations by associating ourselves with world leading express delivery service provider like DHL, Fedex, TNT, Aramex, OCS, Dpex, 
            First flight etc. form Bangladesh directly and from Dubai, Singapore, Hong kong as an interrogator. All local and World Wide strategic offices are
            staffed by friendly, Professional and highly trained personnel with utmost knowledge and experienced in every area of our business to ensure the best 
            possible attention for your document and parcel. We are capable to provide excellent service at a low cost.
            
            <br/><br/><br/><br/></p>
        </div>
      </div>
      <div class="right_ber">
      
      <div class="right_text1">
          <div class="table1">
            <table style="text-align:center; font-size:14px;  font-family:arial" height="165px" border="0" width="200">
              <tbody>
              <tr border="1">
                <td colspan="3" bordercolor="#000066" border="1" ;="" bgcolor="#009A39"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> Login Panel</strong> </td>
              </tr>
              
              <tr>
              <td colspan="3">
              <table border="0" cellpadding="0" cellspacing="0" height="50px">
							<tr>
								<td>
									<form name="the_form" id="the_form" method="post" action="index.php">
									  <tr>
										<td  style="padding-left:3px"><b>User ID</b> </td>
										<td><input type="text" class="navblack1" id="user_id" name="user_id" onfocus="if (this.value==this.defaultValue) 
																	this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="UserName" size="12" maxlength="40" />
										</td>
										
								
									  </tr>
									  <tr>
										<td  style="padding-left:3px" width="20"><b>Password</b> </td>
										<td><input class="navblack1" type="password" id="user_pass" name="user_pass" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Password" size="12" maxlength="20" /></td>
									  </tr>
                                      
                                        <tr>
										<td rowspan="2"> </td>
										<td>	<input type="hidden" name="h" id="h" value="<?php echo $_GET['h'];?>" />
										
											<input name="button" type="button" onclick="document.forms[0].submit();" value="Login" /></td>
									  </tr>
									</form>
								</td>
							</tr>
						</table>
              
              </td>
              </tr>
            
            </tbody></table>
          </div>
        </div>
        <div class="right_text1">
          <div class="table1">
            <img src="images/courier.jpg"  width="200" height="200"> 
        
          </div>
        </div>
        
        
      </div>
    </div>
    <div class="last_text1">
      <div class="last_bg1">
      
      
        <table width="100%" border="0" height="200">

          <tr>
          <td><div class="right_text1">
          <div class="table2">
            <table style="text-align:center; font-size:14px;  font-family:arial" height="165px" border="0" width="200px">
              <tbody><tr border="1">
                <td colspan="3" bordercolor="#000066" border="1" ;="" bgcolor="#de1b15
"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> WHY CHOOSE ME </strong> </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Reliability </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Security </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Transparency </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Sustainability </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Flexibility </td>
              </tr>
            </tbody></table>
          </div>
        </div></td>
          <td><div class="right_text2">
          <div class="table1">
            <table style="text-align:center; font-size:14px;  font-family:arial" height="165px" border="0" width="200px">
              <tbody><tr>
                <td colspan="3" bordercolor="#000066" bgcolor="#de1b15"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> INTERNATIONAL SERVICE </strong></td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp; &nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Air Express </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Air Freight </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Sea Freight </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Clearing &amp; Forwarding </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Import &amp; Export </td>
              </tr>
            </tbody></table>
          </div>
        </div> </td>
          <td><div class="right_text3">
          <div class="table1">
            <table style="text-align:center; font-size:14px;  font-family:arial" height="180px" border="0" width="200px">
              <tbody><tr>
                <td colspan="3" bordercolor="#000066" bgcolor="#de1b15"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> DOMESTIC SERVICE </strong></td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp; &nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Same day delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Time Sensitive delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Security delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Next day delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Value added service </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Online feedback </td>
              </tr>
            </tbody></table>
          </div>
        </div> </td>
			<td><div class="right_text3">
          <div class="table1">
            <table style="text-align:center; font-size:14px;  font-family:arial" height="180px" border="0" width="200px">
              <tbody><tr>
                <td colspan="3" bordercolor="#000066" bgcolor="#de1b15"><strong style="font-family:arial; font-size:14px; color:#ffffff; text-align:center"> DOMESTIC SERVICE </strong></td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp; &nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Same day delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Time Sensitive delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Security delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Next day delivery </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Value added service </td>
              </tr>
              <tr style="text-align:left">
                <td>&nbsp;</td>
                <td style="text-align:center"><img src="images/bullet.gif" height="14" width="14"> </td>
                <td>Online feedback </td>
              </tr>
            </tbody></table>
          </div>
        </div> </td>
        </tr>
          </table>
      </div>
    </div>
 
    <!--secnod_img end-->
    <!--last_text started -->
    <div class="last_text">
      <div class="last_bg">
        <table height="60xp" width="100%" border="0">
          <th><img src="images/calculator.gif" height="36" width="36" /></th>
            <td>&nbsp;
			<a href='http://mikestoolbox.com/calc.html' onclick="window.open('http://mikestoolbox.com/calc.html', 'mikestoolboxcalc','toolbar=no,width=520,height=230'); 
			return false;">	Calculator</a></td>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script type="text/javascript" src="jquery.nivo.slider.js"></script> 

    <script type="text/javascript">

	$(window).load(function() {

	$('#slider').nivoSlider({

	effect: 'random',

	slices: 15,

	boxCols: 8,

	boxRows: 4,

	animSpeed: 500,

	pauseTime: 6000,

	startSlide: 0,

	directionNav: true,

	controlNav: false,

	controlNavThumbs: false,

	pauseOnHover: true,

	manualAdvance: false,

	prevText: 'Prev',

	nextText: 'Next',

	randomStart: false,

	beforeChange: function(){},

	afterChange: function(){},

	slideshowEnd: function(){},

	lastSlide: function(){},

	afterLoad: function(){}

	});

	});

	</script>


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
		 echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="index.php";</script>');
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
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="index.php";</script>');
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
					setcookie('TODAY[START]', $server, $server_time);
					header('Location:../bengal/soft/index.php');
				}
				else
				{
					echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="index.php";</script>');
				}
			}
			else
			{
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="index.php";</script>');
			}
		}
	}
}
?>
