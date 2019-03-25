<?
include_once("script/func.php");
connectdb();
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
}
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
</HEAD>
<BODY BGCOLOR=#81AB29 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (058.psd) -->
<TABLE WIDTH=1000 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
 <TR valign="top" align="center"> 
    <TD height="73" COLSPAN=2><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="778" height="120">
        <param name="movie" value="swf/corextop.swf">
        <param name="quality" value="high">
        <embed src="swf/corextop.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="120"></embed></object></TD>
  </TR>
  <TR valign="top" align="center"> 
    <TD height="113" COLSPAN=2><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="778" height="226">
        <param name="movie" value="swf/corexhead.swf">
        <param name="quality" value="high">
        <embed src="swf/corexhead.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="226"></embed></object></TD>
  </TR>
  <td height="16" colspan="4" valign="middle" background="images/corex_02.jpg"> 
    <div align="center"> 
        <table width="778" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
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
<br>
<b>Track Another</b>
                      <form action="shipment.php" method="post">
                        <p><input name="hawbno2" size="20">
                        <input type="submit" value=" GO " name="submit"> </p>
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
      <tr>
        <td width="150" style="font-family: verdana; font-size: 9pt; vertical-align: top">
        <strong>HAWB NO :</strong></td>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        <strong><? echo $hawb; ?></strong></td>
      </tr>
      <tr>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        Origin :</td>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        <? echo wynsf("Select * from shipment where serial='$currserial'", "origin"); ?></td>
      </tr>
      <tr>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
        Destination :</td>
        <td style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
        <? echo wynsf("Select * from shipment where serial='$currserial'", "destination"); ?></td>
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
        <p>In <? echo wynsf("Select * from tracking where sid='$currserial' order by serial desc limit 1", "location"); ?></p>
        </center></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<br>
<table width="750" align="center">
  <tr>
    <td colSpan="5" style="font-family: verdana; font-size: 9pt; vertical-align: top">
    <strong>Tracking Progress :</strong></td>
  </tr>
  <tr style="COLOR: #ffffff" bgColor="#e02722">
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top" bgcolor="#CC3300">
    Date</td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top" bgcolor="#CC3300">
    Time</td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top" bgcolor="#CC3300">
    Location/Supplied via</td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top" bgcolor="#CC3300">
    Activity</td>
  </tr>
<?
$rs=getresult("Select * from tracking where sid='$currserial'");
$row=mysql_num_rows($rs);

for($i=0;$i<$row;$i++) {
$data=mysql_fetch_array($rs);
$tdate=date("d M Y", strtotime($data["pdate"]));
$ttime=date("g:i a", strtotime($data["pdate"]));
$tactivity=$data["activity"];
$tlocation=$data["location"];
print('
  <tr bgColor="#f2fbff">
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
    '.$tdate.'</td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top">'.$ttime.'</td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top">'.$tlocation.'
    </td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
    '.$tactivity.'</td>
  </tr>
');
}
?>
</table>
</font>
<br><br>

<?
$currmedia=wynsf("Select * from shipment where serial='$currserial'", "media");
$awb=wynsf("Select * from shipment where serial='$currserial'", "AWB");
$hawb=wynsf("Select * from shipment where serial='$currserial'","HAWB");
if($currmedia=='DHL') {
	$goto="http://www.dhl.co.ae/publish/ae/en/eshipping/track.high.html?pageToInclude=RESULTS&AWB=".$awb."&type=fasttrack&awb_hidden=".$awb."";
} else if($currmedia=='FEDEX') {
	$goto="http://www.fedex.com/Tracking?tracknumbers=".$awb."&action=track&language=english&ctry_code=be&mps=y&ascend_header=1&imageField=Track";
} else if($currmedia=='TNT') {
//	$goto="http://www.tnt.com/webtracker/tracking.do?respLang=en&respCountry=BD&cons=".$awb;
	$goto="tntsearch.php?cons=".$awb;
} else if($currmedia=='UPS') {
	$goto="ups.php?awb=".$awb;
	echo '<script> window.location="http://wwwapps.ups.com/WebTracking/track?loc=en_US&Requester=UPSHome&WT.mc_id=UPS_App_trckdetbutton&WBPM_lid=pesmod/ct1.html_trk_div&trackNums='.$awb.'&track.x=Track"; </script>';
} else if($currmedia=='CITY LINK EXPRESS') {
	$goto="http://www.citylinkexpress.com/HK/en-US/ProcessTracking.aspx?cno=".$awb;
}else if($currmedia=='OCS') {
	$goto="https://webcsw.ocs.co.jp/csw/ECSWG0201R00003P.do?cwbno=".$awb;
}else if($currmedia=='TF LOGISTICS') {
	$goto="http://4px.cc/eweb/track.html?method=search&strhawbcode=".$awb."&Submit=Track";
}else if($currmedia=='TCS') {
	$goto="http://www.tcscouriers.com/ae/tracking/Default.aspx?TrackBy=ReferenceNumberHome&trackNo=".$awb;
}else if($currmedia=='BAEIEXPRESS') {
	//$goto="http://www.baeiexpress.com/modules/track/usersearch.php?awb=".$awb;
	$goto="indiaexpress.php?awb=".$awb;
}else if($currmedia=='AIRPAK') {
	$goto="http://www.airpak-express.com/trackenq_general.asp?lstConnote=".$awb;
}else if($currmedia=='GULFWORLDWIDEEX') {
	$goto="http://gulfworldwideexpress.com/SkybillDetails.aspx?SKYBILLNUMBER=".$awb;
} else if($currmedia=='DPEX') {
         $goto="http://www.corex-bd.com/dpex.php?tn=".$awb;
} else if($currmedia=='First Flight Me') {
                 $goto="http://www.firstflightme.com/Track-Shipment?awb=".$awb;
           //$goto="http://www.firstflightme.com/newweb/DetailTrack.aspx?awbno=".$awb;
} else if($currmedia=='Elite Air Borne') {
         $goto="https://www.eliteairborne.com/tracking_details.php?id=".$awb;
}else if($currmedia=='FARDAR') {
         $goto="http://61.145.165.207:8091/index.asp?cn=".$awb;	
}else if($currmedia=='FASTEX') {
         $goto="http://www.fastexpressbd.com/shipment.php?hawbno=".$awb;	
}else if($currmedia=='ARAMEX') { 
	//$goto="http://www.aramex.com/express/track_results_multiple.aspx?ShipmentNumber=".$awb;
	$goto="http://www.aramex.com/express/track_results_multiple.aspx?ShipmentNumber=".$awb; ?>
 <a href="http://www.aramex.com/express/track_results_multiple.aspx?ShipmentNumber=<?php echo $awb;?>" target="_blank"><font color="#FFFFFF">www.aramex.com</font></a>
<?
}
 else {
	$goto="empty.php";
}
?>
<iframe src="<?php echo $goto; ?>" height="1000" width="100%" name="youriframe" id="youriframe" frameborder="0" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="yes">Please wait...</iframe>

<input type="hidden" name="cons" value="<? echo $awb ?>">
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