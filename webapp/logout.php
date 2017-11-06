<?php
session_start();
$old_user = $_SESSION['valid_user'];
unset($_SESSION['valid_user']);
unset($_SESSION['cart']);
session_destroy();
header("location:home.php");
?>