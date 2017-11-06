<?php
include "dbconnect.php";
$category = $_GET['category'];
$item = $_GET['item'];
$searchtext = $_GET['input'];
$searchquery ='';
//echo $category.$item.$searchtext;

if ($category=='All categories'){
    if ($searchtext == '') {
        $searchquery = "SELECT * FROM `food`";
    }
    else{
        $searchquery = "SELECT * FROM `food` WHERE name='$searchtext'";
    }
}
else{
    if($item=='All items'){

    }
    else{

    }
}
if ($searchtext == ''){
    $searchquery = "SELECT * FROM `food` WHERE $category='item' AND "
}
$searchquery = "SELECT * FROM `food` WHERE name='";
$result = $db->query($query);
if(isset($result)){
    $num_result = mysqli_num_rows($result);
}

?>