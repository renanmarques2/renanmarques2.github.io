<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
$to = 'renan.maarques2@gmail.com'; 
$email_subject = "Website Contato:  $name";
$email_body = "Você recebeu uma nova mensagem do seu webstie portfólio.\n\n"."Os detalhes são:\n\nName: $name\n\nEmail: $email_address\n\nCelular: $phone\n\nMensagem:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responder para: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
