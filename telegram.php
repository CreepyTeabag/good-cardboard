<?php

/* https://api.telegram.org/bot5975655516:AAEyvLR7FUZGxNIf8pYSI7_12CfhXSu_xkA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


$phone = $_POST['user_phone'];
$token = "5975655516:AAEyvLR7FUZGxNIf8pYSI7_12CfhXSu_xkA";
$chat_id = "-881351540";
$arr = array(
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Great!";
} else {
  echo "Error";
}
// ?>