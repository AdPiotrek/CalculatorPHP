<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php print(_APP_URL);?>/resources/view.css"
</head>
<body>
<div>
  <form action='<?php print(_APP_ROOT);?>/app/security/login.php' method='post' class="pure-form pure-form-stacked">
    <legend class='header'>Logowanie</legend>
    <fieldset>
      <label for='id_login'>Login: </label>
      <input type='text' name=login>
      <label for='id_pass'>Password: </label>
      <input type='Password' name=pass>
    </fieldset>
      <input type='submit' value='submit' class="pure-button pure-button-primary">

  </form>

  <?php

  if(isset($messages)){
    if(count($messages) > 0){
      echo '<ol style="padding: 10px 10px 10px 30px; border-radius:5px; background-color:fuchsia; width:300px"';
      foreach ($messages as $key => $msg) {
        echo '<li>'.$msg.'</li>';
      }
      echo'</ol>';
    }
  }
  ?>
</div>
<body>

</html>
