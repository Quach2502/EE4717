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
			$username = $_POST['username'];
			$username = mysqli_real_escape_string($db,$username);
			$fullname = $_POST['fullname'];
			$fullname = mysqli_real_escape_string($db,$fullname);
			$address = $_POST['address'];
			$address = mysqli_real_escape_string($db,$address);
			$handphone = $_POST['handphone'];
			$handphone = mysqli_real_escape_string($db,$handphone);
			$psw = $_POST['psw'];
			$psw = mysqli_real_escape_string($db,$psw);
			$email = $_POST['email'];
			$email = mysqli_real_escape_string($db,$email);
			$psw = md5($psw);
			$sql = "INSERT INTO `user`(`username`, `fullname`, `email`, `handphone`, `password`, `address`) VALUES (\"".$username."\",\"".$fullname."\",\"".$email."\",\"".$handphone."\",\"".$psw."\",\"".$address."\")";

			$result = $db->query($sql);

			if (!$result) {
				echo "There is something wrong now with database. Please try again later!<br>";
				echo "<a href='home.php'>Go back to home page.</a><br>";
				echo "<a href='registration.html'>Register again.</a>";
			}
			else{
				echo "Sucessfully. You can <a href='login.php'>log in </a>now<br>";
				echo "<a href='home.php'>Go back to home page.</a>";
			}
			?>
		</div>
	</header>
</body>
</html>