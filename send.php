<?php
// Include the PHPMailer Autoload.php file
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted

function send_mail( $mail, $email, $email_subject, $email_body ){
                                                                // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'rubel.webappick@gmail.com';            // SMTP username
    $mail->Password   = 'mltoeloqaxlhcbde';                     // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587; ;                                  // TCP port to connect to
    /*  $mail->Port       = 456;                                // TCP port to connect to
      $mail->SMTPSecure= 'ssl';*/

    // Recipients
    $mail->setFrom('rubel.webappick@gmail.com', 'Rubel');
    $mail->addAddress( $email );                                 // Add a recipient

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body    = $email_body;
    $mail->AltBody = 'This is the plain text message body for non-HTML mail clients';
    $mail->send();

    return  'Email sent successfully';
}

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Check if email is provided
    if ( !empty($_POST["email"] ) ) {
        // Retrieve email from the form
        $email = $_POST["email"];
        $email_subject = $_POST["subject"];
        $email_body = $_POST["emailBody"];

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true );
        try {
            $mail->isSMTP();
            $is_mail_send = send_mail( $mail, $email, $email_subject, $email_body );
            echo $is_mail_send;
        } catch (Exception $e) {
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email is required";
    }
}
?>
