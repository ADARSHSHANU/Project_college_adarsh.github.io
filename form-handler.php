<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_form='info@yourwebsite.com'
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
"User Email: $name.\n".
"subject: $name.\n".
"User Message: $name.\n".

$to='adarshchoudhar69@gmail.com';
$headers="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>