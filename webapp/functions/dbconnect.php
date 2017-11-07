<?php
@$db = new mysqli('localhost','root','11111111','ee4717');
if(mysqli_connect_errno()){
	echo 'Cannot connect to database';
	exit;
}
?>