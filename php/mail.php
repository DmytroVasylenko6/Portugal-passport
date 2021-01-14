<?php
namespace Mail;

require_once('./php/PHPMailer.php');
require_once('./php/PHPMailer/SMTP.php');
require_once('./php/PHPMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Mail {
  public static function sendMail($body){

    $subject = 'Letter from site' . date('Y/m/d H:i:s');
    $address = "Sales@passport16.com";

    $mail = new PHPMailer();

    $mail->IsSMTP();
    // $mail->SMTPDebug  = 2;

    $mail->SMTPAuth = true;
    $mail->Mailer = "smtp";
    $mail->SMTPSecure = "ssl";
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 25;  
    $mail->Username = "gailers23@gmail.com";
    $mail->Password = "giynijwyunvczclf";

    $mail->SetFrom('from@gmail.com', 'Company');
    $mail->Subject = $subject;

    $mail->Body = $body;

    $mail->AddAddress($address, "Company");

    if(!$mail->Send()) {
      var_dump($mail);
      echo "Email send error. Please send your request to ";
    } else
      header('Location: /blog/thank-you-page');

  }
}
?>
