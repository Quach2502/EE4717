<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel="stylesheet" href="../css/modal.css">
	<script type="text/javascript" src = "../js/utilsUserInfoPage.js"></script>
	<script type ="text/javascript" src = "../js/initUserInfoPage.js"></script>
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
		width: 20%;
		height:70%;
		text-align:center;
		background-color:rgb(226,210,176);
	}
	#food_image { 
		width: 100%;
		height:100%;
	}
	.error{
		color: rgb(255,0,0);
		display: none;
	} 
	#rightcolumn { 
		float: left;
		text-align:center;
		width: 80%;
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
	<div class = "wrapper">
        <header id="">
            <?php
            include "templates/navbar.php";
            ?>
        </header>
		<?php
		include "functions/dbconnect.php";
		if(!isset($_SESSION['valid_user'])){
			echo "Invalid access.";
			exit;
		}
		$username = $_SESSION['valid_user'];
		$query = "SELECT * FROM `user` WHERE `username` = '{$username}'";
		$result = $db->query($query);
		while($row = mysqli_fetch_array($result)) {
			$email =  $row['email'];
			$fullname =  $row['fullname'];
			$handphone =  $row['handphone'];
			$address =  $row['address'];
		}
		$sql = "SELECT * FROM `orderhistory` WHERE `username` = '$username'";
		$num_result = 0;
		$resultOrder = $db->query($sql);
		if(isset($resultOrder)){
			$num_result = mysqli_num_rows($resultOrder);
		}
		echo '<input type="hidden" id ="username" value="'.$username.'">';
		echo '<div id ="leftcolumn">';
		echo "<a href='#' id ='show_info'>Edit/Check My Info</a></br>";
		echo "<a href='#' id ='show_order_history'>My Order History</a></br>";
		echo "<a href='#' id ='show_change_psw'>Change Password</a></div>";
		echo '<div id = "rightcolumn">';
		echo 	'<div id = "info">';
		echo '<form action="functions/update_info.php" method ="post" onSubmit ="return formInfoValidate()">';
		echo 		'<table>';
		echo 			'<tr>';
		echo 				'<td>Fullname*</td>';
		echo 				'<td><input type="text" name ="fullname" id ="fullname" value="'.$fullname.'"></td>';
		echo 				'<td><span class = "error" id ="errorName">Invalid!</span></td>';
		echo 			'</tr>';
		echo 			'<tr>';
		echo 				'<td>Email*</td>';
		echo 				'<td><input type="text" id ="email" name="email" value="'.$email.'"></td>';
		echo 				'<td><span class = "error" id ="errorEmail">Invalid!</span></td>';
		echo 			'</tr>';
		echo 			'<tr>';
		echo 				'<td>Handphone* (will be used as a default contact for shipping)</td>';
		echo 				'<td><input type="text" id ="handphone" name="handphone" value="'.$handphone.'"></td>';
		echo 				'<td><span class = "error" id ="errorHandphone">Invalid!</span></td>';
		echo 			'</tr>';
		echo 			'<tr>';
		echo 				'<td>Address (will be used as a default shipping address)</td>';
		echo 				'<td><input type="text" name="address" id ="address" value="'.$address.'"></td>';
		echo 			'</tr>';
		echo 			'<tr>';
		echo 				'<td></td>';
		echo 				'<td><button type="submit" id ="save_info" style="float:left;">Save Now</button></td>';
		echo 			'</tr>';
		echo 		'</table>';
		echo '</form>';
		echo 	'</div>';
// -------------------------------------------------------------------------------------------------------

		echo 	'<div id = "change_psw" style="display:none;">';
		echo '<form action="functions/update_psw.php" method ="post" onSubmit ="return formPswValidate()">';
		echo 		'<table>';
		echo 			'<tr>';
		echo 				'<td>Current Password</td>';
		echo 				'<td><input type="password" id ="pendpsw" ></td>';
		echo 			'</tr>';
		echo 			'<tr>';
		echo 				'<td>New Password</td>';
		echo 				'<td><input type="password" name = "newpsw" id ="newpsw" ></td>';
		echo 				'<td><span class = "error" id ="errorPsw">Invalid!</span></td>';		
		echo 			'</tr>';
		echo 			'<tr>';
		echo 				'<td>Repeat New Password</td>';
		echo 				'<td><input type="password" id ="newpsw-repeat" ></td>';
		echo 			'</tr>';
		echo 			'<tr>';
		echo 				'<td></td>';
		echo 				'<td><button type="submit" id ="save_new_psw" style="float:left;">Change Password</button></td>';
		echo 			'</tr>';
		echo 		'</table>';
		echo '</form>';
		echo 	'</div>';
// -----------------------------------------------------------------------------------------------------------

		echo 	'<div id = "order_history" style="display:none;">';
		if ($num_result > 0){
			echo 		"<table border = '1'>";
			echo 			"<thead>";
			echo 				"<tr>";
			echo 					"<th></th>";
			echo 					"<th>Date Order</th>";
			echo 					"<th>Receiver</th>";
			echo 					"<th>Address</th>";
			echo 					"<th>Chosen Time</th>";
			echo 					"<th>Total Price</th>";
			echo 					"<th>Status</th>";
			echo 				"</tr>";
			echo 			"</thead>";
			while($row = mysqli_fetch_array($resultOrder)) {
				$orderId = $row['orderid'];
				echo 			'<tr>';
				echo 				'<td><span class="show_modal" id = "'.$orderId.'"><a href="#">Details</a></span></td>';
				echo 				'<td>'.$row['dateorder'].'</td>';
				echo 				'<td>'.$row['receiver'].'</td>';
				echo 				'<td>'.$row['address'].'</td>';
				echo 				'<td>'.$row['prefertime'].'</td>';
				echo 				'<td>'.$row['totalprice'].'$</td>';
				echo 				'<td>'.$row['status'].'</td>';
				echo 			'</tr>';
			}
			echo 		'</table>';
			mysqli_data_seek($resultOrder, 0);
			while($row = mysqli_fetch_array($resultOrder)) {
				$orderIdForDetails = $row['orderid'];
				$sqlDetails = "SELECT * FROM `orderdetails` WHERE `orderid` = '$orderIdForDetails'";
				$resultDetails = $db->query($sqlDetails);
				echo '<div id="modal_'.$orderIdForDetails.'" class="modal">';
				echo 	'<div class="modal-content animate" border = "1">';
				echo '<table border ="1">';
				echo 		"<thead>";
				echo 			"<tr>";
				echo 				"<th>Food Name</th>";
				echo 				"<th>Quantity</th>";
				echo				"<th>Subtotal</th>";
				echo 			"</tr>";
				echo 		"</thead>";
				while($rowDetails = mysqli_fetch_array($resultDetails)) {
					echo 	'<tr>';
					echo 		'<td>'.$rowDetails['foodname'].'</td>';
					echo 		'<td>'.$rowDetails['quantity'].'</td>';
					echo 		'<td>'.$rowDetails['subtotal'].'$</td>';
					echo 	'</tr>';
				}
				echo 	'</table>';
				echo "<span onclick='document.getElementById(\"modal_".$orderIdForDetails."\").style.display=\"none\"' class=\"close\"><button type='button'>Go back</button></span>";
				echo '</div>';
				echo '</div>';
			}
		}
		else{
			echo "No record";
		}
		echo 	'</div>';
		?>
	</div>
</body>
</html>
