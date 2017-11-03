<!--/**-->
<!--* Created by IntelliJ IDEA.-->
<!--* User: long-->
<!--* Date: 30/10/17-->
<!--* Time: 4:30 PM-->
<!--*/-->

<html>
<head>


    <style>
        html{
            box-sizing: border-box;
        }

        *, *:before, *:after{
            box-sizing: inherit;
        }

        body{
            margin: 0 auto;
            max-width: 90%;

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

            /*max-width: 1500px;*/
            margin: 20px auto;
            /*display: flex;*/
            /*align-items: center;*/

            text-align: center;
        }
        .hero-wrap{

        }

        .hero-image{
            background-image: url('../asset/theme.jpg');
            background-repeat: no-repeat;
            background-position:center;
            background-size: cover;
            text-align: left;
            /*display: table;*/
                /*width: 100%;*/
            height: 100%;
            position:relative;

        }

        .hero-text{
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgb(255, 247, 252);

        }

        .herotext >h1{
            font-size: 2em;
        }

        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container {
            max-width: 500px;
            position: relative;
            margin: auto;
        }

        .myslider {
            display: none;
        }

        .prev, .next{
            cursor:pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top:-22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }

        .next{
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover{
            background-color: rgba(0,0,0,0.8);
        }

        .caption {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .dot {
            cursor:pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }


        .row {
            margin: auto;
            clear: both;

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
            content: "";
            display: table;
        }

        .img-thumbnail{
            width: 280px;
            height: 210px;
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
                <div class = "myslider fade five-column ">
                    <img src = "../asset/image1.jpg" style="width: 100%">
                    <div class ="caption">Caption 1</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src = "../asset/image2.jpg" style="width: 100%">
                    <div class ="caption">Caption 2</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src = "../asset/image3.jpg" style="width: 100%">
                    <div class ="caption">Caption 3</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src="../asset/image4.jpeg" style="width: 100%">
                    <div class ="caption">Caption 4</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src="../asset/image5.jpg" style="width: 100%">
                    <div class ="caption">Caption 5</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src="../asset/image6.jpg" style="width: 100%">
                    <div class ="caption">Caption 6</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src="../asset/image7.jpeg" style="width: 100%">
                    <div class ="caption">Caption 7</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src="../asset/image8.jpg" style="width: 100%">
                    <div class ="caption">Caption 7</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src="../asset/image9.jpeg" style="width: 100%">
                    <div class ="caption">Caption 7</div>
                </div>

                <div class = "myslider fade five-column ">
                    <img src="../asset/image10.jpeg" style="width: 100%">
                    <div class ="caption">Caption 7</div>
                </div>


                <a class="prev" onclick="sliderPlus(-1)">&#10094;</a>
                <a class="next" onclick="sliderPlus(1)">&#10095;</a>
            </div>


            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>

        <section id = "food-thumbnail">
        <?php

            @$db = new mysqli('localhost', 'root', 11111111, ee4717);
            if (mysqli_connect_errno()){
                echo 'cannot connect to database';
                exit;
            }

            $imageId ="";
            $imageName="";
            $imageLink = "";
            $imageDescription = "";

            $query = "select * from food";
            $result = $db->query($query);
            $num_result = $result->num_rows;
    //        echo $num_result;

            for ($i=0; $i<$num_result; $i++){

                $row = $result->fetch_assoc();
                $foodId = $row['foodid'];
                $foodName = $row['name'];
                $imageLink = "../asset/" . $row['imagelink'];
                $foodPrice = $row['price'];
                if ($i % 5 == 0){
                    echo"<div class='row'>";
                }

                echo "<div class='five-column'> ";
                    echo "<form action='food_info.php' method='post'>";
                        echo "<div class='content-centered'>";
                            echo "<input name='foodid' value='$foodId' hidden>";
                            echo "<input type='image' src='".$imageLink."' class='img-thumbnail'>";
                            echo "<h2> Food Name: ".$foodName."</h2>";
                            //    echo "<p> Food Id: ".$imageId."</p>";
                            echo "<p> Price: SGD $".$foodPrice."</p>";
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
