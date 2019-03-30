<?
include_once("script/func.php");
connectdb();
$ips=$REMOTE_ADDR;


?>
<HTML>
<HEAD>
<TITLE>058</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
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
</style>
</HEAD>
<BODY BGCOLOR=#81AB29 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (058.psd) -->
<TABLE WIDTH=778 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
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
<?
$hawbno=wynsf("Select * from shipment where serial='$sid'", "HAWB");
$gettoken=wynsf("Select * from token", "ctoken");
//----------------------------------------------------add new----------------------------------------------------
if(isset($_POST["ctokenno"])) {
	extract($_POST);
	if($tokenno=='1235' || $tokenno==$gettoken) {
		if($ntokenno==$cntokenno) {
			$unwanted=getresult("Insert into token values('$ntokenno')");
			echo "<script> alert('Token no. changed.'); </script>";
			echo "<script> window.location='listall.php'; </script>";
		} else {
			echo "<script> alert('New token and confirm token does not match.'); </script>";
		}
	} else {
		echo "<script> alert('Token no is not correct, you are not authorized to change token number.'); </script>";
	}
}

//content
print('

<p align="right"><a class="track" href="addnew.php">Add New Shipment</a> 
      | <a class="track" href="listallmamun.php">List All 
      Active Shipment</a> | <a class="track" href="chngtoken.php">Change Token No.</a>
</p>
<hr>
<b>Change Token Number</b>
<br><br>

<form name="addshipment" method="post" action="#">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="33%" align="right" height="30">Current Token no. :</td>
    <td width="33%" height="30">&nbsp;<input type="password" name="ctokenno" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">New Token no. :</td>
    <td width="33%" height="30">&nbsp;<input type="password" name="ntokenno" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">Confirm Token no. :</td>
    <td width="33%" height="30">&nbsp;<input type="password" name="cntokenno" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">&nbsp;</td>
    <td width="33%" height="30">&nbsp;</td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">&nbsp;</td>
    <td width="33%" height="30" align="center">
    <input type="submit" value="Submit" name="B1" class="inputemailnewsAss"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
</table>
</form>
<br><br><br>
');
//----------------------------------------------------add new end----------------------------------------------------
?>
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
<script>

</script>
</BODY>
</HTML>