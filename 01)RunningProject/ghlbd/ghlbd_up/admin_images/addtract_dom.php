<?php
include('connec_db.php');
?>
<html><head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<script src="script/datetimepicker.js"language="JavaScript" type="text/javascript"></script>
<script language="JavaScript" src="script/checkdata.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <br>
  <span class="HEADLINE"><strong><font size="+1">Add Traking Information</font></strong></span></div>
<table width="44%" border="0" align="center" cellpadding="0" cellspacing="0" class="p07">
<form name="display" action="succaddshipment_dom.php" method="post" onSubmit="return check_track();" target="mainFrame">
<tr>
<td colspan="3">&nbsp;</td>
</tr>
  <tr> 
    <td width="116" class="p02bold">Token No. </td>
    <td width="11" class="p02"><strong>:</strong></td>
      <td width="217" height="27">
	  <?php
	  	$sql = "SELECT MAX(serial) FROM shipment_dom";
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
    <td class="p02bold">Post Date</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="post_date" type="text" size="30"><a href="javascript:NewCal('post_date','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
  </tr>
  <tr>
    <td class="p02bold">Shipper</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="shipper" type="text" size="30"></td>
  </tr>
  <tr>
    <td class="p02bold">Receiver</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="receiver" type="text" size="30"></td>
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
      </select></td>
  </tr>
  <tr>
    <td class="p02bold">Status</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="status" type="text" size="30"></td>
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