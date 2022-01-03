<?php  
require_once "Mail.php";  
  
$from    = "dumyui81@gmail.com";  
$to      = "dumyui81@gmail.com";  
$subject = "Hi!";  
$body    = "Hi,\n\nHow are you?";  
  
/* SMTP server name, port, user/passwd */  
$smtpinfo["host"] = "ssl://smtp.gmail.com";  
$smtpinfo["port"] = "465";  
$smtpinfo["auth"] = true;  
$smtpinfo["username"] = "dumyui81@gmail.com";  
$smtpinfo["password"] = "makeapass3456@#";  
  
$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);  
$smtp = &Mail::factory('smtp', $smtpinfo );  
  
$mail = $smtp->send($to, $headers, $body);  
  
if (PEAR::isError($mail)) {  
  echo("<p>" . $mail->getMessage() . "</p>");  
 } else {  
  echo("<p>Message successfully sent!</p>");  
 }  
?>  
