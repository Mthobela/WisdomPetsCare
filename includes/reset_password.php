<?php
// including db_connection file
include('db_connection.php')

?>



    <!DOCTYPE html>
    <html>
    <head>
        <title>Reset Password</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- style -->
        <link href="../assets/css/register.css" rel="stylesheet">
    </head>
    <body>

    <div class="container">

        <div class="login-content">
            <form action="reset_password.php" method="POST">
                <?php
                // including errors.php file
                include('includes/errors.php');
                ?>

                <img src="assets/img/registerImage/avatar.svg">
                <h2 class="title">Reset Password</h2>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="Confirm_Password">
                    </div>
                </div>
                <input type="submit" name="reset" class="btn" value="Reset">
            </form>
        </div>
    </div>
    <!-- Script -->
    <script src="assets/js/app.js"></script>
    </body>
    </html>
<?php
