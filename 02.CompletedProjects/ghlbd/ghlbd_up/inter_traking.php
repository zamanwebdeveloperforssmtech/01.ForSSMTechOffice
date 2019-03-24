<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>inter_traking</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
	#write
		{
		height:100%;
		width:100%;
		float:left;
		overflow:hidden;
		border:solid 1px #EE0000;
		}


</style>
</head>

<body onload="startTime()">
	<div id="wrapper">
		<div class="container">
		<!--header started -->
			<div class="header">
				<div class="top_menu">
					<ul>
						<li class="home"><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>			
					</ul>
					
				</div>
				
			</div>
			<!--header end -->
			
			<!--banner started -->
			<div class="banner">
				<div class="banner_top">
				
				</div>
				
				<div class="main_menu">
					<div class="main_bg">
						<ul class="coolMenu">
							<li><a href="contact_us.php">Contact Us</a></li>
							<li><a href="service.php">Service</a></li>
							<li><a href="terms_condition.php">Terms & Condition</a></li>
							<li><a href="feed_back.php">Feed back</a></li>
							<li><a href="Webmail">Webmail</a></li>
							<li><a href="#">Tracking</a>
								<ul>
									<li><a href="domestic_tracking.php">Domestic</a><hr /></li>
									<li><a href="inter_traking.php">International</a></li>
								</ul>
							</li>
							<li><a href="login.php">Log in</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div id="write">
				<table border="1"  bordercolor="#FF9900" height="100%" width="100%">
					<tr>
						<td style="height:250px; width:300px"> <img src="images/bg.jpg" height="250px" width="300px" /></td>
						<td rowspan="3"><h2 style="padding-bottom:8px;" >Tracking </h2><hr style="height:2px"><hr/>
						<br />
						 	<table width="100%" border="0" >
								<tr>
									<td colspan="3"><h4 style="text-align:center;">International</h4>  </td>
																
								</tr>
								
								<tr>
									<td colspan="3">&nbsp;</td>
																
								</tr>
								
																
								<tr >
									<td width="80px">&nbsp;</td>
									<td colspan="2"><h4>You can check the current status of your shipment by our Air Way bill nymber or by referance Please insert the number in to the box and click GO. </h4> </td>
																
								</tr>
								
								<tr>
									<td colspan="3">&nbsp;</td>
								</tr>
								
								
								<tr>
									<td width="80px">&nbsp;</td>
									<td> 
										<form action="shipment.php" method="post" target="window.open('shipment.php','Tracking Info','status=1,toolbar=1,location=no')">
                                        <p> 
                                          <textarea name="track_no" cols="20" rows="5" re-size="none"></textarea>
                                          <input type="submit" value=" GO " name="submit" >
                                        </p>
                                      </form>
									  </td>
								</tr>
								
								<tr>
									<td colspan="3">&nbsp;</td>
								</tr>
								
								<tr>
									<td colspan="3">&nbsp;</td>
								</tr>
								
								
								
								
								<tr>
									<td width="80px">&nbsp;</td>
									<td  colspan="2"><h2>Opportunity :</h2></td>
								</tr>
								
								<tr>
									<td colspan="3">&nbsp;</td>
								</tr>
								
																
								<tr>
									<td width="80px">&nbsp;</td>
									<td  colspan="2">Omex is aim to excellent service at the doors of the people at a very competive rate. You can minimize your cost and increse profifidely by using our interrogate service.</td>
								</tr>
								
								
							</table><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				
				
					  	</td>			
					
					</tr>
						
					<tr>
						<td style="height:250px; width:300px"><img src="images/right-berlogo.gif" height="250" width="300" /></td>
					</tr>	
						
					<tr>
						<td style="height:250px; width:300px"></td>
					</tr>			
				</table>
				
			</div>
			
			<!--secnod_img end-->
			
			<!--last_text started -->
			<div class="last_text">
				<div class="last_bg">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th><img src="images/calculator.jpg" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Calculator</a></td>
							<th><img src="images/clock.jpg" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Worrld Clock</a></td>
							<th><img src="images/calender.jpg" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Calender</a></td>
							
						</tr>
						
						<tr>
							
							<th><img src="images/tel.jpg" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">ISD Dailing</a></td>
							<th><img src="images/weight.jpg" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Volumatric Weight</a></td>
							<th><img src="images/holiday.jpg" height="36" width="36" /></th>
							<td>&nbsp;<a href="#">Holiday</a></td>
						</tr>
						
					</table>
				</div>
			</div>
			<!--last_text end -->
			
			<div class="footer">
				<div class="footer_bg">
					<table width="100%" border="0">
						<tr>
							<td><p style="color:#FF9900; font-size:18px; font-weight:bold; padding-left:20px">Copy right &copy; Bengal Courier</p></td>
							<td><p style="text-align:right; padding-right:10px">Powered by <b style="color:white">SSM Technology</b></p></td>
						</tr>
					</table>
				</div>
			</div>
				
		</div>
	</div>



</body>
</html>
