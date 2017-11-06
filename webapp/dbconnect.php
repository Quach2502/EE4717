<?php
@$db = new mysqli('localhost','root','','ee4717');
if(mysqli_connect_errno()){
	echo 'Cannot connect to database';
	exit;
}
?>