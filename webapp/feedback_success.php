
<html>
<head>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
	<!--    Navigation bar -->
	<header id="">
        <header id="">
            <?php
            include "templates/navbar.php";
            ?>
</header>

<div class = "content-wrap">
    <?php
    include "functions/dbconnect.php";
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($db,$name);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($db,$email);
    $feedback = $_POST['feedback'];
    $feedback = mysqli_real_escape_string($db,$feedback);
    $sql = "INSERT INTO `feedback`(`name`,`email`, `feedback`) VALUES (\"".$name."\",\"".$email."\",\"".$feedback."\")";

    $result = $db->query($sql);

    if (!$result) {
        echo "There is something wrong now with database. Please try again later!<br>";
        echo "<a href='home.php'>Go back to home page.</a><br>";
        echo "<a href='feedback.php'>Send another feedback.</a>";
    }
    else{
        echo "Your feedback is successfully recorded!<br>";
        echo "<a href='home.php'>Go back to home page.</a><br>";
        echo "<a href='feedback.php'>Send another feedback.</a>";
    }
    ?>
</div>
</header>
</body>
</html>