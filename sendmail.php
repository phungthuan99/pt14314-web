<?php 

require './libs/PHPMailer/src/Exception.php';
require './libs/PHPMailer/src/PHPMailer.php';
require './libs/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	$mail->CharSet = 'UTF-8';
    //Server settings
    $mail->SMTPDebug = 2;                      
    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'd3tmobilebk@gmail.com';                     // SMTP username
    $mail->Password   = 'd3t123456789';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('d3tmobilebk@gmail.com', 'Sender');
    
    $mail->addAddress('datntph08807@fpt.edu.vn', 'Đạt 09');     // Add a recipient
    $mail->addAddress('namppph05917@fpt.edu.vn', "Phan Phương Nam");               // Name is optional
    $mail->addAddress('trungnqph05703@fpt.edu.vn', "Trung Trâu");

	// Name is optional
    $mail->addReplyTo('hieupmph08799@fpt.edu.vn', 'Hiếu đẹp zai');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PT14314-web Demo Gửi email';
    $mail->Body    = '<h2>Nội dung email</h2>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

 ?>