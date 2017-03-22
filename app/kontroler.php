<?php
require_once dirname(__FILE__).'/../config.php';

$messages = [];
$amount = $_REQUEST['amount'];
$period =$_REQUEST['period'];
$rate = $_REQUEST['rate'];

function valdiate($amount,$period,$rate,$messages){
  if(!(isset($amount) && isset($period) && isset($rate))){
    $messages[]="Błędne wywołanie aplikacji, brak jednego z argumentów";
    return $messages;
  }
  if( $amount == "" || $period =="" || $rate ==""){
    if( $amount == ""){
      $messages [] = "Amount was not insert";
    }
    if( $period ==""){
      $messages[] = "Period was not set";
    }
    if( $rate ==""){
      $messages[] = "Rate was not set";
    }
    return $messages;
  }
  if( !(is_numeric($amount)&&is_numeric($period)&&is_numeric($rate))){
    $messages[] = "Jedna z wartośći nie jest liczbą";
    return $messages;
    }
  return $messages;
}
function countInstallment($amount,$period,$rate,$messages){
	if (count ( $messages ) == 0) {
		$rate/=100;
    $period*=12;
		$q= 1+($rate/12);
		$result = ($amount * pow($q,$period))*(($q-1)/(pow($q, $period)-1));
		return $result;
  }
}
$messages = valdiate($amount,$rate,$period,$messages);
$result = countInstallment($amount,$period,$rate,$messages);

include 'view.php';
?>
