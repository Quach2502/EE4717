<!--/**-->
<!--* Created by IntelliJ IDEA.-->
<!--* User: long-->
<!--* Date: 30/10/17-->
<!--* Time: 4:30 PM-->
<!--*/-->

<html>
<head>
    <link rel="stylesheet" href="../css/home.css">
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
        session_start();
        if(isset($_SESSION['valid_user'])){
            echo "<a href='#'>Welcome, {$_SESSION['valid_user']}</a>";
            echo '<a href="cart.php">My Cart</a>';
        }else{    
            echo "<a href='login.php'>Login</a>";
        }
        ?>
    </nav>
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
                    include "food_query.php";
                    for ($i=0; $i<$num_result; $i++) {
                        $row = $result->fetch_assoc();
                        $foodId = $row['foodid'];
                        $foodName = $row['name'];
                        $imageLink = "../asset/" . $row['imagelink'];
                        $foodPrice = $row['price'];

                        echo "<div class = 'myslider fade col four-col'>";
                            echo "<div class = \"img-slider\" style =\"background-image: url('$imageLink')\">";
                                    echo "<div class ='caption'>Caption 1</div>";
                            echo "</div>";
                        echo "</div>";

                    }
                ?>

                <a class="prev" onclick="sliderPlus(-1)">&#10094;</a>
                <a class="next" onclick="sliderPlus(1)">&#10095;</a>
            </div>
<!---->
<!--            <div style="text-align:center">-->
<!--                <span class="dot" onclick="currentSlide(1)"></span>-->
<!--                <span class="dot" onclick="currentSlide(2)"></span>-->
<!--                <span class="dot" onclick="currentSlide(3)"></span>-->
<!--            </div>-->
        </section>

        <section id = "food-thumbnail">
        <?php

        include "food_query.php";

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
                    echo "<form action='food_info.php' method='post'>";
                        echo "<div class='food-info'>";
                            echo "<input name='foodid' value='$foodId' hidden>";
//                            echo "<input type='image' src='".$imageLink."' class='img-thumbnail'>";
                            echo "<span class='badge-info'>30<br><span class = 'label'>mins</span></span>";
                            echo "<span class='tag'>Promoted</span>";
                            echo "<div class = \"img-thumbnail\" style =\"background-image: url('$imageLink');\"></div>";
                            echo "<h3> Food Name: ".$foodName."</h3>";
                            //    echo "<p> Food Id: ".$imageId."</p>";
                            echo "<h1> Price: SGD $".$foodPrice."</h1>";
                            echo "<button>Order now! </button>";
                        echo "</div>";
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
</body>
</html>
