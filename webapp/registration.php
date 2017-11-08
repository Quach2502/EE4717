<html>
<head>
    <script type="text/javascript" src = "../js/registrationValidate.js"></script>
    <script type ="text/javascript" src = "../js/initRegistration.js"></script>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/registration_form.css">
    <link rel="stylesheet" href="../css/footer.css">
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
        /*max-width: 90%;
    /*    margin: 20px auto;
    }
    .content-centered{
        margin: auto;
        display: inline-block;
    }*/

</style>
</head>
<body>
    <!--    Navigation bar -->
    <header id="">
        <?php
        include "templates/navbar.php";
        ?>
    </header>
<main>
    <div class = "content-wrap">
        <div class ="regis-form">
            <form action="./register.php" method ="post" id ="register-form" onSubmit="return formValidate()">
              <div class="container">
                <fieldset>

                    <label><b>Your Full Name*</b><span class = "error" id ="errorName">
                    Invalid!</span></label>
                    <input type="text" placeholder="Enter Full Name" id ="fullname" name="fullname" required>

                    <label><b>Email*</b><span class = "error" id ="errorEmail">
                    Invalid!</span></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>

                    <label><b>Handphone*(8 numbers)</b><span class = "error" id ="errorHandphone">
                    Invalid!</span></label>
                    <input type="text" placeholder="Enter Handphone No" name="handphone" id="handphone" required>

                    <label><b>Address</b></label>
                    <input type="text" placeholder="Enter Your Address" name="address" id="address" >

                    <label><b>Username* (at least 5 characters)</b><span class = "error" id ="errorUsername">
                    Invalid!</span><span class = "error" id ="errorExists">
                    Username has already existed.</span></label>
                    <input type="text" placeholder="Enter User Name" name="username" id="username" required>

                    <label><b>Password* (at least 5 characters)</b><span class = "error" id ="errorPsw">
                    Invalid!</span></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                    <label><b>Repeat Password*</b></label>
                    <input type="password" placeholder="Repeat Password" id ="psw-repeat" required>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                      <button type="submit" id="signupbtn">Sign Up</button>
                  </div>
              </fieldset>
          </div>
      </form>
  </div>
</div>
</main>
    <?php
    include "templates/footer.php";
    ?>
</body>
</html>
