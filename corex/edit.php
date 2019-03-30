<?php
include("db_con.php");
//$ips=$REMOTE_ADDR;
$idnum=$_REQUEST['ref'];


?>
<HTML>
<HEAD>
<TITLE>058</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="../flatsalebd/style.css" rel="stylesheet" type="text/css">
<style>
.inputemailnewsAss {	BORDER-RIGHT: #006699 1px solid; BORDER-TOP: #006699 1px solid; FONT-SIZE: 11px; BORDER-LEFT: #006699 1px solid;  COLOR: #006699; BORDER-BOTTOM: #006699 1px solid; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; BACKGROUND-COLOR: #f0f0f0
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
.style4 {font-size: x-small}
</style>
<script language="javascript" src="datetimepicker.js" type="text/javascript"></script>

</HEAD>
<BODY BGCOLOR=#81AB29 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 >
<!-- ImageReady Slices (058.psd) -->
<table width=778 border=0 align="center" cellpadding=0 cellspacing=0>
  <TR valign="top"> 
    <TD height="73" COLSPAN=2><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="778" height="120">
        <param name="movie" value="swf/corextop.swf">
        <param name="quality" value="high">
        <embed src="swf/corextop.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="120"></embed></object></TD>
  </TR>
  <TR valign="top"> 
    <TD height="113" COLSPAN=2><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="778" height="226">
        <param name="movie" value="swf/corexhead.swf">
        <param name="quality" value="high">
        <embed src="swf/corexhead.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="226"></embed></object></TD>
  </TR>
  <td height="16" colspan="4" valign="middle" background="../flatsalebd/images/corex_02.jpg"> 
    <div align="center"> 
      <table width="766" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
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
    <td> 
      <?php




$sql="select * from shipment where HAWB='$idnum'";
$res=mysql_query($sql);

while($id=mysql_fetch_array($res))
{
?>


<p align="right"><a class="track" href="addnew.php"><font color="#990000">Add New Shipment</font></a> 
      | <a class="track" href="listallmamun.php"><font color="#990000">List All 
      Active Shipment</font></a> | <a class="track" href="chngtoken.php"><font color="#990000">Change Token No.</font></a>
</p>
<hr>
<div align="center"><b>Update shipment</font></b> <br>
    <br>
  
</div>
<form name="addshipment1" method="post" action="succedit.php">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

  <tr>
  
    <td width="33%" align="right" height="30">Token no. :</td>
    <td width="33%" height="30">&nbsp;&nbsp;<input type="text" name="tokenno" value="<?php echo 1235 ;?>
      " class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="33%" align="right" height="30">HAWB no. :</td>
    <td width="33%" height="30">&nbsp;
      <input type="text" name="hawbno2" value="<?php echo $id['HAWB'] ?>" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="33%" align="right" height="30">Origin :</td>
    <td width="33%" height="30">&nbsp;
      <input type="text" name="origin2" value="<?php echo $id['origin'] ?>" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="33%" align="right" height="30">Destination :</td>
    <td width="33%" height="30">&nbsp;
      <input type="text" name="destination2" value="<?php echo $id['destination'] ?>" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr> <?php  $media_name=$id['media'];
		//	 echo $media_name;?>
    <td width="33%" align="right" height="30">Through :</td>
            <td width="33%" height="30">&nbsp; <select type = "combo" name="media">
               <option value="UNKNOWN">UNKNOWN</option>
			    <?php
			
			$sql1="Select t_name from through ORDER BY t_name asc";
			$res1=mysql_query($sql1) or die (mysql_error());
					
			while($id1=mysql_fetch_array($res1))
			{
			//	$media=$id1['t_name'];
			
			if($media_name==$id1['t_name'])
								{
								$sel='selected';
								}
							else
								{
								$sel='';
								}
			
			
		
			
			?>
                <option value="<?php echo $id1['t_name'];?>"<?php echo $sel;?>><?php echo $id1['t_name'];?></option>
                <?php
			}
			?>
              </select></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="33%" align="right" height="30">AWB no. :</td>
    <td width="33%" height="30">&nbsp;
      <input type="text" name="awbno2" value="<?php echo $id['AWB'] ?>" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  
    <tr>
    <td width="33%" align="right" height="30">Post Date &amp; Time :</td>
    <td width="33%" height="30">
<table width="325" cellpadding="0" cellspacing="0">
<tr>
<td>&nbsp;&nbsp;<input type="text" name="date_time" value="<?php echo $id['pdate']?>" size="30"><a href="javascript:NewCal('date_time','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></td>
</tr></table>
    </td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="33%" align="right" height="30">&nbsp;</td>
    <td width="33%" height="30">&nbsp;</td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="33%" align="right" height="30">&nbsp;</td>
    <td width="33%" height="30" align="center"> <input type="submit" value="Submit" name="B12" class="inputemailnewsAss"></td>
    <td width="34%" height="30">&nbsp;</td>
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
          <tr> 
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