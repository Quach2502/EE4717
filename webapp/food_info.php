<?php
@$db = new mysqli('localhost','ee4717','','');
if(mysqli_connect_errno()){
	echo 'error';
	exit;
}
$description ='Description here';
$foodName = 'Name here';
$price = 'Price here';
$imageLink = '../pics/error.png';
$restaurant = 'Restaurant here';
if(isset($_POST['foodid'])){
	$foodId = $_POST['foodid'];
	$query = "SELECT * FROM `food` WHERE `foodid` = \"".$foodId."\"";
	$result = $db->query($query);
	while($row = mysqli_fetch_array($result)) {
		$desciption =  $row['description'];
		$foodName =  $row['foodname'];
		$imageLink =  $row['imagelink'];
		$restaurant = $row['restaurant'];
	}
}



echo '
<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Food Product</title>
	<meta charset = "utf-8">
	<style>
	html {
		height:100%;
		width:100%;
	}
	.wrapper{
		height:800px;
		width:100%;
		margin: 0 auto;
	} 
	#leftcolumn { 
		float: left;
		width: 50%;
		height:70%;
		background-color:rgb(226,210,176);
	}
	#foodimage { 
		width: 100%;
		height:100%;
	} 
	#rightcolumn { 
		float: left;
		text-align:center;
		width:50%;
		height:70%;
		background-color: rgb(245,245,220);
	}

	header{
		background-color: rgb(210,180,140); 	
		height:30%;
	}

</style> 
</head>
<body>
	<div class = "wrapper">  
		<header>
			<h1>Nav Bar</h1>
		</header>
		<div id ="leftcolumn">
			<img id ="foodimage" src = '.$imageLink.'>
		</div>
		<div id = "rightcolumn">
			<div id = "food name">
				'.$foodName.'
			</div>
			<div id = "food description">
				'.$description.'
			</div>
			<div id = "food price">
				'.$price.'
			</div>
		</div>
	</div>

</body>
</html>
'

?>