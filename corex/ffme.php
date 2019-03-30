<html>
<body>
    <form name="aspnetForm" method="post" action="http://www.firstflightme.com/newweb/default.aspx" id="aspnetForm">

		   
               <input name="ctl00$txtsingleawb" type="text" id="ctl00_txtsingleawb" class=" tb1" onkeydown="if(event.which || event.keyCode){if(event.keyCode == 13 ){setFocus('ctl00_btnsingletrack');return false;}}else{return false;}" value="<?php echo $_GET['tn']; ?>" />
		
		   	   
		    <input type="submit" name="ctl00$btnsingletrack" value="Track" onclick="return validationSingleTrack();" id="ctl00_btnsingletrack" tabindex="5" class="groovybutton" style="width:72px;" />
               <br>


</form>
<script>
document.getElementById('aspnetForm').submit();
</script>
</body>
</html>