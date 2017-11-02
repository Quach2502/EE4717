<html>
<head>
	<style>
	html{
		max_width: 90%;
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

	.content-wrap{
		/*max-width: 90%;*/
		margin: 20px auto;
	}

	.five-column{
		float: left;
		overflow: hidden;
		width: 19%;
		display: table-cell;
		vertical-align: middle;
		text-align: center;
	}

	.five-column::after{
		clear:both;
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
<body>
	<!--    Navigation bar -->
	<header id="">
		<nav class="display">
			<a href="#food">Food</a>
			<a href="#search">Search</a>
			<a href="#about">About us</a>
			<a href="#feedback">Feedback</a>
			<a href="#account">My Account</a>
			<a href="#login">Login</a>
			<a href="cart.php">Cart</a>
		</nav>

		<div class = "content-wrap">
			<?php
        /**
         * Created by IntelliJ IDEA.
         * User: long
         * Date: 30/10/17
         * Time: 4:30 PM
         */
        function __autoload($class_name) {
        	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/ee4717/webapp/class/'.$class_name . '.php');
        }

        @$db = new mysqli('localhost', 'root','' , 'ee4717');
        if (mysqli_connect_errno()){
        	echo 'cannot connect to database';
        	exit;
        }
        session_start();
        if(!isset($_SESSION['cart'])){
        	$_SESSION['cart'] = array();
        }
        print_r($_SESSION['cart']);
        $num_items_cart = count($_SESSION['cart']);
        if($num_items_cart > 0){


        }
        else{
        	echo"<p>Your cart is empty</p>";

        }

       // echo $num_result;

		// for ($i=0; $i<$num_result; $i++){
		// 	$row = $result->fetch_assoc();
		// 	$foodId = $row['foodid'];
		// 	$foodName = $row['name'];
		// 	$imageLink = "../asset/" . $row['imagelink'];
		// 	$foodPrice = $row['price'];

		// 	echo "<div class='five-column'> ";
		// 	echo "<form action='food_info.php' method='post'>";
		// 	echo "<div class='content-centered'>";
		// 	echo "<input name='foodid' value='$foodId' hidden>";
		// 	echo "<input type='image' src='".$imageLink."' class='img-thumbnail'>";
		// 	echo "<h2> Food Name: ".$foodName."</h2>";
  //                       //    echo "<p> Food Id: ".$imageId."</p>";
		// 	echo "<p> Price: SGD $".$foodPrice."</p>";
		// 	echo "</div>";
		// 	echo "</form>";
		// 	echo "</div>";
		// }

        ?>
    </div>
</header>
</body>
</html>
