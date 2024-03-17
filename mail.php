<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $date = trim($_POST["date"]);
    $phone = trim($_POST["phone"]);
    $person = trim($_POST["person"]);
    $time = trim($_POST["time"]);


    if (empty($name) or empty($date) or empty($phone) or empty($time) or empty($person) ) {
        http_response_code(400);
        header("location:book-taible.php?erreur=Veuillez remplir le formulaire et réessayer.");//eng
        exit;
    }


    $recipient = "Info@Healthy.Com";
    $subject = "Formulaire de contact - $name - Healthy.Com "; //eng

    $email_content = "Name: $name\n";
    $email_content .= "person: $person\n\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "time: $time\n\n";
    $email_content .= "date:\n$date\n";

    $email_headers = "From: $name <Info@Healthy.Com>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        header("location:book-taible.php?msg=Merci! Votre date a été envoyé.");
    } else {
        http_response_code(500);
        header("location:book-taible.php?erreur=Oops! Une erreur s'est produite et nous n'avons pas pu envoyer votre date.");
    }
} else {
    http_response_code(403);
    header("location:book-taible.php?erreur=Il y a eu un problème avec votre soumission, veuillez réessayer.");
}
