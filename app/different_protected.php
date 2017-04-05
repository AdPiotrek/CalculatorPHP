<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title> Inna chroniona strona </title>
</head>
<body>
  <div>
    <a href="<?php print(_APP_ROOT);?>/app/kontroler.php" > Kalkulator </a>
    <a href="<?php print(_APP_ROOT);?>/app/security/logout.php" > Wyloguj </a>
  </div>

  <div>
    <p> To jest inna strona dostepna po zalogowaniu </p>
  </div>
<body>
</html>
