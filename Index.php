<?php
    // allow the config file
    define('__CONFIG__',TRUE);
    // require the config file
    require_once "Inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">

    <a href="php_login_course/PHP-login-system/Login.php">Login</a>
    <a href="php_login_course/PHP-login-system/Register.php">Register</a>

    </div>

    <?php require_once "Inc/footer.php"; ?>
    
  </body>
</html>
