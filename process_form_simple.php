<?php
// Include PHPMailer classes
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Configuration
$recipient_emails = ["hvanderkooij@gmail.com"]; // Add more emails as needed
$email_subject = "Nieuwe inschrijving - Mark Sluis Training";

// Security and validation
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create response array
    $response = [
        "status" => "error",
        "message" => "Er is een fout opgetreden bij het verwerken van het formulier."
    ];

    // Get form data and sanitize
    $fullName = isset($_POST['fullName']) ? sanitize_input($_POST['fullName']) : "";
    $birthDate = isset($_POST['birthDate']) ? sanitize_input($_POST['birthDate']) : "";
    $address = isset($_POST['address']) ? sanitize_input($_POST['address']) : "";
    $postalCode = isset($_POST['postalCode']) ? sanitize_input($_POST['postalCode']) : "";
    $city = isset($_POST['city']) ? sanitize_input($_POST['city']) : "";
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : "";
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : "";
    
    // Activities - process checkbox array
    $activities = isset($_POST['activities']) ? $_POST['activities'] : [];
    $activitiesList = "";
    if (!empty($activities)) {
        foreach ($activities as $activity) {
            $activitiesList .= "- " . sanitize_input($activity) . "\n";
        }
    } else {
        $activitiesList = "Geen activiteiten geselecteerd";
    }
    
    // Medical information
    $hasMedicalConditions = isset($_POST['hasMedicalConditions']) ? sanitize_input($_POST['hasMedicalConditions']) : "";
    $medicalDetails = isset($_POST['medicalDetails']) ? sanitize_input($_POST['medicalDetails']) : "";
    $usesMedication = isset($_POST['usesMedication']) ? sanitize_input($_POST['usesMedication']) : "";
    $medicationDetails = isset($_POST['medicationDetails']) ? sanitize_input($_POST['medicationDetails']) : "";
    
    // Guardian information
    $guardianName = isset($_POST['guardianName']) ? sanitize_input($_POST['guardianName']) : "";
    $guardianPhone = isset($_POST['guardianPhone']) ? sanitize_input($_POST['guardianPhone']) : "";
    $guardianEmail = isset($_POST['guardianEmail']) ? sanitize_input($_POST['guardianEmail']) : "";
    
    // Permissions
    $photoConsent = isset($_POST['photoConsent']) ? sanitize_input($_POST['photoConsent']) : "";
    $termsAgreed = isset($_POST['termsAgreed']) ? "Ja" : "Nee";
    
    // Validate required fields
    $errors = [];
    
    if (empty($fullName)) $errors[] = "Naam is verplicht.";
    if (empty($birthDate)) $errors[] = "Geboortedatum is verplicht.";
    if (empty($address)) $errors[] = "Adres is verplicht.";
    if (empty($postalCode)) $errors[] = "Postcode is verplicht.";
    if (empty($city)) $errors[] = "Woonplaats is verplicht.";
    if (empty($phone)) $errors[] = "Telefoonnummer is verplicht.";
    if (empty($email)) {
        $errors[] = "Email is verplicht.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Ongeldig e-mailadres.";
    }
    if (empty($activities)) $errors[] = "Selecteer ten minste één activiteit.";
    if (!isset($_POST['hasMedicalConditions'])) $errors[] = "Medische aandoeningen veld is verplicht.";
    if (!isset($_POST['usesMedication'])) $errors[] = "Medicatie veld is verplicht.";
    if (!isset($_POST['photoConsent'])) $errors[] = "Toestemming voor foto's veld is verplicht.";
    if (!isset($_POST['termsAgreed'])) $errors[] = "Je moet akkoord gaan met de algemene voorwaarden.";
    
    // If validation passes, build and send email
    if (empty($errors)) {        // Build email message (plain text version)
        $message = "NIEUWE INSCHRIJVING - MARK SLUIS TRAINING\n\n";
        $message .= "PERSOONLIJKE GEGEVENS:\n";
        $message .= "Naam: $fullName\n";
        $message .= "Geboortedatum: $birthDate\n";
        $message .= "Adres: $address\n";
        $message .= "Postcode: $postalCode\n";
        $message .= "Woonplaats: $city\n";
        $message .= "Telefoonnummer: $phone\n";
        $message .= "E-mail: $email\n\n";
        
        $message .= "GESELECTEERDE ACTIVITEITEN:\n$activitiesList\n";
        
        $message .= "MEDISCHE INFORMATIE:\n";
        $message .= "Heeft medische aandoeningen: $hasMedicalConditions\n";
        if ($hasMedicalConditions == "ja" && !empty($medicalDetails)) {
            $message .= "Details: $medicalDetails\n";
        }
        $message .= "Gebruikt medicatie: $usesMedication\n";
        if ($usesMedication == "ja" && !empty($medicationDetails)) {
            $message .= "Details: $medicationDetails\n";
        }
        
        if (!empty($guardianName) || !empty($guardianPhone) || !empty($guardianEmail)) {
            $message .= "\nOUDER/VERZORGER INFORMATIE:\n";
            if (!empty($guardianName)) $message .= "Naam: $guardianName\n";
            if (!empty($guardianPhone)) $message .= "Telefoonnummer: $guardianPhone\n";
            if (!empty($guardianEmail)) $message .= "E-mail: $guardianEmail\n";
        }
        
        $message .= "\nTOESTEMMINGEN:\n";
        $message .= "Toestemming voor foto's en video's: $photoConsent\n";
        $message .= "Akkoord met algemene voorwaarden: $termsAgreed\n";
        
        $message .= "\n--\nDeze inschrijving is verzonden op " . date("d-m-Y H:i:s") . "\n";
        $message .= "IP-adres: " . $_SERVER['REMOTE_ADDR'] . "\n";
        
        // Create beautiful HTML email template
        $htmlMessage = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe Inschrijving</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #d4af37;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-left: 1px solid #dddddd;
            border-right: 1px solid #dddddd;
        }
        .section {
            margin-bottom: 25px;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 20px;
        }
        .section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #d4af37;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 2px solid #d4af37;
            display: inline-block;
        }
        .info-row {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            color: #555555;
            min-width: 150px;
            display: inline-block;
        }
        .value {
            display: inline-block;
        }
        .activities-list {
            list-style-type: none;
            padding-left: 0;
        }
        .activities-list li {
            padding: 5px 0;
        }
        .activities-list li:before {
            content: "• ";
            color: #d4af37;
        }
        .footer {
            background-color: #f7f7f7;
            font-size: 12px;
            color: #777777;
            padding: 15px 20px;
            text-align: center;
            border-radius: 0 0 5px 5px;
            border: 1px solid #dddddd;
        }
        .highlight {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin: 10px 0;
        }
        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
            }
            .label, .value {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nieuwe Inschrijving</h1>
            <p>Mark Sluis Training</p>
        </div>
        <div class="content">
            <div class="section">
                <div class="section-title">PERSOONLIJKE GEGEVENS</div>
                <div class="info-row">
                    <span class="label">Naam:</span>
                    <span class="value">' . htmlspecialchars($fullName) . '</span>
                </div>
                <div class="info-row">
                    <span class="label">Geboortedatum:</span>
                    <span class="value">' . htmlspecialchars($birthDate) . '</span>
                </div>
                <div class="info-row">
                    <span class="label">Adres:</span>
                    <span class="value">' . htmlspecialchars($address) . '</span>
                </div>
                <div class="info-row">
                    <span class="label">Postcode:</span>
                    <span class="value">' . htmlspecialchars($postalCode) . '</span>
                </div>
                <div class="info-row">
                    <span class="label">Woonplaats:</span>
                    <span class="value">' . htmlspecialchars($city) . '</span>
                </div>
                <div class="info-row">
                    <span class="label">Telefoonnummer:</span>
                    <span class="value">' . htmlspecialchars($phone) . '</span>
                </div>
                <div class="info-row">
                    <span class="label">E-mail:</span>
                    <span class="value">' . htmlspecialchars($email) . '</span>
                </div>
            </div>

            <div class="section">
                <div class="section-title">GESELECTEERDE ACTIVITEITEN</div>';
                
        if (!empty($activities)) {
            $htmlMessage .= '<ul class="activities-list">';
            foreach ($activities as $activity) {
                $htmlMessage .= '<li>' . htmlspecialchars(sanitize_input($activity)) . '</li>';
            }
            $htmlMessage .= '</ul>';
        } else {
            $htmlMessage .= '<p>Geen activiteiten geselecteerd</p>';
        }
                
        $htmlMessage .= '
            </div>

            <div class="section">
                <div class="section-title">MEDISCHE INFORMATIE</div>
                <div class="info-row">
                    <span class="label">Heeft medische aandoeningen:</span>
                    <span class="value">' . htmlspecialchars($hasMedicalConditions) . '</span>
                </div>';
                
        if ($hasMedicalConditions == "ja" && !empty($medicalDetails)) {
            $htmlMessage .= '
                <div class="highlight">
                    <div class="info-row">
                        <span class="label">Details:</span>
                        <span class="value">' . nl2br(htmlspecialchars($medicalDetails)) . '</span>
                    </div>
                </div>';
        }
                
        $htmlMessage .= '
                <div class="info-row">
                    <span class="label">Gebruikt medicatie:</span>
                    <span class="value">' . htmlspecialchars($usesMedication) . '</span>
                </div>';
                
        if ($usesMedication == "ja" && !empty($medicationDetails)) {
            $htmlMessage .= '
                <div class="highlight">
                    <div class="info-row">
                        <span class="label">Details:</span>
                        <span class="value">' . nl2br(htmlspecialchars($medicationDetails)) . '</span>
                    </div>
                </div>';
        }
                
        $htmlMessage .= '
            </div>';
            
        if (!empty($guardianName) || !empty($guardianPhone) || !empty($guardianEmail)) {
            $htmlMessage .= '
            <div class="section">
                <div class="section-title">OUDER/VERZORGER INFORMATIE</div>';
                
            if (!empty($guardianName)) {
                $htmlMessage .= '
                <div class="info-row">
                    <span class="label">Naam:</span>
                    <span class="value">' . htmlspecialchars($guardianName) . '</span>
                </div>';
            }
                
            if (!empty($guardianPhone)) {
                $htmlMessage .= '
                <div class="info-row">
                    <span class="label">Telefoonnummer:</span>
                    <span class="value">' . htmlspecialchars($guardianPhone) . '</span>
                </div>';
            }
                
            if (!empty($guardianEmail)) {
                $htmlMessage .= '
                <div class="info-row">
                    <span class="label">E-mail:</span>
                    <span class="value">' . htmlspecialchars($guardianEmail) . '</span>
                </div>';
            }
                
            $htmlMessage .= '
            </div>';
        }
            
        $htmlMessage .= '
            <div class="section">
                <div class="section-title">TOESTEMMINGEN</div>
                <div class="info-row">
                    <span class="label">Toestemming voor foto\'s en video\'s:</span>
                    <span class="value">' . htmlspecialchars($photoConsent) . '</span>
                </div>
                <div class="info-row">
                    <span class="label">Akkoord met algemene voorwaarden:</span>
                    <span class="value">' . htmlspecialchars($termsAgreed) . '</span>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Deze inschrijving is verzonden op ' . date("d-m-Y H:i:s") . '</p>
            <p>IP-adres: ' . $_SERVER['REMOTE_ADDR'] . '</p>
        </div>
    </div>
</body>
</html>
';
        
        // Send email using PHPMailer
        $email_success = true;
        
        try {
            // Initialize PHPMailer
            $mail = new PHPMailer(true);
            
            // Set to use PHP's mail() function
            $mail->isMail();
            
            // Sender
            $mail->setFrom($email, $fullName);
            $mail->addReplyTo($email, $fullName);
            
            // Recipients
            foreach ($recipient_emails as $recipient) {
                $mail->addAddress($recipient);
            }
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = $email_subject;
            $mail->Body = $htmlMessage;
            $mail->AltBody = $message;
            
            // Send the email
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }
        } catch (Exception $e) {
            $email_success = false;
            // Log the error for debugging
            error_log("Email sending failed: " . $e->getMessage());
        }
        
        // Also save data to file as backup
        $backup_file = 'inschrijvingen/inschrijving_' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.txt';
        
        // Make sure the directory exists
        if (!file_exists('inschrijvingen')) {
            mkdir('inschrijvingen', 0777, true);
        }
        
        // Always save a backup (even if email fails)
        $backup_saved = file_put_contents($backup_file, $message);
        
        // If backup was saved but email failed, still report success since we have the data
        if ($backup_saved && !$email_success) {
            $response = [
                "status" => "success",
                "message" => "Bedankt voor je inschrijving! We hebben je gegevens ontvangen en nemen zo snel mogelijk contact met je op."
            ];
        } else if ($email_success) {
            $response = [
                "status" => "success",
                "message" => "Bedankt voor je inschrijving! We hebben je gegevens ontvangen en nemen zo snel mogelijk contact met je op."
            ];
        } else {
            $response = [
                "status" => "error",
                "message" => "Er is een fout opgetreden bij het verzenden. Probeer het later opnieuw of neem contact met ons op."
            ];
        }
    } else {
        // Validation failed
        $response = [
            "status" => "error",
            "message" => "Controleer het formulier op fouten:",
            "errors" => $errors
        ];
    }
    
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// If accessed directly without form submission
header('HTTP/1.1 403 Forbidden');
echo "Toegang geweigerd.";
?>
