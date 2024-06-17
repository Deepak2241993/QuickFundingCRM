<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require_once APPPATH . 'third_party/smtp/PHPMailerAutoload.php';

class Phpmailer_model extends CI_Model {

    public function smtp_mailer($toemail, $subject, $body) {
        $mail = new PHPMailer;
        $mail->Host = "relay-hosting.secure.net";
        $mail->EnableSsl = false;
        $mail->UseDefaultCredentials = false;
        $mail->Port = 25;
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->SMTPSecure = 'false';
        
        // Send the email
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }

   
     
    //   $mail = new PHPMailer(true);
    //     $mail->IsSMTP();
    //     $mail->SMTPAuth = true;
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Host = "smtp.gmail.com";
    //     $mail->Port = 587;
    //     $mail->IsHTML(true);
    //     $mail->CharSet = 'UTF-8';
    //     $mail->Username = "info@quickfunding.com.au";
    //     $mail->Password = "emgctrlmnbmrdztw";
    //     $mail->setFrom("info@quickfunding.com.au",'Quickfunding');
    //     $mail->Subject = $subject;
    //     $mail->Body = $body;
    //     $mail->addAddress($toemail);
    //     $mail->SMTPOptions = array('tls' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => false
    //     ));

    //         if(!$mail->Send()){
    //     		echo $mail->ErrorInfo;
    //     	}else{
    //     		return 'Sent';
    //     	}
    }
}
?>
