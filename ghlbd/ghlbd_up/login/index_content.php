<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Welcome</title>
<script type="text/javascript" src="scripts/script.js"></script>
<link rel="stylesheet" href="css/style_screen.css" type="text/css" media="screen">
<!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<style type="text/css">
body {
	margin-top:10px;
	margin-bottom:10px;
	margin-left:15px;
	margin-right:15px;
	scrollbar-base-color:#EFE7FA;
	scrollbar-arrow-color: olivedrab;
	scrollbar-face-color:#EFE7FA;
	scrollbar-darkshadow-color: #D0D0D0;
}
</style>
</head>

<body onLoad="checkCookie();">
<script type="text/javascript" language="JavaScript1.2">
<!--
function checkCookie()
{
	var cookieEnabled=(navigator.cookieEnabled)? true : false

	//if not IE4+ nor NS6+
	if (typeof navigator.cookieEnabled=="undefined" && !cookieEnabled)
	{ 
		document.cookie="testcookie"
		cookieEnabled=(document.cookie.indexOf("testcookie")!=-1)? true : false
	}
	if (!cookieEnabled) //if cookies are disabled on client's browser
	{
		 var innerText = '<font color="#FF0000" size="+2">Attention</font><br><br><p align="justify" style="line-height:1.3">';
		 innerText += '<font size="2">If you can see this, you may not able to Log in. ';
		 innerText += 'There are a number of reasons why you may not able to log in properly. I\'ve listed them from easiest to hardest in order to save you unnecessary steps: <br>';
		 innerText += '<ul style="text-align:justify;line-height:1.3;list-style:square"><li>The date on your computer might be set incorrectly. To fix this, simply set the correct time and date on your computer.';
		 innerText += '<li style="margin-top:10">You might have installed an application that monitors/blocks cookies from being sent, such as virus protection software. If so, disable it before you sign in. ';
		 innerText += '<li style="margin-top:10">You might be behind a firewall that doesn\'t allow you to receive cookies. This is sometimes the case for users connecting from a business intranet with high security. If this is why you\'re having problems, contact your Systems Administrator.';
		 innerText += '<li style="margin-top:10">Your browser may not be set to accept cookies. Most browsers have the option of either accepting all cookies, showing an alert before accepting a cookie, or not accepting cookies at all. If your browser gives you the option to accept all cookies, you should choose it. If your browser gives you the option to show an alert before accepting a cookie, you should not select it. Below are the setting instructions for several popular browser types. When making these adjustments, be sure to confirm any changes you make by clicking OK.</ul>';
		 innerText += '<p align="justify" style="line-height:1.3">To configure your browser to accept cookies, follow the instructions below for your browser and version:';
		 innerText += '<ol style="text-align:justify;line-height:1.3"><li><strong>Mozilla Firefox</strong>';
		 innerText += '<ul style="text-align:justify;line-height:1.3"><li>Click on Tools in the menu at the top of the browser.';
		 innerText += '<li style="margin-top:10">Select Options from the drop-down menu.';
		 innerText += '<li style="margin-top:10">The Options window will appear. In the Options window, click on Privacy.';
		 innerText += '<li style="margin-top:10">Click on the Cookies tab.';
		 innerText += '<li style="margin-top:10">Check Allow sites to set Cookies.';
		 innerText += '<li style="margin-top:10">Check for the originating site only.';
		 innerText += '<li style="margin-top:10">Click the OK button at the bottom of the window. You may have to close and reopen your browser for these changes to take effect.</ul>';
		 innerText += '<li style="margin-top:10"><strong>Internet Explorer 6.x</strong>';
		 innerText += '<ul style="text-align:justify;line-height:1.3"><li>From Internet Explorer\'s Tool drop-down menu, choose Internet Options.';
		 innerText += '<li style="margin-top:10">Click on Privacy and select Advanced.';
		 innerText += '<li style="margin-top:10">Check Override automatic cookie handling.';
		 innerText += '<li style="margin-top:10">Select the radio button Accept for first party cookies.';
		 innerText += '<li style="margin-top:10">Click OK.';
		 innerText += '<li style="margin-top:10">Click OK again in the Internet Options screen. You will need to close and reopen your browser for this to take effect.</ul>';
		 innerText += '<li style="margin-top:10"><strong>Netscape 4.7x</strong>';
		 innerText += '<ul style="text-align:justify;line-height:1.3"><li>From the Edit menu, choose Preferences.';
		 innerText += '<li style="margin-top:10">Click the Advanced category.';
		 innerText += '<li style="margin-top:10">Click the radio button Accept all cookies.';
		 innerText += '<li style="margin-top:10">Click OK. You may need to close and reopen your browser for this to take effect.</ul>';
		 innerText += '<li style="margin-top:10"><strong>Netscape 6.x</strong>';
		 innerText += '<ul style="text-align:justify;line-height:1.3"><li>Click Edit on the Toolbar';
		 innerText += '<li style="margin-top:10">Click Preferences.';
		 innerText += '<li style="margin-top:10">Click the Privacy and Security category and expand the list to show the subcategories. Click cookies.';
		 innerText += '<li style="margin-top:10">Three options are diplayed. Click on either Enable all cookies. or Enable cookies for the originating website only.';
		 innerText += '<li style="margin-top:10">If you want to be notified when a website tries to set a cookie, select "Warn me before accepting a cookie.';
		 innerText += '<li style="margin-top:10">You may need to close and reopen your browser for this to take effect.</ul>';
		 innerText += '<li style="margin-top:10"><strong>Netscape 7.xx, Mozilla</strong>';
		 innerText += '<ul style="text-align:justify;line-height:1.3"><li>From the Edit menu, choose Preferences. (In MacOS X, choose Preferences from the Netscape or Mozilla menu.)';
		 innerText += '<li style="margin-top:10">Select the arrow next to Privacy and Security.';
		 innerText += '<li style="margin-top:10">Click the Cookies category.';
		 innerText += '<li style="margin-top:10">Click the radio button Enable all cookies.';
		 innerText += '<li style="margin-top:10">Click OK. You will need to close and reopen your browser for this to take effect.</ul>';
		 innerText += '<li style="margin-top:10"><strong>Opera 7.11</strong>';
		 innerText += '<ul style="text-align:justify;line-height:1.3"><li>From the File menu, choose Preferences.';
		 innerText += '<li style="margin-top:10">Click the Privacy category.';
		 innerText += '<li style="margin-top:10">Check Enable Cookies.';
		 innerText += '<li style="margin-top:10">From the Normal Cookies drop-down menu, select Automatically accept all cookies.';
		 innerText += '<li style="margin-top:10">From the Third Part drop-down menu, select Automatically accept all cookies.';
		 innerText += '<li style="margin-top:10">Click OK. You may need to close and reopen your browser for this to take effect.</ul>';
		 innerText += '<li style="margin-top:10"><strong>Safari</strong>';
		 innerText += '<ul style="text-align:justify;line-height:1.3"><li>From the Safari Menu, choose Preferences.';
		 innerText += '<li style="margin-top:10">Click the Security icon.';
		 innerText += '<li style="margin-top:10">In the Accept Cookies: selection box, chose Always or Only from sites you navigate to. ';
		 innerText += '<li style="margin-top:10">You may need to close and reopen your browser for this to take effect.</ul></ol>';
		 innerText += '</font></p>';
		 document.getElementById("ct").innerHTML = innerText;
	}
	else
	{
		document.getElementById('ct').innerHTML = 'If you are authorized person then use your User ID &amp; Password to enter into the system.';
	}
}
// -->
</script>
<table width="100%" cellpadding="0" cellspacing="0" align="center" border="0">
	<tr height="<?php echo ($_GET['h']-250);?>">
		<td align="center" valign="middle">
<table width="680" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td>
<div class="Block" align="center">
	<div class="Block-tl"></div>
	<div class="Block-tr"></div>
	<div class="Block-bl"></div>
	<div class="Block-br"></div>
	<div class="Block-tc"></div>
	<div class="Block-bc"></div>
	<div class="Block-cl"></div>
	<div class="Block-cr"></div>
	<div class="Block-cc"></div>
	<div class="Block-body">
			<p id="ct">&nbsp;</p>
	</div>
</div>
</td></tr></table>
		</td>
	</tr>
</table>
<div id="debug"></div>
</body>
</html>
