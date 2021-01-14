<?php
require_once('./php/mail.php');
use Mail\Mail;


$body = 'name: ' . $_POST['name'] . "\r\n"
      . 'lastname: ' . $_POST['lastname']  . "\r\n"
      . 'contact: ' . $_POST['contact']  . "\r\n"
      . 'country: ' . $_POST['country']  . "\r\n";
      

$mailer = new Mail();

$mailer->sendMail($body);

exit;
?>
