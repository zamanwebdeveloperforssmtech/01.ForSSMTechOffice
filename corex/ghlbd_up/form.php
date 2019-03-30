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
  location.href="form.php?h="+myHeight;
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
        <form name="the_form" id="the_form" method="post" action="form.php">
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
            <td height="394" valign="top"><div align="center"><br>
                <br>
                <br>
              </div>
              <div align="center"><br>
                <table width="764" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="173" height="117">&nbsp;</td>
                    <td width="591"><div align="center"> 
                        <table width="575" border="0" cellpadding="0" cellspacing="0">
                          <tr> 
                            <td width="515" height="14"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#000000" size="4">Online 
                              form </font><br>
                              <font color="#FF0000">all fields are mendatory</font></strong></font></td>
                          </tr>
                          <tr> 
                            <td><hr size="1"></td>
                          </tr>
                          <tr> 
                            <td height="39" class="tabfontfocus"><div align="center"> 
                                <table width="573" height="*" border="0" align="center" cellpadding="2" cellspacing="2">
                                  <tr> 
                                    <td width="217" height="27" align="right" class="tabfont"><div align="left"><font color="#000000" face="MS Sans Serif"><b>Name</b></font></div></td>
                                    <td width="342" height="27"><div align="left"> 
                                        <input type="text" name="required-cname" size="42">
                                      </div></td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="91" align="right" valign="top" class="tabfont"><div align="left"><font color="#000000" face="MS Sans Serif"><b>Address</b></font></div></td>
                                    <td width="342" height="91"><div align="left"> 
                                        <textarea rows="5" name="required-caddress" cols="32"></textarea>
                                      </div></td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="29" align="right" class="tabfont"><div align="left"><font color="#000000" face="MS Sans Serif"><b>Country</b></font></div></td>
                                    <td width="342" height="29"><div align="left"> 
                                        <select class="inputCopy" name="required-country" value size="1">
                                          <option selected value="USA">United 
                                          States 
                                          <option value="Canada">Canada 
                                          <option value="United Kingdom">United 
                                          Kingdom 
                                          <option value="Afghanistan">Afghanistan 
                                          <option value="Albania">Albania 
                                          <option value="Algeria">Algeria 
                                          <option value="American Samoa">American 
                                          Samoa 
                                          <option value="Andorra">Andorra 
                                          <option value="Angola">Angola 
                                          <option value="Anguilla">Anguilla 
                                          <option value="Antarctic Treaty Territory">Antarctic 
                                          Treaty Territory 
                                          <option value="Antigua and Barbuda">Antigua 
                                          and Barbuda 
                                          <option value="Argentina">Argentina 
                                          <option value="Armenia">Armenia 
                                          <option value="Aruba">Aruba 
                                          <option value="Australia">Australia 
                                          <option value="Austria">Austria 
                                          <option value="Azerbaijan">Azerbaijan 
                                          <option value="Bahamas">Bahamas 
                                          <option value="Bahrain">Bahrain 
                                          <option value="Bangladesh">Bangladesh 
                                          <option value="Barbados">Barbados 
                                          <option value="Belarus">Belarus 
                                          <option value="Belgium">Belgium 
                                          <option value="Belize">Belize 
                                          <option value="Benin">Benin 
                                          <option value="Bermuda">Bermuda 
                                          <option value="Bhutan">Bhutan 
                                          <option value="Bolivia">Bolivia 
                                          <option value="Bosnia and Herzegovina">Bosnia 
                                          and Herzegovina 
                                          <option value="Botswana">Botswana 
                                          <option value="Bouvet Island">Bouvet 
                                          Island 
                                          <option value="Brazil">Brazil 
                                          <option value="British Indian Ocean Territory">British 
                                          Indian Ocean Territory 
                                          <option value="British Virgin Islands">British 
                                          Virgin Islands 
                                          <option value="Brunei Darussalam">Brunei 
                                          Darussalam 
                                          <option value="Bulgaria">Bulgaria 
                                          <option value="Burkina Faso">Burkina 
                                          Faso 
                                          <option value="Burundi">Burundi 
                                          <option value="Cambodia">Cambodia 
                                          <option value="Cameroon">Cameroon 
                                          <option value="Cape Verde">Cape Verde 
                                          <option value="Cayman Islands">Cayman 
                                          Islands 
                                          <option value="Central African Republic">Central 
                                          African Republic 
                                          <option value="Chad">Chad 
                                          <option value="Chile">Chile 
                                          <option value="China">China 
                                          <option value="Christmas Island">Christmas 
                                          Island 
                                          <option value="Cocos Islands">Cocos 
                                          Islands 
                                          <option value="Colombia">Colombia 
                                          <option value="Comoros">Comoros 
                                          <option value="Congo">Congo 
                                          <option value="Cook Islands">Cook Islands 
                                          <option value="Costa Rica">Costa Rica 
                                          <option value="Côte d'Ivoire">Côte d'Ivoire 
                                          <option value="Croatia">Croatia 
                                          <option value="Cuba">Cuba 
                                          <option value="Cyprus">Cyprus 
                                          <option value="Czech Republic">Czech 
                                          Republic 
                                          <option value="Denmark">Denmark 
                                          <option value="Djibouti">Djibouti 
                                          <option value="Dominica">Dominica 
                                          <option value="Dominican Republic">Dominican 
                                          Republic 
                                          <option value="Ecuador">Ecuador 
                                          <option value="East Timor">East Timor 
                                          <option value="Egypt">Egypt 
                                          <option value="El Salvador">El Salvador 
                                          <option value="Equatorial Guinea">Equatorial 
                                          Guinea 
                                          <option value="Eritrea">Eritrea 
                                          <option value="Estonia">Estonia 
                                          <option value="Ethiopia">Ethiopia 
                                          <option value="Falkland Islands">Falkland 
                                          Islands 
                                          <option value="Faroe Islands">Faroe 
                                          Islands 
                                          <option value="Fiji">Fiji 
                                          <option value="Finland">Finland 
                                          <option value="France">France 
                                          <option value="French Guiana">French 
                                          Guiana 
                                          <option value="French Polynesia">French 
                                          Polynesia 
                                          <option value="French Southern Territories">French 
                                          Southern Territories 
                                          <option value="Gabon">Gabon 
                                          <option value="Gambia">Gambia 
                                          <option value="Georgia">Georgia 
                                          <option value="Germany">Germany 
                                          <option value="Ghana">Ghana 
                                          <option value="Gibraltar">Gibraltar 
                                          <option value="Greece">Greece 
                                          <option value="Greenland">Greenland 
                                          <option value="Grenada">Grenada 
                                          <option value="Guadeloupe">Guadeloupe 
                                          <option value="Guam">Guam 
                                          <option value="Guatemala">Guatemala 
                                          <option value="Guinea">Guinea 
                                          <option value="Guinea-Bissau">Guinea-Bissau 
                                          <option value="Guyana">Guyana 
                                          <option value="Haiti">Haiti 
                                          <option value="Heard and McDonald Islands">Heard 
                                          and McDonald Islands 
                                          <option value="Honduras">Honduras 
                                          <option value="Hong Kong">Hong Kong 
                                          <option value="Hungary">Hungary 
                                          <option value="Iceland">Iceland 
                                          <option value="India">India 
                                          <option value="Indonesia">Indonesia 
                                          <option value="Iran, Islamic Republic of">Iran, 
                                          Islamic Republic of 
                                          <option value="Iraq">Iraq 
                                          <option value="Ireland">Ireland 
                                          <option value="Israel">Israel 
                                          <option value="Italy">Italy 
                                          <option value="Jamaica">Jamaica 
                                          <option value="Japan">Japan 
                                          <option value="Jordan">Jordan 
                                          <option value="Kazakhstan">Kazakhstan 
                                          <option value="Kenya">Kenya 
                                          <option value="Kiribati">Kiribati 
                                          <option value="Korea, Democratic People's Republic of">Korea, 
                                          Democratic People's Republic of 
                                          <option value="Korea, Republic of">Korea, 
                                          Republic of 
                                          <option value="Kuwait">Kuwait 
                                          <option value="Kyrgyzstan">Kyrgyzstan 
                                          <option value="Lao People's Democratic Republic">Lao 
                                          People's Democratic Republic 
                                          <option value="Latvia">Latvia 
                                          <option value="Lebanon">Lebanon 
                                          <option value="Lesotho">Lesotho 
                                          <option value="Liberia">Liberia 
                                          <option value="Libyan Arab Jamahiriya">Libyan 
                                          Arab Jamahiriya 
                                          <option value="Liechtenstein">Liechtenstein 
                                          <option value="Lithuania">Lithuania 
                                          <option value="Luxembourg">Luxembourg 
                                          <option value="Macau">Macau 
                                          <option value="Macedonia (Former Yugoslav Republic)">Macedonia 
                                          (Former Yugoslav Republic) 
                                          <option value="Madagascar">Madagascar 
                                          <option value="Malawi">Malawi 
                                          <option value="Malaysia">Malaysia 
                                          <option value="Maldives">Maldives 
                                          <option value="Mali">Mali 
                                          <option value="Malta">Malta 
                                          <option value="Marshall Islands">Marshall 
                                          Islands 
                                          <option value="Martinique">Martinique 
                                          <option value="Mauritania">Mauritania 
                                          <option value="Mauritius">Mauritius 
                                          <option value="Mayotte">Mayotte 
                                          <option value="Mexico">Mexico 
                                          <option value="Micronesia (Federated States of)">Micronesia 
                                          (Federated States of) 
                                          <option value="Moldova, Republic of">Moldova, 
                                          Republic of 
                                          <option value="Monaco">Monaco 
                                          <option value="Mongolia">Mongolia 
                                          <option value="Montserrat">Montserrat 
                                          <option value="Morocco">Morocco 
                                          <option value="Mozambique">Mozambique 
                                          <option value="Myanmar">Myanmar 
                                          <option value="Namibia">Namibia 
                                          <option value="Nauru">Nauru 
                                          <option value="Nepal">Nepal 
                                          <option value="Netherlands">Netherlands 
                                          <option value="Netherlands Antilles">Netherlands 
                                          Antilles 
                                          <option value="New Caledonia">New Caledonia 
                                          <option value="New Zealand">New Zealand 
                                          <option value="Nicaragua">Nicaragua 
                                          <option value="Niger">Niger 
                                          <option value="Nigeria">Nigeria 
                                          <option value="Niue">Niue 
                                          <option value="Norfolk Island">Norfolk 
                                          Island 
                                          <option value="North Mariana Islands">North 
                                          Mariana Islands 
                                          <option value="Norway">Norway 
                                          <option value="Oman">Oman 
                                          <option value="Pacific Islands">Pacific 
                                          Islands 
                                          <option value="Pacific Trust Territory">Pacific 
                                          Trust Territory 
                                          <option value="Pakistan">Pakistan 
                                          <option value="Palau">Palau 
                                          <option value="Panama">Panama 
                                          <option value="Papua New Guinea">Papua 
                                          New Guinea 
                                          <option value="Paraguay">Paraguay 
                                          <option value="Peru">Peru 
                                          <option value="Philippines">Philippines 
                                          <option value="Pitcairn Island">Pitcairn 
                                          Island 
                                          <option value="Poland">Poland 
                                          <option value="Portugal">Portugal 
                                          <option value="Qatar">Qatar 
                                          <option value="Reunion">Reunion 
                                          <option value="Romania">Romania 
                                          <option value="Russian Federation">Russian 
                                          Federation 
                                          <option value="Rwanda">Rwanda 
                                          <option value="S. Georgia and S. Sandwich Isls.">S. 
                                          Georgia and S. Sandwich Isls. 
                                          <option value="Saint Kitts and Nevis">Saint 
                                          Kitts and Nevis 
                                          <option value="Saint Lucia">Saint Lucia 
                                          <option value="Saint Vincent and the Grenadines">Saint 
                                          Vincent and the Grenadines 
                                          <option value="St. Helena">St. Helena 
                                          <option value="St. Pierre and Miquelon">St. 
                                          Pierre and Miquelon 
                                          <option value="San Marino">San Marino 
                                          <option value="São Tomé and Principe">São 
                                          Tomé and Principe 
                                          <option value="Saudi Arabia">Saudi Arabia 
                                          <option value="Senegal">Senegal 
                                          <option value="Seychelles">Seychelles 
                                          <option value="Sierra Leone">Sierra 
                                          Leone 
                                          <option value="Singapore">Singapore 
                                          <option value="Slovakia">Slovakia 
                                          <option value="Slovenia">Slovenia 
                                          <option value="Solomon Islands">Solomon 
                                          Islands 
                                          <option value="Somalia">Somalia 
                                          <option value="South Africa">South Africa 
                                          <option value="Spain">Spain 
                                          <option value="Sri Lanka">Sri Lanka 
                                          <option value="Sudan">Sudan 
                                          <option value="Suriname">Suriname 
                                          <option value="Svalbard and Jan Mayen Islands">Svalbard 
                                          and Jan Mayen Islands 
                                          <option value="Swaziland">Swaziland 
                                          <option value="Sweden">Sweden 
                                          <option value="Switzerland">Switzerland 
                                          <option value="Syrian Arab Republic">Syrian 
                                          Arab Republic 
                                          <option value="Taiwan">Taiwan 
                                          <option value="Tajikistan">Tajikistan 
                                          <option value="Tanzania, United Republic of">Tanzania, 
                                          United Republic of 
                                          <option value="Thailand">Thailand 
                                          <option value="Togo">Togo 
                                          <option value="Tokelau">Tokelau 
                                          <option value="Tonga">Tonga 
                                          <option value="Trinidad and Tobago">Trinidad 
                                          and Tobago 
                                          <option value="Tunisia">Tunisia 
                                          <option value="Turkey">Turkey 
                                          <option value="Turkmenistan">Turkmenistan 
                                          <option value="Turks and Caicos Islands">Turks 
                                          and Caicos Islands 
                                          <option value="Tuvalu">Tuvalu 
                                          <option value="Uganda">Uganda 
                                          <option value="Ukraine">Ukraine 
                                          <option value="United Arab Emirates">United 
                                          Arab Emirates 
                                          <option value="United Kingdom">United 
                                          Kingdom 
                                          <option value="USA">United States 
                                          <option value="U.S. Minor Outlying Islands">U.S. 
                                          Minor Outlying Islands 
                                          <option value="Uruguay">Uruguay 
                                          <option value="Uzbekistan">Uzbekistan 
                                          <option value="Vanuatu">Vanuatu 
                                          <option value="Vatican City State (Holy See)">Vatican 
                                          City State (Holy See) 
                                          <option value="Venezuela">Venezuela 
                                          <option value="Viet Nam">Viet Nam 
                                          <option value="Virgin Islands">Virgin 
                                          Islands 
                                          <option value="Wallis and Futuna Islands">Wallis 
                                          and Futuna Islands 
                                          <option value="Western Sahara">Western 
                                          Sahara 
                                          <option value="Western Samoa">Western 
                                          Samoa 
                                          <option value="Yemen">Yemen 
                                          <option value="Yugoslavia (Former)">Yugoslavia 
                                          (Former) 
                                          <option value="Zaire">Zaire 
                                          <option value="Zambia">Zambia 
                                          <option value="Zimbabwe">Zimbabwe 
                                          <option value="Other">Other</option>
                                        </select>
                                      </div></td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="27" align="right" class="tabfont"><div align="left"><font color="#000000" face="MS Sans Serif"><b>Email 
                                        Address</b></font></div></td>
                                    <td width="342" height="27"><div align="left"> 
                                        <input type="text" name="required-emailaddress" size="42">
                                      </div></td>
                                  </tr>
                                  <tr> 
                                    <td width="217" height="91" align="right" valign="top" class="tabfont"><div align="left"><font color="#000000" face="MS Sans Serif"><b>Message</b></font></div></td>
                                    <td width="342" height="91"><div align="left"> 
                                        <textarea rows="5" name="required-message" cols="32"></textarea>
                                      </div></td>
                                  </tr>
                                  <tr> 
                                    <td height="29" colspan="2" align="right"><div align="center"><font color="#000000"></font> 
                                        <input name="submit" type="submit" value="Submit">
                                        <input name="reset" type="reset" value="Reset">
                                      </div></td>
                                  </tr>
                                </table>
                              </div></td>
                          </tr>
                          <tr> 
                            <td height="14" class="tabfontfocus">&nbsp;</td>
                          </tr>
                        </table>
                      </div></td>
                  </tr>
                </table>
              </div></td>
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
    <td width="15%" height="16" valign="top">&nbsp;</td>
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