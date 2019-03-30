<?php 
$user=$_COOKIE['member_ID'];
//echo $user;
include('db_conn.php');
?>
<html>
	<head>
		<title>Bengal Post</title>
		<link href="generalrules.css" rel="stylesheet" type="text/css" />
		<script language="JavaScript" src="script/datetimepicker.js" type="text/javascript"></script>
	</head>
	<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
		<p>&nbsp;</p>
		<form name="the_form" id="the_form" action="process.php" method="post" target="mainFrame">
		<input type="hidden" name="do" id="do" value="Add_Domestic_CN">
		<input type="hidden" name="agent_id" id="agent_id" value="<?php echo $user;?>">
		<table width="60%" align="center" border="0" cellpadding="2" cellspacing="2">
			<tr>
				<td colspan="4" align="center" bgcolor="#F0F0F0"><strong>Receive Document</strong></td>
			</tr>
			<tr>
				<td>Track No</td>
				<td align="center"><strong>:</strong></td>
				<?php
					include('connect.php');
					$sql  = "SELECT MAX(track_no) FROM " . $prefix . "destination_dom";
					$result = connect($sql);
					$myrow = mysql_fetch_row($result);
					$track_no = $myrow[0] + 1;
				?>
				<td colspan="2"><input type="text" name="track" id="track" size="40" style="text-align:right" value="<?php echo $track_no;?>"></td>
			</tr>
			<tr>
				<td width="261">Date</td>
				<td width="39" align="center"><strong>:</strong></td>
			  <td colspan="2"><input type="text" name="r_date" id="r_date" size="36">&nbsp;&nbsp;<a href="javascript:NewCal('r_date','ddmmyyyy',false,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
			</tr>
			<tr>
				<td>From</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="from" id="from" size="40"></td>
			</tr>
			<tr>
				<td>To</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="to" id="to" size="40"></td>
			</tr>
			<tr>
				<td>Shipper</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><textarea name="shipper" id="shipper" style="width:265px" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Consignee</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><textarea name="consignee" id="consignee" style="width:265px" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Declared Value</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="dv" id="dv" size="40"></td>
			</tr>
			<tr>
				<td>Nature of Goods</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="nog" id="nog" size="40"></td>
			</tr>
			<tr>
				<td>PCS</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="pcs" id="pcs" size="40" style="text-align:right" value="0"></td>
			</tr>
			<tr>
				<td>Wt.</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="wt" id="wt" size="40" style="text-align:right" value="0"></td>
			</tr>
			<tr>
				<td>Booking Charges</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="bc" id="bc" size="40" style="text-align:right" value="0"></td>
			</tr>
			<tr>
				<td>Service Charges</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="sc" id="sc" size="40" style="text-align:right" value="0"></td>
			</tr>
			<tr>
				<td>Securied Del. Ch.</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="sdc" id="sdc" size="40" style="text-align:right" value="0"></td>
			</tr>
			<tr>
				<td>Sameday Del. Ch.</td>
				<td align="center"><strong>:</strong></td>
				<td colspan="2"><input type="text" name="smdc" id="smdc" size="40" style="text-align:right" value="0"></td>
			</tr>
			<tr>
				<td>Delivery</td>
				<td align="center"><strong>:</strong></td>
				<td width="139"><input type="radio" name="del" id="del" value="0"> Same Day Delivery<br>
		      <input type="radio" name="del" id="del" value="2"> Securied Delivery<br></td>
			    <td width="122"><input type="radio" name="del" id="radio" value="1">
Emergency Delivery
  <br><input type="radio" name="del" id="radio2" value="3" checked="checked">
Normal Delivery </td>
			</tr>
			<tr>
				<td colspan="4" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="4" align="center"><input type="submit" value="Submit"></td>
			</tr>
		</table>
		<br>
		</form>
	</body>
</html>