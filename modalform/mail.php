<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['uphone'])){
    echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
  } else{
    if (isset($_POST['uphone'])) {
      $uphone = strip_tags($_POST['uphone']);
      $uphoneFieldset = "<b>Телефон:</b>";
    }

    if (isset($_POST['formInfo'])) {
      $formInfo = strip_tags($_POST['formInfo']);
      $formInfoFieldset = "<b>Тема:</b>";
    }

    $to = "1986Nekrasow@gmail.com" . ","; /*Укажите адрес, на который должно приходить письмо*/
    $to .= "Myskat_06@mail.ru";
    $sendfrom = "remclimat.pro@yandex.ru"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $headers .= "Content-Transfer-Encoding: 8bit \r\n";
    $subject = "$formInfo";
    $message = "$uphoneFieldset $uphone<br>
                $formInfoFieldset $formInfo";

    $send = mail ($to, $subject, $message, $headers);
        if ($send == 'true') {
            echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
        } else {
          echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
        }
  }
} else {
  header ("Location: http://remclimat.pro/"); // главная страница вашего лендинга
}
?>