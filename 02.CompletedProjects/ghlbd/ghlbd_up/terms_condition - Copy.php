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
  location.href="terms_condition.php?h="+myHeight;
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
		
	  </div>			</div>
			
			
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
				<table border="0"  bordercolor="#FF9900" height="100%" width="732"  >
					<tr style="border-left:#FF9900">
						
						<td rowspan="14">
						<h1 style="margin-left:10px; padding-bottom:10px; font-family:arial">Terms & Conditions.</h1>
							
						<table style="text-align:justify; padding:5px; font-family:arial; font-size:14px; line-height:22px" width="100%"  >
							<tr>
								<td> <b>By giving us your Documents / Parcels to deliver, you have agree to the following:</b></td>
							</tr>
							
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<tr>
								<td>Bengal Courier has been given services to its clients by carrying Documents / Parcels for delivery to 
								    the various destinations under the following terms & Conditions: </td>
							</tr>	
							
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<tr>
								<td>1. Bengal will not carry any cash or cash related documents like bearer's cheque, prize bond, gift cheque 
									etc. </td>
							</tr>
							
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<tr>
								<td>2. In case of sending tax items, sender must provide necessary papers with that item. Any deviation to this, Bengal will not be held responsible for any seize or missing. Subject to the matter, Bengal will take necessary legal action against the consignor and consignee. </td>
							</tr>
							
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								3. The consignor will be responsible for any misinformation on the notes accompanies the item.
							</td>
							
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								4. Once the consignee receives any document/ parcel and signs on it, it is assumed that the consignee has received that		
								 in tact. After that Bengal any claim will be treated void.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								5. While carrying the document/ parcel, for any kind of unintentional damage to the item, Bengal will be exempted of any
								 responsibility.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								6. Bengal will not take any responsibility of any item that is subject to violation of Government law. Besides, for any 
								damage occurred beyond company ability, it will not take any responsibility for that.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								7. Company may take any type of transportation for smooth and quicker delivery.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								8. During situation beyond control like strike, epidemic, flood, stormy weather, company may take more time to deliver 
								the item for the sake of sustainability of document/ parcel being carried.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								9. For any internal damage to any consignment packed in a box/ packet, company will not be held responsible for that. 
								For any accidental damage to the messenger/ carrier of document, consignor or consignee will have to forfeit the loss.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								10. Any damage to the document/ parcel caused by any natural disaster like famine, storm, natural calamity, company 
								will not be responsible for that.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								11. Company reserves the right to examine the document/ parcel while booking the item.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								12. Acknowledgement/ Proof Of Delivery - POD will be stored for a maximum period of 02 (two) months from the date of 
								booking.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								13. No claim will be taken from either party after 30 (thirty) days from the date of booking. 
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								14. If any damage is visible while accepting document/ item that has to be notified instantly. Once the document/ 
								parcel is received and signed on the POD copy, no claim will be accepted.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								15. Company will take responsibility for domistic service of any damages only when it is proved that it has occurred due to company fault. 
								However, it will compensate for that according to the followings:<br/>
								a) Maximum Tk. 300/= (three hundred) only for 1st 1 kg and additional Tk. 100 for each additional kg.<br/>
								b) Once the value is declared by the consignor and gives Tk. 8 per Tk. 1000/= and pays double charge of normal rate, 
								company will compensate 80% of value declared amount.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								16.The Carrier is liable for damage sustained in the event of the destruction or loss of, or of damage to, the goods, if the occurrence which caused the destruction, loss or damage so sustained takes place during carriage by air and the Carrier is also liable for damage occasioned by delay in the carriage by air of the goods. The Carrier is not liable if it proves that it and its servants and agents have taken all necessary measures to avoid the damage or that it was impossible for it or them to take such measures PROVIDED ALWAYS THAT the liability of the Carrier under this condition shall be limited to the payment by the Carrier by way of damages of a sum not exceeding US$100.00 or its equivalent per consignment or in the case where transit insurance is effected the amount payable thereunder in the event of loss or damage to the goods.

							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								17.Any claim brought against the Carrier hereunder in respect of loss of, damage to, or delay in the carriage by air of the goods must be notified in writing to an office of the Carrier, in the case of damage within 7 days from the date of delivery of the goods, in the case of loss within 14 days from the date when the goods should have reached their destination, and in the case of delay within 21 days from the date on which the goods should have been delivered, otherwise no action shall lie against the Carrier and the rights of the Consignor/Consignee/receiver to any claim against the Carrier is extinguished.

							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								18.The Carrier will not carry dangerous, hazardous, combustible or explosive materials, gold and silver bullion, coin, dust, cyanides, precipitates or any form of uncoined gold and silver bullion, platinum and other precious metals, precious and semi-precious stones, jewellery, currency (paper or coin) of any nationality, negotiable securities, cheques of any kind, stock, bonds, certificates, stamps, blank or endorsed bank cheques, money orders or travellers cheques, antiques, works of art, livestock, plants, drugs, pharmaceuticals, liquor, firearms, tabacco, foodstuff, IATA restricted articles or perishables, and in the event that the Consignor should consign such items with the Carrier the Consignor releases and indemnifies the Carrier from and against all liabilities, claims, damages, losses, costs (including legal costs) and expenses which may arise as a result of or in connection with carriage of the same, and the Carrier shall not be responsible for such items and shall have the right to abandon such carriage immediately upon the Carrier having knowledge that the goods infringe this condition.

							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								19. The Carrier shall not be under any liability whatsoever, including but not limited to liability in tort, contract or bailment, for any loss of or damage to or delay in the delivery of the goods (or any consequential loss arising therefrom) which takes place otherwise than during carriage by air, howsoever caused including but not limited to negligence or breach of contract by the Carrier, PROVIDED ALWAYS THAT where transit insurance is effected the Consignor shall be entitled to the amount payable thereunder in the event of loss or damage to the goods.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								20. If, (without prejudice to but notwithstanding the other provisions of these Conditions of Carriage and, in particular, clause 10) the Carrier is deemed liable, by any Court or other competent authority, for any loss of or damage to or delay in delivery of the goods (or any consequential loss arising therefrom) which takes place during the carriage of the goods by sea, then the liability of the Carrier under this Condition shall be limited to the payment by the Carrier by way of damages of a sum not exceeding that which would be payable if the Warsaw Convention were applicable to these Conditions of Carriage or, if more, either to US$100.00 or its equivalent per consignment, or, in a case where transit insurance is effected, the amount payable thereunder in the event of loss or damage to the goods. Notwithstanding that the Consignor has declared the values of the goods (for whatever reason) to the Carrier, the Consignor/receiver/Consignee hereby agree that the Carrier's liability herein for any loss, damage or delay in delivery of the goods shall be limited to US$100.00 per consignment or, where the Warsaw Convention is applicable, the limitation amounts stated in the provisions therein as if no declaration of value has been made, unless otherwise Postly agreed in writing.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								21. If, (without prejudice to but notwithstanding the other provisions of these Conditions of Carriage and, in particular, clause 10) the Carrier is deemed liable, by any Court or other competent authority, for any loss of or damage to or delay in delivery of the goods (or any consequential loss arising therefrom) which takes place during the carriage of the goods by sea, then the liability of the Carrier under this Condition shall be limited to the payment by the Carrier by way of damages of a sum not exceeding that which would be payable if the Warsaw Convention were applicable to these Conditions of Carriage or, if more, either to US$100.00 or its equivalent per consignment, or, in a case where transit insurance is effected, the amount payable thereunder in the event of loss or damage to the goods. Notwithstanding that the Consignor has declared the values of the goods (for whatever reason) to the Carrier, the Consignor/receiver/Consignee hereby agree that the Carrier's liability herein for any loss, damage or delay in delivery of the goods shall be limited to US$100.00 per consignment or, where the Warsaw Convention is applicable, the limitation amounts stated in the provisions therein as if no declaration of value has been made, unless otherwise Postly agreed in writing.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								22. When sending lightweight, bulky packages use following formula to help you determine their volumetric weight.
a. Domistic service -.<br/>  Length X Width X Height (cm3) ¸ 1500 = Volumetric weight (kgs).<br/> b. International service - Length X Width X Height (cm3) ¸ 5000 = Volumetric weight (kgs). 
The greater of the volumetric weight or actual weight of your packages will used to calculate your shipping cost.
 
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								23. The consignor may make cargo insurance of his own.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								24. Rate will be fixed as per the submitted quotation.
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
							
							<td>
								25.  Payment System:<br/>

		a) 100% payment (including 15% VAT) should be made in favour of <b>Bengal Courier & Parsel Express </b> by cheque within 7 days after submitting the bill.<br/>
			b) After receiving the Cheque, VAT Challan (MUSAK-11) will be issued in favour of your company.<br/>
		
							</td>
													
							<tr>
								<td>&nbsp;</td>
							</tr>
				
						</table><br/>
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