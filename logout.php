<?php
// including db_connection get_included_files
include('includes/db_connection.php');

// destroy session_start

unset($_SESSION["username"]);
unset($_SESSION["email"]);
// redirect to index with login and register btnlog

header("location:index.php");

 ?>
