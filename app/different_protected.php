<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title> Inna chroniona strona </title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php print(_APP_URL);?>/resources/view.css">
</head>
<body>
  <div class='pure-menu pure-menu-horizontal'>
    <ul class='pure-menu-list'>
      <li class='pure-menu-item'><a class='pure-menu-link' href="<?php print(_APP_ROOT);?>/app/kontroler.php" > Kalkulator </a>
      <li class='pure-menu-item'><a class='pure-menu-link' href="<?php print(_APP_ROOT);?>/app/security/logout.php" > Wyloguj </a>
    </ul>
  </div>

  <div class='content'>
    <p> To jest inna strona dostepna po zalogowaniu </p>
  </div>
<body>
</html>
