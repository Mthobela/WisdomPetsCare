<?php
// including db_connection file
include('db_connection.php')

?>



<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style -->
    <link href="../assets/css/register.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="img">
        <img src="../assets/img/registerImage/forgot_password.svg">
    </div>
    <div class="login-content">
        <form action="forgot_password.php" method="POST">
            <?php
            // including errors.php file
            include('errors.php');
            ?>

            <img src="../assets/img/registerImage/avatar.svg">
            <h2 class="title">Recover your Password</h2>
            <p>Please Enter Your Email Address</p>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="div">
                    <h5>Email Address</h5>
                    <input type="email" class="input" name="email" required="true">
                </div>
            </div>

            <input type="submit" name="forgotPassword" class="btn" value="Reset Password">
        </form>
    </div>
</div>
<!-- Script -->
<script src="assets/js/app.js"></script>
</body>
</html>

