<html>
<body>
<form method="POST" action="http://wwwapps.ups.com/WebTracking/track" name="trkbynum" id="trkbynum">
<input type="hidden" value="en_US" name="loc">
<input type="hidden" value="5.0" name="HTMLVersion">
<input type="hidden" value="" name="USER_HISTORY_LIST">
<div class="secLvl clearfix">
<fieldset>
<div class="secBody">
<dl>
<label>
<dt>
<a class="btnlnkR helpIconR" href="javascript:helpModLvl('http://www.ups.com/content/us/en/tracking/help/tracking/tnh.html')"> Tracking or InfoNotice Numbers: </a>
<br>
</dt>
</label>
<dd>
<textarea id="trackNums" class="full" onfocus="Tracking.removeInstructionTextForInputPage()" onblur="Tracking.addInstructionTextForInputPage('Enter up to 25 tracking or InfoNotice numbers, one per line.', 'n')" name="trackNums" cols="40" rows="6"><?php echo $_GET['awb']; ?></textarea>
</dd>
</dl>
</div>
<div class="secBody">
<p>
By selecting the
<span class="pi-h4">Track</span>
button, I agree to the
<a class="btnlnkR newWindowIconR" href="javascript:helpModLvl('/WebTracking/terms?loc=en_US')">Terms and Conditions</a>
.
</p>
</div>
<div class="secFooter">
<div class="btnBar">
<input class="button btnGroup6 arrowIconRight" type="submit" value="Track" name="track.x">
</div>
</div>
</fieldset>
</div>
</form>
<script>
document.getElementById("trkbynum").submit();
</script>
</body>
<html>