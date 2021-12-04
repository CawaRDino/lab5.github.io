<?php
//print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if(trim($email) == '')
  $error = ' Email напиши';
else if(trim($message) == '')
  $error = 'Напиши  відгук';
else if(strlen($message) < 10)
  $error = 'Більше 10 символів';

 if ($error != '') {
     echo $error;
     exit;
 }

$subject = "=?utf-8?B?".base64_encode("TecT")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

 main('sssahug.888@gmail.com', $subject, $message, $headers);

 header(Location: '/about.php');
?>
