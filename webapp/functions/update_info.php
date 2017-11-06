<?php
include "dbconnect.php";
session_start();
$username = $_SESSION['valid_user'];
$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$fullname = mysqli_real_escape_string($db,$fullname);
$email = isset($_POST['email']) ? $_POST['email'] : '';
$email = mysqli_real_escape_string($db,$email);
$handphone = isset($_POST['handphone']) ? $_POST['handphone'] : '';
$handphone = mysqli_real_escape_string($db,$handphone);
$address = isset($_POST['address']) ? $_POST['address'] : '';
$address = mysqli_real_escape_string($db,$address);
$sql = "UPDATE `user` SET `fullname`='{$fullname}',`email`='{$email}',`handphone`='{$handphone}',`address`='{$address}' WHERE `username`='{$username}'";
$result = $db->query($sql);
if($result){
	header("location:user_info.php");
// echo $username.' '.$fullname.' '.$email.' '.$handphone.' '.$address;
}
else {
	echo 'Cannot update to database!';
}
?>