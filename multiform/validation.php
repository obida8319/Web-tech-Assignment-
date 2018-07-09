<?php



$nameErr = $surnameErr = $FathernameErr =$MothernameErr=$SpousenameErr=$DOBErr=$BirthIDNoErr=$cmErr=$GenderErr=$inchErr=$EmailErr=$dualcitizenshipErr=$selectErr= "";
$Name=$Surname=$Fathername=$Mothername=$Spousename=$DOB=$Gender=$BirthIDNo=$cm=$inch=$Email=$dualcitizenship=$select="";

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
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  
  if($_POST['select']="options"){
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