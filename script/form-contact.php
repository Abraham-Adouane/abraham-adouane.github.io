<?php
// Vérifier si la méthode d'envoi est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs requis sont présents
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])) {
        // Nettoyer les entrées des utilisateurs
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
        $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        // Valider l'adresse e-mail
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Construction du corps du message
            $to = 'abraham.adouane@gmail.com';
            $subject = 'Nouveau message de contact';
            mail($to, $subject, $message);
            $messageBody = "Nom : $nom\nPrénom : $prenom\nEmail : $email\nMessage : $message";

            // En-têtes du message
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            mail($to, $subject, $messageBody);
            // Envoi du message par e-mail
            if (mail($to, $subject, $messageBody, $headers)) {
                // Rediriger l'utilisateur vers une page de confirmation
                echo "message envoyé";
                exit;
            } else {
                echo "Une erreur s'est produite lors de l'envoi du message.";
            }
        } else {
            echo "L'adresse e-mail est invalide.";
        }
    } else {
        echo "Tous les champs du formulaire doivent être remplis.";
    }
} else {
    echo "La méthode d'envoi n'est pas autorisée.";
}
