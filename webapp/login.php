<html>
<head>
    <!-- <script type="text/javascript" src = "../js/utilsLoginPage.js"></script>
    <script type ="text/javascript" src = "../js/initLogin.js"></script> -->
    <link rel="stylesheet" href="../css/login_form.css">
    <link rel="stylesheet" href="../css/home.css">
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
    .content-centered{
        margin: auto;
        display: inline-block;
    }

</style>
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
                    <img src="../asset/avt.png" alt="Avatar" class="avatar" style="height:100%;width: 100%;">
                </div>

                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id ="username" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id ="psw" required>
                    <!-- <label><span class = "error" id ="errorMes">Wrong username or password</span></label> -->
                    <?php 
                        if (isset($_GET["loginFailed"])) {echo "<span class='error' style='display:inline;'>Wrong Username or Password.</span>"; }
                    ?>
                    <button type="submit" id="loginbtn">Login</button>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <span class="psw">Forgot <a href="#">password?</a></span>
                    <span style="float:left;"><a href="registration.html">Register</a></span>
                </div>
            </form>

        </div>
    </div>
</header>
</body>
</html>
