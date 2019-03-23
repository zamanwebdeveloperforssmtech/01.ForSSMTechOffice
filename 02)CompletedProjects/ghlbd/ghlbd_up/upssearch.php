<p align="center">Please wait loading...</p>
<div style="display:none">
    <form name="trackit" method="post" action="http://wwwapps.ups.com/WebTracking/track">
      <input type="hidden" name="accept_UPS_license_agreement" value="yes">
      <input type="hidden" name="10_action" value="3">
      <input type="hidden" name="nonUPS_title" value="">
      <input type="hidden" name="nonUPS_header" value="">
      <input type="hidden" name="nonUPS_footer" value="">
      <a class="buttontext" href="trackit.submit()">
  track</a><p>
	  <p><input type="text" size="40" name="trackNums" value="<? echo $_GET['cons']; ?>"> <input type="submit" value="Search">&nbsp; </p>
    </form>
</div>


<script>
document.trackit.submit();
</script>