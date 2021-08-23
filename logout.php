<?php
// including db_connection file
include('includes/db_connection.php');

// destroy session

unset($_SESSION["username"]);
unset($_SESSION["email"]);
// redirect to index with login and register btn

header("Location:index.php");


?>
