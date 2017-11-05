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
			<?php
			if(!isset($_SESSION)){
				session_start();
			}
			if(isset($_SESSION['valid_user'])){
				echo "<a href='user_info.php'>Welcome, {$_SESSION['valid_user']}</a>";
				echo '<a href="cart.php">My Cart</a>';
				echo '<a href="logout.php">Logout</a>';
			}else{    
				echo "<a href='login.php'>Login</a>";
			}
			?>
		</nav>

		<div class = "content-wrap">
			<?php
			include "dbconnect.php";
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