<html>
<head>
    <link rel="stylesheet" href="../css/home.css">
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

                        if ($i % 5 == 0) {
                            echo "<div class='row'>";
                        }

                        echo "<div class='col five-col'> ";
                        echo "<form action='food_info.php' method='post'>";
                        echo "<div class='food-info'>";
                        echo "<input name='foodid' value='$foodId' hidden>";
                        //                            echo "<input type='image' src='".$imageLink."' class='img-thumbnail'>";
                        echo "<span class='badge-info'>30<br><span class = 'label'>mins</span></span>";
                        echo "<span class='tag'>Promoted</span>";
                        echo "<div class = \"img-thumbnail\" style =\"background-image: url('$imageLink');\"></div>";
                        echo "<h3> Food Name: " . $foodName . "</h3>";
                        //    echo "<p> Food Id: ".$imageId."</p>";
                        echo "<h1> Price: SGD $" . $foodPrice . "</h1>";
                        echo "<button>Order now! </button>";
                        echo "</div>";
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
<script src="../js/initHomePage.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/searchbar.js"></script>
</body>
</html>
