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
			<?php
			if(!isset($_SESSION)){
				session_start();
			}
			if(isset($_SESSION['valid_user'])){
				echo "<a href='user_info.php'>Welcome, {$_SESSION['valid_user']}</a>";
				echo '<a href="cart.php">My Cart</a>';
				echo '<a href="logout.php">Logout</a>';
			}else{    
				echo "<a href='login.php'>Login</a>";
			}
			?>
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

        include "dbconnect.php";
        if(!isset($_SESSION['cart'])){
        	$_SESSION['cart'] = array();
        }
        if(isset($_POST['delete_cart_item'])){
        	$item_to_delete = $_POST['delete_cart_item'];
        	// print_r($item_to_delete);
        	unset($_SESSION['cart'][$item_to_delete]);
        }
        // print_r($_SESSION['cart']);
        $num_items_cart = count($_SESSION['cart']);
        if($num_items_cart > 0){
        	$total = 0;
        	echo "<table border = '0'><thead>
        	<tr>
        	<th>Name</th>
        	<th>Quantity</th>
        	<th>Subtotal</th>
        	</tr>
        	</thead>";
        	echo '<p><strong>Your current cart</strong></p><br>';
        	foreach($_SESSION['cart'] as $key=>$value){
        		$qt = $value->quantity;
        		$name = $value->name;
        		$stotal = $value->subtotal;
        		$total += $stotal;
        		$delete_key = "delete_".$key;
        		echo "<tr>".
        		"<td>"
        		."<form id=".$key." action='food_info.php' method='post'>"
        		."<input hidden name='foodid' value=".$key.">"
        		."<a href='#' onclick='document.getElementById(".$key.").submit()'>"
        		.$name
        		."</a>"
        		."</form>"
        		."</td>"
        		."<td>"
        		.$qt
        		."</td>"
        		."<td>"
        		.$stotal
        		."</td>"
        		."<td>"
        		."<form id = 'delete_".$key."' method='post' action='cart.php'"
        		."<button><a href='#' onclick='document.getElementById(\"".$delete_key."\").submit()'>&#10006</a></button>"
        		."<input hidden name='delete_cart_item' value=".$key.">"
        		."</form>"
        		."</td>
        		</tr>";
        	}
        	echo "</table>";
        	echo "<p>Total Price: ".$total."$<br>";
        	echo "<button><a href='purchase.php'>Purchase Cart</a></button>";

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
