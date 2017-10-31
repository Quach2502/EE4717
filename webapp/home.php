<?php
/**
 * Created by IntelliJ IDEA.
 * User: long
 * Date: 30/10/17
 * Time: 4:30 PM
 */

@$db = new mysqli('localhost', 'root', 11111111, myuser);
if (mysqli_connect_errno()){
    echo 'cannot connect to database';
    exit;
}

$imageId ="";
$imageName="";
$imageLink = "";
$imageDescription = "";

$query = "select * from foodimage";
$result = $db->query($query);
$num_result = $result->num_rows;
//echo $num_result;

for ($i=0; $i<$num_result; $i++){
    $row = $result->fetch_assoc();
    $imageId = $row['id'];
    $imageName = $row['name'];
    $imageLink = "../asset/" . $row['link'];
    $imageDescription = $row['description'];

    echo "<div class='five-column'> ";
        echo "<div class='content-centered'>";
            echo "<img src='".$imageLink."' class='img-thumbnail'>";
            echo "<h2> Food Name: ".$imageName."</h2>";
            //    echo "<p> Food Id: ".$imageId."</p>";
            echo "<p> Food Description: ".$imageDescription."</p>";
        echo "</div>";
    echo "</div>";
}
?>

<html>
<head>
    <style>
        .five-column{
            float: left;
            overflow: hidden;
            width: 19%;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .img-thumbnail{
            width: 240px;
            height: 160px;
            overflow: hidden;

        }

        .content-centered{
            margin: auto;
            display: inline-block;
        }
        img+h2{
            margin: 0px;
        }

    </style>
</head>
</html>
