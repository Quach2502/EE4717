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
            text-align: center;
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
        }

        ?>
    </div>
</main>

</body>
</html>
