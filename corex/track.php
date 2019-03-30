<?php 
//include_once("script/func.php");
//connectdb();
include("db_con.php");
$ips=$REMOTE_ADDR;
$token=$_REQUEST['ref'];

$pdate=$year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':00';	 
date("Y-m-d H:i:s", strtotime($pdate))==$pdate

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
<form name="trackform" method="post" action="suctract.php">
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
<?php 
//$sql="select * from shipment where HAWB=''";

$sql="SELECT shipment.serial, shipment.HAWB, tracking.sid, tracking.activity, tracking.location, tracking.pdate FROM shipment INNER JOIN tracking ON shipment.serial = tracking.sid  where shipment.HAWB='$token' and shipment.status='on process'";

$res=mysql_query($sql) or die("query failure");
if($id=mysql_fetch_array($res))
{
	
?>
<p align="right"><a class="track" href="addnew.php">Add New Shipment</a> 
      | <a class="track" href="listall.php">List All 
      Active Shipment</a> | <a class="track" href="chngtoken.php">Change Token No.</a>
</p>
<hr>
<b>Edit existing shipment: "<?php echo $id['HAWB']?>"</b>
<br><br>

<input type="hidden" name="sirialno" value="<?php echo $id['serial'];?>">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="33%" align="right" height="30">Token no. :</td>
    <td width="33%" height="30">&nbsp;<input type="text" name="tokenno" value="<?php echo 1235?>" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">HAWB no. :</td>
    <td width="33%" height="30">&nbsp;<input type="text" name="hawbno" value="<?php echo $id['HAWB']?>" class="inputemailnewsAss" size="20" style="width: 200px;" disabled></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">Current Location :</td>
    <td width="33%" height="30">&nbsp;<input type="text" name="location" value="" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">Activity :</td>
    <td width="33%" height="30">&nbsp;<input type="text" name="activity" value="" class="inputemailnewsAss" size="20" style="width: 200px;"></td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">Date :</td>
    <td width="33%" height="30">
<table width="325" cellpadding="0" cellspacing="0"><td width="48">
    &nbsp;<select name="day" class="inputemailnewsAss" id="dayform" />
    <option class="first" selected value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    </select>
</td><td width="97">
    &nbsp;<select name="month" class="inputemailnewsAss" id="monthform" />
    <option class="first" value="01" selected>January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select>
</td><td width="127">
    &nbsp;<select name="year" class="inputemailnewsAss" id="yearform" />
    <option class="first" value="2007" selected>2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
	<option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
	<option value="2014">2014</option>
    <option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>

    </select></span></td><td id="tdcpass" width="53">
</td></tr></table>
    </td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">Time :</td>
    <td width="33%" height="30">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="15%">&nbsp;<select name="hour" class="inputemailnewsAss" id="dayform0" />
    <option selected value="00">00</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    </select> </td>
        <td width="5%">
        <p align="center">:</td>
        <td width="165%">&nbsp;<select name="minute" class="inputemailnewsAss" id="dayform1" />
    <option selected value="00">00</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
    </select></td>
      </tr>
    </table>
    </td>
    <td width="34%" height="30">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right" height="30">End of Shipment :</td>
    <td width="33%" height="30">&nbsp;<select size="1" name="delivered" value="'.$delivered.'" class="inputemailnewsAss" style="width: 200px;">
    <option value="No" selected>No</option>
    <option value="Yes">Yes</option>
    </select></td>
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

<?php 
}
else
{
	echo "<script> alert('HAWB number. already delivered'); window.location='listall.php'; </script>";
}
//'); 
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
<?php 
if($day!="") {
print('
	document.trackform.day.value="'.$day.'";
	document.trackform.month.value="'.$month.'";
	document.trackform.year.value="'.$year.'";
	document.trackform.hour.value="'.$hour.'";
	document.trackform.minute.value="'.$minute.'";
');
} else {
print('
	document.trackform.day.value="'.date("d").'";
	document.trackform.month.value="'.date("m").'";
	document.trackform.year.value="'.date("Y").'";
	document.trackform.hour.value="'.date("H").'";
	document.trackform.minute.value="'.date("i").'";
');
} 
?>
</script>
</BODY>
</HTML>