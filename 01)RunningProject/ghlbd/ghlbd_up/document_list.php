<?php 
include('connect.php');
$member_ID = $_REQUEST['member_ID'];

$awbno = $_REQUEST['awbno'];
$smobile = $_REQUEST['smobile'];


$ext="";
if($awbno){
	$ext.=" AND track_no= '$awbno'";
}
if($smobile){
	$ext.=" AND phone= '$smobile'";
}
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>  
<script type="text/javascript" src="scripts/jquery.battatech.excelexport.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $("#btnExport").click(function () {
            $("#tblExport").btechco_excelexport({
                containerid: "tblExport"
               , datatype: $datatype.Table
            });
        });
    });
</script>
</head>

<body>
<form id="monthrepo" name="monthrepo" method="post" action="">
<input type="hidden" name="member_ID" id="member_ID" value="<?php echo $member_ID;?>">
<p>&nbsp;</p>
<table width="76%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            
            <td height="34" colspan="3" valign="middle" background="item/List.gif"><div align="center"><font color="#330099" size="-1" face="Courier New, Courier, mono">Search 
            Document</font></div></td>
          </tr>
          <tr> 
            <td width="23%" height="36" valign="top">&nbsp; AWB NO</td>
            <td width="2%" valign="top">:</td>
            <td width="46%" valign="top"><input name="awbno" type="text" id="awbno" /> 
              </td>
          </tr>
          <tr> 
            <td height="36" valign="top">&nbsp;&nbsp;Sender Mobile</td>
            <td valign="top">:</td>
            <td valign="top"><input name="smobile" type="text" id="smobile" /> 
              </td>
          </tr>
          <tr> 
            <td height="33" colspan="3" valign="top"> 
              <div align="right"> 
                <input type="submit" name="Submit" value="Search">
            </div></td>
          </tr>
        </table>
        <button id="btnExport">Export Excel</button>
</form>
<table width="90%" border="0" align="center" bgcolor="#E6E6E6" id="tblExport">
    <tr> 
      <td width="96%" valign="top"> <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7" bgcolor="#F0F0F0">
          <tr> 
            <th width="22%" height="21" valign="top"> Date</th>
            <th width="13%" valign="top">AWB NO.</th>
            <th width="14%" valign="top">Destination</th>
            <th width="6%" valign="top">Sender Name</th>
            <th width="11%" valign="top">Sender Mobile</th>
            <th width="9%" valign="top">Rceiver Name</th>
            <th width="7%" valign="top">Rceiver Mobile</th>
   
          </tr>
          <?php 
		   $query = "Select * from destination where agent_id = '$member_ID' $ext";

		  $result = connect($query);
		  $bgcolor = ' bgcolor="#F0F0F0" ';
		  while( $id = mysql_fetch_array($result))
		  {
		  if($bgcolor == ' bgcolor="#F0F0F0" ')
		  {
		  	$bgcolor = ' bgcolor="#FFFFFF" ';
		  }
		  else
		  {
		  	$bgcolor = ' bgcolor="#F0F0F0" ';
		  }
		  ?>
          <tr <?php echo $bgcolor;?>> 
            <td height="23" valign="top" align="center"><?php echo date("d m, Y", $id['rec_date_time']);?></td>
               <td valign="top" align="center"><a href="destinationprint.php?track_no=<?php echo  $id['track_no'];?>" target="_blank"><?php echo $id['track_no'];?></a></td>
            <td valign="top" align="center"><?php echo $id['destination'];?></td>
            <td valign="top" align="center"><?php echo $id['sender_name'];?></td>
            <td valign="top" align="center"><?php echo $id['phone'];?>            </td>
            <td valign="top" align="center"><?php echo $id['rece_name'];?> </td>
            <td valign="top" align="center"><?php echo $id['rece_phone'];?> </td>
  
          </tr>
          <?php } ?>
        </table></td>
    </tr>
  </table>
</body>
</html>

