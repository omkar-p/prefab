<?php
    extract($_POST);
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer-master/src/Exception.php';
    require './PHPMailer-master/src/PHPMailer.php';
    require './PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sagirk900@gmail.com';                     //SMTP username
    $mail->Password   = 'zuhzsokiiburehes';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sagirk900@gmail.com', 'Mailer');
    $mail->addAddress('admin@prefab.sa', 'Joe User');     //Add a recipient


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enquirey';
    $mail->Body    = 'Name :'.$name.', Email :'.$email.', Number :'.$number.', City :'.$city.', Dates :'.$date.', Quantity :'.$quantity.', Location :'.$location;
    

    $mail->send();
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Message sent successfully! We will be in touch with you soon!!');
    window.location.href='index.php';
    </script>");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>