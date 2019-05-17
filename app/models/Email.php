<?php

namespace App\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Email
{
    public static function enviar($remetente, $destinatario, $conteudo)
    {

        $mail = new PHPMailer(false);

        try {
            //Server settings
            $mail->SMTPDebug = 0;   
            $mail->IsSMTP();

            // // optional
            // // used only when SMTP requires authentication  
            $mail->SMTPAuth = true;
            $mail->Host       = 'mail.anatomymkt.com.br';  // Specify main and backup SMTP servers
            $mail->Username   = 'noreply@anatomymkt.com.br';                     // SMTP username
            $mail->Password   = '123pereira4';                               // SMTP password
            $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($remetente, 'Sistema Anatomy');
            $mail->addAddress($destinatario, 'Anatomy');     // Add a recipient
            $mail->addAddress($destinatario);               // Name is optional
            $mail->addReplyTo('noreply@anatomymkt.com.br', 'No Reply');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = utf8_decode($conteudo['assunto']);
            $mail->Body    = utf8_decode($conteudo['mensagem']);
            $mail->AltBody = utf8_decode($conteudo['mensagem']);

            $mail->send();
        } catch (Exception $e) {
            $e->getMessage();
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            die();
        }
        
    }
}