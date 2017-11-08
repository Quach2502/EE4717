<html>
<head>
    <!-- <script type="text/javascript" src = "../js/utilsLoginPage.js"></script>
        <script type ="text/javascript" src = "../js/initLogin.js"></script> -->

    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/login_form.css">
</head>
<body>
    <!--    Navigation bar -->

    <header id="">
        <?php
        include "templates/navbar.php";
        ?>
    </header>

    <div class = "content-wrap">
        <div class ="login-form">
            <form action="functions/authmain.php" method="post">
              <div class="imgcontainer">
                <img src="../asset/avt.png" alt="Avatar" class="avatar" style="">
            </div>

            <div class="container">
                <label style="float:left;"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" class="inputLoginForm" id ="username" required>

                <label style="float:left;"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" class ="inputLoginForm" name="psw" id ="psw" required>
                <!-- <label><span class = "error" id ="errorMes">Wrong username or password</span></label> -->
                <?php 
                if (isset($_GET["loginFailed"])) {echo "<span class='error' style='display:inline;'>Wrong Username or Password.</span>"; }
                    ?>
                    <button type="submit" id="loginbtn">Login</button>
                </div>
                <div class="container" style="background-color:#f1f1f1;">
                    <div style="vertical-align: middle; height: 16px;">
                    <span class="psw">Forgot <a href="#">password?</a></span>
                    <span style="float:left;"><a href="registration.php">Register</a></span>
                    </div>
                </div>
            </form>

        </div>
    </div>
</header>
</body>
</html>
