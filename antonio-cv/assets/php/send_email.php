<?php
    $to      = 'gedsakal@gmail.com';
    $name = $_POST['name'];
    $subject = '[AtonioSax] - ' . $name . ' se pone en contacto contigo desde tu pagina';
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email  . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $send = mail($to, $subject, $message, $headers);

    // this will help you to get the status mail sent or not
    if($send) :
       echo "Message sent. Thank you.";
    else :
        echo "Email sending failed...";
    endif;
?>