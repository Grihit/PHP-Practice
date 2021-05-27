<?php
include('8_database.php');
$sql1 = "UPDATE person SET salary = ((salary*10)/100 +salary) where Department='Sales'";
$result1 = mysqli_query($link, $sql1);
$sql = "SELECT * FROM person where Department='Sales'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    echo "<table >";
    echo "<tr><td>Name</td><td>Department</td><td>DOB</td><td>Salary</td></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["fName"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Salary"] . "</td></tr>";
    }
    echo "</table>";
}
