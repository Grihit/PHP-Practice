<?php
include('8_database.php');
$name = $_POST['name'];
$dob = $_POST['dob'];
$dept = $_POST['dept'];
$sal = $_POST['sal'];
$sql = "INSERT INTO person (fName, DOB, Department, Salary) VALUES ('$name', '$dob', '$dept', '$sal')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
