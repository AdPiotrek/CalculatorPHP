<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount,&$period,&$rate)
{
  $amount = isset($_REQUEST['amount'])? $_REQUEST['amount'] : null;
  $period = isset($_REQUEST['period'])? $_REQUEST['period'] : null;
  $rate = isset($_REQUEST['rate'])? $_REQUEST['rate'] : null;
}

function getValidate(&$amount,&$period,&$rate,&$messages)
{
  if( ! (isset($amount) && isset($period) && isset($rate))){
    return false;  
  }
  if($amount =='') $messages []= "Nie podano kwoty kredytu";
  if($period =='') $messages []= 'Nie podano okresu';
  if($rate == '')  $messages []= "Nie podano oprocentowania";

  if(count($messages)!=0) return false;

  if(!is_numeric($amount)) $messages[] = "Wartość kredytu nie jest liczbą";
  if(!is_numeric($period)) $messages[] = "Okres nie jest liczbą";
  if(!is_numeric($rate)) $messages []= "Oprocentowanie nie jest liczbą";

  if(count($messages)!=0) return false;
  else return true;
}

function countInstallment($amount,$period,$rate,&$result){
    $amount =intval($amount);
    $period = intval($period);
    $rate = intval($rate);
		$rate/=100;
    $period*=12;
		$q= 1+($rate/12);
		$result = ($amount * pow($q,$period))*(($q-1)/(pow($q, $period)-1));
}

$amount = null;
$period =null;
$rate = null;
$result = null;
$messages = array();

getParams($amount,$period,$rate);
if(getValidate($amount,$period,$rate,$messages)){
countInstallment($amount,$period,$rate,$result);
}
include _ROOT_PATH.'/app/view.php';
?>
