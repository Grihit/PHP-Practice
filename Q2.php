<?php
echo "Name: " . $_GET["name"] . "<br>";
echo "Password: " . $_GET["pass"] . "<br>";
if (isset($_GET['gender'])) {
    echo "Gender: " . $_GET['gender'] . "<br>";
}
echo "Date of Birth: " . $_GET["DOBday"] . " " . $_GET["DOBmon"] . " " . $_GET["DOByear"] . "<br>";
if (isset($_GET['submit'])) {
    if (!empty($_GET['edu'])) {
        foreach ($_GET['edu'] as $value) {
            echo "value : " . $value . '<br/>';
        }
    }
}
echo $_GET["email"];
?>
</body>