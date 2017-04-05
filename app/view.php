<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title> Kalkulator Kredytowy</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php print(_APP_URL);?>/resources/view.css"
  </head>
  <body>
    <div class='pure-menu pure-menu-horizontal'>
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a class='pure-menu-link' href="<?php print(_APP_ROOT); ?>/app/different_protected.php">  Next protected site</a></li>
        <li class="pure-menu-item"><a class='pure-menu-link' href="<?php print(_APP_ROOT); ?>/app/security/logout.php"> Logout</a></li>
      </ul>
    </div>

    <div>
      <form action="<?php print(_APP_URL);?>/app/kontroler.php" method="post" class='pure-form pure-form-stacked'>
          <legend class='header'> Kalkulator Kredytowy </legend>
          <fieldset>
            <label for="Kwota Kredytu">Kwota Kredytu </label>
            <input id="id_amount" type="text" name = "amount" <?php if (isset($amount)) echo "value=".$amount;?>>
            <label for="Okres spłaty">Okres spłaty</label>
            <input id="id_period" type="text" name ="period" <?php if (isset($period)) echo "value=".$period;?>>
            <label for="Oprocentowanie">Oprocentowanie </label>
            <input id="id_rate" type="text" name="rate" <?php if (isset($rate)) echo "value=".$rate;?>>
            </fieldset>
            <input type="submit" value="Count"  class='pure-button pure-button-primary'>
    </form>
    <?php
    //wyświeltenie listy błędów, jeśli istnieją
    if (isset($messages)) {
    	if (count ( $messages ) > 0) {
    		echo '<ol class="errors">';
    		foreach ( $messages as $key => $msg ) {
    			echo '<li>'.$msg.'</li>';
    		}
    		echo '</ol>';
    	}
    }
    ?>




<?php if (isset($result)){ ?>
<div class="errors result">
<?php echo 'Wysokośc raty: '.$result; ?>
</div>
<?php } ?>
</div>
</body>
</html>
