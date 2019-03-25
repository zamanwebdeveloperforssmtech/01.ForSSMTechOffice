<html>
<body>
    <!-- TRACKING +++++++++++++++++++++++++++++++++++ -->
    <div id="tracking_container">
		<form name="form_tracking" id="form_tracking" method="post" action="https://www.eliteairborne.com/track_shipment.php">
<table width="300" height="120" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#035382">
	<tr style="vertical-align: top;">

			<td>
			<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#035382">
				<tr style="height: 17px;">
					<td colspan="3" ><span class="text_12px_white"><b>Track Your Shipment with</b></span></td>
				</tr>
				<tr>
					<td colspan="3" style="height: 5px;"></td>
				</tr>
				<tr>
					<td colspan="3">
                        <select id="searchOption" name="searchOption" style="width: 140px; height: 20px;">
                            <option selected="selected" value="airwaybill">Airwaybill Number</option>
                            <option value="shipper">Agent Reference</option>
                        </select>                         
                    </td>
				</tr>
                
				<tr style="height: 10px;"><td></td></tr>

                
				<tr>
					<td style="width: 185px;">
						<!-- <input id="mySearchData" name="mySearchData" type="text" style=" width: 185px;"> -->
						<textarea id="mySearchData" name="mySearchData" type="text" rows="2" cols="20"><?php echo $_GET['tn']; ?></textarea>
					</td>
					
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="Submit" style="width: 60px; height: 20px;" value="Track">
					</td>
				</tr>
                
				<tr style="height: 5px;"><td></td></tr>
                
				<tr style="vertical-align: top; margin: 0px; padding: 0px; line-height: 12px;">
					<td colspan="3">
                        <span class="text_12px_lightBlue" style="line-height: 12px;">
							<!--
                            Track up to 10 numbers at a time. Separate with a comma (,)
							-->
						</span>
                    </td>
				</tr>
			</table>
			</td>

	</tr>
</table>
		</form>
    </div>
<script>document.getElementById('form_tracking').submit();</script>
</body>
</html>
