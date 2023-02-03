<?php


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$phone = $_POST['user_phone'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dobrobab9898@mail.ru';                 // Наш логин
$mail->Password = 'aItreio91';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('dobrobab9898@mail.ru', 'Евкакий Добробаб');   // От кого письмо 
$mail->addAddress('verixiw699@ezgiant.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка c сайта';
// $mail->Body    = '
// 	Пользователь оставил свои данные <br> 
// 	Имя: неизвестно <br>
// 	Телефон: ' . $phone . '';
$mail->Body = 'оставил заявку, телефон: '. $phone;
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "Error";
} else {
	// header('location: ../thankyou.php');
    echo "Success"
}
?>
