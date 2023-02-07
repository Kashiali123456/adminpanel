<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    // // $mail->isMail();
    $mail->SMTPDebug = 0;
    $mail->Host = 'techhunt.info';
    $mail->Port = 465;


    $mail->isSMTP();
    // $mail->SMTPAuth = true;
    // $mail->Host   = "smtp.host.tld";
    // $mail->Port       = 465;
    $mail->SMTPSecure = 'ssl';

    $mail->Username = 'kashifali@techhunt.info';
    $mail->Password = 'd^[la)z##_D_';
    $mail->setfrom('kashifali@techhunt.info', 'CustomWebNLogo Query');
    $mail->addaddress('business@pandaxtream.com', 'CustomWebNLogo Query');
    // $mail->Subject = 'CustomWebNLogo Query';
    // $mail->Body = 'CustomWebNLogo Query';
    if (!$mail->send()) {
       if ($mail -> mail_errno) {
	  echo "Mail Error " .$mail -> mail_error;
	  exit();
	}
    } else {
       echo 'The email message was sent.'.$mail->ErrorInfo;
    }
     
?>
 <?php header("Location: contact-us"); ?>