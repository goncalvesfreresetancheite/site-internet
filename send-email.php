<?php
// Activer l'affichage des erreurs en développement (à désactiver en production)
error_reporting(E_ALL);
ini_set('display_errors', 0); // Désactivé pour ne pas exposer les erreurs aux utilisateurs

// Headers CORS (si nécessaire)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=utf-8');

// Vérifier que c'est une requête POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit;
}

// Récupérer les données du formulaire
$nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
$telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$lieu = isset($_POST['lieu']) ? trim($_POST['lieu']) : '';
$profil = isset($_POST['profil']) ? trim($_POST['profil']) : '';
$typeProjet = isset($_POST['typeProjet']) ? trim($_POST['typeProjet']) : '';
$delai = isset($_POST['delai']) ? trim($_POST['delai']) : '';
$description = isset($_POST['description']) ? trim($_POST['description']) : '';

// Validation basique
if (empty($nom) || empty($telephone) || empty($email) || empty($lieu)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Tous les champs obligatoires doivent être remplis']);
    exit;
}

// Validation email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email invalide']);
    exit;
}

// Configuration des emails
// Pour l'instant, seulement Agence de l'Ombre (hello@agencedelombre.fr)
// Plus tard, activer aussi gfe-etancheite@hotmail.com
$emailTo = 'hello@agencedelombre.fr'; // Email principal (visible)
// $emailGFE = 'gfe-etancheite@hotmail.com'; // À activer plus tard
$emailBcc = 'hello@agencedelombre.fr'; // Copie cachée

// Objet de l'email
$subject = 'Demande devis site 2 // ' . $nom . ' - ' . $lieu;

// Corps de l'email en HTML
$emailBody = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); color: white; padding: 20px; border-radius: 10px 10px 0 0; }
        .header h1 { margin: 0; font-size: 24px; }
        .content { background: #f9f9f9; padding: 30px; border-radius: 0 0 10px 10px; }
        .field { margin-bottom: 20px; }
        .field-label { font-weight: bold; color: #1e3a8a; margin-bottom: 5px; }
        .field-value { background: white; padding: 10px; border-radius: 5px; border-left: 4px solid #3b82f6; }
        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📨 Nouvelle Demande de Devis GFE</h1>
            <p style="margin: 5px 0 0 0;">Source: Site Web GFE 2.0</p>
        </div>
        <div class="content">
            <div class="field">
                <div class="field-label">👤 Nom / Société</div>
                <div class="field-value">' . htmlspecialchars($nom) . '</div>
            </div>
            
            <div class="field">
                <div class="field-label">📍 Lieu du chantier</div>
                <div class="field-value">' . htmlspecialchars($lieu) . '</div>
            </div>
            
            <div class="field">
                <div class="field-label">📞 Téléphone</div>
                <div class="field-value">' . htmlspecialchars($telephone) . '</div>
            </div>
            
            <div class="field">
                <div class="field-label">📧 Email</div>
                <div class="field-value">' . htmlspecialchars($email) . '</div>
            </div>
            
            <div class="field">
                <div class="field-label">🏢 Profil</div>
                <div class="field-value">' . htmlspecialchars($profil) . '</div>
            </div>
            
            <div class="field">
                <div class="field-label">🏗️ Type de projet</div>
                <div class="field-value">' . htmlspecialchars($typeProjet) . '</div>
            </div>
            
            <div class="field">
                <div class="field-label">⏰ Délai souhaité</div>
                <div class="field-value">' . htmlspecialchars($delai) . '</div>
            </div>
            
            <div class="field">
                <div class="field-label">📝 Description du projet</div>
                <div class="field-value">' . nl2br(htmlspecialchars($description)) . '</div>
            </div>
        </div>
        <div class="footer">
            <p>Ce message a été envoyé depuis le formulaire de contact du site GFE<br>
            <strong>⏱️ Délai de réponse : 4 jours ouvrés maximum</strong></p>
            <p style="margin-top: 15px; font-size: 11px; color: #999;">
                Site créé par <a href="https://site.agencedelombre.fr" style="color: #3b82f6;">Agence de l\'Ombre</a>
            </p>
        </div>
    </div>
</body>
</html>
';

// Headers pour l'email
$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: Site GFE <noreply@goncalves-freres-etancheite.fr>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'Bcc: ' . $emailBcc; // Copie cachée
$headers[] = 'X-Mailer: PHP/' . phpversion();

// Envoi de l'email
$mailSent = mail($emailTo, $subject, $emailBody, implode("\r\n", $headers));

if ($mailSent) {
    // Log de succès (optionnel - à sécuriser en production)
    $logMessage = date('Y-m-d H:i:s') . " - Demande de devis envoyée : $nom - $lieu\n";
    @file_put_contents('contact-logs.txt', $logMessage, FILE_APPEND);
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Votre demande de devis a été envoyée avec succès ! Nous vous répondrons sous 4 jours ouvrés.'
    ]);
} else {
    // Log d'erreur
    $errorMessage = date('Y-m-d H:i:s') . " - ERREUR envoi email : $nom - $lieu\n";
    @file_put_contents('contact-logs.txt', $errorMessage, FILE_APPEND);
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement au 09 83 48 26 97.'
    ]);
}
?>
