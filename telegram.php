<?php

/* https://api.telegram.org/bot5975655516:AAEyvLR7FUZGxNIf8pYSI7_12CfhXSu_xkA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

// $name = $_POST['user_name'];
$phone = $_POST['user_phone'];
// $email = $_POST['user_email'];
$token = "5975655516:AAEyvLR7FUZGxNIf8pYSI7_12CfhXSu_xkA";
$chat_id = "-881351540";
$arr = array(
  // 'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  // 'Email: ' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  // header('Location: thankyou.php');
  //  header('Location: index.php?submit=true');
  echo "Great!";
} else {
  echo "Error";
}
// ?>