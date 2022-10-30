<?php
$name = $_PPOST['name'];
$visitor_email = $_POST['Email'];
$message = $_POST['message']

$email_form = 'SangerCAWEB.com';

$email_subject = "New Form Submission";

$emil_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n".



$to = "nathanielflex1@gmail.com"

$headers ="Form: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$emil_body,$headers);

header("Location: index2.html");

?>