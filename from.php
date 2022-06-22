<?php
        $name = $_Post['name']
        $visitor_email = $_POST['email'];
        $message = $_POST['message']
        $email_from = 'uditavishnoi18@gmail.com';
        $email_subject = "NEW FORM SUBMISSION";
        $email_body ="USER NAME:"  $name.\n".
                     "USER EMAIL: $visitor_email.\n".
                     "USER MESSSAGE: $message.\n".
        $to = ""
        $headers = "From $email_from \r\n";
        $headers = "Reply-To  $email \r\n";
        mail($to,$email_subject,$email_body,$headers);
        header("Location: from.html");
?>