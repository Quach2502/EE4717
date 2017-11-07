<html>
<head>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/feedback.css">
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

    <div class="container">
        <form action="feedback_success.php" method="POST">

            <label><b>Your Name*</b><span class = "error" id ="errorName">
                    Invalid!</span></label>
            <input type="text" placeholder="Enter Your Name" id ="name" name="name" required>

            <label><b>Email*</b><span class = "error" id ="errorEmail">
                    Invalid!</span></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="feedback">Your feedback</label>
            <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</header>

<main>

</main>

</body>
</html>
