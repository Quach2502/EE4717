
<html>
<head>
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
<!--    Navigation bar -->
<header id="">
    <nav class="display">
        <a href="#food">Food</a>
        <a href="#search">Search</a>
        <a href="#about">About us</a>
        <a href="#feedback">Feedback</a>
        <a href="#account">My Account</a>
        <a href="#login">Login</a>
        <a href="#cart">Cart</a>
    </nav>

    <div class = "content-wrap">
        <?php
        /**
         * Created by IntelliJ IDEA.
         * User: long
         * Date: 30/10/17
         * Time: 4:30 PM
         */

        @$db = new mysqli('localhost', 'root', 11111111, myuser);
        if (mysqli_connect_errno()){
            echo 'cannot connect to database';
            exit;
        }

        $imageId ="";
        $imageName="";
        $imageLink = "";
        $imageDescription = "";

        $query = "select * from foodimage";
        $result = $db->query($query);
        $num_result = $result->num_rows;
        //echo $num_result;

        for ($i=0; $i<$num_result; $i++){
            $row = $result->fetch_assoc();
            $imageId = $row['id'];
            $imageName = $row['name'];
            $imageLink = "../asset/" . $row['link'];
            $imageDescription = $row['description'];

            echo "<div class='five-column'> ";
            echo "<div class='content-centered'>";
            echo "<img src='".$imageLink."' class='img-thumbnail'>";
            echo "<h2> Food Name: ".$imageName."</h2>";
            //    echo "<p> Food Id: ".$imageId."</p>";
            echo "<p> Food Description: ".$imageDescription."</p>";
            echo "</div>";
            echo "</div>";
        }

        ?>
    </div>
</header>
</body>
</html>
