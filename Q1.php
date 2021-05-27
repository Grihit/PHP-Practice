<?php
echo "WELCOME <br><br>";
echo "\n";
date_default_timezone_set('Asia/Calcutta');
$Hour = date('G');
if ( $Hour >= 5 && $Hour <= 11 ) {
 echo "Good Morning, ";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
 echo "Good Afternoon, ";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
 echo "Good Evening, ";
}
echo $_POST["name"];
echo "<br><br>";
$color=$_POST['favcolor'];
switch ($color) {
 case "red":
 echo '<body style="background-color:red">';
 break;
 case "blue":
 echo '<body style="background-color:blue">';
 break;
 case "green":
 echo '<body style="background-color:green">';
 break;
 case "orange":
 echo '<body style="background-color:orange">';
 break;
 }
if(isset($_POST['number'])) {
$input = $_POST['number'];
$reverse = strrev($input);
if($reverse == $input) {
echo $input . ' is a palindrome <br><br>';
}
else{
echo $input. ' is not a palindrome <br><br>';
}
}
?>