<?php

function checkEmail($field)
{
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if (isset($_POST['email']))
{
    $check_email = checkEmail($_POST['email']);
    if ($check_email == TRUE)
    {
        //Envoi du mail
        $to = "youremail@mail.fr";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        //Présentation de l'email
        $message = wordwrap($message, 70);
        $headers = 'From: ' . $to . "\r\n" . 'Reply-To:' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        mail($to, 'Nouveau message de : ' . $name ,$message ,$headers );
    }
}