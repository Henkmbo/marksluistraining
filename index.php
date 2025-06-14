<?php
$allowed_ips = ['145.89.255.39', '::1', '127.0.0.1'];
if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
    die('Toegang geweigerd: alleen toegestaan vanaf jouw IP');
}
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Sluis Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
    <?php include './includes/header.php'?>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 banner-content-wrapper">
                    <div class="container">
                        <div class="banner-content">
                            <h1 class="banner-title">Mark Sluis <span>Training</span></h1>
                            <p class="banner-text">Bij Mark Sluis Training ben je aan het juiste adres voor peutervoetbal, bootcamp, kinderfeestjes, weerbaarheidstraining, workshops en nog veel meer – alles voor een actieve en plezierige ontwikkeling!</p>
                            <div class="banner-contact">
                                <div class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    <span class="phoneNumber">+31 6 42266609</span>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <span>info@marksluistraining.nl</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 banner-img">
                    <img src="./img/banner.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section bg-dark">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="intro-image position-relative rounded-4 overflow-hidden shadow-lg">
                        <img src="img/training-4.jpg" alt="Professionele training" class="img-fluid w-100" style="object-fit: cover; min-height: 320px;">
                        <div class="intro-img-overlay"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-content">
                        <h2 class="section-heading mb-3">Sporten bij Mark Sluis Training</h2>
                        <div class="divider mb-4"></div>
                        <p class="mb-4 text-light fs-5">
                            Trainen bij Mark Sluis Training is speciaal omdat plezier voorop staat, ongeacht leeftijd of niveau.<br>
                            De trainingen bieden:
                        </p>
                        <ul class="feature-list list-unstyled mb-4">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="feature-icon me-3"><i class="fas fa-check-circle"></i></span>
                                <span>Individuele aandacht – Persoonlijke begeleiding om het beste uit jezelf te halen.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="feature-icon me-3"><i class="fas fa-check-circle"></i></span>
                                <span>Succeservaringen – Focus op kleine én grote overwinningen, zodat je met zelfvertrouwen groeit.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="feature-icon me-3"><i class="fas fa-check-circle"></i></span>
                                <span>Persoonlijke ontwikkeling – Niet alleen als sporter, maar ook als mens.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="feature-icon me-3"><i class="fas fa-check-circle"></i></span>
                                <span>Toegankelijk voor iedereen – Of je nu net begint of al gevorderd bent, er is altijd ruimte om te leren en te genieten.</span>
                            </li>
                        </ul>
                        <p class="mb-4 text-light fs-5">
                            Hier draait het om méér dan alleen trainen—het is een plek waar je groeit en met plezier sterker wordt!
                        </p>
                        <a href="trainingen.php" class="btn btn-primary btn-lg ">Meer informatie</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Cards -->
    <section class="trainingen bg-dark" id="trainingen">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-heading">Trainingen</h2>
                    <div class="divider mx-auto"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="training-card custom-card h-100">
                        <div class="training-card-img card-img-top position-relative overflow-hidden">
                            <img src="img/weerbeheidstraining.png" alt="Weerbaarheidstraining" class="img-fluid">
                            <div class="card-img-overlay-gradient"></div>
                        </div>
                        <div class="training-card-body card-body">
                            <h5 class="training-card-title card-title">Weerbaarheidstraining</h5>
                            <p class="training-card-text card-text">Rots & Water training en Boksend Opvoeden voor kinderen van 5-12 jaar.</p>
                            <a href="trainingen.php#weerbaarheid" class="btn btn-primary">Meer Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="training-card custom-card h-100">
                        <div class="training-card-img card-img-top position-relative overflow-hidden">
                            <img src="img/hero-bg.jpg" alt="Voetbaltraining" class="img-fluid">
                            <div class="card-img-overlay-gradient"></div>
                        </div>
                        <div class="training-card-body card-body">
                            <h5 class="training-card-title card-title">Voetbaltraining en Keeperstraining</h5>
                            <p class="training-card-text card-text">Persoonlijke en doelgerichte voetbal- en keeperstraining voor alle niveaus.</p>
                            <a href="trainingen.php#voetbal" class="btn btn-primary">Meer Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="training-card custom-card h-100">
                        <div class="training-card-img card-img-top position-relative overflow-hidden">
                            <img src="img/peuters.jpg" alt="Peutervoetbal" class="img-fluid">
                            <div class="card-img-overlay-gradient"></div>
                        </div>
                        <div class="training-card-body card-body">
                            <h5 class="training-card-title card-title">Peutervoetbal</h5>
                            <p class="training-card-text card-text">Samen groeien door beweging voor de allerkleinsten met actieve ouderbetrokkenheid.</p>
                            <a href="trainingen.php#peuter" class="btn btn-primary">Meer Info</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="training-card custom-card h-100">
                        <div class="training-card-img card-img-top position-relative overflow-hidden">
                            <img src="img/training-4.jpg" alt="Fit door Voetbal" class="img-fluid">
                            <div class="card-img-overlay-gradient"></div>
                        </div>
                        <div class="training-card-body card-body">
                            <h5 class="training-card-title card-title">Fit door Voetbal</h5>
                            <p class="training-card-text card-text">De ultieme combinatie van voetbal en bootcamp voor een betere conditie en techniek.</p>
                            <a href="trainingen.php#fit" class="btn btn-primary">Meer Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="training-card custom-card h-100">
                        <div class="training-card-img card-img-top position-relative overflow-hidden">
                            <img src="img/kinderfeestje.jpg" alt="Kinderfeestjes" class="img-fluid">
                            <div class="card-img-overlay-gradient"></div>
                        </div>
                        <div class="training-card-body card-body">
                            <h5 class="training-card-title card-title">Kinderfeestjes</h5>
                            <p class="training-card-text card-text">Sportieve en thematische feestjes op maat voor een onvergetelijke verjaardag.</p>
                            <a href="trainingen.php#feestje" class="btn btn-primary">Meer Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="training-card custom-card h-100">
                        <div class="training-card-img card-img-top position-relative overflow-hidden">
                            <img src="img/weerbeheidstraining13.png" alt="Kinderfeestjes" class="img-fluid">
                            <div class="card-img-overlay-gradient"></div>
                        </div>
                        <div class="training-card-body card-body">
                            <h5 class="training-card-title card-title">Weerbaarheidstraining 13+</h5>
                            <p class="training-card-text card-text">
Een buddy-systeem werkt goed voor pubers omdat het hen helpt sociaal en emotioneel te groeien.
</p>
                            <a href="trainingen.php#buddy" class="btn btn-primary">Meer Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section class="profile-section bg-secondary" id="over-mij">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-heading">Over mij</h2>
                    <div class="divider mx-auto"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-10 mb-5 mb-lg-0">
                    <div class="profile-flex d-flex align-items-start gap-4">
                        <div class="profile-image-container flex-shrink-0 flex-column d-flex align-items-center">
                            <img src="img/profile.jpg" alt="Mark Sluis" class="profile-image">
                            <div class="social-icon-lg justify-content-center mt-3">
                            <a href="https://www.facebook.com/marksluistraining/?locale=nl_NL" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/mark-sluis-63ab3418b/?originalSubdomain=nl" class="social-icon social-icon-lg"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/marksluistraining/" class="social-icon social-icon-lg"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div>
                        <p>
                            <i class="fas fa-user text-primary me-2"></i>
                            Ik ben Mark Sluis, 37 jaar en woon samen met mijn vrouw en zoon in het mooie Doorn. Ik ben afgestudeerd als pedagogisch medewerker (SPW = Sociaal Pedagogisch Werk) en heb lang in de gehandicaptenzorg gewerkt.  Ik heb meer dan 12,5 jaar in de kinderopvang gewerkt. 
                        </p>
                        <p class="mt-3">
                            <i class="fas fa-lightbulb text-primary me-2"></i>
                            <strong>Visie:</strong> Mijn visie is een wereld waarin ieder kind en volwassen de kans krijgt om zich op een gezonde, gelukkige en zelfverzekerde manier te ontwikkelen." Door het aanbieden van diverse programma’s die beweging, creativiteit en sociale vaardigheden combineren, wil ik kinderen en volwassenen helpen hun volledige potentieel te ontdekken en te ontwikkelen in een ondersteunende en stimulerende omgeving.
                        </p>
                        <p class="mt-3">
                            <i class="fas fa-bullseye text-primary me-2"></i>
                            <strong>Missie:</strong> Mijn missie is om iedereen op een speelse en uitdagende manier te laten groeien, zowel fysiek als mentaal." Ik bied een breed scala aan activiteiten die de zelfvertrouwen, motorische vaardigheden en sociale interactie bevorderen, zodat iedereen zich op zijn eigen tempo kan ontwikkelen en plezier kan beleven aan leren en bewegen.
                        </p>

                <h4 class="mt-4 text-primary"><i class="fas fa-graduation-cap me-2"></i>Diploma's</h4>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul class="diploma-list">
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2025</span>
                                    <span>Bootcamptrainer</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2024</span>
                                    <span>Boksend opvoeden BASIS</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2023</span>
                                    <span>Rots & Water Jongeren met een verstandelijke beperking</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2023</span>
                                    <span>Keepers deelstage FC Utrecht</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2022</span>
                                    <span>Uefa C Jeugd</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2021</span>
                                    <span>ASM Instructeur Brede Motorische Ontwikkeling</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="diploma-list">
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2021</span>
                                    <span>Creatief Bewegen met peuters en kleuters</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2019</span>
                                    <span>Pupillen trainer</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2019</span>
                                    <span>Jeugdvoetbal Trainer Coach</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2015</span>
                                    <span>Rots & Water basisschool breed</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2013</span>
                                    <span>Rots & Water basistraining</span>
                                </li>
                                <li class="diploma-item">
                                    <i class="fas fa-certificate text-primary me-2"></i>
                                    <span class="diploma-year">2009</span>
                                    <span>Sociaal Pedagogisch werker niveau 4</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                
            </div>
                
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-heading">Wat anderen zeggen</h2>
                    <div class="divider mx-auto"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="review-text">
                            "Mijn zoon is altijd met veel plezier naar de rots&water training geweest. Er werd veel bewogen buiten en ondertussen groeide zijn zelfvertrouwen door de fijne aanpak van Mark!"
                        </p>
                        <p class="review-author">- N. Boon</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="review-text">
                            "Al jaren volgen wij diverse trainingen van Mark. Zijn trainingen zijn variërend, leerzaam en erg goed opgebouwd. Naast de erg goede trainingen en lessen is Mark als mens heel prettig om mee te werken. Hij daagt je uit, motiveert en doet dit elke keer met vol enthousiasme en met 100% inzet."
                        </p>
                        <p class="review-author">- J. van der Heide</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="review-text">
                            "Bij Mark Sluis training & ontwikkeling kan je heel specifiek trainen en zal je binnen jou traject super goed begeleid worden. Als eerste echte klant van Mark kan ik met veel enthousiasme zeggen dat ik altijd top heb getraind, van keeperstrainingen, tot krachttrainingen in de zomerstop om fit te blijven en zelfs zo specifiek kunnen trainen dat ik vanuit de positie als keeper beter wilde worden in voetballen en we daarop getraind hebben. Mark heeft een positieve manier van coachen en begeleiden, ook motiveert hij je het beste uit jezelf te halen."
                        </p>
                        <p class="review-author">- F. Copier</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="review-card">
                        <div class="review-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="review-text">
                            "Ons gezin maakt al jarenlang gebruik van Mark zijn diensten. Onze zoon heeft zowel individueel als in groepsverband Rots en Water training gevolgd. Mark heeft een magische uitwerking op kinderen. Zijn empathisch vermogen zorgt ervoor dat kinderen zich enorm bij hem op hun gemak voelen. Ze durven zich bij hem bloot te geven en vertrouwen hem volledig. Met dit vertrouwen gaat hij heel goed om en hij weet als hij geen ander bepaalde doelen samen met het kind te bereiken."
                        </p>
                        <p class="review-author">- C. Polak</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        

            document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>
</html>