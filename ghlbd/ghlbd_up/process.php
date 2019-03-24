<?php
include('connect.php');

if(isset($_POST['do']) && $_POST['do'] == 'Add_Domestic_CN')
{
	$sql  = "INSERT INTO " . $prefix . "destination_dom (agent_id, track_no, r_date, origin, destination, sender, receiver, dv, nog, pcs, wt, bc, sc, sdc, smdc, del) VALUES('";
	$sql .= $_POST['agent_id'] . "', '";
	$sql .= $_POST['track'] . "', ";
	$r_date_array = explode("-", $_POST['r_date']);
	$r_date = mktime(0,0,0,$r_date_array[1], $r_date_array[0], $r_date_array[2]);
	$sql .= $r_date . ", '";
	$sql .= $_POST['from'] . "', '";
	$sql .= $_POST['to'] . "', '";
	$sql .= $_POST['shipper'] . "', '";
	$sql .= $_POST['consignee'] . "', '";
	$sql .= $_POST['dv'] . "', '";
	$sql .= $_POST['nog'] . "', ";
	$sql .= $_POST['pcs'] . ", ";
	$sql .= $_POST['wt'] . ", ";
	$sql .= $_POST['bc'] . ", ";
	$sql .= $_POST['sc'] . ", ";
	$sql .= $_POST['sdc'] . ", ";
	$sql .= $_POST['smdc'] . ", ";
	$sql .= $_POST['del'] . ")";
	$result = connect($sql);
	header('Location: login_view.php');
}
?>