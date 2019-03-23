<?php
session_start();
$member_ID = $_COOKIE['member_ID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Bengal Post</title>
<link href="admin_css/generalrules.css" rel="stylesheet" type="text/css" />
<link herf="script/CalendarPopup.js" rel="stylesheet" type="text/javascript" />
<script language="JavaScript" type="text/javascript">

function showPage(pageSrc)
{
	document.getElementById('ipage').src=pageSrc;
}

</script>
</head>
<body bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<base target="mainFrame" />
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="180" bgcolor="#DCDCDC" valign="middle" height="323">
			<?php
			if($_COOKIE['member_Type'] == 'Super_Admin')
			{
			?>
				<table width="90%" align="center" bgcolor="#FFFFFF" cellpadding="3" cellspacing="0">
				<tr>
					<td width="13"><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('addtract.php')">Add New 
      Shipment</a></td>
				</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('admin.php')">List&nbsp;All<br />Active&nbsp;Shipment </a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('modifytrack.php')">Modify 
      Tracking</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('deletetrack.php')">Delete 
      Tracking</a></td>
          		</tr>
                   <tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('trackinglist.php')">Tracking List 
      </a></td>
          		</tr>
                <tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('addnotice.php')">Add Notice 
      </a></td>
          		</tr>
                <tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('noticelist.php')">Notice List 
      </a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="logout.php" target="_top" class="tabfont">Logout</a></td>
          		</tr>
			</table>
			<?php
			}
			else if($_COOKIE['member_Type'] == 'Special')
			{
			?>
				<table width="90%" align="center" bgcolor="#FFFFFF" cellpadding="3" cellspacing="0">
				<tr>
					<td width="13"><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('addtract_dom.php')">Add New 
      Shipment</a></td>
				</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('domadmin.php')">List&nbsp;All<br />Active&nbsp;Shipment </a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('modifytrack_dom.php')">Modify 
      Tracking</a></td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('deletetrack_dom.php')">Delete 
      Tracking</a></td>
          		</tr>
             
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="logout.php" target="_top" class="tabfont">Logout</a></td>
          		</tr>
			</table>
			<?php
			}
			else if($_COOKIE['member_Type'] == 'Admin')
			{
			?>
				<table width="90%" align="center" bgcolor="#FFFFFF" cellpadding="3" cellspacing="0">
				<tr>
					<td width="13"><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('agentadd.php')">Add Employee Info</a></td>
				</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('selectstu.php')">Edit Employee Info</a></td>
          		</tr>
          		<tr>
					<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont">Report</a></td>
				</tr>
				<tr> 
            		<td>&nbsp;</td>
					<td>
						<table border="0" width="100%" cellpadding="0" cellspacing="3">
							<tr>
					<td><img src="admin_images/arrow.gif" /></td>
					<?php $url = 'select_trac_info.php?member_ID=' . $member_ID;?>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('<?php echo $url;?>')">Destination</a></td>
							</tr>
          		<tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('repo_mon_invoice.php')">Monthly Invoice</a></td>
          		</tr>
                <tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('repo_mon_datasheet.php')">Data Sheet</a></td>
          		</tr>
          		<tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('select_indivi_agen_invoice.php')">Agent Invoice</a></td>
          		</tr>
          		<tr> 
            		<td ><img src="admin_images/arrow.gif" /></td>
					<td align="left" ><a href="report_agent_info_out.php" class="tabfont" target="_blank">Agent List</a></td>
          		</tr>
							
						</table>
					</td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="logout.php" target="_top" class="tabfont">Logout</a></td>
          		</tr>
			</table>
			<?php
			}
			else if($_COOKIE['member_Type'] == 'Admin_DOM')
			{
			?>
				<table width="90%" align="center" bgcolor="#FFFFFF" cellpadding="3" cellspacing="0">
				<tr>
					<td width="13"><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('agentadd_dom.php')">Add Employee Info</a></td>
				</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('selectstu_dom.php')">Edit Employee Info</a></td>
          		</tr>
          		<tr>
					<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont">Report</a></td>
				</tr>
				<tr> 
            		<td>&nbsp;</td>
					<td>
						<table border="0" width="100%" cellpadding="0" cellspacing="3">
							<tr>
					<td><img src="admin_images/arrow.gif" /></td>
					<?php $url = 'select_trac_info_dom.php?member_ID=' . $member_ID;?>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('<?php echo $url;?>')">Destination</a></td>
							</tr>
          		<tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('repo_mon_invoice_dom.php')">Monthly Invoice</a></td>
          		</tr>
          		<tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('select_indivi_agen_invoice_dom.php')">Agent Invoice</a></td>
          		</tr>
          		<tr> 
            		<td ><img src="admin_images/arrow.gif" /></td>
					<td align="left" ><a href="report_agent_info_out_dom.php" class="tabfont" target="_blank">Agent List</a></td>
          		</tr>
							
						</table>
					</td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="logout.php" target="_top" class="tabfont">Logout</a></td>
          		</tr>
			</table>
			<?php
			}
			elseif($_COOKIE['member_Type'] == 'Agent_DOM')
			{
			?>
				<table width="90%" align="center" bgcolor="#FFFFFF" cellpadding="3" cellspacing="0">
				<tr>
					<td width="13"><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('destination_dom.php')" >Receive Document</a></td>
				</tr>
                
          		<tr>
					<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont">Report</a></td>
				</tr>
				<tr> 
            		<td>&nbsp;</td>
					<td>
						<table border="0" width="100%" cellpadding="0" cellspacing="3">
							<tr>
					<td><img src="admin_images/arrow.gif" /></td>
					<?php $url = 'report_date_agent_dom.php?member_ID=' . $member_ID;?>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('<?php echo $url;?>')">Date Wise</a></td>
							</tr>
          		<tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<?php $url = 'select_trac_info_agent_dom.php?member_ID=' . $member_ID;?>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('<?php echo $url;?>')">Destination</a></td>
          		</tr>
						</table>
					</td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="logout.php" target="_top" class="tabfont">Logout</a></td>
          		</tr>
			</table>
			<?php
			}
			else
			{
			?>
				<table width="90%" align="center" bgcolor="#FFFFFF" cellpadding="3" cellspacing="0">
				<tr>
					<td width="13"><img src="admin_images/arrow.gif" /></td>
					<td align="left"><a href="destination.php" class="tabfont" target="_blank" >Receive Document</a></td>
				</tr>
                <tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont" onclick="showPage('admin.php')">List&nbsp;All<br />Active&nbsp;Shipment </a></td>
          		</tr>
          		<tr>
					<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="#" class="tabfont">Report</a></td>
				</tr>
				<tr> 
            		<td>&nbsp;</td>
					<td>
						<table border="0" width="100%" cellpadding="0" cellspacing="3">
							<tr>
					<td><img src="admin_images/arrow.gif" /></td>
					<?php $url = 'report_date_agent.php?member_ID=' . $member_ID;?>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('<?php echo $url;?>')">Date Wise</a></td>
							</tr>
          		<tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<?php $url = 'select_trac_info_agent.php?member_ID=' . $member_ID;?>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('<?php echo $url;?>')">Destination</a></td>
          		</tr>
                
                <tr> 
            		<td><img src="admin_images/arrow.gif" /></td>
					<?php $url = 'document_list.php?member_ID=' . $member_ID;?>
					<td align="left"><a href="#" class="tabfont" onclick="showPage('<?php echo $url;?>')">Document List</a></td>
          		</tr>
						</table>
					</td>
          		</tr>
          		<tr> 
            		<td class="tabtop"><img src="admin_images/arrow.gif" /></td>
					<td align="left" class="tabtop"><a href="logout.php" target="_top" class="tabfont">Logout</a></td>
          		</tr>
			</table>
			<?php
			}
			?>
		</td>
		<?php
			if(!isset($_GET['page']) || $_GET['page'] == '')
			{
				if($_COOKIE['member_Type'] == 'Super_Admin')
				{
					$page = 'admin.php';
				}
				else if($_COOKIE['member_Type'] == 'Admin')
				{
					$page = 'message.php?m=Welcome to Administration';
				}
				else if($_COOKIE['member_Type'] == 'Admin_DOM')
				{
					$page = 'message.php?m=Welcome to Domestic Administration';
				}
				else if($_COOKIE['member_Type'] == 'Special')
				{
					$page = 'domadmin.php';
				}
				else if($_COOKIE['member_Type'] == 'Agent_DOM')
				{
					$page = 'message.php?m=Welcome to Domestic Agent Area';
				}
				else
				{
					$page = 'message.php?m=Welcome to Agent Area';
				}
			}
			else
			{
				$page = $_GET['page'];
				$i = 0;
				foreach($_REQUEST as $key=>$value)
				{	
					if($key != 'page')
					{
						if($i == 0)
						{
							$page .= "?" . $key . "=" . $value;
						}
						else
						{
							$page .= "&" . $key . "=" . $value;
						}
						$i += 1;
					}
				}
			}
		?>
		<td width="720" valign="top" style="margin-left:10px;">
	  <iframe src="<?php echo $page;?>" width="720" frameborder="0" height="493" scrolling="Yes" id="ipage"></iframe>		</td>
	</tr>
</table>
</body>
</html>