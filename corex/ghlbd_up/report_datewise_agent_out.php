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
      <td width="93%" height="22" align="center"><font size="+1">Omex International<br>
        Date Wise Invoice Report</font> <br>
        Agent ID : <?PHP echo $user;?></td>
      <td width="7%" align="center"><a href="javascript:window.close()">Close</a></td>
    </tr>
  </table>
     
  <table width="90%" border="0" align="center" bgcolor="#E6E6E6">
    <tr> 
      <td width="96%" valign="top"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            <th width="15%" height="21" valign="top"> Date</th>
            <th width="13%" valign="top">AWB NO.</th>
            <th width="14%" valign="top">Destination</th>
            <th width="6%" valign="top">Contents</th>
            <th width="11%" valign="top">Weight (Kg)</th>
            <th width="9%" valign="top">Bill Amount</th>
            <th width="7%" valign="top">DFS</th>
            <th width="6%" valign="top">VAT</th>
            <th width="6%" valign="top">Others</th>
            <th width="13%" valign="top">Total</th>
          </tr>
          <?php 
		  $query = "Select * from destination where rec_date_time >= $s_c_d and rec_date_time <= $e_c_d and  agent_id = '$user'";

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
            <td height="23" valign="top" align="center"><?php echo date("d m, Y", $id['rec_date_time']);?></td>
            <td valign="top"><?php echo $id['track_no'];?></td>
            <td valign="top" align="center"><?php echo $id['destination'];?></td>
            <td valign="top" align="center"><?php echo $id['document'];?></td>
            <td valign="top" align="center"><?php echo $id['to_char_weigh'];?>            </td>
            <td valign="top" align="center"><?php echo $id['charges'];?> </td>
            <td valign="top" align="center"><?php echo $id['no_pics'];?> </td>
            <td valign="top" align="center"><?php echo $id['kgs'];?> </td>
			<td valign="top" align="center"><?php echo $id['others'];?> </td>
			<?php
			$total= $id['charges'] + $id['no_pics'] + $id['kgs'] + $id['others'] ;
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

