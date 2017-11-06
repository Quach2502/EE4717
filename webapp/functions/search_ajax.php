<?php
include "dbconnect.php";
$category = $_GET['category'];
$item = $_GET['item'];
$searchtext = $_GET['input'];
$searchquery ='';
//echo $category.$item.$searchtext;

if ($item=='all'){
    if ($searchtext == '') {
        $searchquery = "SELECT * FROM `food`";
    }
    else{
        $searchquery = "SELECT * FROM `food` WHERE name LIKE '%{$searchtext}%'";
    }
}
else{
    if ($searchtext == '') {
        $searchquery = "SELECT * FROM `food` WHERE $category='$item'";
    }
    else{
        $searchquery = "SELECT * FROM `food` WHERE $category='$item' AND name LIKE '%{$searchtext}%'";
    }
}

$result = $db->query($searchquery);
if(isset($result)){
    $num_result = mysqli_num_rows($result);
}
if ($num_result == 0){
    $search_result->name ='No items found';
    $search_result->foodid=-1;
    $array[] =$search_result;
}
else{
    for ($i=0; $i<$num_result; $i++) {
        $row = $result->fetch_assoc();
        $array[] = $row;
    }
}

echo json_encode($array);

?>