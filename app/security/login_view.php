<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Login</title>
</head>
<body>
<div>
  <form action='<?php print(_APP_ROOT);?>/app/security/login.php' method='post'>
    <fieldset>
      <label for='id_login'>Login: </label>
      <input type='text' name=login><br />
      <label for='id_pass'>Password: </label>
      <input type='Password' name=pass><br/>
    </fieldset>
      <input type='submit' value='submit'>
    
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
