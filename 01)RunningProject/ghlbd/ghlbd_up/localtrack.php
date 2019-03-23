<?php
include('db_conn.php');
$hawb_no = $_REQUEST['track_no'];
?>
<html>
<title></title>
<link href="generalrules.css" rel="stylesheet" type="text/css">
<head></head>
<body>
<?php include("head.php");?>
<br>
<table width="45%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="34%"><div align="right">Track Another : </div></td>
    <td width="66%"><form name="form1" method="post" action="localtrack.php">
        <div align="center">
          <input name="track_no" type="text" id="track_no">
          <input type="submit" name="Submit" value="Go">
        </div>
      </form></td>
  </tr>
</table>

<br>
<br>
<?php
	$sql="select * from shipment where HAWB='$hawb_no'";
	$rs_result=mysql_query($sql) or die(mysql_error());
	while ($row = mysql_fetch_assoc($rs_result)) 
	{
	$serial=$row['serial'];
?>
<table width="82%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr class="Mbrand"> 
    <td colspan="4">Tracking Details:</td>
  </tr>
  <tr class="paging"> 
    <td width="20%">HAWB No.</td>
    <td width="2%"><strong>:</strong></td>
    <td colspan="2"><?php echo $row['HAWB'];?></td>
  </tr>
  <tr class="paging"> 
    <td>Origin</td>
    <td><strong>:</strong></td>
    <td width="35%"><?php echo $row['origin'];?></td>
    <td width="43%">Current Status</td>
  </tr>
  <tr class="paging"> 
    <td>Destination</td>
    <td><strong>:</strong></td>
    <td><?php echo $row['destination'];?></td>
    <td><?php 
	$sql="Select * from tracking where sid='$serial' order by serial desc limit 1";
	$res=mysql_query($sql) or die(mysql_error());
	while($id=mysql_fetch_array($res))
	{
		echo $id['location'];
	}
	?>
	</td>
  </tr>
</table>
<br>
<table width="82%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#E6E6E6" class="titlenodec"> 
    <td width="13%">AWB No.</td>
    <td width="16%">Booking Date</td>
    <td width="16%">Shipper</td>
    <td width="9%">Origin</td>
    <td width="13%">Destination</td>
    <td width="16%">Receiver</td>
    <td width="17%">Status</td>
  </tr>
  <tr bgcolor="#F5F5F5">
    <td height="18"><?php echo $row['AWB'];?></td>
    <td><?php echo $row['pdate'];?></td>
    <td><?php echo $row['shipper'];?></td>
    <td><?php echo $row['origin'];?></td>
    <td><?php echo $row['destination'];?></td>
    <td><?php echo $row['receiver'];?></td>
    <td><?php echo $row['status'];?></td>
  </tr>
</table>
<br>
<div align="center"> 
  <table width="82%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FCFCFC" bgcolor="#EBEBEB">
    <tr align="left" bgcolor="#FFFFFF"> 
      <th colspan="3">Tracking Process :</th>
    </tr>
    <tr align="left" bgcolor="#FFCC00"> 
      <th width="34%">Date &amp; Time</th>
      <th width="18%">Location</th>
      <th width="34%">Activity</th>
    </tr>
    <tr> 
      <?php 
	$sql="Select * from tracking where sid='$serial' order by serial desc ";
	$res=mysql_query($sql) or die(mysql_error());
	while($id=mysql_fetch_array($res))
	{
	?>
      <td><?php echo $id['pdate']; ?></td>
      <td><?php echo $id['location']; ?></td>
      <td><?php echo $id['activity']; ?></td>
	  <?php } ?>
    </tr>
    <?php } ?>
    <tr> 
      <td colspan="3"> </td>
    </tr>
  </table>
  <br>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td> 
        <?php include('bottom.php');?>
        &nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>