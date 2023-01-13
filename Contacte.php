<?php

$to ="ajr@gayaclothes.cat";


$nom=$_POST['firstname'];
$cognom=$_POST['lastname'];
$pais=$_POST['pais'];
$email=$_POST['email'];
$telefon=$_POST['number'];
$sexe =$_POST['sexe'];


$ip = $_SERVER['REMOTE_ADDR'];

// the message
$msg = <<<MAIL
Nom: $nom
Cognom: $cognom
Pais: $pais
email: $email
Telefon: $telefon
Sexe: $sexe

--------------

--------------
IP: $ip
MAIL;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$headers = "From: ajr@gayaclothes.cat" . "\r\n";
$headers .= "CC: $email" . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

// send email
mail($to,$subject,$msg,$headers);

header('Location: Contancte.html');
echo <<<HTML
<html>
<body>
El usuari $nom: amb telefon: $telefon i email: $email ha enviat el següent missatge:
--------------
$message
------------- 
IP: $ip
</body>
</html>
HTML;

?>
