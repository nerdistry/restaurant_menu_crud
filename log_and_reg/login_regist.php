<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="login_regist.css">
</head>

<body>

    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
               <a href="https://web.facebook.com/"><img src="../media/icons8-facebook-30.png"></a>
               <a href="https://www.instagram.com/"><img src="../media/icons8-instagram-30.png"></a>
               <a href="https://twitter.com/"><img src="../media/icons8-twitter-24.png"></a>
            </div>


            <form id="login" class="input-group" action="login_process.php" method="POST">
                <input type="text" name="user_name" class="input-field" placeholder="Username" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <!-- <input type="checkbox" class="chech-box"><span>Remember Password</span> -->

                <input type="submit" value="Login" class="submit-btn">
            </form>
            <form id="register" class="input-group" action="regist_process.php" method="POST">
                <input type="text" name="user_name" class="input-field" placeholder="Username" required>
                <input type="email" name="email" class="input-field" placeholder="Email" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="text" name="user_type" class="input-field" placeholder="User Type" required>
                <!-- <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions.</span> -->
                <input type="submit" class="submit-btn" value="Register">
            </form>

        </div>


       
    </div>


    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>

</body>


</html>