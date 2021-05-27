<?php
if (!isset($_COOKIE["login"]))
    header("location:Q7.php");
echo "Username: " . $_COOKIE["login"];
?>
<h1> Welcome to page 2 </h1>
<table>
    <a href="logout.php">
        <h2>
            <font color="red">Logout</font>
        </h2>
</table>