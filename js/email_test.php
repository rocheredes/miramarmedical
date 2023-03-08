<?php
try {
    require 'bat/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
    $mail->From = 'bentejed@gmail.com';
	$mail->FromName = 'Rafael';    
	$mail->addAddress('office@miramardentalclinic.com');
	$mail->SMTPDebug = 2;
    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->MsgHTML($template);
    $mail->send();
    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}