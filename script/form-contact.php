<?php
// R�cup�rer les valeurs du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Construction du corps du message
$to = 'abraham.adouane@gmail.com';
$subject = 'Nouveau message de contact';
$Message = "Nom : $nom\nPrénom : $prenom\nEmail : $email\nMessage : $message";

// Envoi du message par e-mail
mail($to, $subject, $Message);

// Rediriger l'utilisateur vers une page de confirmation
exit;
?>