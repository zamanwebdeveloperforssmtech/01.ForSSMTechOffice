<?php 
include('db_conn.php');
$member_ID = $_GET['member_ID'];
?>
<html>
<head>
<title>accout login</title>
<script>
function formValidator(){
	// Make quick references to our fields
	    var stu_id = document.getElementById('stu_id');
        var start_date = document.getElementById('start_date');
		var end_date = document.getElementById('end_date');	
   

        
	// Check each input in the order that it appears in the form!
	
		//if(isEmpty(stu_id, "Please Enter the Student ID Correctly"))
       // {
			if(isEmpty(start_date, "Please Select The Start Date Correctly"))
        	{
				if(isEmpty(end_date, "Please Select The End Date Correctly"))
    	    	{
            
					return true;
				}
			}
        //}
	
	
	
	return false;
	
}

function isEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
   else{
	return true;}
}



</script>
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<link href="script/style.css" rel="stylesheet" type="text/css">
<script  language="JavaScript" src="script/CalendarPopup.js" type="text/javascript"></script>
<script language="JavaScript">
var cal = new CalendarPopup();
</script>
</head>

<body>
<form id="monthrepo" name="monthrepo" method="post" action="report_datewise_agent_out.php" onsubmit='return formValidator()' target="_blank">
<input type="hidden" name="member_ID" id="member_ID" value="<?php echo $member_ID;?>">
<p>&nbsp;</p>
<table width="76%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            
            <td height="34" colspan="3" valign="middle" background="item/List.gif"><div align="center"><font color="#330099" size="-1" face="Courier New, Courier, mono">Search 
            Monthly Sheet</font></div></td>
          </tr>
          <tr> 
            <td width="23%" height="36" valign="top">&nbsp; Start Date</td>
            <td width="2%" valign="top">:</td>
            <td width="46%" valign="top"><input name="start_date" type="text" id="start_date" /> 
              <A HREF="#" NAME="anchor1" ID="anchor1" onClick="cal.select(document.monthrepo.start_date,'anchor1','dd-MM-yyyy'); return false;">select</A></td>
          </tr>
          <tr> 
            <td height="36" valign="top">&nbsp;&nbsp;End Date</td>
            <td valign="top">:</td>
            <td valign="top"><input name="end_date" type="text" id="end_date" /> 
              <A HREF="#" NAME="anchor1" ID="anchor1" onClick="cal.select(document.monthrepo.end_date,'anchor1','dd-MM-yyyy'); return false;">select</A></td>
          </tr>
          <tr> 
            <td height="33" colspan="3" valign="top"> 
              <div align="right"> 
                <input type="submit" name="Submit" value="Search">
            </div></td>
          </tr>
        </table>
</form>
</body>
</html>

