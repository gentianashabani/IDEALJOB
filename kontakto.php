<?php
$name=$_POST['Emri i kompanisë që po kërkon puntorë'];
$visitor_email=$_POST['Email Adresa'];
$nr=$_POST['Numri i telefonit'];
$message=$_POST['Shëno mesazhin tuaj këtu....'];

$email_from='punaideale@gmail.com';
$email_subject="New form submission";
$email_body="User Name: $name.\n". 
"User Email: $visitor_email.\n". 
"User Message: $message.\n".
"User Phone Number: $nr.\n";

$to="florentine.dermaku@student.uni-pr.edu";
$headers="From: $email_from\r\n";
$headers.= "Reply-to: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$nr,$headers);
header("Location: kontakto.html");
?>

            