<?php



$nameErr = $surnameErr = $FathernameErr =$MothernameErr=$SpousenameErr=$DOBErr=$BirthIDNoErr=$cmErr=$GenderErr=$inchErr=$EmailErr=$dualcitizenshipErr=$selectErr= "";
$Name=$Surname=$Fathername=$Mothername=$Spousename=$DOB=$Gender=$BirthIDNo=$cm=$inch=$Email=$dualcitizenship=$selecting="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["Name"])) 
  {
    $nameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Name)) {
      $nameErr = "Only letters and white space and -  allowed"; 
    }
  }

   if (empty($_POST["Fathername"])) 
  {
    $FathernameErr = "Fathername is required";
  } else {
    $Fathername = test_input($_POST["Fathername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Fathername)) {
      $FathernameErr = "Only letters and white space and -  allowed"; 
    }
  }


 if (empty($_POST["Mothername"])) 
  {
    $MothernameErr = "Mothername is required";
  } else {
    $Mothername = test_input($_POST["Mothername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Mothername)) {
      $MothernameErr = "Only letters and white space and -  allowed"; 
    }
  }

  if (empty($_POST["DOB"])) 
  {
    $DOBErr = "This field is required";
  }



  if (empty($_POST["Surname"])) 
  {
    $surnameErr = "Surname is required";
  } else {
    $Surname = test_input($_POST["Surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z -]*$/",$Surname)) {
      $surnameErr = "Only letters and white space and -  allowed"; 
    }
  }
  
  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format"; 
    }
  }
    
  
  if($_POST['selecting']="options"){
   $selectErr= "Field is required";
  }



  if (empty($_POST["Gender"])) {
    $GenderErr = "Gender is required";
  } else {
    $Gender = test_input($_POST["Gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>STAGE 1</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>
	<?php
	session_start();
	?>

		<h3>PASSPORT APPLICATION STAGE-1</h3>

		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="tables">
			    <table>
				    <tr>
					    <td>
					    <div class="table1">
							
							<table>
								<col width="190">
								
								
								<tr>
									<td colspan="2"><h4 style="color:grey">Passport Application Information</h4></td>
								</tr>
								<tr>
									<td>Applying in:<i style="color:red" class="error">*</i></td>
									<td>
										<select class="selections_star" name="selecting">
												<option value="options"> -Select-</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
												 <p class="error"><?php echo $selectErr;?></p>

										</select>
									</td>
								
									
								</tr>
								<tr>
									<td>Application Type:</td>
									<td>NEW APPLICATION</td>
											
								</tr>
								
								<tr>
									<td>Passport Type:<i style="color:red" class="error">*</i>
									<br></td>
									
									
									<td>
										<select class="selections_star"
										>
											<option> -SELECT-</option>
											<option>-SELECT- </option>
											<option>-SELECT- </option>
											<option>-SELECT- </option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Delivery Type:</td>
									<td><input type="radio" name="DeliveryType" value="Regular">Regular
									<br>
									<input type="radio" name="DeliveryType" value="Express">Express</td>
								
								</tr>
								
								<tr>
									<td colspan="2"><h4 style="color:grey">Passport Application Information</h4></td>
								</tr>
								<tr>
									<td>Name of <br>
									applicant:<i style="color:red" class="error">*</i>
									</td>
									<td>
									<input type="text" name="Name" value="<?php echo $Name;?><?php if(isset($_SESSION['usr'][0])) {echo $_SESSION['usr'][0];}?>">
									 <p class="error"><?php echo $nameErr;?></p>
									
									</td>
								
								</tr>
								<tr>
									<td>First Part(Given <br>Name):</td>
									<td>
									<input type="text" name="FirstName" value="<?php if(isset($_SESSION['usr'][1])) {echo $_SESSION['usr'][1];}?>">
									</td>
								</tr>
								<tr>
									<td>Second Part <br>
									(Surname):<i  class="error">*</i>
									</td>
									<td>
									<input type="text" name="Surname" value="<?php echo $Surname;?><?php if(isset($_SESSION['usr'][2])) {echo $_SESSION['usr'][2];}?>">
									 <p class="error"><?php echo $surnameErr;?></p>
									</td>
								
								</tr>
								<tr>
								<td colspan="2">Guardian<input type="checkbox" name="Guardianinfo" value="Guardian"><i style="color:red">"Tick"</i>only if the Applicant is legally adapted 
								</tr>
								<tr>
								<td>Father's name:<i class="error">*</i>
									</td>
									<td>
									<input type="text" name="Fathername" value="<?php if(isset($_SESSION['usr'][3])) {echo $_SESSION['usr'][3];}?><?php echo $Fathername;?>">
									<p class="error"><?php echo $FathernameErr;?></p>
									</td>
								</tr>
								<tr>
								<td>Father's <br> Nationality:<i class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star">
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Mother's name:<i style="color:red" class="error">*</i>
									</td>
									<td>
									<input type="text" name="Mothername" value="<?php echo $Mothername;?><?php if(isset($_SESSION['usr'][4])) {echo $_SESSION['usr'][4];}?>">
									<p class="error"><?php echo $MothernameErr;?></p>
									</td>
								</tr>
								<tr>
								<td>Father's <br> Profession:<i style="color:red" class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star" >
												<option>-SELECT-</option>
												<option>-SELECT-</option>
												<option>-SELECT- </option>
												<option>-SELECT-</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Mother's <br> Nationality:<i style="color:red" class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star" >
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Mothers's <br> Profession:<i style="color:red" class="error">*</i>
								
									</td>
									<td>
										<select class="selections_star" >
												<option>-SELECT-</option>
												<option>-SELECT-</option>
												<option>-SELECT- </option>
												<option>-SELECT-</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Spouse's name:
									</td>
									<td>
									<input type="text" name="Spousename" <?php if(isset($_SESSION['usr'][5])) {echo $_SESSION['usr'][5];}?>>
									</td>
								</tr>
								
								
								<tr>
								<td>Spouse's <br> Nationality:
								
									</td>
									<td>
										<select class="selections">
												<option> -SELECT-</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
												<option> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Spouse's <br> Profession:
								
									</td>
									<td>
										<select class="selections">
												<option>-SELECT-</option>
												<option>-SELECT-</option>
												<option>-SELECT- </option>
												<option>-SELECT-</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Martial Status:<i style="color:red" class="error">*</i></td>
								<td>
									<select class="selections_star" >
												<option>-SELECT-</option>
												<option>Married</option>
												<option>Single </option>
												
									</select></td>
								</tr>
								<tr>
								<td>Applicant's<br>
								Profession:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star">
										<option>-SELECT-</option>
										<option>Doctor</option>
										<option>Housewife </option>
										<option>Engineer</option>
										<option>Student</option>

										</select>
								</td>
								</tr>
								<tr>
									<td>Country of <br>
								      Birth:<i style="color:red" class="error">*
									</td>
									<td>
										<select class="selections_star">
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Birth <br>
								      District:<i style="color:red" class="error">*
									</td>
									<td>
										<select class="selections_star">
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
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
								<td>
								Date of Birth:<i style="color:red" class="error">*
								</td>
								<td><input type="text" name="DOB"  value="<?php echo $DOB;?><?php if(isset($_SESSION['usr'][6])) {echo $_SESSION['usr'][6];}?>">
								<p class="error"><?php echo $DOBErr;?></p>
								</td>
							</tr>
							<tr>
								<td>
								Gender:<i style="color:red" class="error">*
								</td>
								<td>
									<input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="Male") echo "checked";?> value="Male">Male <br>
									<input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="Female") echo "checked";?> value="Female">Female <br>
									<input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="Other") echo "checked";?> value="Other">Other <br>
							        <p class="error"><?php echo $GenderErr;?>
							        </p><br>
								</td>

							</tr>
							<tr>
								<td>
									Birth ID No.:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<input type:"text" name:"BirthIDNo" value="<?php if(isset($_SESSION['usr'][7])) {echo $_SESSION['usr'][7];}?>">
								</td>
							</tr>
							<tr>
								<td>
									National ID No.:
								</td>
								<td>
									<input type:"text" name:"NationalIDNo value="<?php if(isset($_SESSION['usr'][8])) {echo $_SESSION['usr'][8];}?>">
								</td>
							</tr>
							<tr>
								<td>
									Tax ID No.:
								</td>
								<td>
									<input type:"text" name:"TaxIDNo value="<?php if(isset($_SESSION['usr'][9])) {echo $_SESSION['usr'][9];}?>">
								</td>
							</tr>
							<tr>
								<td>
								Height:<i style="color:red" class="error">*</i>

								</td>
								<td>
								<input type="text" name="cm" class="cm" value="<?php if(isset($_SESSION['usr'][10])) {echo $_SESSION['usr'][10];}?>">cm
								</td>
								<td>
								<input type="text" name="inch" class="inch" value="<?php if(isset($_SESSION['usr'][11])) {echo $_SESSION['usr'][11];}?>"> inch
								</td>
							</tr>
							<tr>
								<td>
								Religion:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star" >
										<option>-SELECT-</option>
										<option>Islam</option>
										<option>Hindu </option>
										<option>Christian</option>
									</select>

								</td>

							</tr>
							<tr>
								<td>
								Email:<i style="color:red" class="error">*</i>
								</td>

								<td>
								<input type="text" name="Email" value="<?php echo $Email;?><?php if(isset($_SESSION['usr'][12])) {echo $_SESSION['usr'][12];}?>" />
								<p class="error"><?php echo $EmailErr;?></p>
								</td>

							</tr>
							<tr>
							<td colspan="2"><h4 style="color:grey">Citizenship Information</h4></td>
							</tr>
							<tr>
								<td>Nationality:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star">
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
											<option> BANGLADESH</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Citizenship Status:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star">
											<option> Birth</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
								Dual Citizenship:<i style="color:red" class="error">*
								</td>
								<td>
									<input type="radio" name="dualcitizenship" value="Yes">Yes <br>
									<input type="radio" name="dualcitizenship" value="No">No <br>
								
								</td>

							</tr>
							<tr>
							<td colspan="2"><h4 style="color:grey">Present Address</h4></td>
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="V/H_present" value="<?php if(isset($_SESSION['usr'][13])) {echo $_SESSION['usr'][13];}?>">
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="R/B/S_present" value="<?php if(isset($_SESSION['usr'][14])) {echo $_SESSION['usr'][14];}?>">
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star">
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
									<select class="selections_star">
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
									<select class="selections_star">
											<option> -SELECT-</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>
								</td>
							</tr>

							<tr>
							<td colspan="2"><h4 style="color:grey">Permanent Address</h4></td>
							</tr>
							<tr>
								<td colspan="2"><input type="checkbox" name="Permanent_Address" value="Per_Add">  Same as above
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="V/H_permanent" value="<?php if(isset($_SESSION['usr'][15])) {echo $_SESSION['usr'][15];}?>">
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="R/B/S_permanent" value="<?php if(isset($_SESSION['usr'][16])) {echo $_SESSION['usr'][16];}?>">
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections_star">
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
									<select class="selections_star">
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
									<select class="selections_star">
											<option> -SELECT-</option>
											<option> </option>
											<option> </option>
											<option> </option>
									</select>
								</td>
							</tr>

							<tr>
							<td>
							<input type="submit" name="Save_now_continue" Value="Save Now & Continue in Future"  >
							</td>
							<td>
							<input type="submit" name="savenext1" Value="Save & Next" formaction="stage2.php">
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