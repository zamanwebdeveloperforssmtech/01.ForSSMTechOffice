<?php 
session_start();
include('connect.php');
$user=$_POST['member_ID'];
$start_date = $_REQUEST['start_date'];
$s_d_a = explode("-", $start_date);
$s_c_d = mktime(0,0,0,$s_d_a[1],$s_d_a[0],$s_d_a[2]);
$end_date = $_REQUEST['end_date'];
$e_d_a = explode("-", $end_date);
$e_c_d = mktime(0,0,0,$e_d_a[1],$e_d_a[0],$e_d_a[2]);
?>
<html>
<head>
<title>Date Wise Invoice Report</title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form id="form" name="form" method="post">
  <table width="90%" height="26" border="0" align="center" bordercolor="#000000"bgcolor="">
    <tr>
      <td width="93%" height="22" align="center"><font size="+1">Bengal Post<br>
        Date Wise Invoice Report</font> <br>
        Agent ID : <?PHP echo $user;?></td>
      <td width="7%" align="center"><a href="javascript:window.close()">Close</a></td>
    </tr>
  </table>
     
  <table width="90%" border="0" align="center" bgcolor="#E6E6E6">
    <tr> 
      <td width="96%" valign="top"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            <th width="15%" height="21" valign="top">AWB NO.</th>
            <th width="13%" valign="top">Date</th>
            <th width="14%" valign="top">Destination</th>
            <th width="6%" valign="top">Declared Value</th>
            <th width="11%" valign="top">Weight (Kg)</th>
            <th width="9%" valign="top">Booking Charges</th>
            <th width="7%" valign="top">Service Charges</th>
            <th width="6%" valign="top">Securied Del. Ch</th>
            <th width="6%" valign="top">Sameday Del. Ch</th>
            <th width="13%" valign="top">Total</th>
          </tr>
          <?php 
		  $query = "Select * from destination_dom where r_date >= $s_c_d and r_date <= $e_c_d and  agent_id = '$user' ORDER BY track_no";
		  $result = connect($query);
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
            <td height="23" valign="top" align="center"><?php echo $id['track_no'];?></td>
            <td valign="top" align="center"><?php echo date("d M, Y", $id['r_date']);?></td>
            <td valign="top" align="center"><?php echo $id['destination'];?></td>
            <td valign="top" align="center"><?php echo $id['dv'];?></td>
            <td valign="top" align="center"><?php echo $id['wt'];?>            </td>
            <td valign="top" align="center"><?php echo $id['bc'];?> </td>
            <td valign="top" align="center"><?php echo $id['sc'];?> </td>
            <td valign="top" align="center"><?php echo $id['sdc'];?> </td>
			<td valign="top" align="center"><?php echo $id['smdc'];?> </td>
			<?php
			$total= $id['bc'] + $id['sc'] + $id['sdc'] + $id['smdc'] ;
			?>
            <td valign="top" align="center"><?php echo $total ?></td>
          </tr>
          <?php } ?>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>

