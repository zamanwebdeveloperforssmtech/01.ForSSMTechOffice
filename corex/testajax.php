<html>
<body>
<script type="text/javascript">
function ajaxFunction()
{
 var xmlHttp;
// var ro;
 var browser = navigator.appName;
 if(browser == "Microsoft Internet Explorer"){
 xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 else{
          xmlHttp = new XMLHttpRequest();
     }
/*
try
{
	xmlHttp=new XMLHttpRequest();
}
catch(e)
{
	try
	{
		xmlHttp=new ActiveXobject("Internet Explorer");	
	}
	catch(e)
	{
		try
		{
			xmlHttp=new ActiveXobject("Microsoft.XMLHTTP");
		}
		catch(e)
		{
			alert("Your Browser does not support");
			return false;
		}
	}
}*/
xmlHttp.onreadystatechange=function()
{
	if(xmlHttp.readyState==4)
	{
		document.myform.time.value=xmlHttp.responseText;
	}
}
xmlHttp.open("GET", "time.php", true);
xmlHttp.send(null);
}
</script>
<form name="myform">
  Name : <input type="text" onKeyUp="ajaxFunction();" name="username">
  <br>
Time :  <input type="text" name="time">
 <a href="http://www.aramex.com/express/track_results_multiple.aspx?ShipmentNumber=1042386844">www.aramex.com</a> 

</form>
<iframe src="http://www.aramex.com" width="450" height="400" scrolling="yes">
<a href="http://www.aramex.com/express/track_results_multiple.aspx?ShipmentNumber=1042386844">www.aramex.com</a> 
</iframe>

</body>
</html>
