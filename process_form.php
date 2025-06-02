<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verzamel formulierdata
    $fullName           = $_POST['fullName'] ?? '';
    $birthDate          = $_POST['birthDate'] ?? '';
    $address            = $_POST['address'] ?? '';
    $postalCode         = $_POST['postalCode'] ?? '';
    $city               = $_POST['city'] ?? '';
    $phone              = $_POST['phone'] ?? '';
    $email              = $_POST['email'] ?? '';
    $activities         = isset($_POST['activities']) ? implode(', ', $_POST['activities']) : 'Geen geselecteerd';
    $hasMedical         = $_POST['hasMedicalConditions'] ?? 'nee';
    $medicalDetails     = $_POST['medicalDetails'] ?? '';
    $usesMedication     = $_POST['usesMedication'] ?? 'nee';
    $medicationDetails  = $_POST['medicationDetails'] ?? '';
    $guardianName       = $_POST['guardianName'] ?? '';
    $guardianPhone      = $_POST['guardianPhone'] ?? '';
    $guardianEmail      = $_POST['guardianEmail'] ?? '';
    $photoConsent       = $_POST['photoConsent'] ?? 'nee';
    $termsAgreed        = isset($_POST['termsAgreed']) ? 'Ja' : 'Nee';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'secure.123-webserver.biz';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'admin@marksluistraining.nl';
        $mail->Password   = 'Marksluis1';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('admin@marksluistraining.nl', $fullName);
        $mail->addReplyTo($email);
        $mail->addAddress('admin@marksluistraining.nl', 'Mark Sluis Training');

        $mail->isHTML(true);
        $mail->Subject = 'Nieuwe inschrijving via het formulier';
        $mail->Body = "
            <h2>Nieuwe inschrijving</h2>
            <p><strong>Volledige naam:</strong> $fullName</p>
            <p><strong>Geboortedatum:</strong> $birthDate</p>
            <p><strong>Adres:</strong> $address, $postalCode $city</p>
            <p><strong>Telefoon:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <hr>
            <p><strong>Geselecteerde activiteit(en):</strong> $activities</p>
            <p><strong>Medische aandoeningen:</strong> $hasMedical</p>" .
            ($hasMedical === 'ja' ? "<p><strong>Details:</strong> $medicalDetails</p>" : '') .
            "<p><strong>Medicatiegebruik:</strong> $usesMedication</p>" .
            ($usesMedication === 'ja' ? "<p><strong>Details:</strong> $medicationDetails</p>" : '') .
            "<hr>
            <p><strong>Ouder/verzorger naam:</strong> $guardianName</p>
            <p><strong>Ouder/verzorger telefoon:</strong> $guardianPhone</p>
            <p><strong>Ouder/verzorger email:</strong> $guardianEmail</p>
            <hr>
            <p><strong>Toestemming foto's/video's:</strong> $photoConsent</p>
            <p><strong>Algemene voorwaarden geaccepteerd:</strong> $termsAgreed</p>
        ";

        $mail->send();

        header('Content-Type: application/json');
        echo json_encode(['status' => 'success']);
        exit;
    } catch (Exception $e) {
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => 'Het verzenden van de e-mail is mislukt.',
            'errors' => [$mail->ErrorInfo]
        ]);
        exit;
    }
} else {
    header('Content-Type: application/json');
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Ongeldige toegang']);
    exit;
}
