<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");

//validation information
//enlever les caractères illégaux de l'adresse
$email_demandeur = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//test si l'adresse est valide sinon message d'erreur
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
    printf('vôtre adresse email : $s n\'est pas au format RFC 822',$_POST['email']);
}

//preparation mail
$email_proprietaire = "jerome.laqueyrie@hotmail.com";

$email_header_MIME = "MIME-Version : 1.0";
$email_header_origin = "From: {$_POST['nom']}"."<{$email_demandeur}>";
$email_header_repondre = 'Reply-To:'.$email_demandeur;
$email_header_type = 'Content-Type : text/plain; charset="UTF-8"';
$email_header_encoding = 'Content-Transfer-Encoding:8bit';
$email_header_Mailer = 'X-Mailer:PHP/'.phpversion()."\r\n";

$email_header = sprintf("%s\r\n%s\r\n%s\r\n%s\r\n%s\r\n",$email_header_MIME,$email_header_origin,$email_header_repondre,$email_header_type,$email_header_encoding,$email_header_Mailer);

$email_sujet = "Demande information -- ".$_POST['choixProduit'];
$email_corp =wordwrap($_POST['message'],70,"\r\n");

//https://www.php.net/manual/fr/function.mail.php

$email_msg_ok = "Demande d'information transmise";
$email_msg_nok = "Erreur serveur, demande d'information non transmise";

//envoi mail
if(mail($email_proprietaire, $email_sujet,$email_corp,$email_header))
{
    printf($email_msg_ok);
}
else
{
    printf($email_msg_ok);
}
?>