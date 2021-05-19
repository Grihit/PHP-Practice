<?php
session_start();
if(isset($_SESSION['cookie_count']))
{
     $_SESSION['cookie_count'] += 1;
}
else
{
     $_SESSION['cookie_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['cookie_count'];
?>