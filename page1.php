<?php
if (!isset($_COOKIE["login"]))
    header("location:Q7.php");
echo "Username: " . $_COOKIE["login"];
?>
<h1> Welcome to page 1 </h1>
<table>
    <a href="page2.php">
        <h2>
            <font color="blue">PAGE 2</font>
        </h2>
</table>