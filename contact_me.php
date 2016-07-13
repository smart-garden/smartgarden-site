<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   empty($_POST['reason']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

// set up our post as php vars
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$reason = $_POST['reason'];

// create email body
$to = 'kmann@missionbaymedia.com';

$headers = "From: inquiries@smartgarden.tech\n"; // headers
$headers .= "Reply-To: $email_address";

$email_subject = "Smart Garden Contact -- from: $name"; // subject

$email_body = "Hello,"."\n\n"."You have received a new message from your smart garden's web contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n\n$message"; // body


// actually send the email here!

if (mail($to,$email_subject,$email_body,$headers)) return true;
else return false;
?>
