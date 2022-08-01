<?php
    if(isset($_POST['sendMessage'])){
        $issue = $_POST['issue'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $from = 'omkarpatil843@gmail.com';
        $to = 'omkarpatil843@gmail.com';
        $subject = "Enquiry Recieved";
        $message = "<html><body>";
        $message .= "<h3 style='color:#30312d;'>Hi! New Enquiry Recieved!!!</h3>";
        $message .= "<br><br>";
        $message .= "<p style='color:#000;'><b>From:</b> $name</p>";
        $message .= "<p style='color:#000;'><b>Email:</b> $email</p>";
        $message .= "<p style='color:#000;'><b>Issue:</b> $issue</p>";
        $message .= "<p style='color:#000;'><b>Description:</b> $description</p>";
        $message .= "</body></html>";

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Create email headers
        $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

        // echo strval($issue)." ".strval($name)." ".strval($email)." ".strval($description);

        // ini_set('SMTP', 'smtp.gmail.com');
        // ini_set('smtp_port', '587');
        // ini_set('sendmail_path', 'C:\xampp\sendmail\sendmail.exe');
        if(mail($to, $subject, $message, $headers)){
            header("Location: index.php?alert=1&mail_success=1");
        }
        else {
            header("Location: index.php?alert=1&mail_failure=1");
        }
    }
?>