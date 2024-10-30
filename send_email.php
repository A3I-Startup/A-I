<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $appType = $_POST['appType'];
    $theme = $_POST['theme'];
    $description = $_POST['description'];
    $budget = $_POST['budget'];
    $deliveryDate = $_POST['deliveryDate'];
    $features = isset($_POST['features']) ? implode(", ", $_POST['features']) : 'Aucune';
    $mail->CharSet = 'UTF-8';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
       
                              $mail->isSMTP();                                            //Send using SMTP
                              $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                              $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                              $mail->Username   = 'amaltr21@gmail.com';                     //SMTP username
                              $mail->Password   = 'gtye laay yhrb sxzp';                               //SMTP password
                              $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                              $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom($email,"Nouveau Client");
        $mail->addAddress('startup.aaai@gmail.com');  // Add a recipient
 $mail->addCC('azer1.guesmi@gmail.com');
        $mail->addCC('ihebbouraoui38@gmail.com');
        $mail->addCC('borcheni1999@gmail.com');
		        $mail->addCC('amaltr21@gmail.com');

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Nouvelle demande de devis';
        $mail->Body    = "
            <html>
            <body style='font-family: Arial, sans-serif; color: #333;'>
                <div style='padding: 20px; border: 1px solid #ddd; max-width: 600px; margin: 0 auto;'>
                    <h2 style='text-align: center; color: #405c54;'>Demande de devis pour A³I</h2>
                    <p>Bonjour,</p>
                    <p>Une nouvelle demande de devis a été soumise. Voici les détails :</p>
                    <table style='width: 100%; margin-top: 10px;'>
                        <tr><td style='padding: 8px; font-weight: bold;'>Nom complet :</td><td>{$name}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Email :</td><td>{$email}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Téléphone :</td><td>{$phone}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Type d'application :</td><td>{$appType}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Thème :</td><td>{$theme}</td></tr>
                        <tr><td style='padding: 8px; font-weight: bold;'>Description du projet :</td><td>{$description}</td></tr>
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

        // Send the email
        $mail->send();
        echo 'Demande envoyée avec succès.';
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi: {$mail->ErrorInfo}";
    }
}
?>
