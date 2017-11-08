<!DOCTYPE html>
<html lang = "en">
<head>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/modal.css">
	<link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/user_info.css">

	<title>Food Product</title>
	<meta charset = "utf-8">
	<style>
        .success{
            color: rgb(50,205,50);
        }


</style> 
</head>
<body>
<div class = "content-wrap">
	<div class = "wrapper">
		<header id="">
			<?php
			include "templates/navbar.php";
			?>
		</header>
		<?php
//        echo "<div class='title'>My account</div>";
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
		$sql = "SELECT * FROM `orderhistory` WHERE `username` = '$username' ORDER BY `dateorder` DESC LIMIT 10";
		$num_result = 0;
		$resultOrder = $db->query($sql);
		if(isset($resultOrder)){
			$num_result = mysqli_num_rows($resultOrder);
		}
		echo '<input type="hidden" id ="username" value="'.$username.'">';
		echo '<div id ="leftcolumn">';
		echo'<div class="content">';
		echo "<a href='#' id ='show_info'>Edit/Check My Info</a></br>";
		echo "<a href='#' id ='show_order_history'>My Order History</a></br>";
		echo "<a href='#' id ='show_change_psw'>Change Password</a></div>";
        echo'</div>';


		echo '<div id = "rightcolumn">';
        echo'<div class="content">';
		echo 	'<div id = "info">';
		echo '<form action="functions/update_info.php" method ="post" onSubmit ="return formInfoValidate()">';
		echo 		'<table>';
		echo '<colgroup>';
		echo '<col span="1" style="width: 50%;">';
		echo '<col span="1" style="width: 35%;">';
		echo '<col span="1" style="width: 15%;">';
		echo '</colgroup>';
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
		echo 		'</table>';
		echo 				'<button type="submit" id ="save_new_psw" style="margin:auto;padding:5px;">Save Now</button>';
		echo '</form>';
        if (isset($_GET["updateInfo"])) {echo "<span class='success' style='display:inline;'>Successful!</span>"; }

		echo 	'</div>';
// -------------------------------------------------------------------------------------------------------

		echo 	'<div id = "change_psw" style="display:none;">';
		echo '<form action="functions/update_psw.php" method ="post" onSubmit ="return formPswValidate()">';
		echo 		'<table>';
		echo '<colgroup>';
		echo '<col span="1" style="width: 50%;">';
		echo '<col span="1" style="width: 35%;">';
		echo '<col span="1" style="width: 15%;">';
		echo '</colgroup>';
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
		echo 				'<td><button type="submit" id ="save_new_psw" style="float:left;padding:5px;">Change Password</button></td>';
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
        echo'</div>';
		?>
	</div>
</div>
    <?php
    include "templates/footer.php";
    ?>

    <script type="text/javascript" src = "../js/utilsUserInfoPage.js"></script>
    <script type ="text/javascript" src = "../js/initUserInfoPage.js"></script>
</body>
</html>
