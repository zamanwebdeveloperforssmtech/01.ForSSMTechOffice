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



<link rel="shortcut icon" type="image/jpg" href="images/car.jpg"/>
<title>Omex International</title>
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
margin:1px;
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

input[type="submit"] {
    background-color: orange;
    color: White;
    font-family: Arial;
    font-size: 12px;
    margin-top: 8px;
    padding: 4px;
}
input[type="text"] {
    background: rgba(0, 0, 0, 0) -moz-linear-gradient(center top , #ffffff, #eeeeee 1px, #ffffff 20px) repeat scroll 0 0;
    border: 1px solid #cccccc;
    border-radius: 3px;
    box-shadow: 0 0 2px #dddddd;
    padding: 5px;
}
input[type="password"] {
    background: rgba(0, 0, 0, 0) -moz-linear-gradient(center top , #ffffff, #eeeeee 1px, #ffffff 20px) repeat scroll 0 0;
    border: 1px solid #cccccc;
    border-radius: 3px;
    box-shadow: 0 0 2px #dddddd;
    padding: 5px;
}

.bodytext3 {
    color: #000000;
    font-family: "Noto Sans",sans-serif;
    font-size: 13px;
    font-style: normal;
    font-variant: normal;
    font-weight: 600;
    letter-spacing: normal;
    line-height: 14px;
    text-align: justify;
    text-transform: none;
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
  location.href="service.php?h="+myHeight;
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
		<!--header started -->
			<div class="banner">
				<div class="banner_top">
				
				</div>
				
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
			</div>
			
			
			<div id="write">
    
    
      <div class="left_ber">
       
        <div class="image_left1">
        <div class="table1u">
         <table cellpadding="0px" cellspacing="0px" width="243" height="25">
     
              <tr  >             
                <td colspan="3" bordercolor="#000066" border="1" bgcolor="#009A39" align="center"><strong style="font-family:arial;padding:1px; font-size:16px; color:#ffffff; text-align:center"> TRACK SHIPMENT</strong> </td>
              </tr>
               
               
			 
          </table>
          
           <div class="table1u2">
        
          
           <table height="100%" width="100%"><tbody><tr>
			  <td style="padding-left:8px; padding-bottom:5px;" valign="top" background="images/car.jpg?width=242&amp;height=252">
		
            		<span class="bodytext1">The fastest way to check the status of your shipment, the results gives you real-time progress...</span>
                         <hr style="height:1px; border:none; color:#333; background-color:#333; padding:0px;">
            		<span class="bodytext3"> International Tracking</span>
			
              <form action="shipment.php" method="post" style="padding-top:0px; target="window.open('shipment.php','Tracking Info','status=1,toolbar=1,location=no')"> 
          
              
              <input name="track_no" type="text"   maxlength="50" maxheight  onfocus="if (this.value==this.defaultValue) 
						this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter way bill No"/>
                        
			  <input name="submit" value="Track" type="submit"></form><br style="line-height: 50%;">
            		<span class="bodytext3">Domestic Tracking</span>
			
              <form action="shipment_dom.php" style="padding-top:0px;" method="post" target="window.open('shipment_dom.php','Tracking Info','status=1,toolbar=1,location=no')">
              
             <input name="track_no" type="text"   maxlength="50" maxheight  onfocus="if (this.value==this.defaultValue) 
						this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" value="Enter your CN / Ref No"/>
              
			  <input name="submit" value="Track" type="submit"></form></td>
			  </tr></tbody></table>
          </div>
          
          
          
          
          
          
          
          
          </div>
          <br/>
         
          
          <table height="200px" cellpadding="0px" cellspacing="0px" >
           
            <tr>
              <td>
            
              <div class="left_ber_imga"> <img src="images/bg.jpg" height="200px" width="240px"  /> </div>
              
              </td>
            </tr>
          </table>
          
          
          <table height="200px" cellpadding="0px" cellspacing="0px" >
           
            <tr>
              <td>
            
               <div class="slider-wrapper theme-default">
  
  
  
  
  
  
  
  
  
  
                    <div id="slider" class="nivoSlider"> 
                    <img src="slider/1.jpg" data-thumb="demo/images/toystory.jpg" alt="" /> 
                    <img src="slider/2.jpg" data-thumb="demo/images/up.jpg" alt="" title="This is an example of a caption" />
                     <img src="slider/3.jpg" data-thumb="demo/images/walle.jpg" alt="" data-transition="slideInLeft" />
                      <img src="slider/4.jpg" data-thumb="demo/images/nemo.jpg" alt="" title="#htmlcaption" /> </div>  
                    </div>
   

              
              </td>
            </tr>
          </table>
          
        </div>
      </div>
				<div class="main_body">
				<table border="0"  bordercolor="#FF9900" height="100%" width="732" style="font-family:arial; font-size:15px" >
					<tr>
						
						<td rowspan="3">
						<h1 style="margin-left:10px; padding-bottom:10px">Our Services</h1>
							<p>We specialize in on-time delivery services throughout the globe and have office and warehouse facilities in all over the world. We are proud to have built an enviable reputation for providing a professional, efficient and speedy service at competitive prices. </p><br><br>
						<table border="0" width="100%" cellpadding="1">
							<tr>
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"> <b>International Express Courier</b>.<br/></td>
							</tr>	
								
							<tr>
								<td></td>
								<td></td>
								<td> Omex International Express takes care of shipping your valuable documents and parcels / samples from any city in Bangladesh. We provide shipping services whole sale international air courier to any destination worldwide. Omex International Express ensures prompt, safe and on time delivery of your products at the most economical rates. With Omex International Express service priority, all your shipments are tracked, right from pick-up until delivery and even you can monitor the precise status of your shipments online in real time. Delivery of international documents and packages as it offers Document Express (DOX), Package Express (WPX) and Cargo (Box - 25kgs and Box - 10kgs) services. These services are offered to 220 countries and territories worldwide. </td>
							</tr>	
				
							<tr>
							<td></td>
								<td></td>
								<td></td>
							</tr>	
							
							<tr>
								<td></td>
								<td></td>
								<td> </td>
							</tr>
							
							<tr>
								<td colspan="3">&nbsp;</td>
							</tr>	
							
							<tr>
							
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"> <b>International Express Parcel Courier :</b>.<br/></td>
							</tr>
							
							<tr>
							<td></td>
								<td></td>
								<td> Omex International Express provides a complete range of parcel delivery and collection services throughout the world. Services include by 9 am the next day, before 10.30 am the next day, before noon the next day, standard next day, Economy 2/4 day service. </td>
							</tr>	
							
							<tr>
								<td colspan="3">&nbsp;</td>
							</tr>
				
							<tr>
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"> <b>Air Cargo & Freight Service </b>.<br/></td>
							</tr>	
							
							<tr>
								<td></td>
								<td></td>
								<td> Omex International Express offers this service for your shipments that need to be custom cleared and that need to be sent economically or for shipments that cannot be sent as a courier shipment due to size or weight limit restrictions. You can ask for a door to door service or a Door to Airport Service.  </td>
							</tr>	
							
							<tr>
								<td></td>
								<td></td>
								<td>  </td>
							</tr>
							
							<tr>
								<td></td>
								<td></td>
								<td>  </td>
							</tr>	
							
							<tr>
								<td colspan="3">&nbsp;</td>
							</tr>
							
							<tr>
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"> <b>International Air Freight </b>.<br/></td>
							</tr>	
							
							<tr>
								<td></td>
								<td colspan="2">Omex International Express offers a comprehensive shipping solution to any country worldwide. All our Air Freight, Road and Import services are independent which gives us greater flexibility to choose the most reliable and cost effective way of shipping your consignment. With our network of specialist carriers we offer the very best service to all parts of the globe.  </td>
							</tr>
							
                            <tr>
								<td colspan="3">&nbsp;</td>
							</tr>
                            
                            	<tr>
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"> <b>Air Freight Specialists</b>.<br/></td>
							</tr>	
							
							<tr>
								<td></td>
								<td colspan="2">Omex International Express Worldwide Air Freight offers one of the most diverse range of Air freight services available, with global coverage designed for extreme time sensitive shipments and for exceptional items such as heavyweight consignments requiring urgent delivery. As an extension to this service we offer bespoke packaging for any size shipment to ensure the safest possible transit.   </td>
							</tr>
							
                                 <tr>
								<td colspan="3">&nbsp;</td>
							</tr>
                            
                            	<tr>
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"> <b>Import Services</b>.<br/></td>
							</tr>	
							
							<tr>
								<td></td>
								<td colspan="2">As well as our Air Freight services we can arrange to have your parcels collected from your Customers abroad and delivered direct to you. We will make all the necessary arrangements, all you have to do is give the collection address, contact and telephone number and we will do the rest. We offer the most extensive range of delivery options available in distribution today, specializing in home delivery and business-to-business market. Delivery anywhere around the world is just a phone call away. Next day and premium Timed Express delivery services are available throughout the world as well as two and three day options for deliveries that are less time sensitive.  </td>
							</tr>
                            
							<tr>
								<td colspan="3">&nbsp;</td>
							</tr>	
							
							<tr>
								<td>&nbsp;</td>
								<td colspan="2"> <b style="color:#EE0000; font-size:18px">Service definition</b> </td>
							</tr>
												
							<tr>
								<td>&nbsp;</td>
								<td colspan="2"> <b>Premier Service - </b>Out sourcing  work, collection & delivery any corner in the country.<br/>
									<b>Special Service  - </b> Same day delivery, branch  to  branch collection & delivery.<br/>
								<b>Secured Service - </b> Valuable parcel like – MICR chaque box, Tin box, Pin box, Card box,Cash equivalent<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; any Items.<br/>
									<b>General Service -</b>  Next day delivery with strong professionalism.
								</td>
							</tr>
							
							<tr>
								<td colspan="3">&nbsp;</td>
							</tr>						
							
							<tr>
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"><b> Area Covered - </b> All over the country, Important place & business centre. </td>
							</tr>
							
							<tr>
								<td colspan="3">&nbsp;</td>
							</tr>
							
							<tr>
								<td> <img src="images/bullet.gif" height="14" width="14" /></td>
								<td colspan="2"> <b>Type of Service</b> </td>
							</tr>
											
							<tr>
								<td>&nbsp;</td>
								<td colspan="2"> <b>Local -</b> Security items, Checkbook, Cradit card, Debit card, Tin, Pin, L/C documents, Cell phone bill, Cradit card statement, Share documents. </td>
						</tr>
							
						</table>
				  	</td>			
					
					</tr>
											
				</table>
				</div>
				
			</div>
			
			<!--secnod_img end-->
			
			
			
			<div class="footer">
				<div class="footer_bg">
					<table width="100%" border="0">
						<tr>
							<td><p style="color:#FF9900; font-size:18px; font-weight:bold; padding-left:20px">Copy right &copy; Bengal Courier</p></td>
							<td><p style="text-align:right; padding-right:10px">Powered by <b style="color:white"><a href="http://ssmtech.net" target="_blank">SSM Technology</a></b></p></td>
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