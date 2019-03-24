<?php
include('connec_db.php');
?>
<!--
<?php
$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";

?> 

-->
<html><head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="generalrules.css" rel="stylesheet" type="text/css" />


<link href="calendar/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar/calendar.js"></script>



<script src="script/datetimepicker.js"language="JavaScript" type="text/javascript"></script>
<script language="JavaScript" src="script/checkdata.js" type="text/javascript"></script>
<script language="JavaScript" src="script/CalendarPopup.js" type="text/jaascript"></script>
</head>
<body>
<div align="center"><br>
  <br>
  <span class="HEADLINE"><strong><font size="+1">Add Notice Information</font></strong></span></div>
<table width="44%" border="0" align="center" cellpadding="0" cellspacing="0" class="p07">
<form name="display" action="succaddnotice.php" method="post" onSubmit="return check_track();" target="mainFrame">
<tr>
<td colspan="3">&nbsp;</td>
</tr>

  <tr> 
    <td class="p02bold">Title </td>
    <td class="p02"><strong>:</strong></td>
    <td height="26" class="tabfontfocus"><input name="title" type="text" size="30"></td>
  </tr>

  <tr> 
    <td class="p02bold">Description</td>
    <td class="p02"><strong>:</strong></td>
    <td height="29" class="tabfontfocus"><textarea name="description" style="width:500px;height:100"></textarea></td>
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