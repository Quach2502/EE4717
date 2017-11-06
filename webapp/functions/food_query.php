<?php
/**
 * Created by IntelliJ IDEA.
 * User: long
 * Date: 5/11/17
 * Time: 8:50 PM
 */ include "dbconnect.php";


$query = "SELECT * FROM `food`";
$result = $db->query($query);
if(isset($result)){
    $num_result = mysqli_num_rows($result);
}
// echo $num_result;
?>