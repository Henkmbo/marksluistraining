<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inschrijven - Mark Sluis Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <style>
        .registration-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/training-5.jpg');
            background-size: cover;
            background-position: center;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            overflow: hidden;
        }
    
        
        .form-section {
            padding: 5rem 0;
        }
          .form-container {
            background-color: var(--secondary);
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            padding: 2rem;
            position: relative;
            overflow: hidden;
            border: 1px solid #333;
        }
        
        .form-container::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 30%;
            height: 30%;
            background-color: var(--primary);
            clip-path: polygon(100% 0, 0 0, 100% 100%);
        }
        
        .pricing-card {
            background-color: var(--secondary);
            border: none;
            border-radius: 0;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            position: relative;
        }
        
        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        
        .pricing-header {
            background-color: var(--primary);
            color: var(--dark);
            padding: 1.5rem;
            text-align: center;
        }
        
        .pricing-body {
            padding: 1.5rem;
        }
        
        .price {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        .feature-list li {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }
        
        .feature-list li i {
            color: var(--primary);
            margin-right: 0.5rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <?php include './includes/header.php'?>

    <header class="registration-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Inschrijven</h1>
            <p class="lead">Schrijf je in voor een van onze trainingen</p>
        </div>
    </header>

 <section class="form-section" id="inschrijfformulier">
        <div class="container">
            <div class="section-header">
                <h2 class="section-heading">Inschrijfformulier</h2>
                <div class="divider"></div>
                <p class="section-description">
                    Vul het onderstaande formulier in om je in te schrijven voor onze activiteiten. 
                    Wij nemen zo snel mogelijk contact met je op om je inschrijving te bevestigen.
                </p>
            </div>
              <div class="form-container">
                <div id="success-message" class="success-message" style="display: none;">
                    <h3>Inschrijving Ontvangen!</h3>
                    <p>Bedankt voor je inschrijving. We hebben je gegevens ontvangen en nemen zo snel mogelijk contact met je op.</p>
                    <button type="button" class="btn btn-primary" id="newFormBtn">Nieuw formulier invullen</button>
                </div>                <form id="registrationForm" method="post" action="process_form.php">
                    <!-- Server-side PHP will handle the form submission -->
                    <div id="form-status" class="alert" style="display: none;"></div>
                    <!-- Persoonlijke Gegevens -->
                    <div class="form-section-block">
                        <h3 class="form-section-title">Persoonlijke Gegevens</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fullName">Volledige naam <span class="required">*</span></label>
                                <input type="text" class="form-control" id="fullName" name="fullName" required>
                                <div class="error-message" id="fullName-error"></div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="birthDate">Geboortedatum <span class="required">*</span></label>
                                <input type="date" class="form-control" id="birthDate" name="birthDate" required>
                                <div class="error-message" id="birthDate-error"></div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="address">Adres <span class="required">*</span></label>
                                <input type="text" class="form-control" id="address" name="address" required>
                                <div class="error-message" id="address-error"></div>
                            </div>
                        </div>
                        
                        <div class="form-row two-columns">
                            <div class="form-group">
                                <label for="postalCode">Postcode <span class="required">*</span></label>
                                <input type="text" class="form-control" id="postalCode" name="postalCode" required>
                                <div class="error-message" id="postalCode-error"></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="city">Woonplaats <span class="required">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" required>
                                <div class="error-message" id="city-error"></div>
                            </div>
                        </div>
                        
                        <div class="form-row two-columns">
                            <div class="form-group">
                                <label for="phone">Telefoonnummer <span class="required">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="error-message" id="phone-error"></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">E-mailadres <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="error-message" id="email-error"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Activiteit Keuze -->
                    <div class="form-section-block">
                        <h3 class="form-section-title">Activiteit Keuze</h3>
                        <p>Selecteer de activiteit waarvoor je je wilt inschrijven (meerdere opties mogelijk):</p>
                        
                        <div class="form-row checkbox-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-peutervoetbal" name="activities[]" value="Peutervoetbal">
                                <label class="form-check-label" for="activity-peutervoetbal">Peutervoetbal</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-bootcamp" name="activities[]" value="Bootcamp">
                                <label class="form-check-label" for="activity-bootcamp">Bootcamp</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-voetbaltraining" name="activities[]" value="Voetbaltraining">
                                <label class="form-check-label" for="activity-voetbaltraining">Voetbaltraining</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-weerbaarheidstraining" name="activities[]" value="Weerbaarheidstraining">
                                <label class="form-check-label" for="activity-weerbaarheidstraining">Weerbaarheidstraining</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-workshop" name="activities[]" value="Workshop">
                                <label class="form-check-label" for="activity-workshop">Workshop</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-kinderfeestje" name="activities[]" value="Kinderfeestje">
                                <label class="form-check-label" for="activity-kinderfeestje">Kinderfeestje</label>
                            </div>
                        </div>
                        <div class="error-message" id="activities-error"></div>
                    </div>
                      <!-- Gezondheid en Medische Gegevens -->
                    <div class="form-section-block">
                        <h3 class="form-section-title">Gezondheid en Medische Gegevens</h3>
                        <p class="form-text">Indien van toepassing, vul hieronder je medische informatie in die relevant is voor deelname aan de activiteit.</p>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Heeft u of uw kind medische aandoeningen waar wij van op de hoogte moeten zijn? <span class="required">*</span></label>
                                <div class="radio-group">
                                    <div class="form-radio">
                                        <input type="radio" id="medicalConditions-yes" name="hasMedicalConditions" value="ja" required>
                                        <label for="medicalConditions-yes">Ja</label>
                                    </div>
                                    <div class="form-radio">
                                        <input type="radio" id="medicalConditions-no" name="hasMedicalConditions" value="nee" checked required>
                                        <label for="medicalConditions-no">Nee</label>
                                    </div>
                                </div>
                                <div class="error-message" id="hasMedicalConditions-error"></div>
                            </div>
                        </div>
                        
                        <div class="form-row" id="medical-details-container" style="display: none;">
                            <div class="form-group">
                                <label for="medicalDetails">Zo ja, graag specificeren:</label>
                                <textarea class="form-control" id="medicalDetails" name="medicalDetails" rows="3"></textarea>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="form-group">
                                <label>Gebruik je medicijnen die invloed kunnen hebben op deelname? <span class="required">*</span></label>
                                <div class="radio-group">
                                    <div class="form-radio">
                                        <input type="radio" id="medication-yes" name="usesMedication" value="ja" required>
                                        <label for="medication-yes">Ja</label>
                                    </div>
                                    <div class="form-radio">
                                        <input type="radio" id="medication-no" name="usesMedication" value="nee" checked required>
                                        <label for="medication-no">Nee</label>
                                    </div>
                                </div>
                                <div class="error-message" id="usesMedication-error"></div>
                            </div>
                        </div>
                        
                        <div class="form-row" id="medication-details-container" style="display: none;">
                            <div class="form-group">
                                <label for="medicationDetails">Indien ja, graag specificeren:</label>
                                <textarea class="form-control" id="medicationDetails" name="medicationDetails" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Ouder/Verzorger Informatie -->
                    <div class="form-section-block">
                        <h3 class="form-section-title">Ouder/Verzorger Informatie</h3>
                        <p>Voor minderjarige deelnemers is toestemming van een ouder of verzorger vereist.</p>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="guardianName">Naam ouder/verzorger</label>
                                <input type="text" class="form-control" id="guardianName" name="guardianName">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="guardianPhone">Telefoonnummer ouder/verzorger</label>
                                <input type="tel" class="form-control" id="guardianPhone" name="guardianPhone">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="guardianEmail">E-mailadres ouder/verzorger</label>
                                <input type="email" class="form-control" id="guardianEmail" name="guardianEmail">
                                <div class="error-message" id="guardianEmail-error"></div>
                            </div>
                        </div>
                    </div>
                    
                      <!-- Toestemmingen en Verklaringen -->
                    <div class="form-section-block">
                        <h3 class="form-section-title">Toestemmingen en Verklaringen</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Toestemming voor gebruik van foto's en video's <span class="required">*</span></label>
                                <p class="form-text">Tijdens de activiteiten kunnen foto's en video's worden gemaakt voor promotionele doeleinden.</p>
                                <div class="radio-group">
                                    <div class="form-radio">
                                        <input type="radio" id="photo-yes" name="photoConsent" value="ja" required>
                                        <label for="photo-yes">Ik geef toestemming voor het gebruik van foto's en video's waarin ik/ons kind te zien is.</label>
                                    </div>
                                    <div class="form-radio">
                                        <input type="radio" id="photo-no" name="photoConsent" value="nee" checked required>
                                        <label for="photo-no">Ik geef geen toestemming voor het gebruik van foto's en video's.</label>
                                    </div>
                                </div>
                                <div class="error-message" id="photoConsent-error"></div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="termsAgreed" name="termsAgreed" required>
                                    <label class="form-check-label" for="termsAgreed">
                                        Ik ga akkoord met de <a href="voorwaarden.php" class="terms-link" target="_blank">algemene voorwaarden</a> van Mark Sluis Training
                                    </label>
                                    <div class="error-message" id="termsAgreed-error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" id="submitButton">
                            <span class="btn-text">Inschrijven</span>
                            <span class="btn-loading" style="display: none;">
                                <i class="fas fa-spinner fa-spin"></i> Verzenden...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php include './includes/footer.php'?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
    <script>
        // Add scrolled class to navbar when scrolling
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
