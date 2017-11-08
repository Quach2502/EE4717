<html>
<head>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/food_thumbnail.css">
    <link rel="stylesheet" href="../css/add_item_quantity.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
<!--    Navigation bar -->
<header id="">
    <?php
    include "templates/navbar.php";
    ?>
</header>

<main>
    <div class="content-wrap">

        <section id="food-thumbnail">
            <?php

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

            include "functions/dbconnect.php";
            if (isset($_POST['foodids'])) {
                $foodIdsString = (string)$_POST['foodids'];
                $foodIds = explode(",", $foodIdsString);
                //                var_dump($foodIds) ;
                for ($i = 0; $i < sizeof($foodIds); $i++) {
                    $query = "SELECT * FROM `food` WHERE foodid ='$foodIds[$i]' ";
                    $result = $db->query($query);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $foodName = $row['name'];
                        $imageLink = "../asset/" . $row['imagelink'];
                        $foodPrice = $row['price'];
                        $foodId = $row['foodid'];

                        if ($i % 5 == 0) {
                            echo "<div class='row'>";
                        }

                        echo "<div class='col five-col'> ";

                        echo "<div class='food-info'>";

//                            echo "<input type='image' src='".$imageLink."' class='img-thumbnail'>";
                        echo "<span class='badge-info'>30<br><span class = 'label'>mins</span></span>";
                        echo "<span class='tag'>Promoted</span>";
                        echo "<div class = \"img-thumbnail\" style =\"background-image: url('$imageLink');\" onclick = \"tofoodinfo($foodId)\"></div>";
                        echo "<span class='food-name'> Food Name: " . $foodName . "</span>";
                        //    echo "<p> Food Id: ".$imageId."</p>";


                        echo '<div class="center">';
                        echo '<div class="input-group">';
                        echo "<span class='food-price'>S$" . $foodPrice . "</span>";
                        echo '<span class="input-group-btn">';
                        echo '<button id="add-btn-' . $foodId . '" type="button" class="btn btn-success" onclick="add(' . $foodId . ')">';
                        echo '<span class="glyphicon glyphicon-plus"></span>';
                        echo ' </button>';
                        echo '</span>';

                        echo '<span class="input-group-btn">';
                        echo '<button id = "minus-btn-' . $foodId . '" type="button" class="btn btn-danger" onclick="minus(' . $foodId . ')">';
                        echo '<span class="glyphicon glyphicon-minus"></span>';
                        echo '</button>';
                        echo ' </span>';

                        echo '<input id="input-quantity-' . $foodId . '" type="number" class="form-control input-number" placeholder="1" value="1">';

                        echo '<span class="input-group-btn">';
                        echo '<button id="addcart-btn-' . $foodId . '" type="button" class="btn btn-danger" 
                                                            onclick = "addtocart(' . $foodId . ')">Add to cart</button>';
                        echo '</span>';
                        echo '</div>';
                        echo '</div>';
                        echo "</div>";

                        echo "<form id ='foodinfo-form-" . $foodId . "' action='food_info.php' method='post'>";
                        echo "<input name='foodid' value='" . $foodId . "' hidden>";
                        echo "</form>";

                        echo "<form id = 'addcart-form-" . $foodId . "' action= 'search.php' method='post' onSubmit='return formValidate()' >";
                        echo '<input name="foodid" hidden value=' . $foodId . '>';
                        echo '<input name="foodname" hidden value=' . $foodName . '>';
                        echo '<input id="quantity-' . $foodId . '" name="quantity" type="number" value=0 hidden>';
                        echo '<input id="subtotal-' . $foodId . '" name="subtotal" type="number" value=0 hidden>';
                        echo '<input id="foodprice-' . $foodId . '" value=' . $foodPrice . ' hidden>';
                        echo '<input id ="add_to_cart" name ="add_to_cart" hidden>';
                        echo '<input name="foodids" hidden value=' . $foodIdsString . '>';
                        echo "</form>";

                        echo "</div>";

                        if ($i % 5 == 4) {
                            echo "</div>";
                        }
                    }
                }
            }

            else{
                echo "Search returns no item";
            }
            ?>
        </section>
    </div>

</main>
<?php
include "templates/footer.php";
?>


<script src="../js/initHomePage.js"></script>
<script src="../js/add_item_quantity.js"></script>
<script src="../js/searchbar.js"></script>
</body>
</html>
