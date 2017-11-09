<?php
include "dbconnect.php";
include "../class/InfoCartItem.php";
session_start();
$toggle_array_str = $_POST['toggle_array'][0];
$toggle_array = explode(",",$toggle_array_str);
// print_r($toggle_array);
foreach($toggle_array as $item){
	$sql ="SELECT `status` FROM `orderhistory` WHERE `orderid` ='$item'";
	$result = $db->query($sql);
	$status;
	while($row = mysqli_fetch_array($result)) {
		$status = $row['status'] == 'Processing'? 'Delivered' : 'Processing';
	}
	$sqlUpdate ="UPDATE `orderhistory` SET `status` = '$status' WHERE `orderid` ='$item'";
	$resultUpdate = $db->query($sqlUpdate);
}
header("location:../admin_order_status.php?updateOrderStatus=true;");
?>