<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    $phone = trim($_POST["phone"]);

    if (empty($name) or empty($message) or empty($phone) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        header("location:contact.php?erreur=Veuillez remplir le formulaire et réessayer.");
        exit;
    }


    $recipient = "contact@alhanaa.ma";
    $subject = "Formulaire de contact - $name - alhanaa.ma ";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        header("location:contact.php?msg=Merci! Votre message a été envoyé.");
    } else {
        http_response_code(500);
        header("location:contact.php?erreur=Oops! Une erreur s'est produite et nous n'avons pas pu envoyer votre message.");
    }
} else {
    http_response_code(403);
    header("location:contact.php?erreur=Il y a eu un problème avec votre soumission, veuillez réessayer.");
}
