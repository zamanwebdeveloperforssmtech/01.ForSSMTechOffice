<?php 
include_once('connec_db.php');
$track_no = $_REQUEST['track_no'];
$user = $_POST['member_ID'];
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

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="report">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td colspan="2"><div align="right"><a href="javascript:window.close()">Close</a></div></td>
  </tr>
  <tr> 
    <td width="38%" height="538" valign="top"><table width="90%" height="564" border="1" cellpadding="0" cellspacing="0" bordercolor="#66CC33" bordercolordark="#005B2E">
          <tr valign="top"> 
            <td height="60" colspan="4" background=""><img src="images/reportindex_01.gif" width="377" height="58"></td>
          </tr>
          <tr bgcolor="#66CC66"> 
            <td colspan="4"><font color="#FFFFFF" size="2"><strong>&nbsp;1. From</strong></font></td>
          </tr>
          <?php 
		
		$sql = "Select * from destination where track_no = '$track_no'";
			$res = mysql_query($sql) or die(mysql_error());
			while($row = mysql_fetch_array($res))
			{
			
		?>
          <input name="pre" type="hidden" value="<?php echo $row['prepaid'];?>">
          <input name="ship" type="hidden" value="<?php echo $row['shipper'];?>">
          <input name="cons" type="hidden" value="<?php echo $row['consigne'];?>">
          <input name="cas" type="hidden" value="<?php echo $row['cash'];?>">
          <input type="hidden" name="pay" value="<?php echo $row['pay_r_yes_no'];?>">
          <tr> 
            <td colspan="2"><font size="2">&nbsp;Sender's &nbsp;<br>
              &nbsp;Account Number : &nbsp; <?php echo $row['sen_acc_no'];?></font></td>
            <td width="20%" valign="top"><font size="2">&nbsp;Origin <br>
              &nbsp; <?php echo $row['origin'];?></font></td>
            <td width="27%" valign="top"><font size="2">&nbsp;Destination <br>
              &nbsp; <?php echo $row['destination'];?> </font></td>
          </tr>
          <tr> 
            <td colspan="2"><font size="2">&nbsp;Sender's <br>
              &nbsp;Name : &nbsp; <?php echo $row['sender_name'];?></font></td>
            <td colspan="2"><font size="2">&nbsp;Phone : &nbsp; <?php echo $row['phone'];?></font></td>
          </tr>
          <tr> 
            <td height="36" colspan="4"><font size="2">&nbsp;Company : &nbsp; <?php echo $row['company'];?></font></td>
          </tr>
          <tr valign="top"> 
            <td height="21" colspan="4"><font size="2">&nbsp;Address : &nbsp; <?php echo $row['address'];?></font></td>
          </tr>
          <tr> 
            <td height="22" colspan="2"><font size="2">&nbsp;City : &nbsp; <?php echo $row['city'];?></font></td>
            <td colspan="2"><font size="2">&nbsp;State / Province : &nbsp; <?php echo $row['state'];?></font></td>
          </tr>
          <tr> 
            <td height="22" colspan="2"><font size="2">&nbsp;Country : &nbsp; <?php echo $row['country'];?></font></td>
            <td colspan="2"><font size="2">&nbsp;ZIP / Postal Code : &nbsp; <?php echo $row['post_code'];?> 
              </font></td>
          </tr>
          <tr bgcolor="#66CC66"> 
            <td colspan="4"><font color="#FFFFFF" size="2"><strong>&nbsp;2. To Recipient's</strong>&nbsp;&nbsp;</font></td>
          </tr>
          <tr> 
            <td height="21" colspan="2"><font size="2">&nbsp;Name / Attn. : &nbsp; <?php echo $row['rece_name'];?></font></td>
            <td colspan="2"><font size="2">&nbsp;Phone : &nbsp; <?php echo $row['rece_phone'];?></font></td>
          </tr>
          <tr> 
            <td height="21"><font size="2">&nbsp;Company : &nbsp; </font></td>
            <td colspan="3"><font size="2"><?php echo $row['rece_company'];?></font></td>
          </tr>
          <tr> 
            <td height="21"><font size="2">&nbsp;Address : &nbsp; </font></td>
            <td colspan="3"><font size="2"><?php echo $row['rece_address'];?></font></td>
          </tr>
          <tr> 
            <td height="21" colspan="2"><font size="2">&nbsp;City : &nbsp; <?php echo $row['rece_city'];?></font></td>
            <td colspan="2"><font size="2">&nbsp;State / Province &nbsp; : <?php echo $row['rece_state'];?></font></td>
          </tr>
          <tr> 
            <td height="21" colspan="2"><font size="2">&nbsp;Country : &nbsp; <?php echo $row['rece_country'];?></font></td>
            <td colspan="2"><font size="2">&nbsp;ZIP / Postal Code : &nbsp; <?php echo $row['rece_postcode'];?> 
              </font></td>
          </tr>
          <tr> 
            <td width="28%" height="52" valign="top"><font size="2"> &nbsp;Received 
              by Bex<br>
              &nbsp; <?php echo $row['rece_by_bex'];?> </font></td>
            <td width="25%" valign="top"><font size="2">Courier Code <br>
              &nbsp; <?php echo $row['couri_code'];?></font></td>
            <td colspan="2" valign="top"><font size="2">&nbsp;Date &amp; Time : <br>
              &nbsp; <?php echo $row['cour_date'];?> </font></td>
          </tr>
        </table></td>
    <td width="62%" valign="top"><table width="100%" height="562" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#9BFFCD" bordercolordark="#00954A">
      <tr>
        <td height="50" colspan="5" align="center" valign="middle"><font color="#FF0000" size="2"><strong><font face="Geneva, Arial, Helvetica, sans-serif">INTERNATIONAL 
          AIR WAYBILL</font></strong></font><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;</font><font size="2"><br>
                  </font></td>
        <td align="center" valign="middle"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>Tracking Your Shipment : &nbsp; <?php echo $row['track_no'];?> </strong></font></td>
      </tr>
      <tr>
        <td height="17" colspan="6" bgcolor="#66CC66"><font color="#FFFFFF" size="2"><strong>3. 
          Dimensions in CM</strong></font></td>
      </tr>
      <tr>
        <td width="94" height="17" align="center"><font size="2">Length</font></td>
        <td colspan="2" align="center"><font size="2">Width</font></td>
        <td width="150" align="center">&nbsp;</td>
        <td width="150" align="center"><font size="2">Height</font></td>
        <td width="231"><font size="2">MODE OF PAYMENT</font></td>
      </tr>
      <tr>
        <td height="99" align="center"><font size="2">&nbsp; &nbsp; <?php echo $row['length'];?> </font></td>
        <td colspan="2" align="center"><font size="2">&nbsp;<?php echo $row['width'];?> </font></td>
        <td align="center">&nbsp;</td>
        <td align="center"><font size="2">&nbsp; &nbsp; <?php echo $row['height'];?> </font></td>
        <td  bgcolor="#E6FBE3"><p><font size="2">
          <input type="checkbox" name="prepaid"  >
            <font size="3">Prepaid</font><br>
            <input type="checkbox" name="shipper" >
            <font size="3">Shippers&nbsp;Account</font><br>
            <input type="checkbox" name="consign">
            <font size="3">Consignee &nbsp;(Collect)</font> <br>
            <input type="checkbox" name="cash">
            <font size="3">Cash </font></font></p></td>
      </tr>
      <tr>
        <td colspan="5"><font size="2">&nbsp;</font></td>
      </tr>
      <tr>
        <td colspan="5"><table width="98%" height="47" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="48%"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong><font size="2">Total Volume&nbsp;Weight </font></strong></font></div></td>
              <td width="52%"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong><font size="2">Total Chargeable                    &nbsp;Weight </font></strong></font></div></td>
            </tr>
            <tr>
              <td><font size="2">&nbsp;<?php echo $row['to_vol_weigh'];?></font></td>
              <td><font size="2">&nbsp;<?php echo $row['to_char_weigh'];?></font></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="5" rowspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="29%">&nbsp;</td>
              <td width="21%">&nbsp;</td>
              <td width="25%">&nbsp;</td>
              <td width="25%">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td bgcolor="#66CC66"><div align="center"><font size="2">CHARGES</font></div></td>
      </tr>
      <tr>
        <td bgcolor="#E6FBE3"><font size="2">&nbsp;</font></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#66CC66"><div align="left"><font color="#FFFFFF" size="2"><strong>&nbsp;&nbsp;4. 
          No. of Pcs and Total weight</strong></font></div></td>
        <td bgcolor="#66CC66">&nbsp;</td>
      </tr>
      <tr>
        <td height="21" colspan="3"><div align="center"><font size="2">PCS</font></div></td>
        <td ="2" width="150"><div align="center"><font size="2">KGS</font></div></td>
        <td ="2" width="150"><div align="left"><font size="2">&nbsp;GMS</font></div></td>
        <td width="231" rowspan="3" valign="bottom"><div align="center"><font size="2"></font><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>&nbsp;Consignee's Signature</strong></font></div></td>
      </tr>
      <tr>
       <td colspan="3"><div align="center"><?php echo $row['no_pics']; ?> </div></td>
        <td><div align="center"><font size="2"><?php echo $row['kgs'];?></font></div></td>
        <td><div align="left"><font size="2"><?php echo $row['gms'];?></font></div></td>
        </tr>
      <tr valign="top">
        <td height="39" colspan="5"><font size="2"> <font face="Geneva, Arial, Helvetica, sans-serif">&nbsp;Full Description of contents. 
          (No Cash allowed)</font><br>
          <?php echo $row['descri_cont'];?> </font></td>
        </tr>
      <tr>
        <td height="85" colspan="5" valign="top"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;Insurance 
          coverage in available upon shipper's within &nbsp;request &nbsp;and payment&nbsp;therefore&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  &nbsp;Yes :
  <input type="checkbox" name="pay_yes" >
          No
          <input type="checkbox" name="pay_no">
        </font></div></td>
        <td valign="bottom"><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>&nbsp;Shipper Signature</strong></font></div></td>
      </tr>
      <tr>
        <td colspan="5"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;Received in good order and condition<br>
          &nbsp;Date &amp; Time : &nbsp;<?php echo date("d m, Y", $row['rec_date_time']);?></font></td>
        <td rowspan="2" valign="bottom"><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>Declared Value For Customs</strong></font></div></td>
      </tr>
      <tr>
        <td height="50" colspan="5"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;Print Name</font></td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
