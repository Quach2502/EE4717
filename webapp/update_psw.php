<?php
include "dbconnect.php";
session_start();
$username = $_SESSION['valid_user'];
$newpsw = isset($_POST['newpsw']) ? $_POST['newpsw'] : '';
$newpsw = mysqli_real_escape_string($db,$newpsw);
$newpsw = md5($newpsw);
$sql = "UPDATE `user` SET `password`='{$newpsw}' WHERE `username`='{$username}'";
$result = $db->query($sql);
if($result){
	header("location:user_info.php");
// echo $username.' '.$fullname.' '.$email.' '.$handphone.' '.$address;
}
else {
	echo 'Cannot update to database!';
}
?>