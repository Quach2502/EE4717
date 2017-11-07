<!DOCTYPE html>
<html lang = "en">
<head>
	<script type="text/javascript" src = "../js/utilsFoodPage.js"></script>
	<script type ="text/javascript" src = "../js/initFoodPage.js"></script>
    <link rel="stylesheet" href="../css/home.css">
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
	#food_image { 
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
	nav {
		text-align: center;
		background: rgba(10, 14, 21, 0.58); 
	}

	nav a {
		display: inline-block;
		padding: 15px 20px;
		text-decoration: none;
		text-transform: uppercase;
		font-weight: 700;
		color: white;
	}

	header{
		background-color: rgb(210,180,140); 	
		height:30%;
	}

</style> 
</head>
<body>
<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?>

    <header id="">
        <?php
        include "templates/navbar.php";

        ?>
    </header>
	<div class = "wrapper">
		<?php

		include "functions/dbconnect.php";

		$description ='Description here';

		$foodName = 'Name here';
		$price = 'Price here';
		$imageLink = '../asset/error.jpg';
		$restaurant = 'Restaurant here';
		$category = 'Category here';
		if(isset($_POST['add_to_cart'])){
			if(!isset($_SESSION['cart'])){
				$_SESSION['cart'] = array();
			}
			$subtotal = $_POST['subtotal'];
			$quantity = $_POST['quantity'];
			$foodId = $_POST['foodid'];
			$name = $_POST['foodname'];
			if (isset($_SESSION['cart'][$foodId]) ||array_key_exists($foodId,$_SESSION['cart'])){
				$_SESSION['cart'][$foodId]->quantity += $quantity;
				$_SESSION['cart'][$foodId]->subtotal += $subtotal;
			}
			else{

				$infoCartItem = new InfoCartItem();
				$infoCartItem->quantity = $quantity;
				$infoCartItem->subtotal = $subtotal;
				$infoCartItem->name = $name;
				$_SESSION['cart'][$foodId] = $infoCartItem;
			}


		}
		if(isset($_POST['foodid'])){
			$foodId = $_POST['foodid'];
			$query = "SELECT * FROM `food` WHERE `foodid` = \"".$foodId."\"";
			// $query = "SELECT * FROM `food`";
			$result = $db->query($query);
			while($row = mysqli_fetch_array($result)) {
				$description =  $row['description'];
				$foodName =  $row['name'];
				$imageLink =  "../asset/" .$row['imagelink'];
				$restaurant = $row['restaurant'];
				$category = $row['category'];
				$price = $row['price'];

			}
		}
		echo '<div id ="leftcolumn">';
		echo "<img id ='food_image' src = ".$imageLink."></div>";
		echo '<div id = "rightcolumn">';
		echo '<div id = "food_name">'.$foodName.'</div>';
		echo '<div id = "food_category">'.$category.'</div>';
		echo '<div id = "food_description">'.$description.'</div>';
		echo '<div id = "food_price" value="'.$price.'">'.$price.'</div>';

		echo '<button type="button" id ="order_init">Order Now!</button><br>';

		echo '<form  id = "add_to_cart_form" method ="post" onSubmit="return formValidate()" action="food_info.php">';
		echo	'<input name="foodid" type="hidden" value='.$foodId.'>';
		echo	'<input name="foodname" type="hidden" value='.$foodName.'>';?>
		<div id="getQuantity" style="display:none;">
			<table>
				<tr>	
					<td>
						<input id="quantity" name="quantity" type="number" value="0" style="width:30%;">
					</td>
					<td>
						<input type="submit" id ="add_to_cart" name ="add_to_cart" value ="Add To Cart" >
					</td>
				</tr>
				<tr>
					<td><input id="subtotal" name="subtotal" type="text" value="0" style="width:30%;"></td>
				</tr>
			</table>
		</div>
	</form>
</div>
</body>
</html>
