<?php
session_start();
include('connec_db.php');
$serial = $_REQUEST['serial_id'];
//echo $serial;


?>
<html>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<head>
<script language="JavaScript" src="script/datetimepicker.js" type="text/javascript"></script>
</head>
<body>
<br>
<br>
<?php $sql="select * from tracking where serial ='$serial'";
$res=mysql_query($sql);

while($id=mysql_fetch_array($res))
{
?>
<form name="modifytrack" method="post" action="sucupdatetrack.php" target="mainFrame">
<input name="serial_no" type="hidden" value="<?php echo $serial ;?>">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td align="right" height="30">&nbsp;</td>
    <td height="30"><font color="#000000" size="+2">Update Track</font></td>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%" align="right" height="30">Current Location:</td>
    <td width="47%" height="30">&nbsp; <input type="text" name="location" value="<?php echo $id['location'] ?>" class="inputemailnewsAss" size="30"></td>
    <td width="21%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%" align="right" height="30">Activity :</td>
    <td width="47%" height="30">&nbsp; <input name="activity" type="text" size="30" class="inputemailnewsAss"  value="<?php echo $id['activity'] ?>"> 
    </td>
    <td width="21%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%" align="right" height="30">Post Date &amp; Time :</td>
    <td width="47%" height="30"> &nbsp; <input type="text" name="date_time" value="<?php echo $id['pdate']?>" size="30"> 
      <a href="javascript:NewCal('date_time','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
    <td width="21%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%" align="right" height="30">&nbsp;</td>
    <td width="47%" height="30">&nbsp;</td>
    <td width="21%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="47%" height="30" align="center" colspan="3"> <input type="submit" value="Update" name="B12" class="inputemailnewsAss"></td>
  </tr>
</table>
</form>
<?php }  ?>
</body>
</html>