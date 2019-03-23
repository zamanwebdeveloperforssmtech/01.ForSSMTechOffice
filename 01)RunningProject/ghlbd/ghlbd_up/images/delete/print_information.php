<?php
define('IN_BEX', true);
$cn_date = $_GET['cn_date'];
include('../../login/connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bengal Express</title>
<meta name="Description" content="Curier Service Website" />
<meta name="Keywords" content="Bengal Express" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />

<link href="../css/style_screen.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:212px;
	top:170px;
	width:194px;
	height:102px;
	z-index:1;
}

@media print {
@page {
	margin:0.5cm;
	size: 10.5cm 10.5cm;
}
}
.style1 {font-size: 13px}
-->
</style>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" >
<?php
  $sql = "SELECT d.id, ref, a_name, addr, phone, info_date, des.destination, s.shipper, d.item  
FROM " . $prefix . "data d, " . $prefix . "destination des, " . $prefix . "shipper s 
WHERE d.info_date =" . $cn_date . " AND des.destination_id=d.destination_id AND d.shipper_id=s.shipper_id 
ORDER BY d.id
";
      $j = 1;
	$result = connect($sql);
	$i = 0;
	while($myrow = mysql_fetch_row($result))
	{
      if($i == 0)
            {
              echo "Page:";
              echo $j;
            }
		$i+=1;
            
                          
            
?>
<div align="left" style="width:350px;">
<table cellpadding="5" cellspacing="0" border="1" align="center" width="350" height="269" class="style1">
	<tr>
		<td align="center" colspan="2" valign="top"><img src="logoben.jpg" border="0" width="350" height="36" /></td>
	</tr>
	<tr>
		<td align="left" width="225"><b>Shipper :</b> <?php echo $myrow[7];?></td>
		<td align="left" width="125"><b>Item :</b> <?php echo $myrow[8];?></td>
	</tr>
	<tr>
		<td rowspan="3" align="justify"><b>Consignee</b><br /><?php echo $myrow[2] . '<br>' . str_replace("&lt;br /&gt;", ", ", $myrow[3]) . '<br>' . str_replace("&lt;br /&gt;", ", ", $myrow[4]);?></td>
		<td align="left"><b>CN No. : </b><?php echo $myrow[0];?></td>
	</tr>
	<tr>
		<td align="left"><b>Ref No. : </b><?php echo $myrow[1];?></td>
	</tr>
	<tr>
		<td align="left"><b>Process Date : </b><br /><?php echo date("d M, Y", $myrow[5]);?></td>
	</tr>
	<tr>
		<td align="left" colspan="2"><b>Receiver Name : </b></td>
	</tr>
	<tr>
		<td align="left"><b>Relation : </b></td>
		<td align="left"><b>Date : </b></td>
	</tr>
</table>
</div>
<!--<table cellpadding="5" cellspacing="0" border="0" align="center" width="300" height="39">
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>
-->
<?php
		if($i==3)
		{
			$i=0;
			echo "<br>";
                  echo "<br>";
                  
            $j = $j+1;
			?>

<?php
		}
		else
		{
?>

<?php
		
		echo "<br>";
		echo "<br>";
            
		}
	}
?>
</body>
</html>