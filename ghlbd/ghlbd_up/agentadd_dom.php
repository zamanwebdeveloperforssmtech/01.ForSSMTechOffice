<html><head>
<title></title>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="script/CalendarPopup.js" type="text/javascript"></script>
<script language="JavaScript">
	var cal19 = new CalendarPopup(); 
	cal19.showYearNavigation(); 
	cal19.showYearNavigationInput();
</script>
<script type="text/javascript" language="JavaScript1.2" src="stm31.js"></script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="employeeadd" enctype="multipart/form-data" method="post" action="sucemployeeadd_dom.php" target="mainFrame" >
<table width="85%" height="447" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F2F2F2">
          <tr bgcolor="#E4E4E4"> 
            <td height="23" colspan="3" valign="middle" background="item/List.gif"><div align="center" class="brandColorEmph">Insert 
                Employee Information</td>
          </tr>
          <tr> 
            <td width="45%"><div align="center"><strong>Employee Name</strong></div></td>
            <td width="5%" ><div align="center"><strong>:</strong>
            </div>
            <div align="center"></div></td>
            <td width="263"> <input name="employeename" type="text" size="32" /></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Present Address </strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><textarea name="preadress" rows="2" cols="25"></textarea> </td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Permanent Address</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><textarea name="peraddress" rows="2" cols="25"></textarea></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Gender</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><select name="gender">
                <option value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option value="Female">Female</option>
              </select></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Date of Birth</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input type="text" name="dateofbirth" size="32"> <A id=anchor19 title="cal19.select(document.forms[0].dateofbirth,'anchor19','yyyy-MM-dd'); return false;" 
			      onclick="cal19.select(document.forms[0].dateofbirth,'anchor19','yyyy-MM-dd'); return false;" 
			      href="#" name=anchor19>select</A></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Contact No</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input type="text" name="contactno" size="32" /></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>User ID&nbsp;</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input type="text" name="employeeid" size="32" /></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Password</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input type="password" name="password" size="32" /></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>User Type</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><select name="usertype">
                <option value="agent_dom">agent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option value="admin_dom">admin</option>
              </select></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>Blood Group</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input type="text" name="bloodgroup" size="32"></td>
          </tr>
          <tr> 
            <td><div align="center"><strong>E-mail Address </strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input name="emailaddress" type="text" size="32" /></td>
          </tr>
          <tr> 
            <td height="31"><div align="center"><strong>Employee Picture</strong></div></td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input name="imagem" type="file" id="imagem3" size="32"> <input type="hidden" name="MAX_FILE_SIZE" value="85000">            </td>
          </tr>
		  <tr>
		  	<td colspan="3">&nbsp;</td>
		  </tr>
          <tr> 
            <td height="26" colspan="3"> <div align="right"> 
                <input type="submit" name="Submit" value="Insert" />
                <input type="reset" name="reset" value="Cancel" onClick="location.href ='javascript:history.back()'" />
            </div></td>
          </tr>
        </table>
</form>
</body>
</html>