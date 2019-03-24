<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>GHL International</title>
		
		<script type="text/javascript" src="login/scripts/script.js"></script>

		<link rel="shortcut icon" type="SANEXPRESS_logo.gif" href="SANEXPRESS_log.gif"/>
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
		background-color:  #ff9900;
		color:  white;
		font-family: Arial;
		font-size: 12px;
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


	.print-icon, .email-icon {
		display:inline-block;
		width:16px;
		height:16px;
		text-indent:-3000px;
		overflow:hidden;
	}
	.print-icon {
		background-image:url(images/Mail-icon.png);
	}
	.email-icon {
		background-image:url(images/Mail-icon.png);
	}

	@media print {
		
		@page {
		  size: landscape ;  /* width height */
	   }
		table{
			width:100%;
		}
	 .top_menu {
	display: none;
	}

	#buffer{
		display: none;
	}

	body {
	  -webkit-print-color-adjust: exact;
	}

	}
		</style>


	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />

	<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />


	</head>

<body onload="startTime()">

<?php

	$hawb_no = explode(chr(13) . chr(10), $_POST['track_no']);
	//$hawb_no = $_POST['track_no'];
	include_once('connect.php');
?>
<div id="wrapper">
  <div class="container">
    <!--banner started -->
    <div class="banner">
      <div class="banner_top"> </div>
      
       <div class="top_menu" align="center">
     <div class="menu_left">
          <ul>
            <li><a href="index.php">Home</a></li>
            
            <li><form action="shipment.php" method="post" style="padding-top:0px;" > 
          
                <table border="0" cellspacing="0" cellpadding="0" align="center">
						  <tr>
                          	<td width="200" align="right" >
              <span style="color:white"><b>Another Track No.</b></span></td>
                        <td>	
							<td width="180"  >
              <input name="track_no" type="text"   maxlength="50" style="font-size:15px;" value="<?php echo $_POST['track_no'];?>" /></td>
                        <td>
                        <td width="80"><input name="submit" value="Track" type="submit"></td>
			  
              
              	</td>
                		<td align="right" width="400">
                    <div style="float: right;" >
                        <img src="images/Mail-icon.png" width="30" />
                      	</div>
             
              	</td>
                	<td align="right">
                    <div style="float: right;" onclick="window.print();" >
                        <img src="images/print-icon.png" width="30" />
                      	</div>
             
              	</td>
						  </tr>
						</table>
              </form></li>
              
              
          </ul>
        </div>
      
              
              
		
	  </div>
<?php

	$j=sizeof($hawb_no);
	for($i=0;$i<$j;$i++)
	{
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<?php
	$sql="select * from shipment where HAWB='$hawb_no[$i]'";
	//echo $sql;
	$rs_result=connect($sql);
	
	$count=mysql_num_rows($rs_result);
	
	if($count>0){
		
	}else{?>
    
    <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" bgcolor="#FCFCFC" align="center">
    <tr align="center" bgcolor="#FFCC00" > 
      <th colspan="4" bgcolor="#6600FF" ><font size="+1" color="red">Sorry, This AWB No not found at our database.</font></th>
    </tr>
    </table>
    <?php
		
	}
	$sqlr = "SELECT * FROM destination WHERE track_no='" . $hawb_no[$i] . "'";
	$resultr = connect($sqlr);
	$myrow = mysql_fetch_array($resultr);


	while ($row = mysql_fetch_array($rs_result)) 
	{
		

	$serial=$row['serial'];
	
	
		$sql1="select * from media where m_id='".$row['media']."'";
		$res1=connect($sql1);
		$row1=mysql_fetch_array($res1);
	//echo $serial;
	
	$sqlP="select * from tracking where sid='$serial' order by serial DESC ";
	
	$resP=connect($sqlP);
	$idP=mysql_fetch_array($resP);
?>
	<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" bgcolor="#FCFCFC" align="center">
    <tr align="center" bgcolor="#6600FF" > 
      <th colspan="4" ><font size="+1" color="white">Tracking Result</font></th>
    </tr>
    </table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" bgcolor="#FCFCFC" align="center">
  <tr class="paging"> 
    <td width="15%" align="right"><strong>SAN AWB NO</strong></td>
     <td width="2%"><strong>:</strong></td>
    <td  width="34%"><?php echo $row['HAWB'];?></td>
    <td width="15%" align="right"><strong>Current Status</strong></td>
    <td width="2%"><strong>:</strong></td>
   <td ><?php echo $idP['activity'];?></td>
  </tr>
  
  <tr class="paging"> 
    <td width="15%" align="right"><strong>  Post Date.</strong></td>
    <td width="2%"><strong>:</strong></td>
    <td ><?php /*echo $row['agentname'];*/ echo $idP['pdate'];?></td>
    <td width="15%" align="right"><strong>Current Location</strong></td>
    <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['cLocation'];?></td>
  
  </tr>
    <tr class="paging"> 
   
    <td width="15%" align="right"><strong>Service</strong></td>
    <td width="2%"><strong>:</strong></td>
    <td ><?php /*echo $row['refname'];*/ echo $row1['media_name']?></td>
    <td width="15%" align="right"><strong>Redox No</strong></td>
    <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row1['media_name'] .' '. $row['AWB'];?></td>
  </tr>
   
 
</table>

<?php
 $sqls="select p_name from product WHERE p_id='".$row['product']."'";
$res=connect($sqls);
$panme=mysql_fetch_array($res);


?>
<br>

<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" bgcolor="#FCFCFC" align="center">
    <tr align="center" bgcolor="#6600FF" > 
      <th colspan="4" ><font size="+1" color="white">Shipment Details</font></th>
    </tr>
    </table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" bgcolor="#FCFCFC" align="center">
 
 <!-- <tr class="paging"> 
    <td width="15%" align="right"><strong>Booking Date</strong></td>
     <td width="2%"><strong>:</strong></td>

    <td width="34%"><?php echo $row['pdate'];?></td>
    <td width="15%" align="right"><strong>Contents</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php echo $panme['p_name'];?></td>
  </tr>-->
  
  <tr class="paging"> 
    <td width="15%" align="right"><strong>Origin</strong></td>
      <td width="2%"><strong>:</strong></td>

    <td ><?php echo $row['origin'];?></td>
    <td width="15%" align="right"><strong>Destination</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['destination'];?></td>
  </tr>
  
  <tr class="paging"> 
    <td width="15%" align="right"><strong>Sender Name </strong></td>
      <td width="2%"><strong>:</strong></td>

    <td ><?php echo $row['shipper'];?></td>
    <td width="15%" align="right"><strong>Receiver Name/Attn</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['receiver'];?></td>
  </tr>
  <tr class="paging"> 
    <td width="15%" align="right"><strong>Contents</strong></td>
     <td width="2%"><strong>:</strong></td>

    <td width="34%"><?php 
	
	$Dox=$nDox=null;
			if($myrow['document']=="Dox"){
				$Dox="Dox";
			}else{
				$Dox="Non-Dox";

			}
	
	echo $Dox;?></td>
    <td width="15%" align="right"><strong>Weight</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['weight'];?></td>
  </tr>
  
  <tr class="paging"> 
    <td width="15%" align="right"><strong>Number of pcs</strong></td>
    <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['pcs'];?></td>

    <td width="15%" align="right"><strong>Description</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['pdescription'];?></td>

    <!--
    <td width="15%" align="right"><strong>Agent Name</strong></td>
    <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['agentname'];?></td>
    -->
  </tr>
   <tr class="paging"> 
    <td width="15%" align="right"><strong>Agent A/C No </strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php echo $row['refname'];?></td>

    <td width="15%" align="right"><strong>Booking date</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php echo $idP['pdate'];?></td>
    </tr>
  <!--
    <?php //echo $myrow['agent_id'];?>
	<tr class="paging"> 
    <td width="15%" align="right"><strong>Mobile</strong></td>
      <td width="2%"><strong>:</strong></td>

    <td ><?php //echo $row['smobile'];?></td>
    <td width="15%" align="right"><strong>Mobile</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php //echo $row['rmobile'];?></td>
  </tr>
   <tr class="paging"> 
    <td width="15%" align="right"><strong>Email</strong></td>
      <td width="2%"><strong>:</strong></td>

    <td ><?php //echo $row['semail'];?></td>
    <td width="15%" align="right"><strong>Email</strong></td>
      <td width="2%"><strong>:</strong></td>
    <td ><?php //echo $row['remail'];?></td>
  </tr>
  -->
 
</table>
	
<br>
	<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" bgcolor="#FCFCFC" align="center">
    <tr align="center" bgcolor="#6600FF" > 
      <th colspan="4" ><font size="+1" color="white"> Progress Activities</font></th>
    </tr>
    <tr align="left" bgcolor="#6600FF"> 
      <th width="20%" style="color: #FFFFFF"><div align="center">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time</div></th>
      <th width="40%" style="color: #FFFFFF"><div align="center">Location</div></th>
      <th width="40%" style="color: #FFFFFF"><div align="center">Activity</div></th>
    </tr>
	   <?php 
	$sql="Select * from tracking where sid='$serial' order by serial ASC ";
	$res=connect($sql);
	while($id=mysql_fetch_array($res))
	{
	?>
    <tr> 
   
      <td align="center"><?php echo $id['pdate']; ?> <div align="center"></div></td>
      <td align="center"><?php echo $id['location']; ?> <div align="center"></div></td>
      <td align="center"><?php echo $id['activity']; ?> <div align="center"></div></td>
      
    </tr>
	<?php } ?>
    
    <tr> 
      <td colspan="3"> </td>
    </tr>
	<?php } ?>
  </table>
<br>

<?php 
	$sql="select * from shipment where serial= '$serial'";
	$res=connect($sql);
	while($id=mysql_fetch_array($res))
	{
		$currmedia=$id['media'];
		$awb=$id['AWB'];
		$hawb=$id['HAWB'];
		if($currmedia==1)
		{
			//$goto="http://www.dhl.co.ae/publish/ae/en/eshipping/track.high.html?pageToInclude=RESULT&AWB=".$awb."&type=fasttrack";	
			$goto="http://www.dhl.co.ae/publish/ae/en/eshipping/track.high.html?pageToInclude=RESULTS&AWB=".$awb."&type=fasttrack&awb_hidden=".$awb."";
		}
		else if($currmedia==2)
		{
			$goto="tntsearch.php?cons=".$awb;
		}
		else if($currmedia==3)
		{
			
			$goto="https://www.fedex.com/us/fedextracking/";		
			//$goto="http://www.fedex.com/Tracking?tracknumbers=".$awb."&action=track&language=english&ctry_code=be&mps=y&ascend_header=1&imageField=Track";		
		}
		else if($currmedia==4)
		{
			$goto="https://webcsw.ocs.co.jp/csw/ECSWG0201R00003P.do?cwbno=".$awb."";
			//$goto="ocssearch.php?AWBNo=".$awb;
		}
		else if($currmedia==5)
		{
			$goto="http://www.firstflight.net/track.asp?txtcon_no=".$awb;
		}
		else if($currmedia==6)
		{
			$goto="fardarsearch.php?AWBNo=".$awb;
		}
		else if($currmedia==7)
		{
			//$goto="http://www.aramex.com/Post/track_results_multiple.aspx?ShipmentNumber=".$awb;
	                $goto="http://www.aramex.com";   
		   //$goto="http://www.aramex.com/Post/track_results.aspx?q=".$awb;
		   //$goto="http://www.aramex.com/express/track_results.aspx";	
		}
		else if($currmedia==8)
		{
			$goto="dpexserarch.php?txtConnote=".$hawb;	
		}
		else if($currmedia==9)
		{
			$goto="http://www.tcs.com.pk/ae/tracking/TrackShipmentResults.aspx?TrackNo=".$awb;
		}
		else if($currmedia==10 )
		{
			$goto="http://www.niceexpress.net";
		}
		else if($currmedia==11)
		{
			$goto="http://www.parcelforce.com/track-trace?trackNumber=".$awb;
		}
		else if($currmedia==13)
		{
			$goto="https://my.gdexpress.com/";
		}
		else if($currmedia==14)
		{
			$goto="upssearch.php?sid=".$awb;
		}
		else if($currmedia==15)
		{
			$goto="http://www.sf-express.com/cn/en/dynamic_function/waybill/#search/bill-number/" . $awb;
		}
		else if($currmedia==16)
		{
			$goto="fastPostbd.php?AWBNo=".$awb;
		}
		else
		{
		$goto="empty.php";
		}
	}
?>
<iframe align="middle" src="<?php echo $goto; ?>" height="900" width="100%" name="buffer" id="buffer"  vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="yes" style="z-index:1"><strong><center>Your Browser does not support iframe. Please use ie 6.0 or higher.</center></strong></iframe>
</td>
</tr>
</table><br><br>
<?php
}
?>
      
	  
    </div>

</div>
  </div>
</div>



</body>
</html>
