<?php
@$db = new mysqli('localhost','f36ee','f36ee','f36ee');
if(mysqli_connect_errno()){
	echo 'Cannot connect to database';
	exit;
}
?>