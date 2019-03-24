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



<?php
	}
	
	
$id = $_REQUEST['id'];

$sql = "Select * from notices where id = '$id'";
$result = connect($sql);
$row = mysql_fetch_array($result);
?>
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />


</head>

<body onload="startTime()">
	<div id="wrapper">
		<div class="container">
		
			
			
			<!--banner started -->
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
			
				<table border="0"  bordercolor="#FF9900" height="100%" width="732" style="font-family:arial">
					<tr>
						
						<td>
						<h1 style="margin-left:10px">Notice</h1>
							<h3 style="text-align:left; font:arial; margin-left:10px; color:#EE0000; padding-top:15px"><?php echo $row[1];?></h3>
					<p style="font-family:tahoma; text-align:justify; font-size:16px; padding:20px 30px 0px 30px"> <?php echo $row[2];?>.</p>
					


					  	</td>			
					
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
							<td>&nbsp;<a href="#">Calculator</a></td>
							<th><img src="images/calender.gif" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Calender</a></td>
							<th><img src="images/holiday.gif" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Holiday</a></td>
							<th><img src="images/weight.gif" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Volumatric Weight</a></td>
						
					</table>
				</div>
			</div>
			<!--last_text end -->
			
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
					header('Location: index.php');
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