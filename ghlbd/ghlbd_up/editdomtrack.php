<?php
include('db_conn.php');
$hawb_no=$_REQUEST['ref'];
//echo $hawb_no;
?>
<html>
<title></title>
<head>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="script/datetimepicker.js" type="text/javascript"></script>
<script language="JavaScript" src="script/checkdata.js" type="text/javascript"></script>
<br>
</head>
<body><br />
<table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">

 <?php 
  
 // $sql="SELECT * from shipment where HAWB='$hawb_no' and status='on process'";
 	$sql="SELECT * from shipment_dom where HAWB='$hawb_no'";
  $res=mysql_query($sql) or die(mysql_error());
  while($id=mysql_fetch_array($res))
  {
  ?>
   <form name="form1" method="post" action="succaddtract_dom.php" onSubmit="return check();" target="mainFrame">
   <input name="ship_serial" type="hidden" value="<?php echo $id['serial'];?>">
  <tr> 
    <td height="35" colspan="3" class="p02"><div align="center" class="HEADLINE"><font size="+1">Edit 
          Shipment No. <?php echo $id['HAWB'];?></font></div></td>
  </tr>
  <tr>
  	<td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="118" class="p02">Token No. </td>
    <td width="11" class="p02"><strong>:</strong></td>
      <td width="211" height="27"><?php echo $id['serial'];?></td>
  </tr>
  <tr> 
    <td class="p02">HAWB No. </td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="hawb_no" type="text" size="30" value="<?php echo $id['HAWB'];?>" readonly></td>
  </tr>
  <tr> 
    <td class="p02">Current Location</td>
    <td class="p02"><strong>:</strong></td>
    <td height="32" class="tabfontfocus"><input name="current_location" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02">Activity</td>
    <td class="p02"><strong>:</strong></td>
    <td height="29" class="tabfontfocus"><input name="activity" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02">Date</td>
    <td class="p02"><strong>:</strong></td>
    <td height="27" class="tabfontfocus"><input name="post_date" type="text" size="30"><a href="javascript:NewCal('post_date','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
  </tr>
  <tr> 
    <td class="p02">End of Shipment</td>
    <td class="p02"><strong>:</strong></td>
    <td height="36" class="tabfontfocus"><input name="end_shipment" type="text" size="30"></td>
  </tr>
  <tr>
  	<td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td class="p01quote">&nbsp;</td>
    <td class="tabfontfocus">&nbsp;</td>
    <td height="14" class="tabfontfocus"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
  </form>
   <?php 
  }
  ?>
  
</table>
</body>
</html>

