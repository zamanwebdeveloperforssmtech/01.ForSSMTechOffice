<p align="center">Please wait loading...</p>
<div style="display:none">
		
<form name="form2" action="http://www.aramex.com/Post/track.aspx?" method="post">
                  <td align="right">
                      <table width="187" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="140"><input name="txtara" type="text" class="inputtext" size="25" value="<?php echo $_REQUEST['txtara']; ?>">
                            <input type="hidden" name="hdnGo" value="">
                          </td>
                          <td><input type="submit" VALUE="Submit" name="araSubmit" width="33" height="34" border="0" ></td>
                        </tr>
                      </table>
                  </td>
</form>
<script>
document.form2.araSubmit.click();
</script>