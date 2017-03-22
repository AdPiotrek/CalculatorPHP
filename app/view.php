<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title> Kalkulator Kredytowy</title>
  </head>
  <body>
    <h4> To jest przykład prostego kalkulator kredytowego</h6>
    <form action="<?php print(_APP_URL);?>/app/kontroler.php" method="post">
          <label for="Kwota Kredytu">Kwota Kredytu </label>
          <input id="id_amount" type="text" name = "amount" <?php if (isset($result)) echo "value=".$amount;?>><br/>
          <br/>
          <label for="Okres spłaty">Okres spłaty</label>
          <input id="id_period" type="text" name ="period" <?php if (isset($period)) echo "value=".$period;?>><br/>
          <label for="Oprocentowanie">Oprocentowanie </label>
          <input id="id_rate" type="text" name="rate" <?php if (isset($rate)) echo "value=".$rate;?>><br/>
          <input type="submit" value="Count">
    </form>
    <?php
    //wyświeltenie listy błędów, jeśli istnieją
    if (isset($messages)) {
    	if (count ( $messages ) > 0) {
    		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
    		foreach ( $messages as $key => $msg ) {
    			echo '<li>'.$msg.'</li>';
    		}
    		echo '</ol>';
    	}
    }
    ?>




<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wysokośc raty: '.$result; ?>
</div>
<?php } ?>

</body>
</html>
