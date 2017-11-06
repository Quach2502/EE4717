<?php
include "dbconnect.php";
$username = isset($_GET['username']) ? $_GET['username'] : '';
$username = mysqli_real_escape_string($db,$username);
$pendpsw = isset($_GET['pendpsw']) ? $_GET['pendpsw'] : '';
$pendpsw = mysqli_real_escape_string($db,$pendpsw);
$pendpsw = md5($pendpsw);
$sql = "SELECT COUNT(*) > 0 AS user_found
FROM user
WHERE username = '{$username}' AND password='{$pendpsw}'";

$result = $db->query($sql);

$exists = false;
if ($row = mysqli_fetch_assoc($result)) {
	$exists = $row['user_found'] ? true : false;
}

echo json_encode(array('exists' => $exists));
?>