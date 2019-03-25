<?php
include("db_con.php");
//$ips=$REMOTE_ADDR;
$serial=$_REQUEST['seri_id'];

?>
<HTML>
<HEAD>
<TITLE>058</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="../flatsalebd/style.css" rel="stylesheet" type="text/css">
<style>
.inputemailnewsAss {
	BORDER-RIGHT: #006699 1px solid;
	BORDER-TOP: #006699 1px solid;
	FONT-SIZE: x-small;
	BORDER-LEFT: #006699 1px solid;
	COLOR: #003399;
	BORDER-BOTTOM: #006699 1px solid;
	FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
	BACKGROUND-COLOR: #f0f0f0;
	text-decoration: none;
}

FORM {
	MARGIN: 0px
}

INPUT {
	FONT-SIZE: 11px; COLOR: #000000; LINE-HEIGHT: 17px; FONT-FAMILY: Verdana,Arial,Helvetica,sans-serif
}

SELECT {
	FONT-SIZE: 11px; COLOR: #000000; LINE-HEIGHT: 17px; FONT-FAMILY: Verdana,Arial,Helvetica,sans-serif
}

BODY {
	COLOR: #ffffff; FONT-FAMILY: Verdana,Arial,Helvetica,sans-serif
}
.style4 {
	font-size: x-small;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #330099;
	text-decoration: none;
}
</style>
<script language="javascript" src="datetimepicker.js" type="text/javascript"></script>
</HEAD>
<BODY BGCOLOR=#81AB29 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 >
<!-- ImageReady Slices (058.psd) -->
<table width=778 border=0 align="center" cellpadding=0 cellspacing=0>
  <tr valign="top"> 
    <td height="73" colspan=2>&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td height="113" colspan=2>&nbsp;</td>
  </tr>
  <td height="16" colspan="4" valign="middle" background="../flatsalebd/images/corex_02.jpg"> 
    <div align="center"> 
      <table width="766" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="style4"> 
          <td width="93" height="36"><div align="center"><a href="home.html" class="news style4"><font color="#FF0000">Home</font></a></div></td>
          <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
          <td width="78"><div align="center"><a href="corexabout.html" class="news style4"><font color="#FF0000">About 
              us </font></a></div></td>
          <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
          <td width="78"><div align="center" class="style4"> <a class="news" href="tracking.html"><font color="#FF0000"> 
              Tracking </font></a></div></td>
          <td width="20"><div align="center" class="style4"><font color="#FFFFFF">|</font></div></td>
          <td width="125"><div align="center" class="news style4"><a href="ls.html"><font color="#FF0000">Logistic 
              Support</font></a></div></td>
          <td width="23"><div align="center" class="style4"><font color="#FFFFFF">|</font></div></td>
          <td width="83"><div align="center" class="style4"><a href="network.html" class="news"><font color="#FF0000">Network</font></a></div></td>
          <td width="23"><div align="center" class="style4"><font color="#FFFFFF">|</font></div></td>
          <td width="106"><div align="center" class="style4"><a href="corexservice.html" class="news"><font color="#FF0000">Service</font></a></div>
            <div align="center" class="style4"></div>
            <div align="center" class="news style4"></div></td>
          <td width="14"><div align="center" class="style4"><font color="#FFFFFF">|</font></div></td>
          <td width="78"><div align="center" class="style4"><a href="condition.html" class="news"><font color="#FF0000">Condition</font></a></div></td>
          <td width="19"><div align="center" class="style4"><font color="#FFFFFF">|</font></div></td>
          <td width="90"><div align="center" class="style4"><a href="corexcontact.html" class="news"><font color="#FF0000">Contact 
              us</font></a></div></td>
        </tr>
      </table>
    </div></tr>
  <tr bgcolor="9FD44B"> 
    <td height="16" colspan="4" valign="middle"><hr></tr>
  <tr>
    <td class="tags"> 
      <?php




$sql="select * from tracking where serial ='$serial'";
//$sql="Select s.serial, s.HAWB, s.origin, s.destination, s.status, t.sid, t.activity, t.location, t.pdate from shipment as s, tracking as t where s.HAWB='$sid' and s.serial=t.sid;
$res=mysql_query($sql);

while($id=mysql_fetch_array($res))
{
?>


<p align="right">
      <div align="right">
        <p><a class="style4" href="addnew.php">Add New Shipment</a> 
          | <a class="style4" href="listall.php">List All Active Shipment</a> 
          | <a class="style4"  href="chngtoken.php">Change Token No.</a> | <a class="style4" href="modifytrack.php">Modify 
          Tracking</a> | <a class="style4" href="delete.php">Delete Tracking</a><br>
        </p>
      </div>
<hr>
<div align="center"><b>Update Track</b><br>
    <br>
  
</div>
<form name="modifytrack" method="post" action="sucupdatetrack.php">
<input name="serial_no" type="hidden" value="<?php echo $serial ;?>">
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
          <tr> 
            <td width="32%" align="right" height="30">Current Location:</td>
            <td width="47%" height="30">&nbsp; <input type="text" name="location" value="<?php echo $id['location'] ?>" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
            <td width="21%" height="30">&nbsp;</td>
          </tr>
          <tr> 
            <td width="32%" align="right" height="30">Activity :</td>
            <td width="47%" height="30">&nbsp; 
              <input name="activity" type="text" size="50" class="inputemailnewsAss"  value="<?php echo $id['activity'] ?>">
            </td>
            <td width="21%" height="30">&nbsp;</td>
          </tr>
          <tr> 
            <td width="32%" align="right" height="30">Post Date &amp; Time :</td>
            <td width="47%" height="30"> &nbsp; <input type="text" name="date_time" value="<?php echo $id['pdate']?>" size="30"> 
              <a href="javascript:NewCal('date_time','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
            <td width="21%" height="30">&nbsp;</td>
          </tr>
          <tr> 
            <td width="32%" align="right" height="30">&nbsp;</td>
            <td width="47%" height="30">&nbsp;</td>
            <td width="21%" height="30">&nbsp;</td>
          </tr>
          <tr> 
            <td width="32%" align="right" height="30">&nbsp;</td>
            <td width="47%" height="30" align="center"> <input type="submit" value="Update" name="B12" class="inputemailnewsAss"></td>
            <td width="21%" height="30">&nbsp;</td>
          </tr>
        </table>
</form>
<?php }  ?>

<br>
<br><br><hr>

//----------------------------------------------------add new end----------------------------------------------------

</td></tr>
  <tr bgcolor="#94C431"> 
    <Td height="49" colspan="3"> <div align="center"> 
        <table width="766" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr class="style4"> 
            <td width="93" height="36"><div align="center"><a href="home.html" class="news"><font color="#FF0000">Home</font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="corexabout.html" class="news"><font color="#FF0000">About 
                us </font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="tracking.html">
              <font color="#FF0000">Tracking</font></a><a href="../flatsalebd/corexabout.html" class="news"><font color="#FF0000"> </font></a></div></td>
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
            <td width="90"><div align="center"><a href="contact.html" class="news"><font color="#FF0000">Contact 
                us</font></a></div></td>
          </tr>
        </table>
      </div></TR>
</TABLE>
<!-- End ImageReady Slices -->

 
</BODY>
</HTML>