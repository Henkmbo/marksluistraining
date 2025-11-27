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
        
        /* .form-container::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 30%;
            height: 30%;
            background-color: var(--primary);
            clip-path: polygon(100% 0, 0 0, 100% 100%);
        } */
        
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
                    Ik neem zo snel mogelijk contact met je op om je inschrijving te bevestigen.
                </p>
            </div>
              <div class="form-container">
                <div id="success-message" class="success-message" style="display: none;">
                    <h3>Inschrijving Ontvangen!</h3>
                    <p>Bedankt voor je inschrijving. Ik heb je gegevens ontvangen en neem zo snel mogelijk contact met je op.</p>
                    <button type="button" class="btn btn-primary" id="newFormBtn">Nieuw formulier invullen</button>
                </div>                
                <form id="registrationForm" method="post" action="process_form.php">
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
                                <input type="checkbox" class="form-check-input waitlist-activity" id="activity-voetbaltraining" name="activities[]" value="Voetbaltraining">
                                <label class="form-check-label" for="activity-voetbaltraining">Voetbaltraining</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input waitlist-activity" id="activity-weerbaarheidstraining" name="activities[]" value="Weerbaarheidstraining (5-12 jaar)">
                                <label class="form-check-label" for="activity-weerbaarheidstraining">Weerbaarheidstraining (5-12 jaar)</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-workshop" name="activities[]" value="Workshop">
                                <label class="form-check-label" for="activity-workshop">Workshop</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activity-kinderfeestje" name="activities[]" value="Kinderfeestje">
                                <label class="form-check-label" for="activity-kinderfeestje">Kinderfeestje</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input waitlist-activity" id="activity-buddy" name="activities[]" value="Buddy systeem (13+)">
                                <label class="form-check-label" for="activity-buddy">Buddy systeem (13+)</label>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input waitlist-activity" id="activity-keeperstraining" name="activities[]" value="Keeperstraining">
                                <label class="form-check-label" for="activity-keeperstraining">Keeperstraining</label>
                            </div>
                        </div>
                        <div class="error-message" id="activities-error"></div>
                        
                        <!-- Wachtlijst waarschuwing -->
                        <div class="alert alert-info mt-3" id="waitlist-warning" style="display: none;">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Opmerking:</strong> Voor de door jou geselecteerde training(en) werken we momenteel met een wachtlijst.
                        </div>
                    </div>
                    
                    <!-- Wachtlijst toestemming -->
                    <div class="form-section-block" id="waitlist-consent-section" style="display: none;">
                        <h3 class="form-section-title">Wachtlijst</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="waitlistAgreed" name="waitlistAgreed">
                                    <label class="form-check-label" for="waitlistAgreed">
                                        Ik ga akkoord om op de wachtlijst te worden geplaatst voor de geselecteerde training(en)
                                    </label>
                                    <div class="error-message" id="waitlistAgreed-error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <!-- Gezondheid en Medische Gegevens -->
                    
                    
                      <!-- Toestemmingen en Verklaringen -->
                    <div class="form-section-block">
                        <h3 class="form-section-title">Toestemmingen en Verklaringen</h3>
                                                
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

        // Handle waitlist activity selection
        document.addEventListener('DOMContentLoaded', function() {
            const waitlistActivities = document.querySelectorAll('.waitlist-activity');
            const waitlistWarning = document.getElementById('waitlist-warning');
            const waitlistConsentSection = document.getElementById('waitlist-consent-section');
            const allActivities = document.querySelectorAll('input[name="activities[]"]');

            function checkWaitlistActivities() {
                const isWaitlistSelected = Array.from(allActivities).some(activity => {
                    return activity.classList.contains('waitlist-activity') && activity.checked;
                });

                if (isWaitlistSelected) {
                    waitlistWarning.style.display = 'block';
                    waitlistConsentSection.style.display = 'block';
                } else {
                    waitlistWarning.style.display = 'none';
                    waitlistConsentSection.style.display = 'none';
                    // Uncheck the waitlist consent if no waitlist activities are selected
                    document.getElementById('waitlistAgreed').checked = false;
                }
            }

            // Add event listeners to all activity checkboxes
            allActivities.forEach(activity => {
                activity.addEventListener('change', checkWaitlistActivities);
            });
        });
    </script>
</body>
</html>
