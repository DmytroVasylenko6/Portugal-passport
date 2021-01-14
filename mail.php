<?php

require './php/SMTP.php';
require './php/Exception.php';
require './php/PHPMailer.php';

echo "Form";

$to = "Sales@passport16.com"; 

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$country = $_POST['country'];


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        $GLOBALS['status'][] = $str;
    };

    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'gailers23@gmail.com'; // Логин на почте
    $mail->Password   = 'giynijwyunvczclf'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 25;
    $mail->setFrom('Sales@passport16.com', 'Name'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('Sales@passport16.com');

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    // Проверяем отравленность сообщения
    if ($mail->send()) {
        $result = "success";
    } else {
        $result = "error";
    }
} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["name" => $name, "lastname" => $lastname, "contact" => $contact, "country" => $country,]);

?>