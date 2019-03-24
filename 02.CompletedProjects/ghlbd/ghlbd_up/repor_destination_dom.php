<?php 
session_start();
include('connect.php');
$track_no = $_REQUEST['track_no'];
$user = $_COOKIE['member_ID'];
$sql = "SELECT * FROM " . $prefix . "destination_dom WHERE track_no='" . $track_no . "' AND agent_id='" . $user . "'";
$result = connect($sql);
$myrow = mysql_fetch_row($result);
$r_date = date("d M, Y", $myrow[3]);
?>

<html>
<head>
<title>Destination Report</title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function check()
{
	
	if(document.report.pre.value == "")
	{
		document.report.prepaid.checked = false;
	}
	else
	{
		document.report.prepaid.checked = true;
	}
	
	if(document.report.ship.value == "")
	{
		document.report.shipper.checked = false;
	}
	else
	{
		document.report.shipper.checked = true;
	}
	
	if(document.report.cons.value == "")
	{
		document.report.consign.checked = false;
	}
	else
	{
		document.report.consign.checked = true;
	}
	
	
	if(document.report.cas.value == "")
	{
		document.report.cash.checked = false;
	}
	else
	{
		document.report.cash.checked = true;
	}

	var pay_va = document.getElementById("pay").value;
	if(pay_va == "yes")
	{
		document.report.pay_yes.checked = true;
	}
	else if(pay_va == "no")
	{
		document.report.pay_no.checked = true;
	}
}
</script>

<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:692px;
	top:36px;
	width:166px;
	height:25px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:925px;
	top:41px;
	width:75px;
	height:20px;
	z-index:2;
}
#Layer3 {
	position:absolute;
	left:696px;
	top:63px;
	width:162px;
	height:24px;
	z-index:1;
}
#Layer4 {
	position:absolute;
	left:65px;
	top:107px;
	width:90px;
	height:19px;
	z-index:2;
}
#Layer5 {
	position:absolute;
	left:223px;
	top:106px;
	width:147px;
	height:23px;
	z-index:3;
}
#Layer6 {
	position:absolute;
	left:661px;
	top:103px;
	width:194px;
	height:18px;
	z-index:4;
}
#Layer7 {
	position:absolute;
	left:494px;
	top:109px;
	width:104px;
	height:21px;
	z-index:5;
}
#Layer8 {
	position:absolute;
	left:11px;
	top:178px;
	width:356px;
	height:117px;
	z-index:6;
}
#Layer9 {
	position:absolute;
	left:628px;
	top:178px;
	width:357px;
	height:101px;
	z-index:7;
}
#Layer10 {
	position:absolute;
	left:492px;
	top:156px;
	width:106px;
	height:27px;
	z-index:8;
}
#Layer11 {
	position:absolute;
	left:417px;
	top:202px;
	width:67px;
	height:19px;
	z-index:9;
}
#Layer12 {
	position:absolute;
	left:522px;
	top:201px;
	width:75px;
	height:19px;
	z-index:10;
}
#Layer13 {
	position:absolute;
	left:490px;
	top:239px;
	width:106px;
	height:19px;
	z-index:11;
}
#Layer14 {
	position:absolute;
	left:0px;
	top:0px;
	width:494px;
	height:286px;
	z-index:12;
}
#Layer15 {
	position:absolute;
	left:489px;
	top:278px;
	width:106px;
	height:18px;
	z-index:12;
}
#Layer16 {
	position:absolute;
	left:489px;
	top:317px;
	width:106px;
	height:18px;
	z-index:13;
}
#Layer17 {
	position:absolute;
	left:491px;
	top:354px;
	width:106px;
	height:19px;
	z-index:14;
}
#Layer18 {
	position:absolute;
	left:497px;
	top:388px;
	width:101px;
	height:26px;
	z-index:15;
}
#Layer19 {
	position:absolute;
	left:236px;
	top:480px;
	width:10px;
	height:14px;
	z-index:16;
}
#Layer20 {
	position:absolute;
	left:236px;
	top:504px;
	width:21px;
	height:18px;
	z-index:17;
}
#Layer21 {
	position:absolute;
	left:0px;
	top:0px;
	width:245px;
	height:540px;
	z-index:18;
}
#Layer22 {
	position:absolute;
	left:236px;
	top:528px;
	width:20px;
	height:21px;
	z-index:18;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="check()">
<div id="Layer3">
  <input name="track_no" type="text" id="track_no" value="<?php echo $track_no;?>" style="text-align:right" readonly="readonly">
</div>
<div id="Layer4">
  <input name="r_date" type="text" id="r_date" size="12" readonly="true" value="<?php echo $r_date;?>" style="text-align:center">
</div>
<div id="Layer5">
  <input name="from" type="text" id="from" readonly="true" value="<?php echo $myrow[4];?>">
</div>
<div id="Layer6">
  <input name="to" type="text" id="to" readonly="true" value="<?php echo $myrow[5];?>">
</div>
<div id="Layer7">
  <input name="dv" type="text" id="dv" size="13" readonly="true" value="<?php echo $myrow[8];?>">
</div>
<div id="Layer8">
  <textarea name="shipper" cols="42" rows="7" readonly="readonly" id="shipper"><?php echo $myrow[6];?></textarea>
</div>
<div id="Layer9">
  <textarea name="consignee" cols="42" rows="6" readonly="readonly" id="consignee"><?php echo $myrow[7];?></textarea>
</div>
<div id="Layer10">
  <input name="nog" type="text" id="nog" size="13" readonly="true" value="<?php echo $myrow[9];?>">
</div>
<div id="Layer11">
  <input name="pcs" type="text" id="pcs" size="7" readonly="true" value="<?php echo $myrow[10];?>" style="text-align:right">
</div>
<div id="Layer12">
  <input name="textfield" type="text" size="8" readonly="true" value="<?php echo $myrow[11];?>" style="text-align:right">
</div>
<div id="Layer13">
  <input name="bc" type="text" id="bc" style="text-align: right" value="<?php echo $myrow[12];?>" size="14" readonly="true">
</div>
<div id="Layer15">
  <input name="sc" type="text" id="sc" style="text-align: right" value="<?php echo $myrow[13];?>" size="14" readonly="true">
</div>
<div id="Layer16">
  <input name="sdc" type="text" id="sdc" style="text-align: right" value="<?php echo $myrow[14];?>" size="14" readonly="true">
</div>
<div id="Layer17">
  <input name="smdc" type="text" id="smdc" style="text-align: right" value="<?php echo $myrow[15];?>" size="14" readonly="true">
</div>
<div id="Layer18">
  <input name="total" type="text" id="total" style="text-align: right" value="<?php echo $myrow[12]+$myrow[13]+$myrow[14]+$myrow[15];?>" size="12" readonly="true">
</div>
<div id="Layer19">
  <?php
  	if($myrow[16] == 0)
	{
  ?>
  	<input name="sdd" type="checkbox" id="sdd" value="checkbox" checked="checked">
  <?php
  	}
	else
	{
  ?>
    <input name="sdd" type="checkbox" id="sdd" value="checkbox">
  <?php
  	}
  ?>
</div>
<div id="Layer20">
  <?php
  	if($myrow[16] == 1)
	{
  ?>
  	<input name="ed" type="checkbox" id="ed" value="checkbox" checked="checked">
  <?php
  	}
	else
	{
  ?>
    <input name="ed" type="checkbox" id="ed" value="checkbox">
  <?php
  	}
  ?>
</div>
<div id="Layer22">
  <?php
  	if($myrow[16] == 2)
	{
  ?>
  	<input name="sd" type="checkbox" id="sd" value="checkbox" checked="checked">
  <?php
  	}
	else
	{
  ?>
    <input name="sd" type="checkbox" id="sd" value="checkbox">
  <?php
  	}
  ?>
</div><form name="report">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  	<tr>
		<td>
		<img src="images/bengal.jpg" width="1000" height="560">		</td>
    </tr>
  </table>
</form>
</body>
</html>
