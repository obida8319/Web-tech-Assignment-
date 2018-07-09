<!DOCTYPE html>
<html>
<body>

<?php
$str = $_POST['text'];
$strArray = count_chars($str,1);
$strAr= str_word_count ($str,1);



foreach ($strArray as $key=>$value)
   {
   echo " character <b> ". chr($key). "</b>  found  $value   time(s)<br>";
   }
   
   print_r(array_count_values($strAr));
?>

</body>
</html>