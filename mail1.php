<?php

$name = $_POST['name'];
$email = $_POST['email'];
$telef = $_POST['tel'];
$mess = $_POST['message'];

$REMOTE_ADDR = $_POST['REMOTE_ADDR'];

$to = "gannforex@yandex.ru";
$subject = "Новый отзыв";
$message = "Имя пославшего письмо: $name.\n Электронный адрес: $email \n Номер телефона: $telef \n Сообщение: $mess .\n IP-адрес: $_SERVER[REMOTE_ADDR]";
mail ($to,$subject,$message,"Content-type:text/plain; charset = utf-8") or print "Не могу отправить письмо !!!";
echo "";

?>

<!doctype html>
<html lang="ru-RU">
<head>
<link rel="icon" type="image/ico" href="ico/favicon.ico"/><link rel="shortcut icon" type="image/x-icon" href="ico/favicon.ico"/>
    <meta charset="utf-8">
    <title>Получение письма и продолжение заказа</title>
    <style>

        body {
            background: none repeat scroll 0 0 #000000;
            font-family: segoeui,arial,verdana,tahoma;
        }
        a {
            color: #ffffff;
        }
        h1 {
            color: #FFD700;
            font-family: Prosto;
            font-size: 200%;
        }
        div {
            color: #FFFFFF;
            margin-top: 15%;
            text-align: center;
        }
        .small {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="main">
        <?php if(!$res): ?>
            <h1>Ваша отзыв был успешно отправлен</h1>
            <p class="small">Спасибо за обращение!</p>
        <?php else: ?>
            <h1>Сообщение не может быть отправлено</h1>
            <p class="small">Ошибка отправки: <?php echo $mail->ErrorInfo; ?></p>
        <?php endif; ?>
		<a href="/"><h1>Вернуться к сайту</h1></a>
    </div>
</body>
</html>