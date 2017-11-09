<!DOCTYPE html>
<html lang = "en">
<head>
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/navbar.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/modal.css">
	<link rel="stylesheet" href="../css/table.css">
	 <link rel="stylesheet" href="../css/user_info.css">

	<meta charset = "utf-8">
	<style>
	.success{
		color: rgb(50,205,50);
	}
	input[type=checkbox]{
		width: 50%;
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
			$admin = $_SESSION['valid_user'];
			$sql = "SELECT * FROM `orderhistory` ORDER BY `dateorder` DESC LIMIT 20";
			$num_result = 0;
			$resultOrder = $db->query($sql);
			if(isset($resultOrder)){
				$num_result = mysqli_num_rows($resultOrder);
			}
			if ($num_result > 0){
				echo 	'<form id = "admin_order_status" action ="functions/admin_update_order_status.php" method="post">';
				echo 		"<table border = '1'>";
				echo 			"<thead>";
				echo 				"<tr>";
				echo 					"<th></th>";
				echo 					"<th>Username</th>";
				echo 					"<th>Date Order</th>";
				echo 					"<th>Receiver</th>";
				echo 					"<th>Address</th>";
				echo 					"<th>Chosen Time</th>";
				echo 					"<th>Total Price</th>";
				echo 					"<th>Status</th>";
				echo 					"<th>Toggle Status</th>";
				echo 				"</tr>";
				echo 			"</thead>";
				while($row = mysqli_fetch_array($resultOrder)) {
					$orderId = $row['orderid'];
					echo 			'<tr>';
					echo 				'<td><span class="show_modal" id = "'.$orderId.'"><a href="#">Details</a></span></td>';
					echo 				'<td>'.$row['username'].'</td>';
					echo 				'<td>'.$row['dateorder'].'</td>';
					echo 				'<td>'.$row['receiver'].'</td>';
					echo 				'<td>'.$row['address'].'</td>';
					echo 				'<td>'.$row['prefertime'].'</td>';
					echo 				'<td>'.$row['totalprice'].'$</td>';
					echo 				'<td>'.$row['status'].'</td>';
					echo 				'<td><input type="checkbox" name="toggle_status" value="'.$orderId.'"></td>';
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
				echo 				'<button type="button" id ="update_order_status_btn" style="margin:auto;padding:5px;">Update</button><br>';
				if (isset($_GET["updateOrderStatus"])) {echo "<span class='success' style='display:inline;'>Successful!</span>"; }
				echo '<input hidden id = "toggle_array" name ="toggle_array[]" value ="">';
				echo 	'</form>';
			}
			else{
				echo "No record in database";
			}
			?>
		</div>
	</div>
	<?php
	include "templates/footer.php";
	?>

	<script type="text/javascript" src = "../js/utilsAdminOrderStatus.js"></script>
	<script type ="text/javascript" src = "../js/initAdminOrderStatus.js"></script>
</body>
</html>
