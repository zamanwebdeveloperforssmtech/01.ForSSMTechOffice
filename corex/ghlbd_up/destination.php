<?php 
$user=$_COOKIE['member_ID'];
//echo $user;
include('db_conn.php');
?>
<html>
<head>
<title>Omex International</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="script/datetimepicker.js" type="text/javascript"></script>
<script language="JavaScript">
function showMe (it, box) {
var vis = (box.checked) ? "block" : "none";
document.getElementById(it).style.display = vis;
}
function showMes (it, box) {
var vis = box==1 ? "block" : "none";
document.getElementById(it).style.display = vis;
}
</script>

<script language="javascript">

function aa()
{
val1=0;
val2=0;
val3=0;
cur_due_val = 0;

el=document.getElementById("length");

el1=document.getElementById("width");
el2=document.getElementById("height");

val1=parseInt(el.value);
val2=parseInt(el1.value);
val3=parseInt(el2.value);


if(el.value=="")
{
document.destination.total.value=val2/5000;
}
else if(el1.value == "")
{
	document.destination.total.value=(val1 * val3)/5000;
}
else if(el2.value == "")
{
	document.destination.total.value=(val1 * val2)/5000;
}
else
{
	
	document.destination.total.value=(val1 * val2 * val3)/5000;
		
}
	
	
}

function bb()
{
 	num1 = 0;
	num2 = 0;
	num3 = 0;
	num4 = 0;
	
	a1 = document.getElementById('rate');
	a2 = document.getElementById('fsc');
	a3 = document.getElementById('vat');
	
	num1 = parseInt(a1.value);
	num2 = parseInt(a2.value);
	num3 = parseInt(a3.value);

	num4 = num1 + (num1*(num2 / 100));
	
	document.destination.total_val.value = num4 + (num4 * (num3/100));
}
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="font-family: arial; font-size: large;">
<form name="destination" action="sucdestinationadd.php" method="post">
  <font size="2" face="Arial, Helvetica, sans-serif"> 
  <input name="agent_id" type="hidden" value="<?php echo $user; ?>">
  </font> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td colspan="2" background="item/List.gif"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><a href="javascript:window.close()">Close</a> 
          </font></div></td>
    </tr>
    <tr> 
      <td width="59%" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF"  bordercolordark="#DFFECB">
          <tr> 
            <td height="58" colspan="4" valign="top"><font size="2" face="Arial, Helvetica, sans-serif"><img src="images/reportindex_01.gif" width="459" height="58"></font></td>
          </tr>
          <tr bgcolor="#66CC66"> 
            <td colspan="4" valign="top"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>1. 
              From</strong></font></td>
          </tr>
          <tr> 
            <td height="44" colspan="2" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Sender's Account Number <br>
              <input name="acc_no" type="text" id="acc_no" size="40">
              </font></td>
            <td width="26%" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Origin <br>
              <input name="origin" type="text" id="origin">
              </font></td>
            <td width="27%" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Destination <br>
              <input name="destination" type="text" id="destination">
              </font></td>
          </tr>
          <tr> 
            <td colspan="2" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Sender's 
              Name<br>
              <input name="sen_name" type="text" id="sen_name" size="40">
              </font></td>
            <td valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Phone 
              <br>
              <input name="phone" type="text" id="phone" size="20">
              </font></td>
              <td valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Email 
              <br>
              <input name="semail" type="text" id="semail" size="25">
              </font></td>
          </tr>
          <tr> 
            <td height="31" align="left" valign="top" colspan="4"><font size="2" face="Arial, Helvetica, sans-serif">Company&nbsp;&nbsp;<input name="company" type="text" id="company" size="81">
            </font></td>
          </tr>
          <tr> 
            <td align="left" valign="top" colspan="4"><font size="2" face="Arial, Helvetica, sans-serif">Address&nbsp;&nbsp;<textarea name="address" cols="62" rows="2" id="address"></textarea>
            </font></td>
          </tr>
          <tr> 
            <td colspan="4" valign="top"><font size="1">&nbsp;</font></td>
          </tr>
          <tr> 
            <td height="24" colspan="2" align="right"><font size="2" face="Arial, Helvetica, sans-serif">City :
				<input name="city" type="text" id="city" size="30">
              </font></td>
            <td align="right"><font size="2" face="Arial, Helvetica, sans-serif">State / Province 
              :&nbsp;&nbsp; <br>
              </font></td>
            <td><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="state" type="text" id="state" size="20">
              </font></td>
          </tr>
          <tr> 
            <td height="24" colspan="2" align="right"><font size="2" face="Arial, Helvetica, sans-serif">Country : 
              <input name="country" type="text" id="country" size="30">
              </font></td>
            <td align="right"><font size="2" face="Arial, Helvetica, sans-serif">ZIP / Postal 
              Code :&nbsp;&nbsp; <br>
              </font></td>
            <td> <font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="postal_code" type="text" id="postal_code" size="20">
              </font></td>
          </tr>
          <tr bgcolor="#66CC66"> 
            <td colspan="4" valign="top"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>2. 
              To Recipient's</strong></font></td>
          </tr>
          <tr> 
            <td colspan="2" align="right"><font size="2" face="Arial, Helvetica, sans-serif">Name 
              / Attn. : 
              <input name="rece_name" type="text" id="rece_name" size="27">
              </font></td>
            <td colspan="2" align="right"><font size="2" face="Arial, Helvetica, sans-serif">Phone 
              : 
              <input name="rece_phone" type="text" id="rece_phone" size="20">&nbsp;
              </font></td>
              
          </tr>
          <tr> 
            <td align="left" valign="top" colspan="3"><font size="2" face="Arial, Helvetica, sans-serif">Company&nbsp;&nbsp;<input name="rece_company" type="text" id="rece_company" size="81"></font></td>
            <td align="left" valign="top" ><font size="2" face="Arial, Helvetica, sans-serif">Email&nbsp;&nbsp;<input name="remail" type="text" id="remail" size="20"></font></td>
          </tr>
          <tr> 
            <td align="left" valign="top" colspan="4"><font size="2" face="Arial, Helvetica, sans-serif">Address &nbsp;&nbsp;<textarea name="rece_address" cols="62" rows="2" id="rece_address"></textarea>
              </font></td>
          </tr>
          <tr> 
            <td colspan="4" valign="top"><font size="1">&nbsp;</font></td>
          </tr>
          <tr> 
            <td height="24" colspan="2" align="right" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">City 
              : 
              <input name="rece_city" type="text" id="rece_city" size="30">
              </font></td>
            <td align="right"><font size="2" face="Arial, Helvetica, sans-serif">State / Province 
              :&nbsp;&nbsp;</font></td>
            <td><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="rece_state" type="text" id="rece_state" size="20">
              </font></td>
          </tr>
          <tr> 
            <td height="24" colspan="2" align="right" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Country 
              : 
              <input name="rece_country" type="text" id="rece_country" size="30">
              </font></td>
            <td align="right"><font size="2" face="Arial, Helvetica, sans-serif">ZIP / Postal 
              Code :&nbsp;&nbsp;</font></td>
            <td> <font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="rece_code" type="text" id="rece_code" size="20">
              </font></td>
          </tr>
          <tr> 
            <td width="28%" valign="top"><font size="2" face="Arial, Helvetica, sans-serif"> 
              Received by Bex<br>
              <input name="rece_bex" type="text" id="rece_bex">
              </font></td>
            <td width="19%" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Courier/BR. 
              Code 
              <input name="cour_code" type="text" id="cour_code" size="15">
              </font></td>
            <td colspan="2" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Date 
              &amp; Time<br>
              <input name="date_time" type="text" id="date_time" size="40">
              <a href="javascript:NewCal('date_time','ddmmyyyy',true,24)"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></font></td>
          </tr>
          <tr> 
            <td colspan="4" valign="top"> <div align="center"> </div></td>
          </tr>
        </table></td>
      <td width="41%" valign="top"><table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#DFFECB">
          <?php
	  
	   	$sql = "Select des_id, track_no from destination Order by des_id desc limit 1";
		$res = mysql_query($sql) or die(mysql_error());
		while($id = mysql_fetch_array($res))
		{
			$track_no = $id['track_no'];
			$track_no1 = $track_no + 1;
		
		?>
          <tr> 
            <td colspan="3"><font size="2" face="Arial, Helvetica, sans-serif">Tracking Your Shipment By Omex Air Way Bill Number  :</font></td>
            <td><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="track_no" type="text" id="track_no" style="text-align:right" value="<?php echo $track_no1;?>" size="15">
              </font></td>
          </tr>
          <?php } ?>
          <tr> 
            <td colspan="4" bgcolor="#66CC66"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>3. 
              Dimensions in CM</strong></font></td>
          </tr>
          <tr> 
            <td width="15%"><font size="2" face="Arial, Helvetica, sans-serif">Length</font></td>
            <td width="15%"><font size="2" face="Arial, Helvetica, sans-serif">Width</font></td>
            <td width="43%"><font size="2" face="Arial, Helvetica, sans-serif">Height 
              &nbsp;&nbsp;Volumetic Width</font></td>
            <td width="27%" align="center" bgcolor="#66CC66" class="form"><font size="1" face="Arial, Helvetica, sans-serif">MODE 
              OF PAYMENT</font></td>
          </tr>
          <tr> 
            <td><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="length" type="text" id="length" size="3" onBlur="aa();">
              </font></td>
            <td><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="width" type="text" id="width" size="3" onBlur="aa();">
              </font></td>
            <td><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="height" type="text" id="height" size="3" onBlur="aa();">
              = 
              <input name="total" type="text" id="total" size="3">
              </font></td>
            <td rowspan="4" bgcolor="#E6FBE3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="prepaid" type="checkbox" id="prepaid" value="prepaid">
              Prepaid<br>
              <input name="account" type="checkbox" id="account" value="shipper Account">
              Shippers <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account<br>
              <input name="consignee" type="checkbox" id="consignee" value="consignee" onClick="showMe('div22222', this)" checked>
              Consignee <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Collect) <br>
              <br>
              <br>
             
              
              </font></td>
          </tr>
          <tr> 
            <td height="21" colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td colspan="3"><font size="2" face="Arial, Helvetica, sans-serif">Total 
                    Volume Weight </font></td>
                  <td colspan="3"><font size="2" face="Arial, Helvetica, sans-serif">Total 
                    Chargeable Weight </font></td>
                </tr>
                <tr> 
                  <td colspan="3"><font size="2" face="Arial, Helvetica, sans-serif"> 
                    <input name="vol_weight" type="text" id="vol_weight" size="16">
                    </font></td>
                  <td colspan="3"><font size="2" face="Arial, Helvetica, sans-serif"> 
                    <input name="char_weight" type="text" id="char_weight" size="15">
                    </font></td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td colspan="3" rowspan="2" valign="middle"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="document" type="radio" id="document" value="Dox" onClick="showMes('div1', 2)">
              Documents only (No commercial Value)<br>
              <input name="document" type="radio" id="document" value="N-Dox" onClick="showMes('div1', 1)">
              Non-Documents (Provide 4Copies of Invoice &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And other Documentation)</font></td>
          </tr>		  
		  </table>
			<div id="div22222" style="visibility:none">
		  <table width="99%" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#DFFECB">
          <tr> 
            <td width="73%">Service Provider – <select name="through" style="font-size: 9">
                <option value="UNKNOWN">UNKNOWN</option>
                <?php 
	$sql="select * from media";
	$res=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
		?>
                <option value="<?php echo $row['m_id']; ?>" > <?php echo $row['media_name'];?></option>
                <?php
	}
	?>
              </select></td>
          </tr>
         
			</table>
			</div>
			<table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#DFFECB">
          <tr> 
            <td colspan="7" bgcolor="#66CC66"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>4. 
              No. of Pcs and Total weight</strong></font></td>
          </tr>
          <tr> 
            <td colspan="2" width="20%" align="center"><font size="2" face="Arial, Helvetica, sans-serif">PCS</font></td>
            <td align="center" width="15%"><font size="2" face="Arial, Helvetica, sans-serif">KGS</font></td>
            <td align="center">OTHERS</td>
            <td align="center" width="20%"><font size="2" face="Arial, Helvetica, sans-serif">GMS</font></td>
            <td align="center" width="15%"><font size="2" face="Arial, Helvetica, sans-serif">VAT</font></td>
            <td align="center" width="15%"><font size="2" face="Arial, Helvetica, sans-serif">CHARGE</font></td>
          </tr>
          <tr> 
            <td colspan="2"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="no_pics" type="text" id="no_pics" size="10">
              </font></td>
            <td><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="kgs" type="text" id="kgs" size="10">
              </font></td>
            <td><input name="others" type="text" size="20"></td>
            <td valign="middle"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="gms" type="text" id="gms" size="10">
            </font></td>
             <td valign="middle"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="vat" type="text" id="vatss" size="10">
            </font></td>
             <td valign="middle"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name="charge" type="text" id="charge" size="10">
            </font></td>
          </tr>
          </table>
          <table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#DFFECB">
          <tr> 
            <td colspan="5" align="justify"><font size="2" face="Arial, Helvetica, sans-serif">&quot;The 
              senders attention is drawn to the important notice overleaf. Subject 
              to the conditions endorsed and incorporated overleaf. Please accept 
              the documents or goods described below for delevery&quot; </font></td>
          </tr>
          <tr> 
            <td colspan="3"><font size="2" face="Arial, Helvetica, sans-serif">Full 
              Description of contents. (No Cash allowed)<br>
              <textarea name="disc_conten" cols="40" rows="2" id="disc_conten"></textarea>
              </font></td>
              
               <td colspan="2"><font size="2" face="Arial, Helvetica, sans-serif"> 
              Status
              <input name="status" type="text" id="status" size="20"><br>
               Current Location
              <input name="clocation" type="text" id="clocation" size="20">
              </font></td>
          </tr>
          <tr> 
            <td colspan="3" align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Insurance 
              coverage in available upon shipper's within request and payment 
              therefore<br>
              <br>
              Yes : 
              <input type="radio" name="radiobutton" value="yes">
              &nbsp;&nbsp;No 
              <input type="radio" name="radiobutton" value="no">
              </font></td>
            <td>&nbsp;</td>
            <td><p><font size="2" face="Arial, Helvetica, sans-serif">Declared 
                Value For Customs</font></p>
              <p><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="dvCustoms" type="text" size="15">
                </font></p></td>
          </tr>
          <tr> 
            <td colspan="3"><font size="2" face="Arial, Helvetica, sans-serif">Received 
              in good order and condition<br>
              Date &amp; Time 
              <input name="rece_date_time" type="text" id="rece_date_time" size="25">
              <a href="javascript:NewCal('rece_date_time','ddmmyyyy')"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></font></td>
            <td rowspan="2" valign="bottom">Ref. NO.<input name="refname" type="text" id="refname" size="25"></td>
            <td rowspan="2" valign="bottom">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td colspan="2"> <div id="div1" style="display:none"> 
          <table width="67%" height="570" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F2F2F2" bgcolor="#E4E4E4">
            <tr> 
              <td width="17" rowspan="21" valign="top">&nbsp; </td>
              <td height="23" colspan="3" background="item/titl.jpg"><div align="center"><font color="#990000" size="2" face="Arial, Helvetica, sans-serif"><strong>Insert 
                  Commercial Information</strong></font></div></td>
            </tr>
            <tr> 
              <td width="455"><font size="2" face="Arial, Helvetica, sans-serif">Date 
                of Exam</font></td>
              <td width="59"><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td width="253"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="date_of_exam" type="text" id="date_of_exam" />
                <a href="javascript:NewCal('date_of_exam','ddmmyyyy')"><img src="images/cal.gif"  width="16" height="16" border="0" alt="Pick a date"></a></font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Shipper/Exporte(Complete 
                Name &amp; Address)</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <textarea name="shipper_name" rows="2" id="shipper_name"></textarea>
                </font></td>
            </tr>
            <tr> 
              <td height="24"><font size="2" face="Arial, Helvetica, sans-serif">Vat 
                No.</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="vat_no" type="text" id="vat_no">
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Country of 
                Export</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="export" type="text" id="export">
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Country of 
                manufacture</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="coun_manu" type="text" id="coun_manu">
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Country of 
                ultimate destination</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="coun_des" type="text" id="coun_des" />
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Export Reference(i.e. 
                order no invoice no. etc.)&nbsp;</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="export_refer" type="text" id="export_refer" />
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Consignee 
                (Complete Name &amp; Address)</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <textarea name="consignee_name" rows="2" id="consignee_name"></textarea>
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Importer-if 
                other than consignee (Complete Name and Address)</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <textarea name="impor_name" rows="2" id="impor_name"></textarea>
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Air Waybill 
                No.</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="air_way" type="text" id="air_way">
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">Mark / Nos</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="mark_no" type="text" id="mark_no">
                </font></td>
            </tr>
            <tr> 
              <td><font size="2" face="Arial, Helvetica, sans-serif">No. of pkgs</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="no_pkgs" type="text" id="no_pkgs" />
                </font></td>
            </tr>
            <tr> 
              <td height="30"><font size="2" face="Arial, Helvetica, sans-serif">Type 
                of Packaging</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="type_packing" type="text" id="type_packing">
                </font></td>
            </tr>
            <tr> 
              <td height="26"><font size="2" face="Arial, Helvetica, sans-serif">Full 
                description of goods</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="descrip" type="text" id="descrip">
                </font></td>
            </tr>
            <tr> 
              <td height="24"><font size="2" face="Arial, Helvetica, sans-serif">City</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="non_city" type="text" id="non_city">
                </font></td>
            </tr>
            <tr> 
              <td height="27"><font size="2" face="Arial, Helvetica, sans-serif">Units 
                of measure</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="measure" type="text" id="measure">
                </font></td>
            </tr>
            <tr> 
              <td height="24"><font size="2" face="Arial, Helvetica, sans-serif">Weight</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="weight" type="text" id="weight">
                </font></td>
            </tr>
            <tr> 
              <td height="26"><font size="2" face="Arial, Helvetica, sans-serif">Unit 
                Value</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="unit_vale" type="text" id="unit_vale">
                </font></td>
            </tr>
            <tr> 
              <td height="24"><font size="2" face="Arial, Helvetica, sans-serif">Total 
                Value</font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"><strong>:</strong></font></td>
              <td><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="total_value" type="text" id="total_value">
                </font></td>
            </tr>
            <tr> 
              <td height="26" colspan="3" background="item/List.gif"> <div align="right"> 
                </div></td>
            </tr>
          </table>
        </div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"> 
          <input type="submit" name="Submit" value="Submit">
          </font></div></td>
    </tr>
  </table>
</form>
</body>
</html>
