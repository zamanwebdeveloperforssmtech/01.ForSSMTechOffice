<p align="center">Please wait loading...</p>
<div style="display:none">
    <form name="trackit" method="post" action="http://www.baeiexpress.com/modules/track/usersearch.php?">
      <input type="hidden" name="accept_UPS_license_agreement" value="yes">
      <input type="hidden" name="10_action" value="3">
      <input type="hidden" name="nonUPS_title" value="">
      <input type="hidden" name="nonUPS_header" value="">
      <input type="hidden" name="nonUPS_footer" value="">
      <p><input type="text" size="40" name="tracknum" value="<? echo $_GET['sid']; ?>"> <input type="submit" value="Track Now">&nbsp; </p>
    </form>
</div>


<script>
document.trackit.submit();
</script>