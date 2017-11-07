<html>
<head>
	<script type="text/javascript" src = "../js/utilsCartPage.js"></script>
	<script type ="text/javascript" src = "../js/initCartPage.js"></script>
    <link rel="stylesheet" href="../css/home.css">
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
  .error{
      color: rgb(255,0,0);
      display: none;
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
    <?php
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
    ?>
    <!--    Navigation bar -->
    <header id="">
      <?php
      include "templates/navbar.php";
      ?>
  </header>

  <main>
      <div class = "content-wrap">
         <?php


         include "functions/dbconnect.php";
         if(!isset($_SESSION['cart'])){
           $_SESSION['cart'] = array();
       }
       if (!isset($_SESSION['valid_user'])){
           echo 'You have not logged in yet.';
           exit;
       }
       $username = $_SESSION['valid_user'];
       $query = "SELECT * FROM `user` WHERE `username` = '{$username}'";
       $result = $db->query($query);
       while($row = $result->fetch_assoc()) {
         $email =  $row['email'];
         $fullname =  $row['fullname'];
         $handphone =  $row['handphone'];
         $address =  $row['address'];
     }
     if(isset($_POST['delete_cart_item'])){
       $item_to_delete = $_POST['delete_cart_item'];
        	// print_r($item_to_delete);
       unset($_SESSION['cart'][$item_to_delete]);
   }
        // print_r($_SESSION['cart']);
   $num_items_cart = count($_SESSION['cart']);
   echo $num_items_cart;
//        var_dump($_SESSION['cart']);
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
      echo "<button type='button' id ='show_info_purchase'>Proceed to purchase</button>";


      echo "<div id = 'info_purchase' style='display:none;'>";
      echo '<form action="functions/update_orderhistory.php" method ="post" onSubmit ="return formValidate()">';
      echo 		'<table>';
      echo 			'<tr>';
      echo 				'<td>Fullname*</td>';
      echo 				'<td><input type="text" name ="fullname" id ="fullname" value="'.$fullname.'" required><input type="hidden" name="total_price" value ="'.$total.'"></td>';
      echo 				'<td><span class = "error" id ="errorName">Invalid!</span></td>';
      echo 			'</tr>';
      echo 			'<tr>';
      echo 				'<td>Preferred delivery date&time*</td>';
      echo 				'<td><input type="datetime-local" id ="date_time" name="date_time" required></td>';
      echo 				'<td><span class = "error" id ="errorDate">We cannot ship to the past ^^</span></td>';
      echo 			'</tr>';
      echo 			'<tr>';
      echo 				'<td>Handphone*</td>';
      echo 				'<td><input type="text" id ="handphone" name="handphone" value="'.$handphone.'" required></td>';
      echo 				'<td><span class = "error" id ="errorHandphone">Invalid!</span></td>';
      echo 			'</tr>';
      echo 			'<tr>';
      echo 				'<td>Address*</td>';
      echo 				'<td><input type="text" name="address" id ="address" value="'.$address.'" required></td>';
      echo 				'<td><span class = "error" id ="errorAddress">Invalid!</span></td>';
      echo 			'</tr>';
      echo 			'<tr>';
      echo 				'<td></td>';
      echo 				'<td><button type="submit" style="float:left;">Purchase</button></td>';
      echo 			'</tr>';
      echo 		'</table>';
      echo '</form>';
      echo '</div>';

  }
  else{
   echo"<p>Your cart is empty</p></br>";
   if(isset($_GET['addOrderHistory'])){
      echo "You have ordered successfully. You can visit your <a href='user_info.php'>Order History</a> to check.";
  }
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
</main>

</body>
</html>
