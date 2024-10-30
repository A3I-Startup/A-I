<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialisation de la variable pour les erreurs
    $errors = [];
    print_r($_POST); // Affiche toutes les données du formulaire

    // Vérification et récupération des données du formulaire
    $name = isset($_POST['nameWeb']) ? $_POST['nameWeb'] : $errors[] = "Nom non fourni.";
    $email = isset($_POST['emailWeb']) ? $_POST['emailWeb'] : $errors[] = "Email non fourni.";
    $phone = isset($_POST['phoneWeb']) ? $_POST['phoneWeb'] : $errors[] = "Téléphone non fourni.";
    $appType = isset($_POST['appTypeWeb']) ? $_POST['appTypeWeb'] : $errors[] = "Type d'application non fourni.";
    $theme = isset($_POST['themeWeb']) ? $_POST['themeWeb'] : $errors[] = "Thème non fourni.";
    $description = isset($_POST['descriptionWeb']) ? $_POST['descriptionWeb'] : $errors[] = "Description non fournie.";
    $features = isset($_POST['featuresWeb']) ? implode(", ", $_POST['featuresWeb']) : 'Aucune';
    $budget = isset($_POST['budgetWeb']) ? $_POST['budgetWeb'] : $errors[] = "Budget non fourni.";
    $deliveryDate = isset($_POST['deliveryDateWeb']) ? $_POST['deliveryDateWeb'] : $errors[] = "Date de livraison non fournie.";

    // Si des erreurs existent, les afficher et arrêter le script
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        exit; // Arrêter le script si des erreurs sont présentes
    }

    // Créer une instance de PHPMailer
    $mail = new PHPMailer(true);

    // Configuration de PHPMailer
    try {
        // Paramètres du serveur
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Serveur SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'amaltr21@gmail.com'; // Votre adresse e-mail
        $mail->Password   = 'gtye laay yhrb sxzp'; // Votre mot de passe
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Cryptage SSL
        $mail->Port       = 465; // Port TCP

        // Destinataires
        $mail->setFrom('amaltr21@gmail.com', 'A³I - Demande de création d\'application web'); // Votre adresse
        $mail->addAddress('startup.aaai@gmail.com'); // Destinataire principal
        $mail->addCC('azer1.guesmi@gmail.com');
        $mail->addCC('ihebbouraoui38@gmail.com');
        $mail->addCC('borcheni1999@gmail.com');
        $mail->addCC('amaltr21@gmail.com');
$mail->CharSet = 'UTF-8';

        // Contenu de l'e-mail
        $mail->isHTML(true); // Format HTML
        $mail->Subject = 'Demande de création d\'application web';
        $mail->Body    = "
            <html>
            <body style='font-family: Arial, sans-serif; color: #333;'>
                <div style='padding: 20px; border: 1px solid #ddd; max-width: 600px; margin: 0 auto;'>
                    <h2 style='text-align: center; color: #405c54;'>Demande de création d'application web</h2>
                    <p>Bonjour,</p>
                    <p>Une nouvelle demande a été soumise. Voici les détails :</p>
                    <table style='width: 100%; margin-top: 10px;'>
                        <tr><td style='padding: 8px; font-weight: bold;'>Nom complet :</td><td>{$name}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Email :</td><td>{$email}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Téléphone :</td><td>{$phone}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Type d'application :</td><td>{$appType}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Thème :</td><td>{$theme}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Description :</td><td>{$description}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Fonctionnalités supplémentaires :</td><td>{$features}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Budget estimé :</td><td>{$budget} TND</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Date de livraison souhaitée :</td><td>{$deliveryDate}</td></tr>
                    </table>
                    <br>
                    <hr>
                    <p style='font-size: 14px; color: #555; text-align: center;'>
                        <strong>A³I - Advanced, Automated, Innovative Solutions</strong><br>
                        Résidence YOSR, Nour Jaafer 2081, BLOC A3-1<br>
                        <a href='mailto:startup.aaai@gmail.com' style='color: #405c54;'>startup.aaai@gmail.com</a><br>
                        Tel : +216 50 122 990 / +216 70 639 378<br>
                        <a href='https://www.linkedin.com' style='color: #405c54;'>LinkedIn</a>
                    </p>
                </div>
            </body>
            </html>
        ";

        // Envoyer l'e-mail
        $mail->send();
        echo '<p style="color: green;">Message envoyé avec succès.</p>';
    } catch (Exception $e) {
        echo "<p style='color: red;'>Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}</p>";
    }
}
?>
