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
            padding: 0.5rem 1rem;
            border-radius: 0;
            transition: all 0.3s ease;
            font-size: 0.9rem;
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

        .container-training {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
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
            padding: 6rem 0;
        }

        .training-content-wrapper {
            background: var(--secondary);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            max-width: 85%;
            margin: 0 auto;
        }

        .training-content-wrapper:hover {
            transform: translateY(-5px);
        }

        .training-image-wrapper {
            position: relative;
            height: 100%;
            min-height: 150px;
            overflow: hidden;
        }

        .training-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .training-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(212,175,55,0.2) 100%);
            display: flex;
            align-items: flex-end;
            padding: 1.5rem;
        }

        .training-badge {
            background: var(--primary);
            color: var(--dark);
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .training-details {
            padding: 1.25rem;
        }

        .training-header-section {
            margin-bottom: 0.75rem;
        }

        .training-category {
            display: inline-block;
            background: rgba(212, 175, 55, 0.1);
            color: var(--primary);
            padding: 0.4rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.75rem;
        }

        .training-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--light);
            margin-bottom: 0.4rem;
            line-height: 1.2;
        }

        .training-subtitle {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.7);
            margin: 0;
        }

        .training-features {
            margin-bottom: 0.75rem;
        }

        .features-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 0.75rem;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.05);
            padding: 0.5rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .feature-item:hover {
            background: rgba(212, 175, 55, 0.1);
            border-color: var(--primary);
            transform: translateX(5px);
        }

        .feature-item i {
            color: var(--primary);
            font-size: 0.95rem;
            flex-shrink: 0;
        }

        .feature-item span {
            color: var(--light);
            font-size: 0.8rem;
            line-height: 1.3;
        }

        .training-description {
            background: rgba(255, 255, 255, 0.05);
            padding: 0.6rem;
            border-radius: 8px;
            margin-bottom: 0.75rem;
            border-left: 4px solid var(--primary);
        }

        .training-description p {
            margin: 0;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.5;
            font-size: 0.85rem;
        }

        .training-info-box {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            padding: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .info-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
            margin-bottom: 0.5rem;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .info-item.full-width {
            grid-column: 1 / -1;
        }

        .info-item i {
            color: var(--primary);
            font-size: 1.1rem;
            width: 22px;
            text-align: center;
            flex-shrink: 0;
        }

        .info-item div {
            flex: 1;
        }

        .info-item small {
            display: block;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.2rem;
        }

        .info-item strong {
            display: block;
            color: var(--light);
            font-size: 0.85rem;
            font-weight: 600;
        }

        .alert-info {
            background: rgba(212, 175, 55, 0.1);
            border: 1px solid var(--primary);
            color: var(--light);
            border-radius: 8px;
        }

        .alert-link {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
        }

        .alert-link:hover {
            text-decoration: underline;
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
            font-size: medium;
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
            .training-image-wrapper {
                min-height: 300px;
            }

            .training-details {
                padding: 1.5rem;
            }

            .training-title {
                font-size: 1.5rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }

            .info-row {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }

            .training-image {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 768px) {
            .contact-info {
                display: none;
            }

            .training-details {
                padding: 1.25rem;
            }

            .training-title {
                font-size: 1.35rem;
            }

            .training-image-wrapper {
                min-height: 250px;
            }

            .training-section {
                padding: 1.5rem 0;
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
            <p class="lead">Ontdek de verschillende trainingsmogelijkheden die ik aanbied</p>
        </div>
    </header>

    <!-- Category Navigation -->
    <div class="category-nav">
        <div class="container category-nav-container">
            <a href="#weerbaarheid-groep" class="category-link active">
                <i class="fas fa-users"></i>
                <span>Groepstraining 5-12</span>
            </a>
            <a href="#weerbaarheid-individueel" class="category-link">
                <i class="fas fa-user"></i>
                <span>Individueel 5-12 / 13+</span>
            </a>
            <a href="#voetbal" class="category-link">
                <i class="fas fa-futbol"></i>
                <span>Voetbal</span>
            </a>
            <a href="#peuter" class="category-link">
                <i class="fas fa-baby"></i>
                <span>Peutervoetbal</span>
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

    <!-- Groepstraining Section -->
    <section class="training-section" id="weerbaarheid-groep">
        <div class="container-training">
            <div class="training-content-wrapper">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="training-image-wrapper">
                            <img src="./img/weerbeheidstraining.png" alt="Groepstraining" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="training-details">
                            <div class="training-header-section">
                                <span class="training-category">Weerbaarheid</span>
                                <h2 class="training-title">Groepstraining</h2>
                                <p class="training-subtitle">Leer samen sterker te worden</p>
                            </div>

                            <div class="training-description">
                                <p><i class="fas fa-users text-primary me-2"></i>In een groepstraining leren kinderen samen sterker te worden. Door samen te oefenen, ervaren ze herkenning bij anderen, leren ze grenzen aangeven en respect tonen, en bouwen ze aan hun zelfvertrouwen in een veilige en ondersteunende omgeving vol plezier en motivatie.</p>
                            </div>

                            <div class="training-features">
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <i class="fas fa-hands-helping"></i>
                                        <span>Samen werken en elkaar steunen</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-users"></i>
                                        <span>Herkenning bij anderen</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>Grenzen aangeven en respect tonen</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-smile"></i>
                                        <span>Plezier, energie en motivatie</span>
                                    </div>
                                </div>
                            </div>

                            <div class="training-info-box">
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-euro-sign"></i>
                                        <div>
                                            <small>Kosten</small>
                                            <strong>N.T.B.</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <div>
                                            <small>Duur</small>
                                            <strong>1 uur</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item full-width">
                                    <i class="fas fa-calendar"></i>
                                    <div>
                                        <small>Training dagen</small>
                                        <strong>Woensdagmiddag, vrijdagmiddag, zondag overdag</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-info mb-4">
                                <i class="fas fa-envelope me-2"></i>
                                <small>Voor aanmelding: <a href="mailto:weerbaarheidutrechtseheuvelrug@gmail.com" class="alert-link">weerbaarheidutrechtseheuvelrug@gmail.com</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Individuele Training Section -->
    <section class="training-section bg-secondary" id="weerbaarheid-individueel">
        <div class="container-training">
            <div class="training-content-wrapper">
                <div class="row g-0">
                    <div class="col-lg-7 order-lg-1">
                        <div class="training-details">
                            <div class="training-header-section">
                                <span class="training-category">Weerbaarheid</span>
                                <h2 class="training-title">Individuele Training</h2>
                                <p class="training-subtitle">5-12 jaar / Buddy systeem (13+)</p>
                            </div>

                            <div class="training-features">
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <i class="fas fa-user-cog"></i>
                                        <span>Volledig persoonlijk afgestemd</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-heart"></i>
                                        <span>Ruimte voor specifieke situaties</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-eye"></i>
                                        <span>100% aandacht voor jou</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Sneller en dieper resultaat</span>
                                    </div>
                                </div>
                            </div>

                            <div class="training-description">
                                <p><i class="fas fa-futbol text-primary me-2"></i>Bij een individuele weerbaarheidstraining gebruik ik voetbal als middel om te werken aan de weerbaarheid van kinderen. Door te bewegen, te spelen en te leren omgaan met winst en verlies, ervaren ze op een natuurlijke manier hoe ze sterker, zekerder en bewuster kunnen worden van hun eigen kracht.</p>
                            </div>

                            <div class="training-info-box">
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-euro-sign"></i>
                                        <div>
                                            <small>Kosten</small>
                                            <strong>€77,50 per training</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <div>
                                            <small>Duur</small>
                                            <strong>1 uur</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div>
                                            <small>Locatie</small>
                                            <strong>DEV Doorn</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-calendar"></i>
                                        <div>
                                            <small>Dagen</small>
                                            <strong>Wo/Vr/Zo</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="inschrijven.php" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-user-plus me-2"></i>Inschrijven
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <div class="training-image-wrapper">
                            <img src="./img/weerbeheidstraining13.png" alt="Individuele Training" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voetbaltraining Section -->
    <section class="training-section" id="voetbal">
        <div class="container-training">
            <div class="training-content-wrapper">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="training-image-wrapper">
                            <img src="./img/training-4.jpg" alt="Voetbaltraining" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="training-details">
                            <div class="training-header-section">
                                <span class="training-category">Voetbal</span>
                                <h2 class="training-title">Voetbal & Keeperstraining</h2>
                                <p class="training-subtitle">Persoonlijke begeleiding voor alle niveaus</p>
                            </div>

                            <div class="training-description">
                                <p><i class="fas fa-futbol text-primary me-2"></i>Persoonlijke voetbal- en keeperstraining voor alle niveaus. Of je nu je techniek wilt verbeteren, meer zelfvertrouwen wilt opbouwen, of aan specifieke vaardigheden wilt werken - in deze trainingen krijg je de individuele aandacht en begeleiding die je nodig hebt om te groeien als voetballer.</p>
                            </div>

                            <div class="training-features">
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <i class="fas fa-smile"></i>
                                        <span>Plezier en zelfvertrouwen</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-running"></i>
                                        <span>Techniekverbetering</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-user-check"></i>
                                        <span>Individuele aandacht</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-futbol"></i>
                                        <span>Veel balcontacten</span>
                                    </div>
                                </div>
                            </div>

                            <div class="training-info-box">
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-euro-sign"></i>
                                        <div>
                                            <small>Kosten</small>
                                            <strong>5 trainingen €250</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <div>
                                            <small>Duur</small>
                                            <strong>1 uur</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div>
                                            <small>Locatie</small>
                                            <strong>DEV Doorn</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-calendar"></i>
                                        <div>
                                            <small>Dagen</small>
                                            <strong>Wo/Vr/Zo</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="inschrijven.php?activity=voetbaltraining" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-user-plus me-2"></i>Inschrijven
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Peutervoetbal Section -->
    <section class="training-section bg-secondary" id="peuter">
        <div class="container-training">
            <div class="training-content-wrapper">
                <div class="row g-0">
                    <div class="col-lg-7 order-lg-1">
                        <div class="training-details">
                            <div class="training-header-section">
                                <span class="training-category">Peutervoetbal</span>
                                <h2 class="training-title">Samen Groeien</h2>
                                <p class="training-subtitle">Beweging en ontwikkeling voor de kleintjes</p>
                            </div>

                            <div class="training-description">
                                <p><i class="fas fa-baby text-primary me-2"></i>Peutervoetbal is speciaal ontwikkeld voor de allerkleinsten. Met ouders als spelmaatje ontdekken peuters op een speelse manier beweging en voetbal. We focussen op motorische ontwikkeling, sociale interactie en het opbouwen van zelfvertrouwen in een veilige en leuke omgeving.</p>
                            </div>

                            <div class="training-features">
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <i class="fas fa-child"></i>
                                        <span>Motorische ontwikkeling</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-users"></i>
                                        <span>Sociale interactie</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-heart"></i>
                                        <span>Zelfvertrouwen opbouwen</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-user-friends"></i>
                                        <span>Ouders als spelmaatje</span>
                                    </div>
                                </div>
                            </div>

                            <div class="training-info-box">
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-euro-sign"></i>
                                        <div>
                                            <small>Kosten</small>
                                            <strong>€75 voor 6 trainingen</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <div>
                                            <small>Duur</small>
                                            <strong>45 minuten</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div>
                                            <small>Locatie</small>
                                            <strong>DEV Doorn / Beukenrode</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-calendar"></i>
                                        <div>
                                            <small>Wanneer</small>
                                            <strong>Woensdag 9:15-10:00</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="inschrijven.php?activity=peutervoetbal" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-user-plus me-2"></i>Inschrijven
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <div class="training-image-wrapper">
                            <img src="./img/peuters.jpg" alt="Peutervoetbal" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Kinderfeestje Section -->
    <section class="training-section" id="feestje">
        <div class="container-training">
            <div class="training-content-wrapper">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="training-image-wrapper">
                            <img src="./img/kinderfeestje.jpg" alt="Kinderfeestje" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="training-details">
                            <div class="training-header-section">
                                <span class="training-category">Kinderfeestje</span>
                                <h2 class="training-title">Sportief Feestje</h2>
                                <p class="training-subtitle">Onvergetelijke verjaardag op maat</p>
                            </div>

                            <div class="training-description">
                                <p><i class="fas fa-birthday-cake text-primary me-2"></i>Maak de verjaardag van je kind onvergetelijk met een sportief kinderfeestje! We zorgen voor anderhalf uur vol actie, plezier en teamspellen. Het feestje wordt volledig op maat gemaakt met het thema en de favoriete spelletjes van de jarige. Alle kinderen krijgen aan het einde een diploma.</p>
                            </div>

                            <div class="training-features">
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <i class="fas fa-calendar-check"></i>
                                        <span>Datum kiezen samen</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-palette"></i>
                                        <span>Thema naar keuze</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-gamepad"></i>
                                        <span>Favoriete spelletjes</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-certificate"></i>
                                        <span>Diploma's voor iedereen</span>
                                    </div>
                                </div>
                            </div>

                            <div class="training-info-box">
                                <div class="info-row">
                                    <div class="info-item">
                                        <i class="fas fa-euro-sign"></i>
                                        <div>
                                            <small>Kosten</small>
                                            <strong>€175 (onbeperkt deelnemers)</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <div>
                                            <small>Duur</small>
                                            <strong>1,5 uur</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item full-width">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <small>Locatie</small>
                                        <strong>DEV Doorn of Doornse gat</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-info mb-4">
                                <i class="fas fa-gift me-2"></i>
                                <small>Optie: Medailles + beker voor €50 extra</small>
                            </div>

                            <a href="inschrijven.php?activity=kinderfeestje" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-user-plus me-2"></i>Inschrijven
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workshops Section -->
    <section class="training-section bg-secondary" id="workshops">
        <div class="container-training">
            <div class="training-content-wrapper">
                <div class="row g-0">
                    <div class="col-lg-7 order-lg-1">
                        <div class="training-details">
                            <div class="training-header-section">
                                <span class="training-category">Workshops</span>
                                <h2 class="training-title">Scholen & Kinderopvang</h2>
                                <p class="training-subtitle">Op maat gemaakte workshops en ondersteuning</p>
                            </div>

                            <div class="training-features">
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <i class="fas fa-users-cog"></i>
                                        <span>Groepsdynamiek versterken</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-running"></i>
                                        <span>Extra bewegingsonderwijs</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>Weerbaarheid bevorderen</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                        <span>Praktische oplossingen</span>
                                    </div>
                                </div>
                            </div>

                            <div class="training-description">
                                <p><i class="fas fa-lightbulb text-primary me-2"></i>Meer beweging voor fysieke gezondheid en sociaal-emotionele ontwikkeling. Verbeter de groepsdynamiek, stimuleer samenwerking en help kinderen zelfverzekerd en sociaal vaardig te worden.</p>
                            </div>

                            <a href="inschrijven.php?activity=workshop" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-envelope me-2"></i>Neem Contact Op
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <div class="training-image-wrapper">
                            <img src="./img/9912a05d-56d1-47eb-a4cf-e2496cf01658.jpeg" alt="Workshops" class="img-fluid">
                        </div>
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
                scrollTimeout = setTimeout(setActiveSection, 5);
            });
        });
    </script>
</body>
</html>