<?php 
session_start();
include_once('connec_db.php');
if(!(session_is_registered("user_id")))
{
	session_unset();
	session_destroy();
	header("location: index.php?PHPSESSID=".$PHPSESSID);
}
$user=$_REQUEST['stu_id'];
$start_date = $_REQUEST['start_date'];

?>
<html>
<head>
<title>Welcome To Bengal Post</title>

<script type="text/javascript" language="JavaScript1.2" src="stm31.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form id="form" name="form" method="post">
  <table width="95%" height="26" border="0" align="center" bordercolor="#000000"bgcolor="">
    <tr>
      <td width="93%" height="22" align="center"><font size="+1">Bengal Post<br>
        Daily Shipper Report</font> </td>
      <td width="7%"><a href="select_daily_shipp_invoice.php">Back</a></td>
    </tr>
  </table>
     
  <table width="95%" border="0" align="center" bgcolor="#E6E6E6">
    <tr> 
      <td width="96%" height="257" valign="top"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr>
            <th height="26" valign="top">Date : </th>
            <th valign="top"><?php echo $start_date; ?></th>
            <th valign="top">&nbsp;</th>
            <th valign="top">&nbsp;</th>
            <th valign="top">&nbsp;</th>
            <th valign="top">&nbsp;</th>
            <th valign="top">&nbsp;</th>
            <th valign="top">&nbsp;</th>
            <th valign="top">&nbsp;</th>
          </tr>
          <tr> 
            <th width="10%" height="26" valign="top"> Sender's Acc No.</th>
            <th width="14%" valign="top">Origin</th>
            <th width="16%" valign="top">Destination</th>
            <th width="16%" valign="top">Sender's Name</th>
            <th width="9%" valign="top">Phone</th>
            <th width="11%" valign="top">Company<br></th>
            <th width="8%" valign="top">Address<br></th>
            <th width="7%" valign="top">City<br></th>
            <th width="9%" valign="top">Country</th>
          </tr>
          <?php 
		  $query = "Select * from destination where rec_date_time = '$start_date' ";

		  $result = mysql_query($query) or die(mysql_error());
		  while( $id = mysql_fetch_array($result))
		  {
		 
		  ?>
          <tr> 
            <td height="23" valign="top" align="center"><?php echo $id['sen_acc_no'];?></td>
            <td valign="top"><?php echo $id['origin'];?></td>
            <td valign="top" align="center"><?php echo $id['destination'];?></td>
            <td valign="top" align="center"><?php echo $id['sender_name'];?></td>
            <td valign="top" align="center"><?php echo $id['phone'];?>     </td>
            <td valign="top" align="center"><?php echo $id['company'];?> </td>
            <td valign="top" align="center"><?php echo $id['address'];?> </td>
            <td valign="top" align="center"><?php echo $id['city'];?> </td>
            <td valign="top" align="center"><?php echo $id['country'];?></td>
          </tr>
          <?php } ?>
        </table></td>
    </tr>
    <tr> 
      <td height="24" valign="top">
        <?php include('bottom.php');?>
      </td>
    </tr>
  </table>
</form>
</body>
</html>

