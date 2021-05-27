<?php
include('8_database.php');
$sql = "SELECT count(id), Department FROM person GROUP BY Department";
$result = $link->query($sql);
echo "<table >";
echo "<tr><td>Department</td><td>Count</td></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Department"] . "</td><td>" . $row["count(id)"] . "</td></tr>";
}
echo "</table>";
?>