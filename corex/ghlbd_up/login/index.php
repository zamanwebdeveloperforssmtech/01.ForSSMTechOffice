<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>GHL International</title>
<script type="text/javascript" src="scripts/script.js"></script>
<link rel="stylesheet" href="css/style_screen.css" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<script type="text/javascript" src="scripts/ibox.js"></script>
<script type="text/javascript">iBox.setPath('scripts/');</script>	
<?php
	if(isset($_GET['h']) || $_GET['h'] != '')
	{
		$height = $_GET['h'];
	}
	else
	{
?>
<script language="JavaScript" type="text/javascript">
<!--
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
  location.href="index.php?h="+myHeight;
-->
</script>
<?php
	}
?>
<style type="text/css">
body {
	margin-top:0;
	margin-bottom:0;
	margin-left:0;
	margin-right:0;
	background-color:#EEE7FA;
	overflow:hidden;
}
</style>
</head>
<body>
<table cellpadding="0" cellspacing="0" align="center" width="900" border="0" bgcolor="#FFFFFF">
	<tr>
		<td align="center"><img src="item/header.gif" border="0" /></td>
	</tr>
	<tr>
		<td align="left">
			<!--MenuBar-->
			<table cellpadding="0" cellspacing="0" align="left" border="0" width="900" height="30" class="menubar">
				<tr>
					<td width="80" align="center">
						<a href="#">Home</a>					</td>
					<td width="80" align="center">
						<a href="login.php?h=<?php echo $height;?>" rel="ibox&width=200" title="Sign-In">Sign-In</a>					</td>
					<td>&nbsp;					</td>
				</tr>
			</table>
			<!--End MenuBar-->		</td>
	</tr>
	<tr>
		<td align="center">
			<table width="900" border="0" cellpadding="0" cellspacing="0" height="<?php echo ($height-200);?>">
				<tr>
					<td width="145" valign="top">
						<!--LeftMenuBar-->
						 <div class="Block">
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
                                <div class="BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="header-tag-icon">
                                        <div class="t">Sign-In</div>
                                    </div>
                                </div><div class="BlockContent">
                                    <div class="BlockContent-body">
                                        <div>
										<form method="post" id="loginform" action="../soft/login_process.php">
										<input type="hidden" name="do" id="do" value="Login">
										<input type="hidden" name="h" id="h" value="<?php echo $height;?>" />
                                        <input type="text" value="User Name" name="u_id" id="u_id" 
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" style="width: 95%;" />
										<input type="password" value="Password" name="u_pass" id="u_pass" 
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" style="width: 95%;" />
										<button class="Button" type="submit">
                                              <span class="btn">
                                                  <span class="l"></span>
                                                  <span class="r"></span>
                                                  <span class="t">Login</span>
                                              </span>
                                        </button>
                                        </form></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!--EndLeftMenuBar-->
					</td>
					<td width="5" background="item/sep.gif" style="background-repeat:repeat-y"></td>
					<td width="750" valign="top" align="left">
					<?php
						if(!isset($_GET['page']) || $_GET['page'] == '')
						{
							$page = 'index_content.php?h=' . $height;
						}
						else
						{
							$page = $_GET['page'] . '.php?h=' . $_GET['h'];
							foreach($_GET as $key=>$value)
							{
								if($key != 'page' || $key != 'h')
								{
									$page .= "&" . $key . "=" . $value;
								}
							}
						}
					?>
						<iframe align="top" src="<?php echo $page;?>" width="750" height="<?php echo ($height-200);?>" frameborder="0" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="Yes" style="z-index:1"><p>Your browser does not support this technology.</p></iframe>					</td>
				</tr>
			</table>		</td>
	</tr>
	<tr>
		<td align="center">
			<table cellpadding="0" cellspacing="0" align="center" width="900" height="20" class="footer">
				<tr>
					<td align="left">
						&nbsp;&nbsp;&nbsp;Copyright &copy; 2009 --- All Rights Reserved.					</td>
					<td align="right">
						Designed &amp; Hosted by: <a href="http://cyberhosting.us" target="_blank">CyberHosting.US</a>&nbsp;&nbsp;&nbsp;					</td>
				</tr>
			</table>		</td>
	</tr>
</table>
</body>
</html>
