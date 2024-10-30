<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Créer une instance de PHPMailer
    print_r($_POST); // Affiche toutes les données du formulaire

    // Récupérer les données du formulaire
    $name = $_POST['nameEmbedded'];
    $email = $_POST['emailEmbedded'];
    $phone = $_POST['phoneEmbedded'];
    $solutionType = $_POST['solutionType'];
    $theme = $_POST['themeEmbedded'];
    $description = $_POST['descriptionEmbedded'];
    $features = isset($_POST['featuresEmbedded']) ? implode(", ", $_POST['featuresEmbedded']) : 'Aucune';
    $budget = $_POST['budgetEmbedded'];
    $deliveryDate = $_POST['deliveryDateEmbedded'];
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
        $mail->setFrom('amaltr21@gmail.com', 'A³I - Demande de solutions embarquées'); // Votre adresse
        $mail->addAddress('startup.aaai@gmail.com'); // Destinataire principal
        $mail->addCC('azer1.guesmi@gmail.com');
        $mail->addCC('ihebbouraoui38@gmail.com');
        $mail->addCC('borcheni1999@gmail.com');
        $mail->addCC('amaltr21@gmail.com');
$mail->CharSet = 'UTF-8';

        // Contenu de l'e-mail
        $mail->isHTML(true); // Format HTML
        $mail->Subject = 'Nouvelle demande de solutions embarquées';
        $mail->Body    = "
            <html>
            <body style='font-family: Arial, sans-serif; color: #333;'>
                <div style='padding: 20px; border: 1px solid #ddd; max-width: 600px; margin: 0 auto;'>
                    <h2 style='text-align: center; color: #405c54;'>Demande de solutions embarquées</h2>
                    <p>Bonjour,</p>
                    <p>Une nouvelle demande a été soumise. Voici les détails :</p>
                    <table style='width: 100%; margin-top: 10px;'>
                        <tr><td style='padding: 8px; font-weight: bold;'>Nom complet :</td><td>{$name}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Email :</td><td>{$email}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Téléphone :</td><td>{$phone}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Type de solution :</td><td>{$solutionType}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Thème :</td><td>{$theme}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Description :</td><td>{$description}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Budget estimé :</td><td>{$budget} TND</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Date de livraison souhaitée :</td><td>{$deliveryDate}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Fonctionnalités supplémentaires :</td><td>{$features}</td></tr>
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
        echo 'Demande envoyée avec succès.';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
    }
}
?>
