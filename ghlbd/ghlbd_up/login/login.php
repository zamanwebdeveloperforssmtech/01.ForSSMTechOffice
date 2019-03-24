<?php
	if(isset($_GET['h']) && $_GET['h'] != '')
	{
		$height = $_GET['h'];
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Sign-In</title>
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
}
</style>
</head>

<body>
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
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" style="width: 138px;" /><br />
										<input type="password" value="Password" name="u_pass" id="u_pass" 
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" style="width: 138px;" />
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
</body>
</html>
