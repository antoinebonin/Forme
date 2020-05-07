<?php

if (isset($_POST['email']))
{
    //TODO : Validation d'une adresse mail

    //Envoi du mail
    $to = "youremail@mail.fr";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    //Présentation de l'email
    $message = wordwrap($message, 70);
    $headers = 'From: ' . $to . "\r\n" . 'Reply-To:' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    mail($to, 'Nouveau message de : ' . $name ,$message ,$headers );

    //TODO : Réponse au front
}