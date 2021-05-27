<?php
include('8_database.php');
$dept = $_POST['dept'];
$sql = '0';
$sql = "SELECT * FROM person where department='$dept'";
$result = $link->query($sql);
echo "Total number of employees are: ".$result->num_rows;
?>