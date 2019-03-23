<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<title>Welcome to Bengal Post</title>
<script type="text/javascript" src="script/ibox.js"></script>
<script type="text/javascript">iBox.setPath('ibox/');</script>
<style>
<!--
body
{
	scrollbar-face-color: #000000;
	scrollbar-highlight-color: #000000;
	scrollbar-shodow-color: #000000;
	scrollbar-3dlight-color: #000000;
	scrollbar-arrow-color: #FFFFFF;
	scrollbar-track-color: #000000;
	scrollbar-darkshadow-color: #000000;
}
-->
</style>
<script language="JavaScript" type="text/javascript">
<!--
function showPage(pageSrc)
{
	document.getElementById('ipage').src=pageSrc;
}
-->
</script>
</head>
<body bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script type="text/javascript">
<!--
function showDivCon()
{
	var con = '';
	document.getElementById('hideSeek').innerHTML = con;
	document.getElementById('hideSeek').style.visibility='visible';
}

function hideDivCon()
{
	document.getElementById('hideSeek').innerHTML = '';
	document.getElementById('hideSeek').style.visibility='hidden';
}
-->
</script>
<base target="mainFrame" />
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="168" bgcolor="#FFFFFF" valign="middle" height="323">
			<table width="90%" align="center" bgcolor="#FFFFFF" cellpadding="3" cellspacing="0">
				<tr>
					<td width="13"><img src="images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('index_content.html')">Home</a></td>
				</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="login.php" rel="ibox&amp;width=450&amp;height=130" title="Log In" class="tabfont">Sign In</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('service.html')">Service</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('network.html')">Network</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont">Tracking</a>					</td>
          		</tr>
				<tr>
					<td></td>
					<td><table width="100%" align="center"><tr><td><img src="images/arrow.gif" /></td><td align="left"><a href="#" class="tabfont" onclick="showPage('inter_tracking.html')">International</a></td></tr><tr><td><img src="images/arrow.gif" /></td><td align="left"><a href="#" class="tabfont" onclick="showPage('domestic_tracking.html')">Domestic</a></td></tr></table></td>
				</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="webmail" target="_blank" class="tabfont">Web Mail</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('about.html')">About Us</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('contact.html')">Contact Us</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('form.html')">Online Form</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('support.html')">Logistics Support</a></td>
          		</tr>
			</table>		</td>
		<?php
			if(!isset($_GET['page']) || $_GET['page'] == '')
			{
				$page = 'index_content.html';
			}
			else
			{
				$page = $_GET['page'];
				$i = 0;
				foreach($_GET as $key=>$value)
				{	
					if($key != 'page')
					{
						if($i == 0)
						{
							$page .= "?" . $key . "=" . $value;
						}
						else
						{
							$page .= "&" . $key . "=" . $value;
						}
						$i += 1;
					}
				}
			}
		?>
		<td width="732" valign="top" bgcolor="#FF9900">
			<iframe src="<?php echo $page;?>" width="732" frameborder="0" height="308" scrolling="Yes" id="ipage"></iframe>		</td>
	</tr>
</table>
</body>
</html>
