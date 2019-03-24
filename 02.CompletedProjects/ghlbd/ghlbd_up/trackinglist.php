<html>
	<head>
		<title>Welcome</title>
		<link href="admin_css/generalrules.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<br>
	<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">

	  <form name="display" action="login_view.php?page=trackinglist.php" method="post" target="mainFrame">
	  <tr> 
		<td >Shipper Mobile</td>
		<td><strong>:</strong></td>
		<?php 	$_REQUEST = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : ''; ?>
		<td height="14" class="tabfontfocus"><input name="mobile" type="text" value="<?php echo $_REQUEST;?>" size="20"></td>
		 <td class="p01quote">Destination</td>
		<td class="tabfontfocus"><strong>:</strong></td>
		<?php 	$_REQUEST = isset($_REQUEST['destination']) ? $_REQUEST['destination'] : ''; ?>
		<td height="14" class="tabfontfocus"><input name="destination" type="text" value="<?php echo $_REQUEST;?>" size="20"></td>
		<td class="tabfontfocus"> <div align="left">
			<input type="submit" name="Submit2" value="Go">
		  </div></td>
	  </tr>
	  </form>
	</table>
<br>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
<tr align="left" bgcolor="#6600FF">
	<th style="color: #FFFFFF" >Date &amp; Time</th> 
	<th style="color: #FFFFFF" >Token No</th>
	<th style="color: #FFFFFF" >HAWB</th>
	<th style="color: #FFFFFF" >Location</th>
	<th style="color: #FFFFFF" >Destination</th>
 
 <th style="color: #FFFFFF" >Through</th>
 <th style="color: #FFFFFF" >AWB No</th>
 <th style="color: #FFFFFF" >Shipper</th>
 <th style="color: #FFFFFF" >Mobile</th>
 <th style="color: #FFFFFF" >Email</th>
 <th style="color: #FFFFFF" >Address</th>
 <th style="color: #FFFFFF" >Receiver</th>
 <th style="color: #FFFFFF" >Mobile</th>
 <th style="color: #FFFFFF" >Email</th>
 <th style="color: #FFFFFF" >Address</th>
 <th style="color: #FFFFFF" >Product</th>
 <th style="color: #FFFFFF" >Status</th>
</tr>
<base target="mainFrame">
  <?php
	include('connec_db.php');
	
	
	$media_val=$product_val=array();
	$sql="select * from media";
	$res=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{

 		$media_val[$row['m_id']]=$row['media_name'];

	}
	$sqls="select * from product";
	$ress=mysql_query($sqls) or die(mysql_error());
	while($rows=mysql_fetch_array($ress))
	{

	 $product_val[$rows['p_id']]=$rows['p_name'];
   
	}
	

	$tbl_name="shipment";		//your table name
	$adjacents = 4;
	
	$ext="1=1";
	$_REQUEST = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : '';

	if($_REQUEST){

		$ext.=" AND TRIM(smobile)='".trim($_REQUEST)."'";
	}
	$_REQUEST = isset($_REQUEST['destination']) ? $_REQUEST['destination'] : '';
	if($_REQUEST){
		$ext.=" AND TRIM(destination)='".trim($_REQUEST)."'";
	}
	
	$query = "SELECT COUNT(*) as num FROM $tbl_name WHERE $ext";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	
	/* Setup vars for query. */
	$targetpage = "login_view.php?page=trackinglist.php"; 	//your file name  (the name of this file)
	$limit = 25; 								//how many items to show per page
	$page = (isset($_GET["page"]) ? $_GET["page"]:$config["per_page"] ='');
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name WHERE $ext ORDER BY serial DESC LIMIT $start, $limit";
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
		$pagination .= "<div class=\"pagination\" align=\"center\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage&pages=$prev\">« previous</a>";
		else
			$pagination.= "<span class=\"disabled\">« previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage&pages=$counter\">$counter</a>";					
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
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&pages=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&pages=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&pages=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage&pages=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&pages=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&pages=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&pages=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&pages=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage&pages=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&pages=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&pages=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage&pages=$next\">next »</a>";
		else
			$pagination.= "<span class=\"disabled\">next »</span>";
		$pagination.= "</div>\n";		
	}
?>


	<?php
		$bgcolor = ' bgcolor="#FFFFFF" ';
		while($row = mysql_fetch_array($result))
		{
		if($bgcolor == ' bgcolor="#FFFFFF" ')
		{
			$bgcolor = ' bgcolor="#F0F0F0" ';
		}
		else
		{
			$bgcolor = ' bgcolor="#FFFFFF" ';
		}
	?>
		<tr <?php echo $bgcolor;?>>
            <td><?php echo $row['pdate']; ?></td>
            <td><?php echo $row['serial']; ?></td>
            <td><?php echo $row['HAWB']; ?></td>
			<td><?php echo $row['origin']; ?></td>
             <td><?php echo $row['destination']; ?></td>
            <td><?php echo $media_val[$row['media']]; ?></td>
			<td><?php echo $row['AWB']; ?></td>
            <td><?php echo $row['shipper']; ?></td>
            <td><?php echo $row['smobile']; ?></td>
			<td><?php echo $row['semail']; ?></td>
              <td><?php echo $row['saddress']; ?></td>
            <td><?php echo $row['receiver']; ?></td>
			<td><?php echo $row['rmobile']; ?></td>
            <td><?php echo $row['remail']; ?></td>
            <td><?php echo $row['raddress']; ?></td>
            
            <td><?php echo $product_val[$row['product']]; ?></td>
            <td><?php echo $row['status']; ?></td>
			
		</tr>

	
	<?php	}
	?>
<tr><td colspan="4">
	<?php echo '<br />' . $pagination ;?>
</td></tr>
</table>
</div>
</body>
</html>