<?php
include('connec_db.php');
?>
<!--
<?php
$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";

?> 

-->
<html>
<head>

<!--<script src="script/datetimepicker.js"language="JavaScript" type="text/javascript"></script>-->

   
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>
		<link type="text/css" href="css/jquery.simple-dtpicker.css" rel="stylesheet" />

   	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.simple-dtpicker.js"></script>



 <script>
             $(function(){
				$('*[name=pdate]').appendDtpicker();
			});
			 $(function(){
				$('*[name=edate]').appendDtpicker();
			});
  </script>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="generalrules.css" rel="stylesheet" type="text/css" />


<link href="calendar/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar/calendar.js"></script>




<script language="JavaScript" src="script/checkdata.js" type="text/javascript"></script>
<script language="JavaScript" src="script/CalendarPopup.js" type="text/jaascript"></script>
</head>
<body>
<div align="center"><br>
  <br>
  <span class="HEADLINE"><strong><font size="+1">Add Traking Information</font></strong></span></div>
<table width="44%" border="0" align="center" cellpadding="0" cellspacing="0" class="p07">
<form name="display" action="succaddshipment.php" method="post" onSubmit="return check_track();" target="mainFrame">
<tr>
<td colspan="3">&nbsp;</td>
</tr>
  <tr> 
    <td width="116" class="p02bold">Token No. </td>
    <td width="11" class="p02"><strong>:</strong></td>
      <td width="217" height="27">
	  <?php
	  	$sql = "SELECT MAX(serial) FROM shipment";
		  $res=mysql_query($sql) or die(mysql_error());
		  $row=mysql_fetch_array($res);
		  echo $row[0]+1;
	  ?> 
	  </td>
  </tr>
  <tr> 
    <td class="p02bold">HAWB No. </td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="hawb_num" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02bold">Origin</td>
    <td class="p02"><strong>:</strong></td>
    <td height="32" class="tabfontfocus"><input name="origin" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02bold">Destination</td>
    <td class="p02"><strong>:</strong></td>
    <td height="29" class="tabfontfocus"><input name="destination" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02bold">Through</td>
    <td class="p02"><strong>:</strong></td>
    <td height="27" class="tabfontfocus"><select name="through">
	<option value="UNKNOWN">UNKNOWN</option>
	<?php 
	$sql="select * from media";
	$res=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
		?>
<option value="<?php echo $row['m_id']; ?>" > <?php echo $row['media_name'];?></option>		
	<?php
	}
	?>
      </select></td>
  </tr>
  <tr> 
    <td class="p02bold">AWB No</td>
    <td class="p02"><strong>:</strong></td>
    <td height="24" class="tabfontfocus"><input name="awb_num" type="text" size="30"></td>
  </tr>
  	<?php
require_once('calendar/calendar/classes/tc_calendar.php');
?>
  
  <tr> 
    <td class="p02bold">Post Date</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus">

	 <input type="text" id="pdate" name="pdate"  style="width: 100%;" />
	 
	<!--
	<input name="post_date" type="text" size="30"> 
	<a href="javascript:NewCal('post_date','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
	-->
	
	
  </tr>
  <tr> 
    <td class="p02bold">Est. Delivey Date</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus">

		 <input type="text" id="edate" name="edate" title="datetimepicker" style="width: 100%;" />
<!--	<input name="post_date" type="text" size="30"> -->

	


	

	<!--
	<a href="javascript:NewCal('post_date','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
	-->
	
	
  </tr>
  <tr>
    <td class="p02bold">Shipper</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="shipper" type="text" size="30"></td>
  </tr>
   <tr>
    <td class="p02bold">Mobile</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="smobile" type="text" size="30"></td>
  </tr>
  <tr>
    <td class="p02bold">Email</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="semail" type="text" size="30"></td>
  </tr> <tr>
    <td class="p02bold">Address</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><textarea name="saddress" cols="32"></textarea></td>
  </tr>
  <tr>
    <td class="p02bold">Receiver</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="receiver" type="text" size="30"></td>
  </tr>
   <tr>
    <td class="p02bold">Mobile</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="rmobile" type="text" size="30"></td>
  </tr>
  <tr>
    <td class="p02bold">Email</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="remail" type="text" size="30"></td>
  </tr> <tr>
    <td class="p02bold">Address</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><textarea name="raddress" cols="32"></textarea></td>
  </tr>
  
   <tr>
    <td class="p02bold">Agent/Self Name</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="agentname" type="text" size="30"></td>
  </tr> <tr>
    <td class="p02bold">Ref. No.</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="refname" type="text" size="30"></td>
  </tr>
  <tr>
    <td class="p02bold">Product</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><select name="product">
        <option value="Select">Select</option>
        <?php 
      	$sql="select * from product";
      	$res=mysql_query($sql) or die(mysql_error());
      	while($row=mysql_fetch_array($res))
      	{
      		?>
              <option value="<?php echo $row['p_id']; ?>" > <?php echo $row['p_name'];?></option>
              <?php
      	}
      	?>
      </select>
      </td>
  </tr>
  <!-- Product Description -->

   <tr>
    <td class="p02bold">Product Description</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><textarea name="pdescription" cols="32"></textarea></td>
  </tr>

  <tr>
    <td class="p02bold">Status</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="status" type="text" size="30"></td>
  </tr>
   <tr>
    <td class="p02bold">Current Location</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="cLocation" type="text" size="30"></td>
  </tr>
   <tr>
    <td class="p02bold">Pcs</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="pcs" type="text" size="30"></td>
  </tr>
   <tr>
    <td class="p02bold">Weight</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="weight" type="text" size="30"></td>
  </tr>
  <tr>
<td colspan="3">&nbsp;</td>
</tr><tr> 
    <td class="p01quote">&nbsp;</td>
    <td class="tabfontfocus">&nbsp;</td>
    <td height="14" class="tabfontfocus"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
  </form>
</table>
</body>
</html>