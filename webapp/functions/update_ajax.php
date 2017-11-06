<?php
session_start();
$_SESSION[$_GET['index']]=$_GET['value'];
//echo $_SESSION[$_GET['index']];
//var_dump($_SESSION);
echo $_SESSION['searchCategory'];
?>