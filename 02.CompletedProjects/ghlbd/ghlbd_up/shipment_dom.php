
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
    background-color: red;
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
?>
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
     
      <form action="shipment_dom.php" method="post" style="padding-top:0px;" > 
          
                <table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
						  <tr>	
							<td>
              <input name="track_no" type="text"   maxlength="50" value="<?php echo $_POST['track_no'];?>" /></td>
                        <td>
			  <input name="submit" value="Track" type="submit">
              
              	</td>
						  </tr>
						</table>
              </form>
		
	  </div>
<?php
	$hawb_no = explode(chr(13) . chr(10), $_POST['track_no']);
	//$hawb_no = $_POST['track_no'];
	include_once('connect.php');
	$j=sizeof($hawb_no);
	for($i=0;$i<$j;$i++)
	{
?>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<?php
	$sql="select * from shipment_dom where HAWB='$hawb_no[$i]'";
	//echo $sql;
	$rs_result=connect($sql);
	$num_rows = mysql_num_rows($rs_result);
	if($num_rows > 0)
	{
	while ($row = mysql_fetch_array($rs_result)) 
	{
	$serial=$row['serial'];
	//echo $serial;
?>
	<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr class="Mbrand"> 
    <td colspan="4"><div align="center">Tracking Details</div></td>
  </tr>
  <tr class="paging"> 
    <td width="20%"><div align="left">HAWB No.</div></td>
    <td width="2%"><div align="left"><strong>:</strong></div></td>
    <td colspan="2"><div align="left"><?php echo $row['HAWB'];?></div></td>
  </tr>
  <tr class="paging"> 
    <td><div align="left">Origin</div></td>
    <td><div align="left"><strong>:</strong></div></td>
    <td width="35%"><div align="left"><?php echo $row['origin'];?></div></td>
    <td width="43%"><div align="left">Current Status</div></td>
  </tr>
  <tr class="paging"> 
    <td><div align="left">Destination</div></td>
    <td><div align="left"><strong>:</strong></div></td>
    <td><div align="left"><?php echo $row['destination'];?></div></td>
    <td><div align="left">
      <?php 
	$sql="Select * from tracking_dom where sid='$serial' order by serial desc limit 1";
	$res=connect($sql);
	while($id=mysql_fetch_array($res))
	{
		echo $id['location'];
	}
	?>
    </div></td>
  </tr>
</table>
<br>
	<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#E6E6E6" class="titlenodec"> 
    <td width="16%" align="center">Booking Date</td>
    <td width="16%" align="center">Shipper</td>
    <td width="9%" align="center">Origin</td>
    <td width="13%" align="center">Destination</td>
    <td width="16%" align="center">Receiver</td>
    <td width="17%" align="center">Status</td>
  </tr>
  <tr bgcolor="#F5F5F5"> 
    <td align="center"><?php echo $row['pdate'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['shipper'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"> <?php echo $row['origin'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['destination'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['receiver'];?> <div align="center"></div>
      <div align="center"></div></td>
    <td align="center"><?php echo $row['status'];?> <div align="center"></div>
      <div align="center"></div></td>
  </tr>
</table>
<br>
	<table width="90%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FCFCFC" bgcolor="#EBEBEB" align="center">
    <tr align="left" bgcolor="#FFFFFF"> 
      <th colspan="3">Tracking Process :</th>
    </tr>
    <tr align="left" bgcolor="#FFCC00"> 
      <th width="20%"><div align="center">Date &amp; Time</div></th>
      <th width="40%"><div align="center">Location</div></th>
      <th width="40%"><div align="center">Activity</div></th>
    </tr>
	   <?php 
	$sql="Select * from tracking_dom where sid='$serial' order by serial ASC ";
	$res=connect($sql);
	while($id=mysql_fetch_array($res))
	{
	?>
    <tr> 
   
      <td align="center"><?php echo $id['pdate']; ?> <div align="center"></div></td>
      <td align="center"><?php echo $id['location']; ?> <div align="center"></div></td>
      <td align="center"><?php echo $id['activity']; ?> <div align="center"></div></td>
      
    </tr>
	<?php
	 	}
	?>
    <tr> 
      <td colspan="3"> </td>
    </tr>
	<?php 
	} // End of While
		}
		else
		{ 
		$prefix = "bexs_";     
	  $sql = "SELECT d.id, ref, a_name, addr, phone, des.destination, IFNULL( 
status , '' ) AS status , IFNULL( receive_date, 0 ) AS receive_date , IFNULL( received_by, '' ) AS received_by , IFNULL( relation, '' ) AS relation , IFNULL( return_reason, '' ) AS return_reason , IFNULL( remarks, '' ) AS remarks, d.info_date 
FROM " . $prefix . "destination des, " . $prefix . "data d
LEFT JOIN " . $prefix . "delivery_status ds ON d.id = ds.id
LEFT JOIN " . $prefix . "status s ON ds.status_code = s.status_code
LEFT JOIN " . $prefix . "receive r ON d.id = r.id
LEFT JOIN " . $prefix . "relation re ON r.relation_code = re.relation_code
LEFT JOIN " . $prefix . "return ret ON ret.id = d.id
LEFT JOIN " . $prefix . "return_reason rr ON ret.return_reason_code = rr.return_reason_code
LEFT JOIN " . $prefix . "remarks rem ON rem.id = d.id
WHERE d.destination_id = des.destination_id
AND (d.id =" . $hawb_no[$i] . "
OR ref='" . $hawb_no[$i] . "')
ORDER BY d.id
";
		$result = connect($sql);
		$myrow = mysql_fetch_row($result);
		$status = ($myrow[6]=='') ? 'On Process' : (($myrow[6])=='Delivered' ? '<font color="#00AA00">Delivered</font>' : '<font color="#FF0000">Returned</font>');
?>
<hr />
<table width="650" align="center" cellpadding="2" cellspacing="2" border="0">
	<tr>
		<td width="145" align="left"><b>CN No.</b></td>
		<td width="5"><b>:</b></td>
		<td width="250" align="left"><?php echo $myrow[0];?></td>
		<td width="250" align="center" rowspan="4" valign="top"><b>Current Status<br /><?php echo $status;?></td>
	</tr>
	<tr>
		<td align="left"><b>Ref No.</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo $myrow[1];?></td>
	</tr>
	<tr>
		<td align="left"><b>Destination</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo $myrow[5];?></td>
	</tr>
	<tr>
		<td align="left"><b>Booking Date</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo date('d M, Y', $myrow[12]);?></td>
	</tr>
	<tr>
		<td align="left" valign="top"><b>Receiver</b></td>
		<td valign="top"><b>:</b></td>
		<td align="left" colspan="2"><?php echo $myrow[2] . ', ' . str_replace('&lt;br /&gt;',', ',$myrow[3]) . ', ' . str_replace('&lt;br /&gt;',', ',$myrow[4]);?></td>
	</tr>
	<?php
		if($myrow[6]!='')
		{
			if($myrow[6]=='Delivered')
			{
	?>
	<tr>
		<td align="left"><b>Receive Date</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo date('d M, Y', $myrow[7]);?></td>
	</tr>
	<tr>
		<td align="left"><b>Received By</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo $myrow[8];?></td>
	</tr>
	<tr>
		<td align="left"><b>Relation</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo ($myrow[9]=='Self') ? '-' : $myrow[9];?></td>
	</tr>
	<?php			
			}
			else
			{
	?>
	<tr>
		<td align="left"><b>Return Reason</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo $myrow[10];?></td>
	</tr>
	<?php		
			}
		}
	?>
	<?php
		if($myrow[11]!='')
		{
	?>
	<tr>
		<td align="left"><b>Remarks</b></td>
		<td><b>:</b></td>
		<td align="left"><?php echo $myrow[11];?></td>
	</tr>
	<?php
		}
	?>
</table>
<br />
	<?php
	}
	?>
  </table>
<br>
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
