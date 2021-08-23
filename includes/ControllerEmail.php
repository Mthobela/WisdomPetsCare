<?php

require_once('db_connection.php');

function sendResetPassword($userEmail, $token) {
    global $mailer;

    $body = '<!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="utf-8">
        <title> Reset Password </title>
      </head>
      <body>
        <div class="wrapper">
            <p> 
             Hello,
             Please click on the bellow to reset your password.
            </p>
            <a href="http://localhost/wisdompetscare/index.php?token='.$token.'">Reset your password</a>
        </div>
      </body>
      </html>
    
    ';

    $message =(new Swift_Message('Reset your password'))->setFrom(Email)->setTo($userEmail)->setBody($body,'text/html');

    // send message
    $output = $mailer->send($message);
}
