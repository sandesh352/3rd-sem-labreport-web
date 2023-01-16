<?php
session_start();

if(isset($_SESSION['views']))
$_SESSION['views'] = $_SESSION['views']+1;
else
$_SESSION['views']=2;
echo"views = ".$_SESSION['views'];
?>