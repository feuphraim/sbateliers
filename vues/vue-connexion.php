<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Connexion</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
        
        /* Login Form Section */
        .login-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem 0;
            background-image: linear-gradient(to right, rgba(78, 115, 223, 0.05), rgba(28, 200, 138, 0.05));
        }
        
        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            padding: 2.5rem;
            text-align: center;
        }
        
        .login-title {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.8rem;
        }
        
        .login-subtitle {
            color: var(--text-color);
            margin-bottom: 2rem;
            font-size: 1rem;
        }
        
        .error-message {
            background-color: rgba(231, 74, 59, 0.1);
            color: var(--danger-color);
            padding: 0.8rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
            font-weight: 600;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fc;
            color: var(--text-color);
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
        }
        
        .input-icon-wrapper {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
        }
        
        .with-icon {
            padding-left: 2.8rem;
        }
        
        .form-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }
        
        .form-links a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .form-links a:hover {
            color: var(--dark-color);
            text-decoration: underline;
        }
        
        .btn-submit {
            width: 100%;
            padding: 0.8rem;
            font-size: 1.1rem;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: #aaa;
        }
        
        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: #ddd;
        }
        
        .divider span {
            padding: 0 1rem;
        }
        
        .register-link {
            margin-top: 1.5rem;
            font-size: 0.95rem;
        }
        
        .register-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        /* Footer */
        footer {
            background-color: #222;
            color: white;
            padding: 1.5rem 0;
            margin-top: auto;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .footer-logo {
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            text-decoration: none;
        }
        
        .footer-logo span {
            color: var(--secondary-color);
        }
        
        .footer-links a {
            color: #ddd;
            margin-left: 1.5rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .footer-links a {
                margin: 0 0.75rem;
            }
            
            .login-container {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content">
            <a href="/" class="logo">SB<span>Ateliers</span></a>
            <div>
                <a href="/clients/enregistrement" class="btn btn-outline">S'inscrire</a>
            </div>
        </div>
    </header>

    <!-- Login Section -->
    <section class="login-section">
        <div class="container">
            <div class="login-container">
                <h1 class="login-title">Bienvenue !</h1>
                <p class="login-subtitle">Connectez-vous pour accéder à votre espace personnel</p>
                
                <?php if(isset($erreur)) { ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> <?= $erreur ?>
                    </div>
                <?php } ?>
                
                <form action="/clients/connecter" method="POST">
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <div class="input-icon-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" id="email" name="email" class="form-control with-icon" placeholder="Votre adresse e-mail" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <div class="input-icon-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" id="mdp" name="mdp" class="form-control with-icon" placeholder="Votre mot de passe" required>
                        </div>
                    </div>
                    
                    <div class="form-links">
                        <label>
                            <input type="checkbox"> Se souvenir de moi
                        </label>
                        <a href="#">Mot de passe oublié ?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-submit">Se connecter</button>
                </form>
                
                <div class="divider">
                    <span>ou</span>
                </div>
                
                <p class="register-link">
                    Pas encore de compte ? <a href="/clients/enregistrement">Créer un compte</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <a href="/" class="footer-logo">SB<span>Ateliers</span></a>
            <div class="footer-links">
                <a href="/">Accueil</a>
                <a href="#">À propos</a>
                <a href="#">Contact</a>
                <a href="#">Mentions légales</a>
            </div>
        </div>
    </footer>
</body>
</html>