<?php
include('connec_db.php');
$hawb_no = $_REQUEST['track_no'];
?>
<html>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<head></head>
<body>
<div align="center"><br>
  <br>
</div>
  
<table width="45%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="27" class="p01quote" align="right">Track No.</td>
    <td ><strong>:&nbsp;</strong></td>
    <td width="240"><form name="form1" method="post" action="">
        <input type="text" name="track_no" size="30">
        <input type="submit" name="Submit" value="Go">
      </form></td>
  </tr>
</table>
<br>
<?php
	$sql="select * from shipment_dom where HAWB='$hawb_no'";
	$rs_result=mysql_query($sql) or die(mysql_error());
	while ($row = mysql_fetch_assoc($rs_result)) 
	{
	$serial=$row['serial'];
?>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan="4" class="p07">Tracking Details</td>
  </tr>
  <tr>
  	<td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="20%">HAWB No.</td>
    <td width="2%"><strong>:</strong></td>
    <td colspan="2"><?php echo $row['HAWB'];?></td>
  </tr>
  <tr> 
    <td>Origin</td>
    <td><strong>:</strong></td>
    <td width="35%"><?php echo $row['origin'];?></td>
    <td width="43%">Current Status</td>
  </tr>
  <tr> 
    <td>Destination</td>
    <td><strong>:</strong></td>
    <td><?php echo $row['destination'];?></td>
    <td>
	<?php 
	$sql="Select * from tracking_dom where sid='$serial' order by serial desc limit 1";
	$res=mysql_query($sql) or die(mysql_error());
	while($id=mysql_fetch_array($res))
	{
		echo $id['location'];
	}
	?></td>
  </tr>
</table>
<br>
<br>
<div align="center">
     <form name="form2" method="post" action="updatetrack_dom.php">
    <table width="85%" border="0" cellpadding="0" cellspacing="0" bordercolor="#FCFCFC">
      <tr align="left" bgcolor="#FFFFFF"> 
        <th colspan="4">Tracking Process :</th>
      </tr>
      <tr align="left" bgcolor="#FFCC00"> 
        <th width="34%">Date &amp; Time</th>
        <th width="18%">Location</th>
        <th width="34%">Activity</th>
        <th width="14%">Select</th>
      </tr>
      <?php 
	$sql="Select * from tracking_dom where sid='$serial' order by serial desc ";
	$res=mysql_query($sql) or die(mysql_error());
	$bgcolor = ' bgcolor="#FfFfFf" ';
	while($id=mysql_fetch_array($res))
	{
	if($bgcolor==' bgcolor="#F0F0F0" ')
	{
		$bgcolor = ' bgcolor="#FFFFFF" ';
	}
	else
	{
		$bgcolor = ' bgcolor="#F0F0F0" ';
	}
	?>
      <tr <?php echo $bgcolor;?>> 
        <td><?php echo $id['pdate']; ?></td>
        <td><?php echo $id['location']; ?></td>
        <td><?php echo $id['activity']; ?></td>
        <td><input name="serial_id" type="radio" value="<?php echo $id['serial']; ?>"></td>
      </tr>
      <?php } ?>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
      <tr> 
        <td colspan="4"> <div align="center"> 
            <input type="submit" name="Submit2" value="Modify">
          </div></td>
      </tr>
    </table>
    <?php } ?>
 </form>
</body>
</html>