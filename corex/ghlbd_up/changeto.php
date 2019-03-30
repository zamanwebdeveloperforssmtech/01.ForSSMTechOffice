<?php
session_start();
if(!(session_is_registered("user_id")))
{
	session_unset();
	session_destroy();
	header("location: index.html?PHPSESSID=".$PHPSESSID);
}
?>
<html>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<head></head>
<body>
<?php include('head.php');?>
<br>
<table width="824" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="122" height="29"><a href="addtract.php"  class="menubg1">Add New 
      Shipment </a></td>
    <td width="208" height="29"><a href="addmin.php"  class="menubg1">List&nbsp;All&nbsp;Active&nbsp;Shipment 
      </a></td>
    <td width="152" height="29"><a href="changeto.php"  class="menubg1">Change 
      Token No.</a></td>
    <td width="140" height="29"><a href="modifytrack.php"  class="menubg2">Modify 
      Tracking</a></td>
    <td width="125" height="29"><a href="deletetrack.php"  class="menubg2">Delete 
      Tracking</a></td>
    <td width="77"><a href="logout.php" class="menubg1">Logout</a></td>
  </tr>
</table>
<div align="center"><br>
  <br>
</div>
<table width="37%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="149" class="p02">Current Token no.</td>
    <td width="14" class="p02"><strong>:</strong></td>
    <td width="212" height="27"><input name="textfield" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02">New Token no.</td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="textfield2" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p02">Confirm Token no.</td>
    <td class="p02"><strong>:</strong></td>
    <td height="32" class="tabfontfocus"><input name="textfield3" type="text" size="30"></td>
  </tr>
  <tr> 
    <td class="p01quote">&nbsp;</td>
    <td class="tabfontfocus">&nbsp;</td>
    <td height="14" class="tabfontfocus"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
</table>
<br>
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td>
        <?php include('bottom.php');?>
        </td>
    </tr>
  </table>
</div>
</body>
</html>