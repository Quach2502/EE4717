<?php
include "dbconnect.php";
include "../class/InfoCartItem.php";
session_start();
if(!isset($_SESSION['valid_user'])){
	echo 'No user, invalid access';
	exit;
}
if(!isset($_SESSION['cart'])){
	echo 'There is no cart, invalid access.';
	exit;
}

$username = $_SESSION['valid_user'];
$username = mysqli_real_escape_string($db,$username);
$address = $_POST['address'];
$address = mysqli_real_escape_string($db,$address);
$total = $_POST['total_price'];
$total = mysqli_real_escape_string($db,$total);
$receiver = $_POST['fullname'];
$receiver = mysqli_real_escape_string($db,$receiver);
$datereceived = $_POST['date_time'];
// $date_time = mysqli_real_escape_string($db,$date_time);
$datereceived = date('Y-m-d H:i:s',strtotime($datereceived));
// $date = new DateTime($date_time);
$orderId = uniqid($username);
$dateorder = date('Y-m-d H:i:s');
$sql = "INSERT INTO `orderhistory`(`orderid`,`username`, `dateorder`, `totalprice`, `receiver`, `address`, `prefertime`) VALUES ('$orderId','$username','$dateorder','$total','$receiver','$address','$datereceived')";
$result = $db->query($sql);

if(!$result){
	var_dump(mysqli_error($db));
	echo 'Cannot update to database!';
	exit;
}
foreach($_SESSION['cart'] as $key=>$value){
	$qt = $value->quantity;
	$name = $value->name;
	$stotal = $value->subtotal;
	echo $qt;
	echo $name;
	echo $stotal;
	$sqlOrderDetails = "INSERT INTO `orderdetails`(`orderid`,`foodid`, `quantity`, `subtotal`, `dateorder`, `foodname`) VALUES ('$orderId','$key','$qt','$stotal','$dateorder','$name')";
	$resultOrderDetails = $db->query($sqlOrderDetails);
}
unset($_SESSION['cart']);
header("location:../cart.php?addOrderHistory=true;");
?>