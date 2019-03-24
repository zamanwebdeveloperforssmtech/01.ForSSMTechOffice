<?php
//session_name();
session_start();
include('connect.php');

if(!isset($_POST['user_id']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Visit Bengal Post</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="login/scripts/script.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
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
  location.href="network.php?h="+myHeight;
-->
</script>
<?php
	}
?>
<link href="css/generalrules.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="6CC524" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
      <TR> 
        <TD width="813" height="85" vAlign=top background="item/nav-bkgd.gif" bgColor=#6CC524><IMG height=85 
      src="item/home-nav.gif" width=608 align=top border=0></TD>
        <form name="the_form" id="the_form" method="post" action="network.php">
          <TD width=26 
    background="item/nav-tab-bkgd.gif"><div align="right"><img src="item/home-nav-midd.gif" width="26" height="85"> 
            </div></TD>
          <TD width=9 
    background="item/nav-tab-bkgd.gif">&nbsp;</TD>
          <TD width=113 
    background="item/nav-tab-bkgd.gif"><div align="center"> 
              <TABLE cellSpacing=0 cellPadding=0 width=102 border=0>
                <TBODY>
                  <TR> 
                    <TD width="102"><IMG height=10 
            src="item/space1.gif" width=1></TD>
                  </TR>
                  <TR> 
                    <TD vAlign="bottom"><INPUT  type="text" class="navblack1" id="user_id" name="user_id" 
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" size="14" value="UserName"></TD>
                  </TR>
                  <TR> 
                    <TD vAlign=bottom><INPUT class="navblack1" type="password" id="user_pass" name="user_pass" 
            onfocus="if (this.value==this.defaultValue) this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" size="14" value="Password">
			</TD>
                  </TR>
                  <TR> 
                    <TD vAlign=bottom>
					<input type="hidden" name="h" id="h" value="<?php echo $_GET['h'];?>" />
					<INPUT type="image" 
            src="item/client-login.gif" width="102" height="29" onClick="document.forms[0].submit();"></TD>
                  </TR>
                </TBODY>
              </TABLE>
            </div></TD>
        </FORM>
        <TD width=15 vAlign=top background="item/nav-bkgd.gif"><div align="right"><img src="item/home-nav-right.gif" width="30" height="85"></div></TD>
        <TD width=16 vAlign=top background="item/nav-bkgd.gif">&nbsp;</TD>
      </TR>
    </TBODY>
  </TABLE>
  
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td> 
        <?php include('button.php'); ?>
      </td>
    </tr>
  </table>
  
</div>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#66CC33">
  <tr> 
    <td width="15%" height="287" valign="top"><table width="131" height="288" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td height="288">&nbsp;</td>
        </tr>
      </table></td>
    <td width="73%" rowspan="2" valign="top"><table width="775" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="753" height="137" valign="top" background="item/bgimage.gif">&nbsp;</td>
        </tr>
      </table>
      <div align="center"> 
        <table width="776" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td height="2263" valign="top"><div align="center"><br>
                <br>
                <table width="764" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="630" height="14"><font color="#000000" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Distribution 
                      Network</strong></font></td>
                  </tr>
                  <tr> 
                    <td><hr size="1" /></td>
                  </tr>
                  <tr> 
                    <td align="left" class="alert"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>International</strong></font></td>
                  </tr>
                  <tr> 
                    <td height="1294" align="center" valign="top"> <table width="757" height="1294" border="1" cellpadding="0" cellspacing="0" bordercolor="#669900">
                        <tr> 
                          <td width="212" height="1292" valign="top"><div align="center"> 
                              <table width="189" height="1162" border="0" cellpadding="0" cellspacing="0">
                                <tr> 
                                  <td width="189" height="1162"><div align="left" class="alert"><font size="-1">United 
                                      States <br />
                                      Canada <br />
                                      United Kingdom <br />
                                      Afghanistan <br />
                                      Albania <br />
                                      Algeria <br />
                                      American Samoa<br />
                                      Andorra <br />
                                      Angola <br />
                                      Anguilla <br />
                                      Antarctic Treaty Territory <br />
                                      Antigua and Barbuda <br />
                                      Argentina <br />
                                      Armenia <br />
                                      Aruba <br />
                                      Australia <br />
                                      Austria <br />
                                      Azerbaijan <br />
                                      Bahamas <br />
                                      Bahrain <br />
                                      Bangladesh <br />
                                      Barbados <br />
                                      Belarus <br />
                                      Belgium <br />
                                      Belize <br />
                                      Benin <br />
                                      Bermuda <br />
                                      Bhutan <br />
                                      Bolivia <br />
                                      Bosnia and Herzegovina <br />
                                      Botswana <br />
                                      Bouvet Island <br />
                                      Brazil <br />
                                      British Indian Ocean Territory <br />
                                      British Virgin Islands <br />
                                      Brunei Darussalam <br />
                                      Bulgaria <br />
                                      Burkina Faso <br />
                                      Burundi <br />
                                      Cambodia <br />
                                      Cameroon <br />
                                      Cape Verde <br />
                                      Cayman Islands <br />
                                      Central African Republic <br />
                                      Chad <br />
                                      Chile <br />
                                      China <br />
                                      Christmas Island <br />
                                      Cocos Islands <br />
                                      Colombia <br />
                                      Comoros <br />
                                      Congo <br />
                                      Cook Islands<br />
                                      Costa Rica <br />
                                      Côte d'Ivoire <br />
                                      Croatia <br />
                                      Cuba <br />
                                      Cyprus <br />
                                      Czech Republic <br />
                                      Denmark <br />
                                      Djibouti <br />
                                      Dominica <br />
                                      Dominican Republic <br />
                                      Ecuador <br />
                                      East Timor <br />
                                      Egypt <br />
                                      El Salvador <br />
                                      Equatorial Guinea <br />
                                      Eritrea <br />
                                      Estonia <br />
                                      Ethiopia <br />
                                      Falkland Islands <br />
                                      Faroe Islands <br />
                                      Fiji <br />
                                      Finland <br />
                                      France <br />
                                      French Guiana<br />
                                      French Polynesia <br />
                                      French Southern Territories <br />
                                      Gabon <br />
                                      Gambia <br />
                                      Georgia <br />
                                      Germany <br />
                                      Philippines<br />
                                      Pitcairn Island </font></div></td>
                                </tr>
                              </table>
                            </div></td>
                          <td width="253" valign="top"><div align="center"> 
                              <table width="203" height="1190" border="0" cellpadding="0" cellspacing="0">
                                <tr> 
                                  <td width="203" height="1190"> <div align="left"><span class="alert"><font size="-1">Ghana 
                                      <br />
                                      Gibraltar <br />
                                      Greece <br />
                                      Greenland <br />
                                      Grenada <br />
                                      Guadeloupe <br />
                                      Guam <br />
                                      Guatemala <br />
                                      Guinea <br />
                                      Guinea-Bissau<br />
                                      Guyana <br />
                                      Haiti <br />
                                      Heard and McDonald Islands <br />
                                      Honduras <br />
                                      Hong Kong <br />
                                      Hungary <br />
                                      Iceland <br />
                                      India <br />
                                      Indonesia <br />
                                      Iran, Islamic Republic of <br />
                                      Iraq <br />
                                      Ireland <br />
                                      Israel <br />
                                      Italy <br />
                                      Jamaica <br />
                                      Japan <br />
                                      Jordan <br />
                                      Kazakhstan <br />
                                      Kenya <br />
                                      Kiribati <br />
                                      Korea, Democratic People's Republic of <br />
                                      Korea, Republic of <br />
                                      Kuwait <br />
                                      Kyrgyzstan <br />
                                      Kenya <br />
                                      Kiribati <br />
                                      Korea, Democratic People's Republic of <br />
                                      Korea, Republic of <br />
                                      Kuwait <br />
                                      Kyrgyzstan <br />
                                      Lao People's Democratic Republic Latvia 
                                      <br />
                                      Lebanon <br />
                                      Lesotho <br />
                                      Liberia <br />
                                      Libyan Arab Jamahiriya <br />
                                      Liechtenstein <br />
                                      Lithuania <br />
                                      Luxembourg <br />
                                      Macau <br />
                                      Macedonia (Former Yugoslav Republic) <br />
                                      Madagascar <br />
                                      Malawi <br />
                                      Malaysia <br />
                                      Maldives <br />
                                      Mali <br />
                                      Malta <br />
                                      Marshall Islands <br />
                                      Martinique <br />
                                      Mauritania <br />
                                      Mauritius <br />
                                      Mayotte <br />
                                      Mexico <br />
                                      Micronesia (Federated States of) <br />
                                      Moldova, Republic of <br />
                                      Monaco <br />
                                      Mongolia <br />
                                      Montserrat <br />
                                      Morocco<br />
                                      Mozambique <br />
                                      Myanmar <br />
                                      Namibia<br />
                                      Norfolk Island <br />
                                      North Mariana Islands<br />
                                      Norway <br />
                                      Oman <br />
                                      Pacific Islands <br />
                                      Pacific Trust <br />
                                      Territory <br />
                                      Poland <br />
                                      Portugal <br />
                                      Qatar <br />
                                      Reunion </font></span><font size="-1"><br />
                                      </font></div></td>
                                </tr>
                              </table>
                            </div></td>
                          <td width="284" valign="top"><div align="center"> 
                              <table width="210" border="0" cellpadding="0" cellspacing="0">
                                <tr> 
                                  <td width="210" height="1282" valign="top"><div align="left" class="alert"><font size="-1">Romania 
                                      <br />
                                      Russian Federation <br />
                                      Rwanda <br />
                                      S. Georgia and S. Sandwich Isls. <br />
                                      Saint Kitts and Nevis <br />
                                      Saint Lucia <br />
                                      Saint <br />
                                      Vincent and the Grenadines <br />
                                      St. Helena <br />
                                      St. Pierre and Miquelon <br />
                                      San Marino <br />
                                      São Tomé and Principe <br />
                                      Saudi Arabia <br />
                                      Senegal <br />
                                      Seychelles <br />
                                      Sierra Leone <br />
                                      Singapore <br />
                                      Slovakia <br />
                                      Slovenia <br />
                                      Solomon Islands<br />
                                      Somalia <br />
                                      South Africa <br />
                                      Spain <br />
                                      Sri Lanka <br />
                                      Sudan <br />
                                      Suriname <br />
                                      Svalbard and Jan Mayen Islands <br />
                                      Swaziland <br />
                                      Sweden <br />
                                      Switzerland <br />
                                      Syrian Arab Republic <br />
                                      Taiwan <br />
                                      Tajikistan <br />
                                      Tanzania, United Republic of <br />
                                      Thailand <br />
                                      Togo <br />
                                      Tokelau <br />
                                      Tonga <br />
                                      Trinidad and Tobago <br />
                                      Tunisia <br />
                                      Turkey <br />
                                      Turkmenistan <br />
                                      Turks and Caicos <br />
                                      Islands <br />
                                      Tuvalu <br />
                                      Uganda <br />
                                      Ukraine <br />
                                      United Arab Emirates <br />
                                      United Kingdom <br />
                                      United States <br />
                                      U.S. Minor <br />
                                      Outlying Islands <br />
                                      Uruguay <br />
                                      Uzbekistan <br />
                                      Vanuatu <br />
                                      Vatican <br />
                                      City State (Holy See) <br />
                                      Venezuela <br />
                                      Viet Nam <br />
                                      Virgin Islands <br />
                                      Wallis and Futuna <br />
                                      Islands <br />
                                      Western Sahara<br />
                                      Western Samoa <br />
                                      Yemen <br />
                                      Yugoslavia (Former) <br />
                                      Zaire <br />
                                      Zambia <br />
                                      Zimbabwe <br />
                                      Nauru <br />
                                      Nepal <br />
                                      Netherlands <br />
                                      Netherlands Antilles <br />
                                      New Caledonia <br />
                                      New Zealand <br />
                                      Nicaragua <br />
                                      Niger <br />
                                      Nigeria <br />
                                      Niue <br />
                                      Pakistan <br />
                                      Palau <br />
                                      Panama <br />
                                      Papua New Guinea<br />
                                      Paraguay <br />
                                      Peru <br />
                                      </font></div></td>
                                </tr>
                              </table>
                            </div></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr> 
                    <td height="17"><div align="left"></div>
                      <div align="center"> </div>
                      <div align="center"> </div></td>
                  </tr>
                  <tr> 
                    <td height="17"><div align="left"><font size="2"><strong>Domestic</strong></font></div></td>
                  </tr>
                  <tr> 
                    <td height="11"><hr size="1" /></td>
                  </tr>
                  <tr> 
                    <td height="646"><div align="center"> 
                        <table width="764" border="0">
                          <tr> 
                            <td width="33%" height="642" bgcolor="#FFFFFF"><table width="219" border="0" align="center" cellpadding="5" cellspacing="0">
                                <tr> 
                                  <td width="219" height="10"><p align="left"><strong><font color="#0000FF" size="3">Divisions 
                                      : </font></strong></p></td>
                                </tr>
                                <tr> 
                                  <td height="10"><div align="left"><a href="corexdhaka.html"><font color="#000000" size="2"><strong>Dhaka 
                                      Division </strong></font></a></div></td>
                                </tr>
                                <tr> 
                                  <td><div align="left"><a href="corexchittagong.html"><font color="#000000" size="2"><strong>Chittagong 
                                      Division </strong></font></a></div></td>
                                </tr>
                                <tr> 
                                  <td><div align="left"><a href="corexbarisal.html"><font color="#000000" size="2"><strong>Barisal 
                                      Division </strong></font></a></div></td>
                                </tr>
                                <tr> 
                                  <td><div align="left"><a href="corexkhulna.html"><font color="#000000" size="2"><strong>Khulna 
                                      Division </strong></font></a></div></td>
                                </tr>
                                <tr> 
                                  <td><div align="left"><a href="corexrajshahi.html"><strong><font color="#000000" size="2">Rajshahi 
                                      Division </font></strong></a></div></td>
                                </tr>
                                <tr> 
                                  <td><div align="left"><a href="corexsylhet.html"><font color="#000000" size="2"><strong>Sylhet 
                                      Division </strong></font></a></div></td>
                                </tr>
                                <tr> 
                                  <td>&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td><img src="net/office.jpg" width="219" height="200" /></td>
                                </tr>
                              </table></td>
                            <td width="67%" bgcolor="#FFFFFF"><div align="center"><img src="net/map.jpg" width="458" height="640" /></div></td>
                          </tr>
                        </table>
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="39" class="tabfontfocus"><div align="justify" class="alert">The 
                        Company's Fifteen (15) years of solid experience has created 
                        a constructive network in every corner of Bangladesh, 
                        which spans to all 64 districts of Bangladesh along with 
                        250 Upajilas. </div></td>
                  </tr>
                  <tr> 
                    <td height="7" class="tabfontfocus">&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="39" class="tabfontfocus"><div align="justify" class="alert">Our 
                        Management is hailed as one of the pioneer of the Post 
                        Industry due to the relentless labor in developing and 
                        maintaining a resourceful Network system throughout Bangladesh.We 
                        possess commendable Infrastructure, Abilities and Facilities 
                        to deliver all your Bangladesh bound shipments throughout 
                        the country. </div>
                      <div align="center"></div>
                      <div align="center"></div>
                      <div align="center"></div>
                      <div align="center"></div>
                      <div align="center"></div>
                      <div align="center"></div>
                      <div align="center"></div></td>
                  </tr>
                </table>
              </div>
              </td>
          </tr>
        </table>
      </div></td>
    <td width="12%" valign="top"><table width="95" height="288" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td height="288">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td width="15%" height="1686" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="27" valign="top">&nbsp;</td>
    <td valign="top"><div align="center">
        <table width="774" border="0" align="center">
          <tr> 
            <td> 
              <?php include('footer.html'); ?>
            </td>
          </tr>
        </table>
      </div></td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>
<div align="center">
</body>
</html>
<?php
}
else
{
	$admin_id=$_POST['user_id'];
	$admin_password=$_POST['user_pass'];
	$sql = "Select * from adminsign where admin_id='$admin_id'";
	$result = connect($sql);
	$num_rows = mysql_num_rows($result);
	if($num_rows > 0)
	{
		$myrow = mysql_fetch_row($result);
		if($myrow[1] == $admin_password)
		{
			setcookie('member_ID', $myrow[0],time()+8*60*60);
			setcookie('member_Type', 'Super_Admin',time()+8*60*60);
			header('Location: login_home.php');
		}
		else
		{
			echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
		}
	}
	else
	{
		$sql = "select user_id, password, user_type from employee where user_id= '$admin_id'";
		$result = connect($sql);
		$num_rows = mysql_num_rows($result);
		if($num_rows > 0)
		{
			$myrow = mysql_fetch_row($result);
			if($myrow[1] == $admin_password)
			{
				setcookie('member_ID', $myrow[0],time()+8*60*60);
				if($myrow[2] == 'admin')
				{
					setcookie('member_Type', 'Admin',time()+8*60*60);
				}
				elseif($myrow[2] == 'agent')
				{
					setcookie('member_Type', 'Agent',time()+8*60*60);
				}
				elseif($myrow[2] == 'agent_dom')
				{
					setcookie('member_Type', 'Agent_DOM',time()+8*60*60);
				}
				elseif($myrow[2] == 'admin_dom')
				{
					setcookie('member_Type', 'Admin_DOM',time()+8*60*60);
				}
				else
				{
					setcookie('member_Type', 'Special',time()+8*60*60);
				}
				header('Location: login_home.php');
			}
			else
			{
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
			}
		}
		else
		{
			$prefix = "bexs_";
			$sql = "SELECT login_id, password, employee_type, employee_name, employee_id FROM " . $prefix . "employee e WHERE login_id='" . $_POST['user_id'] . "'";
			$result = connect($sql);
			$num_rows = mysql_num_rows($result);
			$server_time = (gmmktime()+(12*60*60)+(8*60*60));
			//echo date("d M, Y h:i:s A", $server_time);	
			if($num_rows > 0)
			{
				$myrow = mysql_fetch_row($result);
				if($myrow[1] == md5($_POST['user_pass']))
				{
					setcookie('USER[ID]', $myrow[4], $server_time);
					if($myrow[2] == 1)
					{
						setcookie('USER[TYPE]', 'admin', $server_time);
					}
					elseif($myrow[2] == 2)
					{
						setcookie('USER[TYPE]', 'scb', $server_time);
					}
			
					setcookie('USER[NAME]', $myrow[3], $server_time);
					setcookie('H', $_POST['h'], $server_time);
					setcookie('TODAY[START]', (gmmktime(0,0,0)+(6*60*60)), $server_time);
					// (gmmktime(0,0,0)-(7*60*60)) - localhost
					// (gmmktime(0,0,0)+(6*60*60)) - web
					//echo date("d M, Y h:i:s A", (gmmktime(0,0,0)-(7*60*60)));
					header('Location: soft/index.php');
				}
				else
				{
					echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
				}
			}
			else
			{
				echo('<script language="javascript">alert("User ID and/or Password does not Matched!!!");location.href="home.php";</script>');
			}
		}
	}
}
?>