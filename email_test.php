<?php
    require 'bat/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
    $mail->From = 'office@miramardentalclinic.com';
	$mail->FromName = 'Rafael';    
	$mail->addAddress('bentejed@gmail.com');
	$mail->SMTPDebug = 2;
    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;   
	$mail->Body='test';
    $mail->send();    
	echo "Error:".$mail->ErrorInfo;