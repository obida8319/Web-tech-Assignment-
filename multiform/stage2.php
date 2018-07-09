

<!DOCTYPE html>
<html>
<head>
	<title>
		STAGE 2
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>




	<?php
	
	session_start();
	

	if(!isset($_POST['stageTwo'])){
	$_SESSION['usr'] = array();
	$_SESSION['usr'][] = $_POST['Name'];
	$_SESSION['usr'][] = $_POST['FirstName'];
	$_SESSION['usr'][] = $_POST['Surname'];
	$_SESSION['usr'][] = $_POST['Fathername'];
	$_SESSION['usr'][] = $_POST['Mothername'];
	$_SESSION['usr'][] = $_POST['Spousename'];
	$_SESSION['usr'][] = $_POST['DOB'];
	//$_SESSION['usr'][] =($_POST['aa']);
	//$_SESSION['usr'][] = ($_POST['Nationalname']);
	//$_SESSION['usr'][] = ($_POST['TaxnameNo']);
	$_SESSION['usr'][] = $_POST['cm'];
	$_SESSION['usr'][] = $_POST['inch'];
	$_SESSION['usr'][] = $_POST['Email'];
	$_SESSION['usr'][] = $_POST['V/H_present'];
	$_SESSION['usr'][] = $_POST['R/B/S_present'];
	$_SESSION['usr'][] = $_POST['PV/H_permanent'];
	$_SESSION['usr'][] = $_POST['PR/B/S_permanent'];}
	?>
	<h3>PASSPORT APPLICATION STAGE-2</h3>
		
		<p class= "error">Fields marked with <i style="color:red">(*)</i> are mandoraty.</p>
		<hr style="color:grey">
	<form method="POST" action="">
		<div class="tables">
			<table>
				<tr>
					<td>
						<div class="table1">
							<table>
								<tr>
									<td colspan="2"><h4 style="color:grey">Applicant Contact Information</h4>

									</td>
								</tr>
								<tr>
									<td>Office No.:
									</td>
									<td>
										<input type="text" name="officeNo">
									</td>
								</tr>

								<tr>
									<td>Residence No.:
									</td>
									<td>
										<input type="text" name="ResidenceNo">
									</td>
								</tr>

								<tr>
									<td>Mobile No.:
									</td>
									<td>
										<input type="text" name="MobileNo">
									</td>
								</tr>
								<tr>
									<td colspan="2"><h4 style="color:grey">Emergency Contact Person's Details</h4></td>
								</tr>
								 <tr>
								 	<td>Name:<i style="color:red" class="error">*</i>
								 	</td>
								 	<td>
								 	<input type="text" name="EmergencyName">
								 	</td>
								 </tr>
								 <tr>
									<td>Country:<i style="color:red" class="error">*</i>
									<br></td>
									
									
									<td>
										<select class="selections">
											<option> -SELECT-</option>
											<option>-SELECT- </option>
											<option>-SELECT- </option>
											<option>-SELECT- </option>
										</select>
									</td>
								</tr>
								<tr>
								<td colspan="2"><input type="checkbox" name="Permanent_Address" value="Per_Add"> <i> Same as Permanent Address</i>
							</tr>
							<br>
							<tr>
								<td colspan="2"><input type="checkbox" name="Present_Address" value="Present_Add"><i>  Same as present Address</i>
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="V/H_permanent"/>
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="R/B/S_permanent"/>
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections">
											<option> -SELECT-</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Police Station:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections">
											<option> -SELECT-</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Post Office:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections">
											<option> -SELECT-</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Contact No.:<i style="color:red" class="error">*</i>
								</td>
								<td>
								<input type="text" name="ContactNo">
								</td>
							</tr>
							<tr>
								<td>Email:
								</td>
								<td>
								<input type="text" name="Email">
								</td>
							</tr>
							<tr>
								<td>
								Relationship:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections">
											<option> -SELECT-</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>

								</td>
							</tr>

							</table>
						</div>
					</td>


					<td>
						<div class="table2">
							<table>
							<col width="190">
								<tr>
									<td colspan="2"><h4 style="color:grey">Old Passport Information</h4></td>
								</tr>
								<tr>
									<td>Passport No:
									</td>
									<td>
									<input type="text" name="OldPassNo">
									</td>
								</tr>
								<tr>
									<td>Place of Issue:
									</td>
									<td>
									<input type="text" name="OldPlaceofIssue">
									</td>
								</tr>
								<tr>
									<td>Date Of Issue:
									</td>
									<td>
									<input type="text" name="OldPassDateofIssue">
									</td>
								</tr>
								<tr>
									<td>Re-Issue Reason:
									</td>
									<td>
										<select class="selections">
											<option> -SELECT-</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>
									
									</td>
								</tr>
								<tr>
								<td>
								<input type="Submit" name="Previous Page" Class="Buttons" Value="Previous Page">
								</td>
								<td>
								<input type="Submit" name="Previous Page" Class="Buttons" value="Save & Next">
								</td>

								</tr>



							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</form>

</body>
</html>
