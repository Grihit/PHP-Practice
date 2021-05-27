<?php
$link = mysqli_connect("localhost", "root", "", "q8");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>