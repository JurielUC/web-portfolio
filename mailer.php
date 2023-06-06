<?php
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    require 'vendor/phpmailer/phpmailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mail = new PHPMailer(true);

        try {
            // Configure SMTP settings for Yahoo Mail
            $mail->isSMTP();
            $mail->Host = 'smtp.mail.yahoo.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'juriel.ucomia@yahoo.com';
            $mail->Password = '143445254Jc';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Set email details
            $mail->setFrom('juriel.ucomia@yahoo.com', 'Juriel Comia');
            $mail->addAddress('juriel.ucomia@gmail.com', 'Juriel Comia');
            $mail->Subject = 'Portfolio Message';
            $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

            // Send the email
            if ($mail->send()) {
                echo 'Message sent!';

                header("location: index.php");
                exit;
            }
            
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }


    }
?>