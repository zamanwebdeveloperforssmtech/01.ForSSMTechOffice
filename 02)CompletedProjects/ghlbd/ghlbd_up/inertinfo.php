<?php
include('db_conn.php');
$hawb_no=$_REQUEST['ref'];
?>
<html>
<title></title>
<link href="admin_css/generalrules.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css">

<head>
	<link type="text/css" href="css/jquery.simple-dtpicker.css" rel="stylesheet" />

   	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.simple-dtpicker.js"></script>



 <script>
             $(function(){
				$('*[name=post_date]').appendDtpicker();
			});
			 $(function(){
				$('*[name=edate]').appendDtpicker();
			});
            </script>

</head>
<body>
<div align="center"><br>
  <font size="+1">Update Shipment</font><br>
</div><br />
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="modifytrack" action="succmodifytrack.php" method="post" target="mainFrame">
  <?php 
  $sql="select * from shipment where HAWB='$hawb_no'";
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
  <?php
  $media_name=$row['media'];
  $product_name=$row['product'];
 
  ?>
    <td class="p01quote">Through</td>
    <td class="p02"><strong>:</strong></td>
    <td height="27" class="tabfontfocus"><select name="through">
        <option value="UNKNOWN">UNKNOWN</option>
        <?php 
		$sql1="select * from media";
		$res1=mysql_query($sql1) or die(mysql_error());
		while($row1=mysql_fetch_array($res1))
		{
		if($media_name==$row1['m_id'])
		{
			$sel='Selected';
		}
		else
		{
			$sel='';
		}
		?>
        <option value="<?php echo $row1['m_id']; ?>" <?php echo $sel;?>> <?php echo $row1['media_name'];?></option>
        <?php		
		}
	?>
      </select></td>
  </tr>
  <tr> 
    <td class="p01quote">AWB no</td>
    <td class="p02"><strong>:</strong></td>
    <td height="24" class="tabfontfocus"><input name="awb_num" type="text" size="30" value="<?php echo $row['AWB'];?>" ></td>
  </tr>
  <tr> 
    <td class="p01quote">Post Date &amp; Time</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="post_date" type="text" size="30" value="<?php echo $row['pdate'];?>"></td>
  </tr>
  
  <tr> 
    <td class="p01quote">Est. Delivey Date</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="edate" type="text" size="30" value="<?php echo $row['edate'];?>"></td>
  </tr
  ><tr>
    <td class="p01quote">Shipper</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="shipper" type="text" size="30" value="<?php echo $row['shipper'];?>"></td>
  </tr>
   <tr>
    <td class="p02bold">Mobile</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="smobile" type="text" size="30" value="<?php echo $row['smobile'];?>"></td>
  </tr>
  <tr>
    <td class="p02bold">Email</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="semail" type="text" size="30" value="<?php echo $row['semail'];?>"></td>
  </tr> <tr>
    <td class="p02bold">Address</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><textarea name="saddress" cols="32"><?php echo $row['saddress'];?></textarea></td>
  </tr>
  <tr>
    <td class="p01quote">Receiver</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="receiver" type="text" size="30" value="<?php echo $row['receiver'];?>"></td>
  </tr>
   <tr>
    <td class="p02bold">Mobile</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="rmobile" type="text" size="30" value="<?php echo $row['rmobile'];?>"></td>
  </tr>
  <tr>
    <td class="p02bold">Email</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="remail" type="text" size="30" value="<?php echo $row['remail'];?>"></td>
  </tr> <tr>
    <td class="p02bold">Address</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><textarea name="raddress" cols="32"><?php echo $row['raddress'];?></textarea></td>
  </tr>
  
   <tr>
    <td class="p02bold">Agent/Self Name</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="agentname" value="<?php echo $row['agentname'];?>" type="text" size="30"></td>
  </tr> <tr>
    <td class="p02bold">Ref. No.</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><input name="refname" value="<?php echo $row['refname'];?>" type="text" size="30"></td>
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
  <!-- Product Description -->
  <tr>
    <td class="p02bold">Product Description</td>
    <td class="p02"><strong>:</strong></td>
    <td height="28" class="tabfontfocus"><textarea name="pdescription" cols="32"><?php echo $row['pdescription'];?></textarea></td>
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
    <td class="p02bold">Current Location</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="cLocation" type="text" size="30" value="<?php echo $row['cLocation'];?>"></td>
  </tr>
   <tr>
    <td class="p02bold">Pcs</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="pcs" type="text" size="30" value="<?php echo $row['pcs'];?>"></td>
  </tr>
   <tr>
    <td class="p02bold">Weight</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="weight" type="text" size="30" value="<?php echo $row['weight'];?>"></td>
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