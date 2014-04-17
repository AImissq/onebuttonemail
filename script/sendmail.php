<?php
    $to = $_POST["mailto"];
    $from = "noreply@staticresource.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    // now lets send the email
    mail($to, $subject, $message, $headers);

    // once we have attempted to send the mail, show alert
    header ('Location: ../?sent=1');
?>