<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Ateliers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --dark-color: #224abe;
            --light-color: #f8f9fc;
            --danger-color: #e74a3b;
            --text-color: #5a5c69;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-color);
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1.5rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--secondary-color);
        }
        
        .btn-container {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.6rem 1.3rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--dark-color);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }
        
        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        /* Hero Section */
        .hero {
            padding: 4rem 0;
            text-align: center;
            background-image: linear-gradient(to right, rgba(78, 115, 223, 0.1), rgba(28, 200, 138, 0.1));
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }
        
        /* Features */
        .features {
            padding: 4rem 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .feature-card {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .feature-card h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        /* Upcoming Workshops */
        .workshops {
            padding: 4rem 0;
            background-color: var(--light-color);
        }
        
        .workshop-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .workshop-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .workshop-card:hover {
            transform: translateY(-10px);
        }
        
        .workshop-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .workshop-content {
            padding: 1.5rem;
        }
        
        .workshop-content h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        .workshop-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: var(--text-color);
        }
        
        .workshop-desc {
            margin-bottom: 1.5rem;
        }
        
        /* CTA */
        .cta {
            padding: 4rem 0;
            text-align: center;
            background-color: var(--primary-color);
            color: white;
        }
        
        .cta h2 {
            margin-bottom: 1.5rem;
            font-size: 2.2rem;
        }
        
        .cta p {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: 1.2rem;
        }
        
        .btn-cta {
            background-color: white;
            color: var(--primary-color);
            font-size: 1.1rem;
            padding: 0.8rem 2rem;
        }
        
        .btn-cta:hover {
            background-color: var(--light-color);
        }
        
        /* Footer */
        footer {
            background-color: #222;
            color: white;
            padding: 3rem 0 1.5rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-logo {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: inline-block;
        }
        
        .footer-logo span {
            color: var(--secondary-color);
        }
        
        .footer-links h4 {
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-links ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links ul li a:hover {
            color: var(--secondary-color);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: white;
            background-color: #444;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
        }
        
        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #444;
            font-size: 0.9rem;
            color: #ddd;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .feature-card, .workshop-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content">
            <a href="/" class="logo">SB<span>Ateliers</span></a>
            <div class="btn-container">
                <a href="/clients/connexion" class="btn btn-outline">Se connecter</a>
                <a href="/clients/enregistrement" class="btn btn-primary">S'inscrire</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Découvrez nos ateliers créatifs</h1>
            <p>Rejoignez notre communauté et participez à des ateliers thématiques animés par des professionnels passionnés. Apprenez, créez et partagez dans une ambiance conviviale.</p>
            <a href="/clients/enregistrement" class="btn btn-primary">Commencer l'aventure</a>
        </div>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Pourquoi choisir SB Ateliers?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Ateliers variés</h3>
                    <p>Découvrez une large gamme d'ateliers thématiques adaptés à tous les niveaux et à tous les goûts.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Animateurs experts</h3>
                    <p>Nos ateliers sont animés par des professionnels passionnés qui partagent leur savoir-faire et leur expérience.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Communauté active</h3>
                    <p>Échangez avec d'autres participants, partagez vos créations et vos expériences dans un espace convivial.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Workshops -->
    <section class="workshops">
        <div class="container">
            <h2 class="section-title">Ateliers à venir</h2>
            <div class="workshop-cards">
                <div class="workshop-card">
                    <div class="workshop-image" style="background-image: url('/api/placeholder/600/400');"></div>
                    <div class="workshop-content">
                        <h3>Liquide vaisselle</h3>
                        <div class="workshop-meta">
                            <span><i class="far fa-calendar"></i> 29/10/2022</span>
                            <span><i class="far fa-clock"></i> 10h30 - 12h30</span>
                        </div>
                        <p class="workshop-desc">Apprenez à fabriquer votre propre liquide vaisselle naturel et écologique.</p>
                        <a href="/clients/connexion" class="btn btn-outline">S'inscrire</a>
                    </div>
                </div>
                <div class="workshop-card">
                    <div class="workshop-image" style="background-image: url('/api/placeholder/600/400');"></div>
                    <div class="workshop-content">
                        <h3>Détachant Linge</h3>
                        <div class="workshop-meta">
                            <span><i class="far fa-calendar"></i> 29/10/2022</span>
                            <span><i class="far fa-clock"></i> 14h00 - 16h00</span>
                        </div>
                        <p class="workshop-desc">Créez votre propre détachant pour le linge efficace et respectueux de l'environnement.</p>
                        <a href="/clients/connexion" class="btn btn-outline">S'inscrire</a>
                    </div>
                </div>
                <div class="workshop-card">
                    <div class="workshop-image" style="background-image: url('/api/placeholder/600/400');"></div>
                    <div class="workshop-content">
                        <h3>Crème hydratante</h3>
                        <div class="workshop-meta">
                            <span><i class="far fa-calendar"></i> 03/11/2022</span>
                            <span><i class="far fa-clock"></i> 10h00 - 13h00</span>
                        </div>
                        <p class="workshop-desc">Initiez-vous à la fabrication d'une crème hydratante personnalisée aux ingrédients naturels.</p>
                        <a href="/clients/connexion" class="btn btn-outline">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Prêt à rejoindre l'aventure?</h2>
            <p>Inscrivez-vous dès maintenant pour découvrir tous nos ateliers et réserver votre place!</p>
            <a href="/clients/enregistrement" class="btn btn-cta">Créer un compte</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <a href="/" class="footer-logo">SB<span>Ateliers</span></a>
                    <p>Découvrez l'art de fabriquer vos propres produits naturels et écologiques grâce à nos ateliers thématiques.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Liens rapides</h4>
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/clients/enregistrement">S'inscrire</a></li>
                        <li><a href="/clients/connexion">Se connecter</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="tel:+33123456789"><i class="fas fa-phone-alt"></i> 01 23 45 67 89</a></li>
                        <li><a href="mailto:contact@sbateliers.fr"><i class="fas fa-envelope"></i> contact@sbateliers.fr</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> 123 rue des Créateurs, Paris</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 SB Ateliers. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
