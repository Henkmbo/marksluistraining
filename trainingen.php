<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainingen - Mark Sluis Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        /* Global Styles */
        :root {
            --primary: #d4af37;
            --primary-dark: #c09c2c;
            --secondary: #1a1a1a;
            --light: #ffffff;
            --dark: #000000;
            --gray: #333333;
        }

        body {
            font-family: "Roboto", sans-serif;
            color: var(--light);
            background-color: var(--dark);
        }

        .section-heading {
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .divider {
            width: 50px;
            border-top: 3px solid var(--primary);
            margin: 1.5rem 0;
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            color: var(--dark);
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .text-primary {
            color: var(--primary) !important;
        }

        /* Navigation */
        .navbar {
            background-color: rgba(0, 0, 0, 0.95);
            transition: all 0.3s ease;
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary) !important;
        }

        .nav-link {
            font-weight: 500;
            margin: 0 0.5rem;
            color: var(--light) !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary) !important;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--light);
            font-size: 0.9rem;
        }

        .contact-info i {
            color: var(--primary);
        }

        /* Header */
        .training-header {
            background-image: url('./img/3cef43d3-2d23-49fc-843c-dd3519fa2596.jpeg');
            background-size: cover;
            background-position: center;
            padding: 8rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .training-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
            z-index: 1;
        }

        .training-header .container {
            position: relative;
            z-index: 2;
        }

        .training-header h1 {
            color: var(--primary);
        }

        .training-header p {
            color: var(--light);
            max-width: 600px;
        }

        /* Training Section */
        .training-section {
            padding: 5rem 0;
        }


        .training-image {
            position: relative;
            height: 100%;
            min-height: 300px;
            overflow: hidden;
            border-radius: 0.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .training-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .training-image:hover img {
            transform: scale(1.05);
        }

        .feature-list {
            list-style: none;
            padding-left: 0;
        }

        .feature-list li {
            align-items: flex-start;
            margin-bottom: 0.75rem;
        }

        .feature-list i {
            color: var(--primary);
            margin-right: 0.75rem;
            margin-top: 0.25rem;
        }

        /* Category Navigation */
        .category-nav {
            background-color: var(--secondary);
            position: sticky;
            top: 76px;
            z-index: 48;
            padding: 1rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .category-nav-container {
            display: flex;
            overflow-x: auto;
            gap: 0.75rem;
            padding-bottom: 0.5rem;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE and Edge */
        }

        .category-nav-container::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }

        .category-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            white-space: nowrap;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            color: var(--light);
            text-decoration: none;
        }

        .category-link:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .category-link.active {
            background-color: var(--primary);
            border-color: var(--primary);
            color: var(--dark);
        }

        .category-link i {
            font-size: 0.9rem;
        }

        /* Footer */
        footer {
            background-color: var(--secondary);
            padding: 3rem 0;
        }

        footer h5 {
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }

        footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--primary);
        }

        footer .social-icon {
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        footer .social-icon:hover {
            background-color: var(--primary);
            color: var(--dark);
        }

        .copyright {
            padding: 1.5rem 0;
            background-color: #0a0a0a;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .training-image {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 768px) {
            .contact-info {
                display: none;
            }
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 120px;
        }

        .bg-secondary {
            background-color: #111111 !important;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <?php include './includes/header.php'?>
    <!-- Header -->
    <header class="training-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Onze Trainingen</h1>
            <p class="lead">Ontdek de verschillende trainingsmogelijkheden die wij aanbieden</p>
        </div>
    </header>

    <!-- Category Navigation -->
    <div class="category-nav">
        <div class="container category-nav-container">
            <a href="#weerbaarheid" class="category-link active">
                <i class="fas fa-users"></i>
                <span>Weerbaarheid</span>
            </a>
            <a href="#buddy" class="category-link">
                <i class="fas fa-user-plus"></i>
                <span>Buddy 13+</span>
            </a>
            <a href="#voetbal" class="category-link">
                <i class="fas fa-futbol"></i>
                <span>Voetbal</span>
            </a>
            <a href="#peuter" class="category-link">
                <i class="fas fa-baby"></i>
                <span>Peutervoetbal</span>
            </a>
            <a href="#fit" class="category-link">
                <i class="fas fa-dumbbell"></i>
                <span>Fit door Voetbal</span>
            </a>
            <a href="#feestje" class="category-link">
                <i class="fas fa-birthday-cake"></i>
                <span>Kinderfeestje</span>
            </a>
            <a href="#workshops" class="category-link">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Workshops</span>
            </a>
        </div>
    </div>

    <!-- Weerbaarheidstraining Section -->
    <section class="training-section" id="weerbaarheid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="training-image">
                        <img src="./img/weerbeheidstraining.png" alt="Weerbaarheidstraining" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-heading">Weerbaarheidstraining 5-12 jaar</h2>
                    <div class="divider"></div>
                    <p>
                        Het is een psychofysieke training, waarin kinderen leren zich onafhankelijk op te stellen en eigen keuzes te maken (Rots), maar ook om met anderen samen te werken, te spelen en te leven (Water). Afhankelijk van de situatie leert het kind voor een rots- of waterhouding te kiezen.
                    </p>
                    <h5 class="mt-4 text-primary">Wat is boksend opvoeden?</h5>
                    <p>
                        In een "boksend opvoeden" programma leren kinderen niet alleen de basisvaardigheden van boksen, zoals stoten en verdedigingstechnieken, maar ook belangrijke levensvaardigheden zoals zelfvertrouwen, doorzettingsvermogen en het vermogen om met uitdagingen om te gaan. Het doel is om kinderen te helpen zelfverzekerder en sterker te worden, zowel fysiek als mentaal.
                    </p>
                    <h5 class="mt-4 text-primary">Thema's</h5>
                    <p>
                        Doordat de thema's zelfbeheersing, zelfreflectie, zelfvertrouwen en in actie kunnen en durven komen spelenderwijs worden aangeboden, spreekt het rots en waterprogramma ook wel over de gouden driehoek, die bestaat uit:
                    </p>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Lichaamsbewustzijn</li>
                        <li><i class="fas fa-check"></i> Emotioneel bewustzijn</li>
                        <li><i class="fas fa-check"></i> Zelfbewustzijn</li>
                    </ul>
                    <h5 class="text-primary">Algemene informatie</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Kosten individueel: 70 euro per training</li>
                        <li><i class="fas fa-check"></i> Groepstraining: N.T.B.</li>
                        <li><i class="fas fa-check"></i> Trainingsduur: 1 uur (korter mogelijk)</li>
                        <li><i class="fas fa-check"></i> Trainingsdagen: Woensdagmiddag, vrijdagmiddag, zondag overdag</li>
                    </ul>
                    <a href="inschrijven.php" class="btn btn-primary">Inschrijven</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Buddy Systeem Section -->
    <section class="training-section bg-secondary" id="buddy">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <div class="training-image">
                        <img src="./img/weerbeheidstraining13.png" alt="Buddy Systeem" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="section-heading">Weerbaarheidstraining 13+ - Buddy systeem</h2>
                    <div class="divider"></div>
                    <p>
                        Een buddy-systeem voor pubers op het voetbalveld werkt goed omdat het hen helpt sociaal en emotioneel te groeien. Hoe gaat het in zijn werk?
                    </p>
                    <h5 class="mt-4 text-primary">Voordelen</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> <strong>Sociale steun</strong> - Pubers vinden het vaak fijn om zich gesteund te voelen.</li>
                        <li><i class="fas fa-check"></i> <strong>Meer zelfvertrouwen</strong> - Door een mentor- of maatjesrol te vervullen, ontwikkelen pubers zelfvertrouwen en verantwoordelijkheid.</li>
                        <li><i class="fas fa-check"></i> <strong>Emotionele veiligheid</strong> - Pubers maken veel emotionele veranderingen door. Een buddy kan een vertrouwenspersoon zijn om mee te praten over problemen of stress.</li>
                    </ul>
                    <h5 class="text-primary">Voorbereiding en oudercontact</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Voor de training een kort overleg met ouders over eventuele uitdagingen of aandachtspunten.</li>
                        <li><i class="fas fa-check"></i> Ouders kunnen input geven over hoe hun kind zich voelt en waar extra begeleiding nodig is.</li>
                    </ul>
                    <h5 class="text-primary">Algemene informatie</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Kosten: 70 euro per training</li>
                        <li><i class="fas fa-check"></i> Locatie: DEV Doorn</li>
                        <li><i class="fas fa-check"></i> Trainingsduur: 1 uur (korter mogelijk)</li>
                        <li><i class="fas fa-check"></i> Trainingsdagen: Woensdagmiddag, vrijdagmiddag, zondag overdag</li>
                    </ul>
                    <a href="inschrijven.php" class="btn btn-primary">Inschrijven</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Voetbaltraining Section -->
    <section class="training-section" id="voetbal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="training-image">
                        <img src="./img/training-4.jpg" alt="Voetbaltraining" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-heading">Voetbaltraining / Keeperstraining</h2>
                    <div class="divider"></div>
                    <p>
                        Wil jij je techniek, reactievermogen, coördinatie, snelheid of spelinzicht naar een hoger niveau tillen? Bij Mark Sluis Training krijg je persoonlijke en doelgerichte voetbaltraining, volledig afgestemd op jouw ontwikkelingsbehoeften. Met gerichte oefeningen, professionele begeleiding en aandacht voor zowel fysieke als mentale aspecten van het spel, zorgen wij ervoor dat jij sterker, sneller en slimmer op het veld wordt.
                    </p>
                    <h5 class="mt-4 text-primary">Voordelen</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Plezier en zelfvertrouwen – Trainen in een ontspannen setting zonder teamdruk</li>
                        <li><i class="fas fa-check"></i> Techniekverbetering – Gerichte oefeningen voor betere balcontrole en techniek</li>
                        <li><i class="fas fa-check"></i> Individuele aandacht – Volledige focus op jouw sterke en zwakke punten</li>
                        <li><i class="fas fa-check"></i> Veel balcontacten – Intensiever werken met de bal voor snellere vooruitgang</li>
                        <li><i class="fas fa-check"></i> Maatwerk en ontwikkeling – Training afgestemd op jouw specifieke behoeften</li>
                    </ul>
                    <h5 class="text-primary">Algemene informatie</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Kosten: 5 trainingen voor 250 euro</li>
                        <li><i class="fas fa-check"></i> Locatie: DEV Doorn</li>
                        <li><i class="fas fa-check"></i> Trainingsduur: 1 uur</li>
                        <li><i class="fas fa-check"></i> Trainingsdagen: Woensdagmiddag, vrijdagmiddag, zondag overdag</li>
                    </ul>
                    <a href="inschrijven.php" class="btn btn-primary">Inschrijven</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Peutervoetbal Section -->
    <section class="training-section bg-secondary" id="peuter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <div class="training-image">
                        <img src="./img/peuters.jpg" alt="Peutervoetbal" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="section-heading">Peutervoetbal: Samen Groeien door Beweging!</h2>
                    <div class="divider"></div>
                    <p>
                        Welkom bij onze Peutervoetbal-activiteiten, waar plezier, beweging en de brede motorische ontwikkeling van jouw kind centraal staan! Bij ons draait alles om het ontwikkelen van de fysieke, sociale en cognitieve vaardigheden van peuters, en dit alles met een actieve rol voor ouders.
                    </p>
                    <h5 class="mt-4 text-primary">Waarom Peutervoetbal?</h5>
                    <p>
                        Peutervoetbal is de perfecte manier voor jonge kinderen om hun eerste stappen te zetten in de wereld van beweging en sport. Tijdens onze sessies werken we niet alleen aan de fijne en grove motoriek, maar stimuleren we ook de sociale interactie en het zelfvertrouwen van jouw kind. En wat het nog beter maakt: ouders zijn actief betrokken bij het hele proces!
                    </p>
                    <h5 class="text-primary">Ouders als Spelmaatje</h5>
                    <p>
                        Jij als ouder speelt een belangrijke rol in de ontwikkeling van je peuter. Door samen te bewegen, te spelen en te oefenen, bouw je een sterke band op met je kind. Je biedt niet alleen steun en aanmoediging, maar je bent ook een belangrijk voorbeeld in het leren van nieuwe bewegingen.
                    </p>
                    <h5 class="text-primary">Algemene informatie</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Kosten: 75 euro voor 6 trainingen</li>
                        <li><i class="fas fa-check"></i> Locatie: DEV Doorn of gymzaal Beukenrode</li>
                        <li><i class="fas fa-check"></i> Trainingsduur: 45 minuten</li>
                        <li><i class="fas fa-check"></i> Trainingsdagen: Woensdagochtend 9.15 - 10.00</li>
                    </ul>
                    <a href="inschrijven.php" class="btn btn-primary">Inschrijven</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Fit door Voetbal Section -->
    <section class="training-section" id="fit">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="training-image">
                        <img src="./img/19a6344b-3ee7-4695-aa6f-71d245933e4a.jpeg" alt="Fit door Voetbal" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-heading">Fit door Voetbal</h2>
                    <div class="divider"></div>
                    <p>
                        "Fit door Voetbal is de ultieme training voor iedereen die zijn voetbalskills wil verbeteren en tegelijkertijd zijn conditie naar een hoger niveau wil tillen! Deze unieke combinatie van voetbal en bootcamp biedt de perfecte balans tussen techniek, uithoudingsvermogen en kracht. Of je nu je snelheid, kracht of lenigheid wilt versterken, Fit door Voetbal zorgt voor een uitdagende, dynamische en vooral leuke manier om fit te worden."
                    </p>
                    <h5 class="mt-4 text-primary">Waarom Fit door Voetbal?</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> <strong>Leuker en gevarieerder:</strong> Door de afwisseling van voetbal en bootcamp blijft de training interessant en gevarieerd, wat helpt om motivatie hoog te houden en verveling te voorkomen.</li>
                        <li><i class="fas fa-check"></i> <strong>Plezier en sociale interactie:</strong> Beide activiteiten zijn sociaal en leuk, waardoor je niet alleen fysiek sterker wordt, maar ook nieuwe mensen ontmoet en plezier hebt tijdens de training.</li>
                    </ul>
                    <h5 class="text-primary">Algemene informatie</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> Kosten: 125 euro voor een 10 rittenkaart</li>
                        <li><i class="fas fa-check"></i> Locatie: DEV Doorn</li>
                        <li><i class="fas fa-check"></i> Trainingsduur: 1 uur</li>
                        <li><i class="fas fa-check"></i> Trainingsdagen: Woensdagavond 19.00-20.00</li>
                    </ul>
                    <a href="inschrijven.php" class="btn btn-primary">Inschrijven</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kinderfeestje Section -->
    <section class="training-section bg-secondary" id="feestje">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <div class="training-image">
                        <img src="./img/kinderfeestje.jpg" alt="Kinderfeestje" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="section-heading">Kinderfeestje</h2>
                    <div class="divider"></div>
                    <h5 class="mt-4 text-primary">Hoe gaat een feestje in zijn werk?</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> We zoeken eerst een geschikte datum</li>
                        <li><i class="fas fa-check"></i> Ouders en jarige overleggen over een thema. Alles is mogelijk. Dit kan een voetbalclub, voetbalspeler, tv-programma, YouTube held zijn of iets anders naar keuze</li>
                        <li><i class="fas fa-check"></i> Ouders en jarige mogen favoriete spelletjes doorgeven</li>
                        <li><i class="fas fa-check"></i> Hierna ga ik aan de slag met het uitwerken van het thema</li>
                    </ul>
                    <h5 class="text-primary">Algemene informatie</h5>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check"></i> De kosten voor het feestje zijn 175,- euro. Het aantal deelnemers maakt niet uit</li>
                        <li><i class="fas fa-check"></i> Je krijgt hiervoor een feestje op locatie (DEV of Doornse gat), uitgewerkt thema en diploma's voor alle kinderen</li>
                        <li><i class="fas fa-check"></i> Het feestje duurt 1,5 uur. Tussendoor is er een pauze met een vrij spelmoment</li>
                        <li><i class="fas fa-check"></i> Optioneel zijn medailles voor alle deelnemers en een beker voor de jarige. Kosten hiervoor zijn 240 euro</li>
                    </ul>
                    <a href="inschrijven.php" class="btn btn-primary">Inschrijven</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Workshops Section -->
    <section class="training-section" id="workshops">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="training-image">
                        <img src="./img/9912a05d-56d1-47eb-a4cf-e2496cf01658.jpeg" alt="Workshops" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-heading">Workshops Scholen en Kinderopvang</h2>
                    <div class="divider"></div>
                    <p>
                        Mark Sluis Training biedt op maat gemaakte workshops en ondersteuning voor scholen, kinderopvang en onderwijsinstellingen. Of het nu gaat om het versterken van de groepsdynamiek, extra bewegingsonderwijs, het bevorderen van weerbaarheid of het bieden van praktische oplossingen voor lastige klassen.
                    </p>
                    <p class="mt-3">
                        Ik zorg voor meer beweging, wat bijdraagt aan de fysieke gezondheid van kinderen, en ondersteunen tegelijkertijd de sociaal-emotionele ontwikkeling. Door deze workshops en trainingen verbeter ik de groepsdynamiek, stimuleren ik samenwerking en weerbaarheid, en help ik kinderen met het ontwikkelen van belangrijke vaardigheden die hen helpen om zelfverzekerd en sociaal vaardig te zijn.
                    </p>
                    <div class="mt-4">
                        <a href="#footer" class="btn btn-primary">Neem vrijblijvend contact op</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    <script>
        // Set current year in footer
        if (document.getElementById('current-year')) {
            document.getElementById('current-year').textContent = new Date().getFullYear();
        }
        
        // Add active class to current category link when scrolling
        document.addEventListener('DOMContentLoaded', function() {
            // Debug info
            console.log("DOM Loaded");
            
            const sections = document.querySelectorAll('.training-section');
            const navLinks = document.querySelectorAll('.category-link');
            
            console.log("Found " + sections.length + " sections");
            console.log("Found " + navLinks.length + " nav links");
            
            // Initialize with first section active
            if (sections.length > 0 && navLinks.length > 0) {
                navLinks[0].classList.add('active');
            }
            
            // Smooth scrolling for anchor links
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 120,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Function to determine which section is in the viewport
            function setActiveSection() {
                let scrollPosition = window.scrollY || document.documentElement.scrollTop;
                
                // Debug 
                console.log("Scroll position: " + scrollPosition);
                
                // Find the section that's currently in view
                let activeSection = null;
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 150;
                    const sectionBottom = sectionTop + section.clientHeight;
                    
                    // Debug each section position
                    console.log(section.id + " section: " + sectionTop + " to " + sectionBottom);
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        activeSection = section;
                    }
                });
                
                // Update active link
                if (activeSection) {
                    const activeId = activeSection.getAttribute('id');
                    console.log("Active section: " + activeId);
                    
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + activeId) {
                            link.classList.add('active');
                        }
                    });
                }
            }
            
            // Call once on load
            setActiveSection();
            
            // Add throttled scroll listener
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(setActiveSection, 50);
            });
        });
    </script>
</body>
</html>