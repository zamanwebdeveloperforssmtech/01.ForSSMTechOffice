<p align="center"><font face="Arial, Helvetica, sans-serif">Please wait loading...</font></p>
<div style="display:none">
		

      <form method="post" action="http://www.ocs.co.jp/multitracking/tracking/template/MultiQuery.vm/action/MultiTracking" name="CWBform">
      <table border="0" cellpadding="0" cellspacing="0" width="140">
        <tbody>
        <tr>
          <td bgcolor="#ffffff">
            <table border="0" cellpadding="0" cellspacing="1" width="140">
              <tbody>
              <tr>
                <td bgcolor="#94b9e4"><img alt="Shipment Tracking" src="menu_data/t_tsuiseki.gif" height="21" width="139"></td></tr>
              <tr>
                <td bgcolor="#ccdef3">
                  <table border="0" cellpadding="3" cellspacing="0" width="140">
                    <tbody>
                    <tr>
                      <td class="fontsize12">The current status of shipments and 
                        delivery information will be determined. <br>Please 
                        input the 11-digit number located below the bar code on 
                        the CWB of the shipment. <br>Example:10059887213 </td></tr>
                    <tr>
                      <td class="fontsize12">
                        <center> 
                        <input id="sURL" value="http://www.ocstracking.com/index.html" name="sURL" type="hidden"> 
                        <input id="target" value="_top" name="target" type="hidden"> 
                        <input style="ime-mode: disabled;" maxlength="15" size="15" name="CWBs" type="text" value="<?php echo $_REQUEST['AWBNo'];?>">
                        <input value="true" id="new" name="new" type="hidden">
                        <br><input  name="submit" type="submit" border="0" height="30" width="73"></center>
                      </td></tr></tbody></table></td></tr>
              </tbody>
            </table>
          </td>
        </tr>
        </tbody>
      </table>
      </form>
</div>

<script language="javascript">
document.CWBform.submit.click();
</script>