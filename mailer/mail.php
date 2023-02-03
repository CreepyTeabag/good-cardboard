<?php
  $user_phone = $_POST['user_phone']; // Данные из <input name="user_phone" />

  $to = "zespavelta@gufum.com"; // Адрес почты куда отправить письмо
  $title = "Новый клик"; // Заголовок письма
  /**
   * Тело сообщения
   * Можно передавать html-теги
   * В PHP соединение строк используется так
   * 
   * @example 'some_text' . $some_variable . 'some_text'
   * Для пробела между значением переменной и текстом в начале и конце строк ставится пробел 
   */
  $message = '
    Пользователь оставил свои данные <br>
    <b>Телефон:</b> ' . $user_phone  . '
  ';
  $headers = "From: dobrobab9898@mail.ru" . "\r\n" . // От кого отправить письмо
  $headers = "MIME-Version: 1.0" . "\r\n"; // MIME-версия. Нужена для правильной работы контента
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; // Указание типа контента и его кодировки

  mail($to, $title, $message, $headers); // Отправка письма

/**
 * В PHP переменные создаются так
 * 
 * @example $some_variable = 123;
 */