<!DOCTYPE html>
<html lang = "en">
<head>
	<script type="text/javascript" src = "../js/utilsFoodPage.js"></script>
	<script type ="text/javascript" src = "../js/initFoodPage.js"></script>
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
	nav 
	{


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
	<div class = "wrapper">  
		<header>
			<nav class="display">
				<a href="#food">Food</a>
				<a href="#search">Search</a>
				<a href="#about">About us</a>
				<a href="#feedback">Feedback</a>
				<a href="#account">My Account</a>
				<a href="#login">Login</a>
				<a href="cart.php">Cart</a>
			</nav>
		</header>
		<?php
		@$db = new mysqli('localhost','root','','ee4717');
		if(mysqli_connect_errno()){
			echo 'error';
			exit;
		}
		$description ='Description here';
		$foodName = 'Name here';
		$price = 'Price here';
		$imageLink = '../asset/error.jpg';
		$restaurant = 'Restaurant here';
		$category = 'Category here';
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
		echo '<div id = "food_price">'.$price.'</div>';
		?>

		<button type="button" id ="order_init">Order Now!</button><br>
		<div id="getQuantity" style="display:none;">
			<table>
				<tr>		
					<td>
						<input id="quantity" type="number" value="0" style="width:30%;">
					</td>
					<td>
						<button type="button" id ="add_to_cart">Add To Cart</button>
					</td>
				</tr>
				<tr>
					<td><input id="subtotal" type="text" value="0" style="width:30%;"></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
