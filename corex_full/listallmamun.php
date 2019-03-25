<?
include_once("script/func.php");
connectdb();
$ips=$REMOTE_ADDR;
//include("db_con.php");

?>
<HTML>
<HEAD>
<TITLE>058</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript"> 
<!--
function resize_iframe(){
if(document.getElementById && !(document.all)) {
h = document.getElementById('youriframe').contentDocument.body.scrollHeight;
document.getElementById('youriframe').style.height = h;
}
else if(document.all) {
h = document.frames('youriframe').document.body.scrollHeight;
document.all.youriframe.style.height = h;
}

} 
// -->
</script> 
</HEAD>
<BODY BGCOLOR=#81AB29 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (058.psd) -->
<TABLE WIDTH=778 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
  <TR valign="top"> 
    <TD height="73" COLSPAN=2>&nbsp;</TD>
  </TR>
  <TR valign="top"> 
    <TD height="113" COLSPAN=2>&nbsp;</TD>
  </TR>
  <td height="16" colspan="4" valign="middle" background="images/corex_02.jpg"> 
    <div align="center"> 
        <table width="766" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="93" height="36"><div align="center"><a href="home.html" class="news"><font color="#FF0000">Home</font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="corexabout.html" class="news"><font color="#FF0000">About 
                us </font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center">
              <a class="news" href="tracking.html"><font color="#FF0000">
              Tracking </font></a></div></td>

            <td width="20"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="125"><div align="center" class="news"><a href="ls.html"><font color="#FF0000">Logistic 
                Support</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="83"><div align="center"><a href="network.html" class="news"><font color="#FF0000">Network</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="106"><div align="center"><a href="corexservice.html" class="news"><font color="#FF0000">Service</font></a></div>
              <div align="center"></div>
              <div align="center" class="news"></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="condition.html" class="news"><font color="#FF0000">Condition</font></a></div></td>
            <td width="19"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="90"><div align="center"><a href="corexcontact.html" class="news"><font color="#FF0000">Contact 
                us</font></a></div></td>
          </tr>
        </table>
    </div></TR>
  <tr bgcolor="9FD44B">
    <td height="16" colspan="4" valign="middle"><hr></TR>
<tr><td>

<br>
<p align="right"><a class="track" href="addnew.php">Add New Shipment</a> 
      | <a class="track" href="listallmamun.php">List All 
      Active Shipment</a> | <a class="track" href="chngtoken.php">Change Token No.</a> | <a class="track" href="modifytrack.php">Modify Tracking</a>| <a class="track" href="delete.php">Delete Tracking</a></p>
      <form name="form1" method="get" action="edit.php">
        <p align="right"><b>Insert ID to Edit: </b><input type="text" name="ref"> <input type="submit" value="GO"></p>
		<input type="hidden" name="option" value="edit">
      </form>
      <form name="form2" method="get" action="track.php">
        <p align="right"><b>Insert ID to Update Track Info: </b><input type="text" name="ref"> <input type="submit" value="GO"></p>
	 </form>
      <hr>
<br>


<?php
include("db_con.php");

//$rs1=getresult("Select * from shipment where status!='delivered' order by pdate desc");
/*$sql1="Select * from shipment where status!='delivered' order by pdate desc";
$rs1=mysql_query($sql1) or die("mysql query problem");
$row1=mysql_num_rows($rs1);

$limits=20;
$formula=$inc*$limits;
echo $formula ,"\n";
//$rs=getresult("Select * from shipment where status!='delivered' order by pdate desc limit $formula,$limits");
$sql="Select * from shipment where status!='delivered' order by pdate desc limit $limits";
$rs=mysql_query($sql) or die("mysql query problem");
$row=mysql_num_rows($rs);

$per=$row1/$limits;
$per=ceil($per);

for($i=0;$i<$row;$i++) {
$data=mysql_fetch_array($rs);
$tdate=date("d M Y", strtotime($data["pdate"]));
$thawb=$data["HAWB"];
$currserial=$data["serial"];
//echo $currserial;
//$tlocation=wynsf("Select * from tracking where sid='$currserial' order by serial desc limit 1", "location");
$sql2="Select * from tracking where sid='$currserial' order by serial desc limit 1";
$rs2=mysql_query($sql2) or die("query2 problem");


while($id=mysql_fetch_array($rs2))
{
$tlocation=$id['location'];
print('
  <tr bgColor="#f2fbff">
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top"> 
    '.$tdate.'</td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top">'.$thawb.'</td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top">'.$tlocation.' </td>
    <td style="font-family: verdana; font-size: 9pt; vertical-align: top">
    <a href="track.php?sid='.$currserial.'" class="news">Add Tracking Info</a> | <a href="edit.php?option=edit&ref='.$thawb.'" class="news">Edit Info</a></td>
  </tr>
');
}
}
	*/
	
/*if (isset($_GET['page'])) { $page  = $_GET['page']; } else { $page=1; };
$start_from = ($page-1) * 20;
$sql = "Select * from shipment where status!='delivered' order by pdate desc limit $start_from, 20";
//$sql = "SELECT * FROM shipment  ORDER BY serial  DESC LIMIT $start_from, 20";
$rs_result = mysql_query ($sql);*/
?>
      <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FCFCFC" bgcolor="#EBEBEB">
        <tr align="left" bgcolor="#FFCC00"> 
          <th>Date </th>
          <th>HAWB</th>
          <th>Location</th>
          <th>Action</th>
        </tr>
    <?php
	/*
		Place code to connect to your DB here.
	*/
	//include('config.php');	// include your code to connect to DB.

	$tbl_name="shipment";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "listall.php"; 	//your file name  (the name of this file)
	$limit = 20; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">« previous</a>";
		else
			$pagination.= "<span class=\"disabled\">« previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>&nbsp;&nbsp;";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>&nbsp;&nbsp;";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>&nbsp;&nbsp;";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>&nbsp;&nbsp;";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>&nbsp;&nbsp;";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>&nbsp;&nbsp;";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>&nbsp;&nbsp;";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>&nbsp;&nbsp;";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>&nbsp;&nbsp;";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>&nbsp;&nbsp;";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>&nbsp;&nbsp;";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>&nbsp;&nbsp;";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>&nbsp;&nbsp;";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>&nbsp;&nbsp;";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>&nbsp;&nbsp;";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>&nbsp;&nbsp;";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next »</a>";
		else
			$pagination.= "<span class=\"disabled\">next »</span>";
		$pagination.= "</div>\n";		
	}
?>

	<?php
		while($row = mysql_fetch_array($result))
		{
	?>
		<tr>
            <td><?php echo $row['pdate']; ?></td>
            <td><?php echo $row['HAWB']; ?></td>
			<td><?php echo $row['origin']; ?></td>
			<td><a href="track.php?"<?php echo $row['serial']?> class="news">Add Tracking Info</a> | <a href="edit.php?option=edit&ref=<?php echo $row['HAWB'];?>">Edit Info</a></td>
	 </tr>
		<?php }
	?>

 <tr>
 <td colspan="4">
<?php echo $pagination; ?></td></tr>	  </table>


  <tr bgcolor="#94C431"> 
    <Td height="49" colspan="3"> <div align="center"> 
        <table width="766" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="93" height="36"><div align="center"><a href="home.html" class="news"><font color="#FF0000">Home</font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="corexabout.html" class="news"><font color="#FF0000">About 
                us </font></a></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="tracking.html">
              <font color="#FF0000">Tracking</font></a><a href="corexabout.html" class="news"><font color="#FF0000"> </font></a></div></td>
            <td width="20"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="125"><div align="center" class="news"><a href="ls.html"><font color="#FF0000">Logistic 
                Support</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="83"><div align="center"><a href="network.html" class="news"><font color="#FF0000">Network</font></a></div></td>
            <td width="23"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="106"><div align="center"><a href="corexservice.html" class="news"><font color="#FF0000">Service</font></a></div>
              <div align="center"></div>
              <div align="center" class="news"></div></td>
            <td width="14"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="78"><div align="center"><a href="condition.html" class="news"><font color="#FF0000">Condition</font></a></div></td>
            <td width="19"><div align="center"><font color="#FFFFFF">|</font></div></td>
            <td width="90"><div align="center"><a href="corexcontact.html" class="news"><font color="#FF0000">Contact 
                us</font></a></div></td>
          </tr>
        </table>
      </div></TR>
</TABLE>
<!-- End ImageReady Slices -->
</BODY>
</HTML>