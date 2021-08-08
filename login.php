<?php
// including db_connection file
include('includes/db_connection.php')

?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style -->
    <link href="assets/css/register.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="img">
        <img src="assets/img/registerImage/petslogin.svg">
    </div>
    <div class="login-content">
        <form action="login.php" method="POST">
            <?php
            // including errors.php file
            include('includes/errors.php');
            ?>

            <img src="assets/img/registerImage/avatar.svg">
            <h2 class="title">Log In 🐶</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="div">
                    <h5>Email Address</h5>
                    <input type="email" class="input" name="email" required="true">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password" required="true">
                </div>
            </div>
            <a href="includes/forgot_password.php">Forgot Password?</a>
            <br>
            <a id="registerLink" href="Register.php">Not yet A Member ? Sign Up 🖊</a>
            <input type="submit" name="login" class="btn" value="Login">
        </form>
    </div>
</div>
<!-- Script -->
<script src="assets/js/app.js"></script>
</body>
</html>
