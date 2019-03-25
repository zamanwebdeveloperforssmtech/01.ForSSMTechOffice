
<p align="center">Please wait loading...</p>
<div style="display:none">
				<form xmlns="" method="post" name="tracker_form" action="http://www.tnt.com/webtracker/tracking.do?">
				<table width="550" bgcolor="#000000" cellspacing="0" cellpadding="1" border="0"><tr valign="top">
<td bgcolor="#FFFFFF"><table width="100%" class="appTable" cellspacing="0" cellpadding="5" border="0"><tr valign="top">
  <td width="50%"><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr valign="top"><td valign="top" align="right">
  &nbsp;
  <textarea class="inputfield" wrap="physical" rows="7" cols="24" name="cons" title="Enter your consignment or reference number(s)  "><?php echo $_REQUEST['cons']; ?></textarea>
  <br class="" />Consignment<input checked="checked" onclick="setType('CON');" value="CON" name="trackType" type="radio" />Reference
  <input onclick="setType('REF');" value="REF" name="trackType" type="radio" />
  <br class="" />Remember my numbers<input value="Y" name="saveCons" type="checkbox" />
  <br class="" /><br class="" /><a class="buttontext" href="tracker_form.submit()">
  track</a><p>
  <input type="submit" value="Submit" name="B1">  
		</td><td><img border="0" alt="" height="1" width="1" src="/corporate/images/1x1.gif" />
		</td></tr></table></td></tr></table></td></tr></table><input value="" name="genericSiteIdent" type="hidden" />
		<INPUT VALUE="1" NAME="page" TYPE="hidden" /><INPUT VALUE="en" NAME="respLang" TYPE="hidden" />
		<INPUT VALUE="BD" NAME="respCountry" TYPE="hidden" /><INPUT VALUE="1" NAME="sourceID" TYPE="hidden" />
		<INPUT VALUE="ww" NAME="sourceCountry" TYPE="hidden" /><INPUT VALUE="" NAME="plazakey" TYPE="hidden" />
		<INPUT VALUE="" NAME="refs" TYPE="hidden" /><INPUT VALUE="GEN" NAME="requestType" TYPE="hidden" />
		<INPUT VALUE="CON" NAME="searchType" TYPE="hidden" /><INPUT VALUE="1" NAME="navigation" TYPE="hidden" /></form>
</div>


<script>
document.tracker_form.B1.click();
</script>