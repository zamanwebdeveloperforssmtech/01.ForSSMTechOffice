<?php
include("db_con.php");
/*connectdb();
$ips=$REMOTE_ADDR;

if(isset($_POST["hawbno2"])) {
	$hawb=$_POST["hawbno2"];
	$hawb=wynsf("Select * from shipment where HAWB='$hawb'", "HAWB");
	if($hawb!='') {
		$currserial=wynsf("Select * from shipment where HAWB='$hawb'", "serial");
	} else {
		die("<script> window.location='tracking.html'; </script>");
	}
} else {
	die("<script> window.location='tracking.html'; </script>");
}*/
$sid="";
$sid=$_REQUEST['hawbno2'];

?>
<HTML>
<HEAD>
<TITLE>058</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript"> 
<!--
function resize_iframe(){
if(document.getElementById && !(document.all)) {
h = document.getElementById('youriframe').contentDocument.body.scrollHeight;
document.getElementById('youriframe').style.height = h;
}
else if(document.all) {
h = document.frames('youriframe').document.body.scrollHeight;
document.all.youriframe.style.height = h;
}

} 
// -->
</script> 

<script language="Javascript">
function message()
{
	var ans=confirm("are you sure want to delete ?");
	if(ans)
	{
		document.deltrac.action="sucdel.php";
		document.deltrac.submit();
	}
	else
	{
		window.location="delete.php";
	}
}
</script>
</HEAD>
<BODY BGCOLOR=#81AB29 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (058.psd) -->
<TABLE WIDTH=778 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
  <TR valign="top"> 
    <TD height="73" COLSPAN=2>&nbsp;</TD>
  </TR>
  <TR valign="top"> 
    <TD height="113" COLSPAN=2>&nbsp;</TD>
  </TR>
  <td height="16" colspan="4" valign="middle" background="images/corex_02.jpg"> 
    <div align="center"> 
        <table width="766" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="93" height="36"><div align="center"><a href="home.html" class="news"><font color="#FF0000">Home</font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="corexabout.html" class="news"><font color="#FF0000">About 
                us </font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center">
              <a class="news" href="tracking.html"><font color="#FF0000">
              Tracking </font></a></div></td>

            <td width="20"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="125"><div align="center" class="news"><a href="ls.html"><font color="#FF0000">Logistic 
                Support</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="83"><div align="center"><a href="network.html" class="news"><font color="#FF0000">Network</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="106"><div align="center"><a href="corexservice.html" class="news"><font color="#FF0000">Service</font></a></div>
              <div align="center"></div>
              <div align="center" class="news"></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="condition.html" class="news"><font color="#FF0000">Condition</font></a></div></td>
            <td width="19"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="90"><div align="center"><a href="corexcontact.html" class="news"><font color="#FF0000">Contact 
                us</font></a></div></td>
          </tr>
        </table>
    </div></TR>
  <tr bgcolor="9FD44B">
    <td height="16" colspan="4" valign="middle"><hr></TR>
<tr><td>

<div align="right"><a class="track" href="addnew.php">Add New Shipment</a> 
        | <a class="track" href="listall.php">List All Active Shipment</a> | <a class="track" href="chngtoken.php">Change 
        Token No.</a> | <a class="track" href="delete.php">Delete Tracking</a><br>
        </div>
<b>Track No </b>
                      <form action="delete.php" method="Post">
                        <input name="hawbno2" size="20">
                        <input type="submit" value=" GO " name="submit"> 
                      </form>
<hr>
<font color="navy">
<table width="750" align="center">
  <tr>
    <td width="70%" style="font-family: verdana; font-size: 9pt; vertical-align: top">
    <table width="300">
      <tr>
        <td vAlign="top" colSpan="2" height="30" style="font-family: verdana; font-size: 9pt; vertical-align: top">
        <strong style="COLOR: #005500">Tracking Details</strong></td>
      </tr>
	  <?php 
		$sql1="Select * from shipment where HAWB='$sid'";
	  //	$sql1="Select s.serial, s.HAWB, s.origin, s.destination, s.status, t.sid, t.activity, t.location, t.pdate from shipment as s, tracking as t where s.HAWB='$sid' and s.serial=t.sid";
		$res1=mysql_query($sql1) or die(mysql_error());
		while($id=mysql_fetch_array($res1))
		{
			
		$serial=$id['serial']; 
	  ?>
      <tr>
        <td width="150" style="font-family: verdana; font-size: 9pt; vertical-align: top">
        <strong>HAWB NO :</strong></td>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        <strong><?php echo $id['HAWB']; ?></strong></td>
      </tr>
	  
	    <tr>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        Origin :</td>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        <?php echo $id['origin']; ?></td>
      </tr>
      <tr>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        Destination :</td>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
        <?php echo $id['destination']; ?></td>
      </tr>
      <tr>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">&nbsp;</td>
      </tr>
    </table>
    </td>
    <td width="30%" style="font-family: verdana; font-size: 9pt; vertical-align: top">
    <br>
&nbsp;<table style="BORDER-RIGHT: #e02722 1px solid; BORDER-TOP: #e02722 1px solid; BORDER-LEFT: #e02722 1px solid; BORDER-BOTTOM: #e02722 1px solid" cellSpacing="0" cellPadding="0" width="100%" align="right">
      <tr>
        <td style="font-weight: bold; vertical-align: middle; color: #ffffff; height: 22px; text-align: center; font-family: verdana; font-size: 9pt" bgColor="#e02722">
        Current Status</td>
      </tr>
      <tr>
        <td style="lene-height: 140%; font-family: verdana; font-size: 9pt; vertical-align: top; padding: 5px">
        <center>
        <p>In <?php echo $id['status'];?></p>
        </center></td>
      </tr>
	  <?php } ?>
    </table>
    </td>
  </tr>
</table>
<br>
 <form name="deltrac" method="post">
      <table width="750" align="center">
        <tr> 
          <td colSpan="5" style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
            <strong>Tracking Progress :</strong></td>
        </tr>
        <tr style="COLOR: #ffffff" bgColor="#e02722"> 
          <td width="81" bgcolor="#CC3300" style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
            Date</td>
          <td width="104" bgcolor="#CC3300" style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
            Time</td>
          <td width="319" bgcolor="#CC3300" style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
            Location/Supplied via</td>
          <td width="117" bgcolor="#CC3300" style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
            Activity</td>
          <td width="105" bgcolor="#CC3300" style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
            Select</td>
        </tr>
        <?php

$sql="Select * from tracking where sid='$serial'";
$rs=mysql_query($sql) or die(mysql_error());
while($row=mysql_fetch_array($rs))
{
?>
        <tr bgcolor="#FFFFFF"> 
          <td colspan="2"><?php echo $row['pdate'];?></td>
          <td><?php echo $row['location'];?></td>
          <td><?php echo $row['activity'];?></td>
          <td> <input type="checkbox" name="r[]" value=" <?php echo $row['serial']; ?>"></td>
		  
        </tr>
        <?php
} 
?>
      </table>


     
        <div align="center">
          <input type="submit" name="Submit" value="Delete" onClick="message();">
        </div>
      </form>
      <br>




//content
</td></tr>
  <tr bgcolor="#94C431"> 
    <Td height="49" colspan="3"> <div align="center"> 
        <table width="766" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="93" height="36"><div align="center"><a href="home.html" class="news"><font color="#FF0000">Home</font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="corexabout.html" class="news"><font color="#FF0000">About 
                us </font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="tracking.html">
              <font color="#FF0000">Tracking</font></a><a href="corexabout.html" class="news"><font color="#FF0000"> </font></a></div></td>
            <td width="20"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="125"><div align="center" class="news"><a href="ls.html"><font color="#FF0000">Logistic 
                Support</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="83"><div align="center"><a href="network.html" class="news"><font color="#FF0000">Network</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="106"><div align="center"><a href="corexservice.html" class="news"><font color="#FF0000">Service</font></a></div>
              <div align="center"></div>
              <div align="center" class="news"></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="condition.html" class="news"><font color="#FF0000">Condition</font></a></div></td>
            <td width="19"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="90"><div align="center"><a href="corexcontact.html" class="news"><font color="#FF0000">Contact 
                us</font></a></div></td>
          </tr>
        </table>
      </div></TR>
</TABLE>
<!-- End ImageReady Slices -->
</BODY>
</HTML>