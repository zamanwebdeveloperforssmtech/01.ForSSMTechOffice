<?php 
include_once('connec_db.php');
$user=$_REQUEST['stu_id'];
$start_date = $_REQUEST['start_date'];
$s_d_a = explode("-", $start_date);
$s_c_d = mktime(0,0,0,$s_d_a[1],$s_d_a[0],$s_d_a[2]);
$end_date = $_REQUEST['end_date'];
$e_d_a = explode("-", $end_date);
$e_c_d = mktime(0,0,0,$e_d_a[1],$e_d_a[0],$e_d_a[2]);
?>
<html>
<head>
<title>Monthly Invoice Report</title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="JavaScript1.2" src="stm31.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form id="form" name="form" method="post">
  <table width="90%" height="26" border="0" align="center" bordercolor="#000000"bgcolor="">
    <tr>
      <td width="93%" height="22" align="center"><font size="+1">Omex International<br>
      <?php echo $start_date .' to '. $end_date;?><br>
         DATA SHEET</font> <br>
       </td>
      <td width="7%"><a href="javascript:window.close()">Close</a></td>
    </tr>
  </table>
     
  <table width="90%" border="0" align="center" bgcolor="#E6E6E6">
    <tr> 
      <td width="96%" valign="top"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            <th width="10%" height="21" valign="top"> DATE</th>
            <th width="8%" valign="top">AIR WAY BILL.</th>
            <th width="8%" valign="top">A/C NUMBER</th>
             <th width="9%" valign="top">ORIGIN</th>
            <th width="10%" valign="top">SHIPPER</th>
            <th width="10%" valign="top">PHONE NUMBER</th>
            <th width="12%" valign="top">DESTINATION</th>
            <th width="8%" valign="top">CONSIGNEE</th>
            <th width="7%" valign="top">PHONE NUMBER</th>
            <th width="12%" valign="top">CONTENTS</th>
            <th width="14%" valign="top">PCS</th>
            <th width="14%" valign="top">WEIGHT</th>
            <th width="14%" valign="top">SERVICE</th>
            <th width="14%" valign="top">AMMOUNT</th>
            
           
          </tr>
          <?php 
		  $query = "Select * from destination where rec_date_time >= $s_c_d and rec_date_time <= $e_c_d ";

		  $result = mysql_query($query) or die(mysql_error());
		  $bgcolor = ' bgcolor="#F0F0F0" ';
		  while( $id = mysql_fetch_array($result))
		  {
		  if($bgcolor == ' bgcolor="#FFFFFF" ')
		  {
			$bgcolor = ' bgcolor="#F0F0F0" ';
		  }
		  else
		  {
		  	$bgcolor = ' bgcolor="#FFFFFF" ';
		  }
		  ?>
          <tr <?php echo $bgcolor;?>> 
            <td valign="top" align="center"><?php echo date("d m, Y", $id['rec_date_time']);?></td>
            <td valign="top" align="center"><?php echo $id['track_no'];?></td>
            <td valign="top" align="center"><?php echo $id['sen_acc_no'];?></td>
            <td valign="top" align="center"><?php echo $id['origin'];?></td>
             <td valign="top" align="center">
			 <?php echo $id['sender_name'];?><br/>
             <?php echo $id['company'];?><br/>
             <?php echo $id['address'];?><br/>
             
             </td>
              <td valign="top" align="center"><?php echo $id['phone'];?></td>
            <td valign="top" align="center"><?php echo $id['destination'];?></td>
             <td valign="top" align="center">
			 <?php echo $id['rece_name'];?><br/>
             <?php echo $id['rece_company'];?><br/>
             <?php echo $id['rece_address'];?><br/>
             
             </td>
           
            <td valign="top" align="center"><?php echo $id['rece_phone'];?>            </td>
             <td valign="top" align="center"><?php echo $id['document'];?>            </td>
            <td valign="top" align="center"><?php echo $id['no_pics'];?> </td>
            <td valign="top" align="center"><?php echo $id['kgs'];?></td>
            <td valign="top" align="center">            <?php 
	$sql="select * from media";
	$res=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
		
		if($id['through']==$row['m_id']){
		?>
               <?php echo $row['media_name'];?>
                <?php
		}else{
			echo 'UNKNOWN';
		}
	}
	?></td>
            <td valign="top" align="center"><?php echo $id['charges'];?> </td>
          </tr>
          <?php } ?>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>

