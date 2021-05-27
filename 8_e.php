<?php
include('8_database.php');
$id = $_POST['id'];
$sql = "SELECT * FROM person where Id='$id'";
$result = $link->query($sql);
echo "The following will be deleted. <table >";
echo "<tr><td>Id</td><td>Name</td><td>Department</td><td>DOB</td><td>Salary</td></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Id"] . "</td><td>". $row["fName"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Salary"] . "</td></tr>";
}
echo "</table>";
$sql1 = "DELETE FROM person WHERE Id='$id'";
if ($link->query($sql1)) {
echo "Record deleted successfully<br>";
}
$sql2 = "SELECT * FROM person";
$result2 = $link->query($sql2);
echo "<table>";
echo "<tr><td>Id</td><td>Name</td><td>Department</td><td>DOB</td><td>Salary</td></tr>";
while($row = $result2->fetch_assoc()) {
    echo "<tr><td>" . $row["Id"] . "</td><td>". $row["fName"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Salary"] . "</td></tr>";
}
echo "</table>";
