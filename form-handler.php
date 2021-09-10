<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'sethiakaran24@gmail.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n
              User Email: $visitor_email.\n
              User Message: $message.\n";

$to = 'karansethia24@gmail.com';

$header = "From: $email_from\r\n";
$header .= "Reply to: $visitor_email";

mail($to,$email_subject,$message,$header);
header("Location: index.html")

?>