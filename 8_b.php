<?php
include('8_database.php');
$dept = $_POST['dept'];
$sql = '0';
$sql = "SELECT * FROM person where department='$dept'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    echo "<table >";
    echo "<tr><td>Name</td><td>Department</td><td>DOB</td><td>Salary</td></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["fName"] . "</td><td>" . $dept . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Salary"] . "</td></tr>";
    }
    echo "</table>";
} else
    echo "No such person exists,";
?>