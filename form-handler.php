<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$from ="Eduford@gmail.com";

$email_subject="New Form Submission";
$email_body= "User Name : $name.\n".
             "User Email : $email.\n".
             "Subject : $subject.\n".
             "User Message : $message.\n";

$to = "sudeeshmj@gmail.com";
$headers= "From : $from \r\n";
$headers .= "Reply-To : $to";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");


?>