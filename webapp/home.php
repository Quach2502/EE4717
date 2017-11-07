<!--/**-->
<!--* Created by IntelliJ IDEA.-->
<!--* User: long-->
<!--* Date: 30/10/17-->
<!--* Time: 4:30 PM-->
<!--*/-->

<html>
<head>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/add_item_quantity.css">
</head>
<body>
<!--    Navigation bar -->
<header id="">
    <?php
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
        include "templates/navbar.php";
    ?>
</header>

<main>
    <div class = "content-wrap">
        <section id="hero" class="hero-wrap">
<!--            <img src ="../asset/theme.jpg">-->
            <div class="hero-image">
                <div class="hero-text">
                    <h1>Food247 Service</h1>
                    <p>Best price online food service</p>
                    <button>Explore now!</button>
                </div>
            </div>
        </section>

        <section id="slider">
            <div class = "slideshow-container">
                <?php
                    include "functions/food_query.php";
                    for ($i=0; $i<$num_result; $i++) {
                        $row = $result->fetch_assoc();
                        $foodId = $row['foodid'];
                        $foodName = $row['name'];
                        $imageLink = "../asset/" . $row['imagelink'];
                        $foodPrice = $row['price'];

                        echo "<div class = 'myslider fade col four-col'>";
                            echo "<div class = \"img-slider\" style =\"background-image: url('$imageLink')\" onclick = \"tofoodinfo($foodId)\">";
                                    echo "<div class ='caption'>".$foodName."</div>";
                            echo "</div>";
                        echo "</div>";

                    }
                ?>

                <a class="prev" onclick="sliderPlus(-1)">&#10094;</a>
                <a class="next" onclick="sliderPlus(1)">&#10095;</a>
            </div>

        </section>

        <section id = "food-thumbnail">
        <?php

        $userid = isset($_SESSION['valid_user'])? $_SESSION['valid_user'] : '';
        echo '<input type="hidden" id ="sessionid" value ="'.$userid.'">';
        $description ='Description here';
        $foodName = 'Name here';
        $price = 'Price here';
        $imageLink = '../asset/error.jpg';
        $restaurant = 'Restaurant here';
        $category = 'Category here';
        if(isset($_POST['add_to_cart'])) {
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
        include "functions/food_query.php";
        for ($i=0; $i<$num_result; $i++){
            $row = $result->fetch_assoc();
            $foodId = $row['foodid'];
            $foodName = $row['name'];
            $imageLink = "../asset/" . $row['imagelink'];
            $foodPrice = $row['price'];

                if ($i % 5 == 0){
                    echo"<div class='row'>";
                }

                echo "<div class='col five-col'> ";

                        echo "<div class='food-info'>";

//                            echo "<input type='image' src='".$imageLink."' class='img-thumbnail'>";
                            echo "<span class='badge-info'>30<br><span class = 'label'>mins</span></span>";
                            echo "<span class='tag'>Promoted</span>";
                            echo "<div class = \"img-thumbnail\" style =\"background-image: url('$imageLink');\" onclick = \"tofoodinfo($foodId)\"></div>";
                            echo "<h3> Food Name: ".$foodName."</h3>";
                            //    echo "<p> Food Id: ".$imageId."</p>";
                            echo "<h1> Price: S$".$foodPrice."</h1>";


                            echo '<div class="center">';
                            echo '<div class="input-group">';
                                echo '<span class="input-group-btn">';
                                    echo '<button id="add-btn-'.$foodId.'" type="button" class="btn btn-success" onclick="add('.$foodId.')">';
                                        echo '<span class="glyphicon glyphicon-plus"></span>';
                                    echo ' </button>';
                                echo '</span>';

                                echo '<span class="input-group-btn">';
                                    echo '<button id = "minus-btn-'.$foodId.'" type="button" class="btn btn-danger" onclick="minus('.$foodId.')">';
                                        echo '<span class="glyphicon glyphicon-minus"></span>';
                                    echo '</button>';
                                echo ' </span>';

                                echo '<input id="input-quantity-'.$foodId.'" type="number" class="form-control input-number" placeholder="1" value="1">';

                                echo '<span class="input-group-btn">';
                                    echo '<button id="addcart-btn-'.$foodId.'" type="button" class="btn btn-danger" 
                                                            onclick = "addtocart('.$foodId.')">Add to cart</button>';
                                echo '</span>';
                            echo '</div>';
                            echo '</div>';
                        echo "</div>";

                    echo "<form id ='foodinfo-form-".$foodId."' action='food_info.php' method='post'>";
                    echo "<input name='foodid' value='".$foodId."' hidden>";
                    echo "</form>";

                    echo "<form id = 'addcart-form-".$foodId."' action= 'home.php' method='post' onSubmit='return formValidate()' >";
                    echo '<input name="foodid" hidden value='.$foodId.'>';
                    echo '<input name="foodname" hidden value='.$foodName.'>';
                    echo '<input id="quantity-'.$foodId.'" name="quantity" type="number" value=0 hidden>';
                    echo '<input id="subtotal-'.$foodId.'" name="subtotal" type="number" value=0 hidden>';
                    echo '<input id="foodprice-'.$foodId.'" value='.$foodPrice.' hidden>';
                    echo '<input id ="add_to_cart" name ="add_to_cart" hidden>';
                    echo "</form>";

                echo "</div>";

            if ($i %5 == 4){
                    echo "</div>";
                }
            }

        ?>
        </section>
    </div>

</main>
<script src="../js/initHomePage.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/searchbar.js"></script>
<script src="../js/add_item_quantity.js"></script>
</body>
</html>