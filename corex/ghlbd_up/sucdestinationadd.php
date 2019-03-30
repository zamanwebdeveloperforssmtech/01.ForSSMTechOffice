<?php 
session_start();
include('db_conn.php');

$agent_id = $_REQUEST['agent_id'];
$acc_no = $_REQUEST['acc_no'];
$origin =$_REQUEST['origin'];
$destination = $_REQUEST['destination'];
$sen_name = $_REQUEST['sen_name'];
$phone =$_REQUEST['phone'];
$company=$_REQUEST['company'];
$address =$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$province=$_REQUEST['province'];
$country=$_REQUEST['country'];
$zip=$_REQUEST['zip'];
$postal_code = $_REQUEST['postal_code'];

$rece_name = $_REQUEST['rece_name'];
$rece_phone =$_REQUEST['rece_phone'];
$rece_company = $_REQUEST['rece_company'];
$rece_address = $_REQUEST['rece_address'];
$rece_city =$_REQUEST['rece_city'];
$rece_state=$_REQUEST['rece_state'];
$rece_province =$_REQUEST['rece_province'];
$rece_country=$_REQUEST['rece_country'];
$rece_zip=$_REQUEST['rece_zip'];
$rece_code=$_REQUEST['rece_code'];
$rece_bex=$_REQUEST['rece_bex'];
$cour_code=$_REQUEST['cour_code'];
$date_time = $_REQUEST['date_time'];

$track_no = $_REQUEST['track_no'];

$length =$_REQUEST['length'];
$width = $_REQUEST['width'];
$height = $_REQUEST['height'];
$total = $_REQUEST['total'];
$document = $_REQUEST['document'];
//$non_docu = $_REQUEST['non_doc'];
$vol_weight =$_REQUEST['vol_weight'];
$char_weight=$_REQUEST['char_weight'];
$prepaid =$_REQUEST['prepaid'];
$account=$_REQUEST['account'];
$consignee=$_REQUEST['consignee'];
$cash=$_REQUEST['cash'];
$charges = $_REQUEST['charge'];
$no_pics = $_REQUEST['no_pics'];
$kgs=$_REQUEST['kgs'];
$others = $_REQUEST['others'];
$gms=$_REQUEST['gms'];
$disc_conten=$_REQUEST['disc_conten'];
$radiobutton=$_REQUEST['radiobutton'];
$my_date_array=$_REQUEST['rec_date_time'];
if($my_date_array != "")
{
	$my_date_array = explode("-", $rec_date_time);
	$recent_date_time = mktime(0,0,0,$my_date_array[1],$my_date_array[0],$my_date_array[2]);
}
else
{
	$recent_date_time = time();
}


$date_of_exam = $_REQUEST['date_of_exam'];
$shipper_name =$_REQUEST['shipper_name'];
$vat_no = $_REQUEST['vat_no'];
$vat=$_REQUEST['vat'];
$export = $_REQUEST['export'];
$coun_manu =$_REQUEST['coun_manu'];
$coun_des=$_REQUEST['coun_des'];
$export_refer =$_REQUEST['export_refer'];
$consignee_name=$_REQUEST['consignee_name'];
$impor_name=$_REQUEST['impor_name'];
$air_way=$_REQUEST['air_way'];
$mark_no=$_REQUEST['mark_no'];
$no_pkgs=$_REQUEST['no_pkgs'];
$type_packing= $_REQUEST['type_packing'];

$descrip = $_REQUEST['descrip'];
$non_city =$_REQUEST['non_city'];
$measure = $_REQUEST['measure'];
$weight = $_REQUEST['weight'];
$unit_vale =$_REQUEST['unit_vale'];


$total_value=$_REQUEST['total_value'];
$others=$_REQUEST['others'];
$through=$_REQUEST['through'];
$dvCustoms=$_REQUEST['dvCustoms'];

$awb_no="";

$refname=$_REQUEST['refname'];
$agentname=$_COOKIE['USER']['NAME'];

$status=$_REQUEST['status'];
$hawb_no=$_REQUEST['track_no'];
$clocation=$_REQUEST['clocation'];
$remail=$_REQUEST['remail'];
$semail=$_REQUEST['semail'];
$edate=$_REQUEST['rece_date_time'];
	
	  $sql="INSERT INTO shipment(`HAWB`, `origin`, `destination`, `media`, `AWB`, `pdate`, `shipper`, `receiver`, `product`, `status` ,`smobile`, `semail`, `saddress`, `rmobile`, `remail`, `raddress`, `edate`, `refname`, `agentname`, `cLocation`, `pcs`, `weight`) VALUES('$hawb_no', '$country', '$destination', '$through', '$awb_no', '$date_time', '$sen_name', '$rece_name', '$document', '$status','$phone', '$semail', '$address', '$rece_phone', '$remail', '$rece_address','$edate', '$refname','$agentname','$clocation', '$no_pics','$kgs')";

	              $res=mysql_query($sql);
					 
			 $qry="INSERT INTO destination(`agent_id`,`sen_acc_no`,  `origin`, `destination`, `sender_name`, `phone`, `company`, `address`,
			  `city`, `state`, `province`, `country`, `zip`, `post_code`, `rece_name`, `rece_phone`, `rece_company`, `rece_address`, 
			  `rece_city`, `rece_state`, `rece_province`, `rece_country`, `rece_zip`, `rece_postcode`, `rece_by_bex`, `couri_code`, 
			  `cour_date`, `track_no`, `length`, `width`, `height`, `total`, `document`, `to_vol_weigh`, `to_char_weigh`, 
			  `prepaid`, `shipper`, `consigne`, `cash`, `charges`, `no_pics`, `kgs`, `gms`,`descri_cont`, `pay_r_yes_no`, `rec_date_time`,
			  `date_of_exam`, `ship_name_add`, `vat_no`, `country_of_exprot`, `country_of_manu`, `coun_of_destination`, `export_reference`,
			  `consig_name_add`, `importer_name_add`, `air_way_bill`, `mark_nos`, `no_of_pkg`, `type_of_pack`, `descrip_good`, `non_city`,
			  `unit_measure`, `weight`, `unit_value`, `total_value`, `others`,`through`, `dvCustoms`, `vat`) VALUES
				('$agent_id', '$acc_no', '$origin', '$destination', '$sen_name', '$phone', '$company', '$address',  '$city', '$state', '$province',
				 '$country',  '$zip', '$postal_code', '$rece_name', '$rece_phone', '$rece_company', '$rece_address', '$rece_city', 
				 '$rece_state', '$rece_province', '$rece_country', '$rece_zip', '$rece_code', '$rece_bex', '$cour_code', '$date_time',
				  '$track_no', '$length', '$width', '$height', '$total', '$document', '$vol_weight', '$char_weight', '$prepaid',
				  '$account', '$consignee', '$cash', '$charges', '$no_pics', '$kgs', '$gms', '$disc_conten', '$radiobutton', '$recent_date_time',
				  '$date_of_exam', '$shipper_name', '$vat_no', '$export', '$coun_manu', '$coun_des', '$export_refer', '$consignee_name', '$impor_name',
				  '$air_way', '$mark_no', '$no_pkgs', '$type_packing', '$descrip', '$non_city', '$measure', '$weight', '$unit_vale', '$total_value', '$others','$through','$dvCustoms','$vat')";
				  
				  
				 
	
				if(mysql_query($qry) or die(mysql_error()))
				{
					/*echo "<script> alert('information successfully added'); </script>";*/
					echo "<script> window.location='destinationprint.php?track_no=".$track_no."'; </script>";
				}
				else 
				{
	  					$messages[]= mysql_error();
   				}	
		
			

?>

