<?php 
include_once('connec_db.php');
$user=$_REQUEST['stu_id'];
$start_date = $_REQUEST['start_date'];

?>
<html>
<head>
<title>Agent List</title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form id="form" name="form" method="post" target="_blank">
  <table width="95%" height="26" border="0" align="center" bordercolor="#000000" bgcolor="">
    <tr>
      <td width="93%" height="22" align="center"><font size="+1">Omex International<br>
        Agent List</font></td>
      <td width="7%" align="center"><a href="javascript:window.close()">Close</a></td>
    </tr>
  </table>
     
  <table width="95%" border="0" align="center" bgcolor="#E6E6E6">
    <tr> 
      <td width="96%" valign="top"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            <th width="10%" height="21" valign="top"> Agent ID.</th>
            <th width="12%" valign="top">Name</th>
            <th width="13%" valign="top">Present Address</th>
            <th width="21%" valign="top">Permanent Address</th>
            <th width="9%" valign="top">Contact No.</th>
            <th width="11%" valign="top">Date of Birth</th>
          </tr>
          <?php 
		  $query = "Select * from employee where user_type = 'agent'";

		  $result = mysql_query($query) or die(mysql_error());
		  $bgcolor = ' bgcolor="#F0F0F0" ';
		  while( $id = mysql_fetch_array($result))
		  {
		  if($bgcolor == ' bgcolor="#F0F0F0" ')
		  {
		  	$bgcolor = ' bgcolor="#FFFFFF" ';
		  }
		  else
		  {
		  	$bgcolor = ' bgcolor="#F0F0F0" ';
		  }
		  ?>
          <tr <?php echo $bgcolor;?>> 
            <td height="23" valign="top" align="center"><?php echo $id['user_id'];?></td>
            <td valign="top"><?php echo $id['employee_name'];?></td>
            <td valign="top" align="center"><?php echo $id['present_address'];?></td>
            <td valign="top" align="center"><?php echo $id['permanent_address'];?></td>
            <td valign="top" align="center"><?php echo $id['contact_no'];?> </td>
            <td valign="top" align="center"><?php echo $id['date_of_birth'];?>            </td>
          </tr>
          <?php } ?>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>

