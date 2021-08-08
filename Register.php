<?php
// including db_connection file
include('includes/db_connection.php')

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- style -->
    <link href="assets/css/register.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="img">
        <img src="assets/img/registerImage/pets.svg">
    </div>
    <div class="login-content">
        <form action="Register.php" method="POST">

            <?php
            // including errors.php file
            include('includes/errors.php');
            ?>

            <img src="assets/img/registerImage/avatar.svg">
            <h2 class="title">Register 🐱</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Full Name</h5>
                    <input type="text" class="input" name="name" required="true" >

                </div>
            </div>
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

            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5> Confirm Password</h5>
                    <input type="password" class="input" name="password_confirmation" required="true">
                </div>
            </div>
            <br>
            <a id="registerLink" href="login.php">Already A Member ? Sign In 🖊</a>
            <input type="submit" name="submit" class="btn" value="Register">

        </form>
    </div>
</div>
<!-- Script -->
<script src="assets/js/app.js"></script>
</body>
</html>
