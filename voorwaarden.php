<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algemene Voorwaarden - Mark Sluis Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .terms-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/training-4.jpg');
            background-size: cover;
            background-position: center;
            height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            overflow: hidden;
        }
        

        
        .terms-section {
            padding: 5rem 0;
        }
        
        .terms-container {
            background-color: var(--secondary);
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            padding: 2rem;
            position: relative;
            overflow: hidden;
            border: 1px solid #333;
        }
        
        .terms-container h3 {
            color: var(--primary);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .terms-container h4 {
            color: var(--light);
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            font-weight: 500;
        }
        
        .terms-container p, .terms-container li {
            color: #e0e0e0;
            line-height: 1.7;
            margin-bottom: 1rem;
        }
          .terms-container ul {
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .terms-container li {
            margin-bottom: 0.5rem;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 2rem;
            transition: all 0.3s ease;
        }
        
        .back-btn:hover {
            transform: translateX(-5px);
        }
        
        /* Custom styling for the navigation pills */
        .nav-pills .nav-link {
            color: var(--light);
            background-color: #2a2a2a;
            border: 1px solid #444;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .nav-pills .nav-link:hover {
            background-color: #333;
            transform: translateY(-2px);
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--primary);
            color: var(--dark);
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <?php include './includes/header.php'?>

    <header class="terms-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Algemene Voorwaarden</h1>
            <p class="lead">Mark Sluis Training</p>
        </div>
    </header>

    <section class="terms-section">
        <div class="container">
            <div class="terms-container">
                <div class="mb-4">
                    <nav>
                        <ul class="nav nav-pills mb-4">
                            <li class="nav-item">
                                <a class="nav-link" href="#algemene-voorwaarden">Algemene Voorwaarden</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#privacybeleid">Privacybeleid</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div id="algemene-voorwaarden">                <div class="section-header mb-4">
                    <h2 class="section-heading">Algemene Regels en Voorwaarden</h2>
                    <div class="divider"></div>
                    <p class="section-description">
                        Hieronder vindt u onze algemene regels en voorwaarden. Deze voorwaarden zijn van toepassing op alle diensten en activiteiten van Mark Sluis Training & Ontwikkeling.
                    </p>
                </div>
                
                <h3>1. Algemeen</h3>
                <p>1.1 Deze algemene regels en voorwaarden zijn van toepassing op alle activiteiten, diensten en producten die worden aangeboden door Mark Sluis Training.</p>
                <p>1.2 Door deelname aan de activiteiten van de aanbieder gaat de klant akkoord met deze voorwaarden.</p>
                
                <h3>2. Inschrijving en Betaling</h3>
                <p>2.1 Deelname aan trainingen, evenementen of workshops vereist voorafgaande inschrijving.</p>
                <p>2.2 Betaling voor diensten dient voorafgaand aan de activiteit te worden voldaan, tenzij anders overeengekomen.</p>
                <p>2.3 Betalingen kunnen plaatsvinden via de door de aanbieder aangegeven methoden (bijvoorbeeld iDEAL, bankoverschrijving, contant).</p>
                
                <h3>3. Annulering en Terugbetalingen</h3>
                <p>3.1 Klanten kunnen hun inschrijving voor een training, workshop of evenement tot 24 uur voor aanvang annuleren zonder kosten.</p>
                <p>3.2 Bij annulering binnen 24 uur voor aanvang wordt geen terugbetaling verstrekt, tenzij sprake is van overmacht of uitzonderlijke omstandigheden.</p>
                <p>3.3 De aanbieder behoudt zich het recht voor om trainingen of evenementen te annuleren. In dat geval ontvangt de klant een volledige terugbetaling of de mogelijkheid om een andere datum te kiezen.</p>
                
                <h3>4. Gezondheid en Veiligheid</h3>
                <p>4.1 Deelname aan de activiteiten van de aanbieder is op eigen risico. Klanten zijn verantwoordelijk voor hun eigen gezondheid en welzijn.</p>
                <p>4.2 Klanten dienen vooraf te melden als zij medische aandoeningen hebben die invloed kunnen hebben op hun deelname aan de activiteiten.</p>
                <p>4.3 De aanbieder is niet aansprakelijk voor schade, blessures of verlies van persoonlijke bezittingen, tenzij door opzet of grove nalatigheid.</p>
                
                <h3>5. Gedrag en Respect</h3>
                <p>5.1 Klanten worden geacht zich respectvol en sportief te gedragen tijdens alle activiteiten.</p>
                <p>5.2 De aanbieder heeft het recht om deelnemers die zich misdragen of de groepsdynamiek verstoren, de toegang tot de activiteit te ontzeggen zonder recht op restitutie.</p>
                
                <h3>6. Leeftijdsbeperkingen</h3>
                <p>6.1 De activiteiten van de aanbieder kunnen specifieke leeftijdsbeperkingen hebben. Klanten moeten zich aan deze beperkingen houden, tenzij anders overeengekomen met de aanbieder.</p>
                <p>6.2 Voor minderjarige deelnemers dient een ouder of voogd toestemming te geven voor deelname.</p>
                
                <h3>7. Verantwoordelijkheid en Schade</h3>
                <p>7.1 De klant is verantwoordelijk voor het naleven van de regels van de aanbieder en het correct volgen van aanwijzingen van trainers en medewerkers.</p>
                <p>7.2 Klanten die schade aan eigendommen van de aanbieder veroorzaken, kunnen aansprakelijk worden gesteld voor de kosten van herstel of vervanging.</p>
                
                <h3>8. Gebruik van Foto's en Video's</h3>
                <p>8.1 De aanbieder kan foto's en video's maken tijdens de activiteiten voor promotionele doeleinden.</p>
                <p>8.2 Indien klanten niet gefotografeerd of gefilmd willen worden, kunnen zij dit vooraf kenbaar maken aan de aanbieder.</p>
                
                <h3>9. Wijziging van Voorwaarden</h3>
                <p>9.1 De aanbieder behoudt zich het recht voor om deze algemene voorwaarden op elk moment te wijzigen.</p>
                <p>9.2 Wijzigingen zullen tijdig aan de klanten worden meegedeeld via de beschikbare kanalen (bijv. e-mail, website).</p>
                
                <h3>10. Toepasselijk Recht en Geschillen</h3>
                <p>10.1 Op deze algemene voorwaarden is het Nederlandse recht van toepassing.</p>
                <p>10.2 Geschillen tussen de aanbieder en de klant worden bij voorkeur in onderling overleg opgelost. Indien dit niet lukt, kan het geschil worden voorgelegd aan de bevoegde rechter in Nederland.</p>
                
                <h3>Contactinformatie</h3>
                <p>
                    Mark Sluis Training & Ontwikkeling<br>
                    Tel: 06-42266609
                </p>
                  <div class="divider mt-5 mb-4"></div>
                
                <div id="privacybeleid">
                    <h2 class="section-heading mt-5">Privacybeleid</h2>
                    <div class="divider"></div>
                </div>
                
                <p class="mt-4">Bij Mark Sluis Training nemen we de privacy van onze klanten serieus. In dit privacybeleid leggen we uit hoe we persoonlijke gegevens verzamelen, gebruiken, bewaren en beschermen. We raden je aan om dit privacybeleid zorgvuldig door te lezen om te begrijpen hoe wij met jouw gegevens omgaan.</p>
                
                <h3>1. Welke gegevens verzamelen wij?</h3>
                <p>Wij verzamelen persoonlijke gegevens die je zelf verstrekt wanneer je je inschrijft voor een activiteit, een workshop boekt, of contact met ons opneemt. De gegevens die we kunnen verzamelen, zijn onder andere:</p>
                <ul>
                    <li>Naam</li>
                    <li>Geboortedatum</li>
                    <li>Adres</li>
                    <li>E-mailadres</li>
                    <li>Telefoonnummer</li>
                    <li>Medische gegevens (indien van toepassing)</li>
                    <li>Informatie over je deelname aan onze activiteiten</li>
                </ul>
                
                <h3>2. Waarom verzamelen wij deze gegevens?</h3>
                <p>We verzamelen je persoonlijke gegevens om de volgende redenen:</p>
                <ul>
                    <li>Om je in te schrijven voor de door jou gekozen activiteiten en om de uitvoering van deze activiteiten te organiseren.</li>
                    <li>Om betalingen te verwerken en administratie bij te houden.</li>
                    <li>Om je op de hoogte te houden van wijzigingen in onze activiteiten, planning of voorwaarden.</li>
                    <li>Om te reageren op vragen of verzoeken die je indient.</li>
                    <li>Voor marketingdoeleinden, mits je hiervoor toestemming hebt gegeven (bijvoorbeeld om je uit te nodigen voor andere relevante activiteiten).</li>
                </ul>
                
                <h3>3. Hoe gebruiken wij je gegevens?</h3>
                <p>We gebruiken je gegevens voor de volgende doeleinden:</p>
                <ul>
                    <li>Verwerking van inschrijvingen en betalingen.</li>
                    <li>Communicatie met jou over je deelname aan onze activiteiten.</li>
                    <li>Het versturen van e-mailupdates, nieuwsbrieven of andere berichten die relevant kunnen zijn voor jouw deelname.</li>
                    <li>Het verbeteren van onze diensten door middel van feedback en statistieken.</li>
                    <li>Het naleven van wettelijke verplichtingen, zoals belastingwetgeving en boekhoudplicht.</li>
                </ul>
                
                <h3>4. Hoe lang bewaren wij je gegevens?</h3>
                <p>Wij bewaren je gegevens zo lang als nodig is voor de doeleinden waarvoor ze zijn verzameld. Gegevens die we nodig hebben voor administratieve en wettelijke verplichtingen (bijv. belastingaangiften) worden gedurende de wettelijk verplichte termijn bewaard. Gegevens die we voor marketingdoeleinden gebruiken, worden bewaard totdat je je uitschrijft voor onze berichten.</p>
                
                <h3>5. Jouw rechten</h3>
                <p>Je hebt het recht om je persoonlijke gegevens in te zien, te corrigeren, bij te werken of te verwijderen. Als je een vraag hebt over hoe wij je gegevens verwerken, of als je gebruik wilt maken van één van je rechten, kun je contact met ons opnemen via de contactgegevens hieronder.</p>
                <ul>
                    <li>Recht op inzage: Je hebt recht op inzage in de persoonlijke gegevens die we van je hebben.</li>
                    <li>Recht op rectificatie: Je hebt recht om onjuiste of onvolledige gegevens te laten corrigeren.</li>
                    <li>Recht op verwijdering: Je hebt het recht om je gegevens te laten verwijderen, tenzij we wettelijk verplicht zijn ze langer te bewaren.</li>
                    <li>Recht op bezwaar: Je kunt bezwaar maken tegen de verwerking van je gegevens, vooral als we je gegevens gebruiken voor marketingdoeleinden.</li>
                </ul>
                
                <h3>6. Cookies en trackingtechnologieën</h3>
                <p>Onze website kan gebruik maken van cookies en andere technologieën om het gebruik van de website te analyseren en je ervaring te verbeteren. Je kunt cookies weigeren door je browserinstellingen aan te passen, maar dit kan invloed hebben op de functionaliteit van de website.</p>
                
                <h3>7. Wijzigingen in dit privacybeleid</h3>
                <p>We behouden ons het recht voor om dit privacybeleid op elk moment te wijzigen. Eventuele wijzigingen worden op onze website gepubliceerd. We raden je aan om dit privacybeleid regelmatig te raadplegen om op de hoogte te blijven van eventuele updates.</p>
                
                <a href="inschrijven.php" class="btn btn-outline-primary back-btn">
                    <i class="fas fa-arrow-left"></i> Terug naar inschrijfformulier
                </a>
            </div>
        </div>
    </section>

    <?php include './includes/footer.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
