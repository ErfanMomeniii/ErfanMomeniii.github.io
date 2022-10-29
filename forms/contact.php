<?php
header('Access-Control-Allow-Origin: *');

die( "ok");
$to      = 'erfamm5@gmail.com';
$subject = $_POST['subject'].$_POST['name'];
$message = $_POST['message'];
$headers = 'From:'.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
try{
  
mail($to, $subject, $message, $headers);
}catch(exception $e){
  throw($e);
}
?>
