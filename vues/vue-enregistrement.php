<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Inscription</title>
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
        
        /* Registration Form Section */
        .registration-section {
            flex: 1;
            padding: 3rem 0;
            background-image: linear-gradient(to right, rgba(78, 115, 223, 0.05), rgba(28, 200, 138, 0.05));
        }
        
        .registration-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 2.5rem;
        }
        
        .section-title {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.8rem;
            text-align: center;
        }
        
        .section-subtitle {
            color: var(--text-color);
            margin-bottom: 2rem;
            font-size: 1rem;
            text-align: center;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }
        
        .form-col {
            flex: 1 0 0%;
            padding: 0 10px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
            font-weight: 600;
        }
        
        .radio-group {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }
        
        .radio-label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .radio-label input {
            margin-right: 0.5rem;
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
        
        .form-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            gap: 1rem;
        }
        
        .btn-submit {
            padding: 0.8rem 2rem;
            font-size: 1.1rem;
        }
        
        .btn-reset {
            background-color: #f8f9fc;
            color: var(--text-color);
            border: 1px solid #ddd;
        }
        
        .btn-reset:hover {
            background-color: #eaecf4;
        }
        
        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.95rem;
        }
        
        .login-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
        }
        
        .login-link a:hover {
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
            
            .registration-container {
                padding: 2rem 1.5rem;
            }
            
            .form-col {
                flex: 0 0 100%;
                margin-bottom: 0.5rem;
            }
            
            .form-buttons {
                flex-direction: column;
            }
            
            .form-buttons .btn {
                width: 100%;
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
                <a href="/clients/connexion" class="btn btn-outline">Se connecter</a>
            </div>
        </div>
    </header>

    <!-- Registration Section -->
    <section class="registration-section">
        <div class="container">
            <div class="registration-container">
                <h1 class="section-title">Créer un compte</h1>
                <p class="section-subtitle">Rejoignez notre communauté et participez à nos ateliers</p>
                
                <form action="/clients/enregistrer" method="POST">
                    <!-- Informations personnelles -->
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label>Civilité</label>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" name="civilite" value="Mlle" checked> Mlle
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="civilite" value="Mme"> Mme
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="civilite" value="M."> M.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" id="nom" name="nom" class="form-control with-icon" placeholder="Votre nom" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" id="prenom" name="prenom" class="form-control with-icon" placeholder="Votre prénom" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="naissance">Date de naissance</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-calendar-alt input-icon"></i>
                                    <input type="date" id="naissance" name="naissance" class="form-control with-icon" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Coordonnées -->
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input type="email" id="email" name="email" class="form-control with-icon" placeholder="Votre adresse e-mail" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="mobile">Téléphone mobile</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-phone input-icon"></i>
                                    <input type="text" id="mobile" name="mobile" class="form-control with-icon" placeholder="Votre numéro de téléphone" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-home input-icon"></i>
                                    <input type="text" id="adresse" name="adresse" class="form-control with-icon" placeholder="Votre adresse" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="cp">Code postal</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-map-marker-alt input-icon"></i>
                                    <input type="text" id="cp" name="cp" class="form-control with-icon" placeholder="Code postal" maxlength="5" size="5" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-city input-icon"></i>
                                    <input type="text" id="ville" name="ville" class="form-control with-icon" placeholder="Ville" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mot de passe -->
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="mdp">Mot de passe</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-lock input-icon"></i>
                                    <input type="password" id="mdp" name="mdp" class="form-control with-icon" placeholder="Créez un mot de passe" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-buttons">
                        <button type="reset" class="btn btn-reset">Annuler</button>
                        <button type="submit" class="btn btn-primary btn-submit">Créer mon compte</button>
                    </div>
                </form>
                
                <p class="login-link">
                    Vous avez déjà un compte ? <a href="/clients/connexion">Se connecter</a>
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