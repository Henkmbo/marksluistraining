<?php
// Set the HTTP response code to 404
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Niet Gevonden - Mark Sluis Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* 404 Page Styles */
        .error-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/training-5.jpg');
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

        .error-section {
            padding: 5rem 0;
            text-align: center;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .error-actions {
            margin-top: 3rem;
        }

        .btn-back {
            margin-right: 1rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <?php include './includes/header.php'?>

    <header class="error-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Pagina Niet Gevonden</h1>
            <p class="lead">De pagina die je zoekt bestaat niet</p>
        </div>
    </header>

    <section class="error-section">
        <div class="container">
            <div class="error-code">404</div>
            <div class="error-message">Oeps! We kunnen de pagina die je zoekt niet vinden.</div>
            <p>De pagina die je probeert te bereiken bestaat niet of is verplaatst.</p>
            
            <div class="error-actions">
                <a href="javascript:history.back()" class="btn btn-outline-primary btn-back">
                    <i class="fas fa-arrow-left"></i> Ga Terug
                </a>
                <a href="index.php" class="btn btn-primary">
                    <i class="fas fa-home"></i> Ga naar Home
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
