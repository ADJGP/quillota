<?php

/*
*
* Endeos, Working for You
* blog.endeos.com
*
*/

require_once('phpmailer/PHPMailerAutoload.php');


$mail = new PHPMailer;

//$mail->SMTPDebug    = 3;

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';   /*Servidor SMTP*/																		
$mail->SMTPSecure = 'TLS';   /*Protocolo SSL o TLS*/
$mail->Port = 587;   /*Puerto de conexión al servidor SMTP*/
$mail->SMTPAuth = true;   /*Para habilitar o deshabilitar la autenticación*/
$mail->Username = 'gonzalezalexis034@gmail.com';   /*Usuario, normalmente el correo electrónico*/
$mail->Password = 'zjnhvbtyirxxzjug';   /*Tu contraseña*/
$mail->From = 'gonzalezalexis034@gmail.com';   /*Correo electrónico que estamos autenticando*/
$mail->FromName = 'Alexis Gonzalez';   /*Puedes poner tu nombre, el de tu empresa, nombre de tu web, etc.*/
$mail->CharSet = 'UTF-8';   /*Codificación del mensaje*/

?>