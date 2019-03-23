<?php
include('db_conn.php');
$hawb_no=$_REQUEST['ref'];
?>
<html>
<title></title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css">

<head>
<script language="JavaScript" src="script/datetimepicker.js" type="text/javascript"></script>

</head>
<body>
<div align="center"><br>
  <font size="+1">Update Shipment</font><br>
</div><br />
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="modifytrack" action="succmodifytrack_dom.php" method="post" target="mainFrame">
  <?php 
  $sql="select * from shipment_dom where HAWB='$hawb_no'";
  $result=mysql_query($sql) or die(mysql_error());
  while($row=mysql_fetch_array($result))
  {

  ?>
  <tr> 
    <td width="169" class="p01quote">Token No. </td>
    <td width="9" class="p02"><strong>:</strong></td>
      <td width="215" height="27"><?php echo $row['serial'];?></td>
  </tr>
  <tr> 
    <td class="p01quote">HAWB No. </td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="hawb_num" type="text" size="30" value="<?php echo $row['HAWB'];?>" readonlyss></td>
  </tr>
  <tr> 
    <td class="p01quote">Origin</td>
    <td class="p02"><strong>:</strong></td>
    <td height="32" class="tabfontfocus"><input name="origin" type="text" size="30" value="<?php echo $row['origin'];?>"></td>
  </tr>
  <tr> 
    <td class="p01quote">Destination</td>
    <td class="p02"><strong>:</strong></td>
    <td height="29" class="tabfontfocus"><input name="destination" type="text" size="30" value="<?php echo $row['destination'];?>"></td>
  </tr>
  <tr> 
    <td class="p01quote">Post Date &amp; Time</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="post_date" type="text" size="30" value="<?php echo $row['pdate'];?>"><a href="javascript:NewCal('post_date','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
  </tr>
  <tr>
    <td class="p01quote">Shipper</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="shipper" type="text" size="30" value="<?php echo $row['shipper'];?>"></td>
  </tr>
  <tr>
    <td class="p01quote">Receiver</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="receiver" type="text" size="30" value="<?php echo $row['receiver'];?>"></td>
  </tr>
  <tr>
    <td class="p01quote">Product</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><select name="product">
        <option value="Select">Select</option>
        <?php 
			$sql="select * from product";
			$res=mysql_query($sql) or die(mysql_error());
			while($id=mysql_fetch_array($res))
			{
				if($product_name==$id['p_id'])	
				{
					$sel='Selected';
				}
				else
				{
					$sel='';
				}
			?>
			<option value="<?php echo $id['p_id'];?>" <?php echo $sel;?>> <?php echo $id['p_name'];?></option>
			<?php 
			}
		?>
      </select></td>
  </tr>
  <tr>
    <td class="p01quote">Status</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="status" type="text" size="30" value="<?php echo $row['status'];?>"></td>
  </tr>
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
  <tr> 
    <td class="p01quote">&nbsp;</td>
    <td class="tabfontfocus">&nbsp;</td>
    <td height="14" class="tabfontfocus"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
  <?php } ?>
  </form>
</table>
<br>
</body>
</html>