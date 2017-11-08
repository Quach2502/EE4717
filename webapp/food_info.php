<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/add_item_quantity.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/food_info.css">
    <title>Food Product</title>
    <meta charset="utf-8">
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

<main>
    <div class="content-wrap">
<div class="wrapper">
    <div class="title">Food Info</div>
    <?php
    include "functions/dbconnect.php";
    $userid = isset($_SESSION['valid_user']) ? $_SESSION['valid_user'] : '';
    echo '<input type="hidden" id ="sessionid" value ="' . $userid . '">';
    $description = 'Description here';
    $foodName = 'Name here';
    $price = 'Price here';
    $imageLink = '../asset/error.jpg';
    $restaurant = 'Restaurant here';
    $category = 'Category here';
    if (isset($_POST['add_to_cart'])) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        $subtotal = $_POST['subtotal'];
        $quantity = $_POST['quantity'];
        $foodId = $_POST['foodid'];
        $name = $_POST['foodname'];
        if (isset($_SESSION['cart'][$foodId]) || array_key_exists($foodId, $_SESSION['cart'])) {
            $_SESSION['cart'][$foodId]->quantity += $quantity;
            $_SESSION['cart'][$foodId]->subtotal += $subtotal;
        } else {

            $infoCartItem = new InfoCartItem();
            $infoCartItem->quantity = $quantity;
            $infoCartItem->subtotal = $subtotal;
            $infoCartItem->name = $name;
            $_SESSION['cart'][$foodId] = $infoCartItem;
        }


    }
    if (isset($_POST['foodid'])) {
        $foodId = $_POST['foodid'];
        $query = "SELECT * FROM `food` WHERE `foodid` = \"" . $foodId . "\"";
        // $query = "SELECT * FROM `food`";
        $result = $db->query($query);
        while ($row = mysqli_fetch_array($result)) {
            $description = $row['description'];
            $foodName = $row['name'];
            $imageLink = "../asset/" . $row['imagelink'];
            $restaurant = $row['restaurant'];
            $category = $row['category'];
            $price = $row['price'];

        }
    }
    echo '<div id ="leftcolumn" class="col two-col">';
    echo "<img id ='food_image' src = " . $imageLink . "></div>";
    echo '<div id = "rightcolumn" class="col two-col">';
    echo '<div id = "food_detail">';
    echo '<div id = "food_name">' . $foodName . '</div>';
    echo '<div id = "food_price" >Price: S$' . $price . '</div>';
    echo '<input hidden id="price_value" value ="'. $price .'">';
    echo '<div id = "food_category"><div class="category-title">Category</div>' . $category . '</div>';
    echo '<div id = "food_restaurant"><div class="restaurant-title">Restaurant</div>' . $restaurant . '</div>';
    echo '<div id = "food_description"><div class="description-title">Description</div>' . $description . '</div>';


//    echo '<button type="button" id ="order_init">Order Now!</button><br>';

    echo '<form  id = "add_to_cart_form" method ="post" onSubmit="return formValidate()" action="food_info.php">';
    echo '<input name="foodid" type="hidden" value=' . $foodId . '>';
    echo '<input name="foodname" type="hidden" value=' . $foodName . '>';
    echo '</div>';
    ?>
    <input id="add_to_cart" name="add_to_cart" value="Add To Cart" hidden>
    <input id="subtotal" name="subtotal" type="text" value="0" hidden>

    <div id="getQuantity" style="display:none;"></div>
    <div class="center">

        <div class="input-group">

        <span class="input-group-btn">
              <button id="add-btn" type="button" class="btn btn-success"
                      onclick="add()">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>

            <span class="input-group-btn">
              <button id="minus-btn" type="button" class="btn btn-danger"
                      onclick="minus()">
                <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>

            <input id="quantity" name="quantity" type="number" class="form-control" placeholder="1"
                   value="1" onchange="computeFoodPrice()">

            <span class="input-group-btn">
          <button id="addcart-btn" type="button" class="btn btn-danger"
                  onclick="addtocart()">Add to cart</button>
            </span>

            <span class="form-control">

               <span class="text-bold">Subtotal: S$</span>
                <?php
                echo '<span id="subtotalVal" class="text-bold" style="color:red">'.$price.'</span>';
                ?>
            </span>
        </div>

    </div>


    </form>
</div>
    </div>
</main>

<?php
include "templates/footer.php";
?>
</body>

<script type="text/javascript" src="../js/utilsFoodPage.js"></script>
<script type="text/javascript" src="../js/initFoodPage.js"></script>
</html>
