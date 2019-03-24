<?php 
include_once('connec_db.php');
$id = $_REQUEST['id'];

$sql = "Select * from notices where id = '$id'";
$res = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($res);
//echo $user_id, "\n", $user_type;
?>
<html><head>
<title></title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="script/CalendarPopup.js" type="text/javascript"></script>
<script language="JavaScript">
	var cal19 = new CalendarPopup(); 
	cal19.showYearNavigation(); 
	cal19.showYearNavigationInput();
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"><br>
  <br>
  <span class="HEADLINE"><strong><font size="+1">Add Notice Information</font></strong></span></div>
<table width="44%" border="0" align="center" cellpadding="0" cellspacing="0" class="p07">
<form name="employeeadd" enctype="multipart/form-data" method="post" action="modiysucenotice.php" target="mainFrame" >
<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
<tr>
<td colspan="3">&nbsp;</td>
</tr>

  <tr> 
    <td class="p02bold">Title </td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="title" type="text" value="<?php echo $row[1];?>"  size="30"></td>
  </tr>

  <tr> 
    <td class="p02bold">Description</td>
    <td class="p02"><strong>:</strong></td>
    <td height="29" class="tabfontfocus"><textarea name="description" style="width:500px;height:100"><?php echo $row[2];?></textarea></td>
  </tr>
 <tr> 
    <td class="p01quote">&nbsp;</td>
    <td class="tabfontfocus">&nbsp;</td>
    <td height="14" class="tabfontfocus"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
  </form>
</table>

</body>
</html>