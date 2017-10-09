<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: ssensey.fr';
$to = 'zarkrey@gmail.com';
$subject = 'Message depuis ssensey.fr';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";


if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Votre message a été envoyé !</p>';
    } else {
        echo '<p>Oups, quelque chose n\'a pas marché ! Réessayer !</p>';
    }
}
?>