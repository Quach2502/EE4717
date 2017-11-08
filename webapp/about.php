<head>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!--    <link rel="stylesheet" href="../css/add_item_quantity.css">-->
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
    <div class="content-wrap">
        <div class="content">
    <h4>About us</h4>
    <span class="subhead">OUR STORY</span>
    <p>
        247Food Service was founded in 2017, originally to serve Nanyang Technological University (NTU) students.
        Offering 24 hour food delivery with competitive price, it has gained great success among NTU community. Since then,
        we have continously upgraded and expanded our service to serve larger number of audiences with better quality. Today,
        we are one of the biggest online food ordering website in Singapore, offering variety of food with one-click ordering
        and less-than-one-hour food delivery.
        <br><br>
        Just visit us at <strong>247Food.com</strong>, browsing for your favorite food, click order and we will bring it to your doorstep.
    </p>
    </div>
    </div>
</main>
<?php
include "templates/footer.php";
?>

</body>
</html>

