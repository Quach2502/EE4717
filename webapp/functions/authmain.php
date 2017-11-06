<?php
include "dbconnect.php";
session_start();
$username = isset($_POST['username']) ? $_POST['username'] : '';
$username = mysqli_real_escape_string($db,$username);
$psw = isset($_POST['psw']) ? $_POST['psw'] : '';
$psw = mysqli_real_escape_string($db,$psw);
$psw = md5($psw);
$sql = "SELECT COUNT(*) > 0 AS user_found FROM `user` WHERE `username` = '{$username}' AND `password` = '{$psw}'";

$result = $db->query($sql);
$exists = false;
if ($row = mysqli_fetch_assoc($result)) {
	$exists = $row['user_found'] ? true : false;
}
if(!$exists){
	die(header("location:../login.php?loginFailed=true;"));
}
else{
	$_SESSION['valid_user'] = $username;
	header("location: ../home.php");
}
?>