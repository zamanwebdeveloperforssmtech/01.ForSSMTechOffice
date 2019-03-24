<?php
session_start();
include('db_conn.php');
$hawb_no = $_REQUEST['track_no'];
?>
<html>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="generalrules.css" rel="stylesheet" type="text/css" />
<head>
<script language="JavaScript">
function message()
{
	var ans=confirm("are you sure want to delete ?");
	if(ans)
	{
		document.deltrac.action="sucdel_dom.php";
		document.deltrac.submit();
	}
	else
	{
		window.location="login_view.php?page=deletetrack_dom.php";
	}
}
</script>
</head>
<body>
<base target="mainFrame">
<div align="center"> <br>
<form name="deltrac"  method="post" target="mainFrame">
    <table width="90%" border="0" cellpadding="0" cellspacing="0" bordercolor="#FCFCFC" align="center">
      <tr align="left" bgcolor="#FFCC00"> 
        <th width="15%">HAWB</th>
        <th width="29%">Date &amp; Time</th>
        <th width="29%">Origin</th>
        <th width="22%">Destination</th>
        <th width="5%">Select</th>
      </tr>
	  
	  <?php
	/*
		Place code to connect to your DB here.
	*/
//	include('config.php');	// include your code to connect to DB.

	$tbl_name="shipment_dom";		//your table name
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
	$targetpage = "login_view.php?page=deletetrack_dom.php"; 	//your file name  (the name of this file)
	$limit = 18; 								//how many items to show per page
	$page = $_GET['pages'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name ORDER BY serial DESC LIMIT $start, $limit";
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
		while($id = mysql_fetch_array($result))
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
       		 <td><?php echo $id['HAWB']; ?></td>
     		 <td><?php echo $id['pdate']; ?></td>
       		 <td><?php echo $id['origin']; ?></td>
       		 <td><?php echo $id['destination']; ?></td>
       		 <td align="center"><input type="checkbox" name="r[]" value="<?php echo $id['serial']; ?>"></td>
      </tr>
	
	<?php	}	?>
<tr>
<td colspan="4">&nbsp;</td>
</tr>
<tr><td colspan="4" align="center">
	<?php echo $pagination ;?>
</td></tr>
<tr>
<td colspan="4">&nbsp;</td>
</tr>
 <tr> 
        <td colspan="5"> <div align="center"> 
            <input name="submit" value="Delete" type="submit" onClick="message();">
          </div></td>
      </tr>

    </table>    
  </form>
</div>
</body>
</html>