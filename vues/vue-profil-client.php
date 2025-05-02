<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Profil Client</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --tertiary-color: #36b9cc;
            --dark-color: #224abe;
            --light-color: #f8f9fc;
            --danger-color: #e74a3b;
            --warning-color: #f6c23e;
            --success-color: #1cc88a;
            --text-color: #5a5c69;
            --sidebar-width: 250px;
            --header-height: 70px;
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
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Layout */
        .dashboard {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary-color) 0%, var(--dark-color) 100%);
            color: white;
            position: fixed;
            height: 100%;
            z-index: 100;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .sidebar-brand {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-brand h2 {
            color: white;
            font-size: 1.5rem;
        }
        
        .sidebar-brand span {
            color: var(--secondary-color);
        }
        
        .sidebar-user {
            padding: 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
        }
        
        .user-name {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }
        
        .sidebar-menu {
            padding: 1rem 0;
        }
        
        .menu-title {
            padding: 0.5rem 1.5rem;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.6);
        }
        
        .menu-item {
            padding: 0.8rem 1.5rem;
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .menu-item.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-left: 4px solid var(--secondary-color);
        }
        
        .menu-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .menu-item i {
            width: 24px;
            margin-right: 0.8rem;
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s ease;
        }
        
        /* Header */
        .header {
            background-color: white;
            height: var(--header-height);
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 90;
        }
        
        .toggle-menu {
            background: none;
            border: none;
            color: var(--text-color);
            font-size: 1.5rem;
            cursor: pointer;
            display: none;
        }
        
        .search-box {
            position: relative;
            flex: 1;
            max-width: 400px;
            margin: 0 2rem;
        }
        
        .search-input {
            width: 100%;
            padding: 0.6rem 2.5rem 0.6rem 1rem;
            border: 1px solid #e3e6f0;
            border-radius: 30px;
            background-color: #f8f9fc;
            color: var(--text-color);
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
        }
        
        .search-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--primary-color);
            cursor: pointer;
        }
        
        .header-right {
            display: flex;
            align-items: center;
        }
        
        .notification {
            position: relative;
            margin-right: 1.5rem;
        }
        
        .notification-btn {
            background: none;
            border: none;
            color: var(--text-color);
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .notification-btn:hover {
            color: var(--primary-color);
        }
        
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--danger-color);
            color: white;
            font-size: 0.7rem;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-dropdown {
            position: relative;
        }
        
        .dropdown-btn {
            background: none;
            border: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-color);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .dropdown-btn:hover {
            background-color: #f8f9fc;
        }
        
        .user-avatar-small {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }
        
        /* Content */
        .content {
            padding: 2rem;
        }
        
        .page-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .page-title h1 {
            color: var(--text-color);
            font-weight: 500;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.6rem 1.3rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        .btn i {
            margin-right: 0.5rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--dark-color);
        }
        
        .btn-success {
            background-color: var(--success-color);
            color: white;
        }
        
        .btn-success:hover {
            background-color: #169b6b;
        }
        
        /* Profile Layout */
        .profile-layout {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 1.5rem;
        }
        
        @media (max-width: 992px) {
            .profile-layout {
                grid-template-columns: 1fr;
            }
        }
        
        /* Profile Card */
        .profile-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            height: fit-content;
        }
        
        .profile-header {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 3rem;
            border: 4px solid rgba(255, 255, 255, 0.3);
        }
        
        .profile-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .profile-role {
            opacity: 0.9;
            font-size: 0.95rem;
        }
        
        .profile-stats {
            display: flex;
            justify-content: space-around;
            padding: 1.5rem;
            border-bottom: 1px solid #e3e6f0;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .stat-label {
            font-size: 0.85rem;
            color: #858796;
        }
        
        .profile-actions {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        /* Profile Details */
        .profile-details {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        .details-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e3e6f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .details-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-color);
        }
        
        .details-content {
            padding: 1.5rem;
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .detail-item {
            display: flex;
            flex-direction: column;
        }
        
        .detail-label {
            font-size: 0.85rem;
            color: #858796;
            margin-bottom: 0.25rem;
        }
        
        .detail-value {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-color);
        }
        
        /* Activity Section */
        .activity-section {
            margin-top: 1.5rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        .activity-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e3e6f0;
        }
        
        .activity-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-color);
        }
        
        .activity-content {
            padding: 1.5rem;
        }
        
        .activity-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .activity-item {
            display: flex;
            align-items: flex-start;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e3e6f0;
        }
        
        .activity-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
            color: var(--primary-color);
        }
        
        .activity-info {
            flex: 1;
        }
        
        .activity-text {
            margin-bottom: 0.25rem;
            color: var(--text-color);
        }
        
        .activity-date {
            font-size: 0.85rem;
            color: #858796;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                left: -250px;
            }
            
            .sidebar.active {
                left: 0;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .toggle-menu {
                display: block;
            }
        }
        
        @media (max-width: 768px) {
            .search-box {
                display: none;
            }
            
            .header {
                padding: 0 1rem;
            }
            
            .content {
                padding: 1.5rem 1rem;
            }
            
            .page-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .details-grid {
                grid-template-columns: 1fr;
            }
        }
        
        /* Overlay for mobile sidebar */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 95;
        }
        
        @media (max-width: 992px) {
            .sidebar-overlay.active {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-brand">
                <h2>SB<span>Ateliers</span></h2>
            </div>
            
            <div class="sidebar-user">
                <div class="user-avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <h3 class="user-name"><?= $prenom ?> <?= $nom ?></h3>
                <p>Client</p>
            </div>
            
            <div class="sidebar-menu">
                <h3 class="menu-title">Navigation</h3>
                <a href="/clients/espace" class="menu-item">
                    <i class="fas fa-home"></i>
                    <span>Tableau de bord</span>
                </a>
                <a href="/clients/profil" class="menu-item active">
                    <i class="fas fa-user"></i>
                    <span>Mon profil</span>
                </a>
                <a href="/ateliers/programmes" class="menu-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Ateliers programmés</span>
                </a>
                <a href="/ateliers/passes" class="menu-item">
                    <i class="fas fa-history"></i>
                    <span>Ateliers passés</span>
                </a>
                
                <h3 class="menu-title">Autres</h3>
                <a href="#" class="menu-item">
                    <i class="fas fa-question-circle"></i>
                    <span>Aide</span>
                </a>
                <a href="/clients/deconnecter" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Se déconnecter</span>
                </a>
            </div>
        </aside>
        
        <!-- Overlay for mobile sidebar -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <header class="header">
                <button class="toggle-menu" id="toggleMenu">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Rechercher...">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                
                <div class="header-right">
                    <div class="notification">
                        <button class="notification-btn">
                            <i class="far fa-bell"></i>
                        </button>
                        <span class="notification-badge">3</span>
                    </div>
                    
                    <div class="user-dropdown">
                        <button class="dropdown-btn">
                            <div class="user-avatar-small">
                                <?= substr($prenom, 0, 1) ?>
                            </div>
                            <span><?= $prenom ?></span>
                        </button>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="content">
                <div class="page-title">
                    <h1>Mon profil</h1>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Modifier le profil
                    </a>
                </div>
                
                <!-- Profile Layout -->
                <div class="profile-layout">
                    <!-- Profile Card -->
                    <div class="profile-card">
                        <div class="profile-header">
                            <div class="profile-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <h2 class="profile-name"><?= $prenom ?> <?= $nom ?></h2>
                            <p class="profile-role"><?= $client["civilite"] ?></p>
                        </div>
                        
                        <div class="profile-stats">
                            <div class="stat-item">
                                <div class="stat-value">5</div>
                                <div class="stat-label">Ateliers passés</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">2</div>
                                <div class="stat-label">Ateliers à venir</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">8</div>
                                <div class="stat-label">Commentaires</div>
                            </div>
                        </div>
                        
                        <div class="profile-actions">
                            <a href="/ateliers/programmes" class="btn btn-primary">
                                <i class="fas fa-calendar-plus"></i> Voir les ateliers
                            </a>
                            <a href="#" class="btn btn-success">
                                <i class="fas fa-cog"></i> Préférences
                            </a>
                        </div>
                    </div>
                    
                    <!-- Profile Details -->
                    <div class="profile-details">
                        <div class="details-header">
                            <h3 class="details-title">Informations personnelles</h3>
                        </div>
                        
                        <div class="details-content">
                            <div class="details-grid">
                                <div class="detail-item">
                                    <div class="detail-label">Nom complet</div>
                                    <div class="detail-value"><?= $client["civilite"] ?> <?= $nom ?> <?= $prenom ?></div>
                                </div>
                                
                                <div class="detail-item">
                                    <div class="detail-label">Date de naissance</div>
                                    <div class="detail-value"><?= $client["date_naissance"] ?></div>
                                </div>
                                
                                <div class="detail-item">
                                    <div class="detail-label">Email</div>
                                    <div class="detail-value"><?= $client["email"] ?></div>
                                </div>
                                
                                <div class="detail-item">
                                    <div class="detail-label">Téléphone</div>
                                    <div class="detail-value"><?= $client["mobile"] ?></div>
                                </div>
                                
                                <div class="detail-item">
                                    <div class="detail-label">Adresse</div>
                                    <div class="detail-value"><?= $client["adresse"] ?></div>
                                </div>
                                
                                <div class="detail-item">
                                    <div class="detail-label">Code postal</div>
                                    <div class="detail-value"><?= $client["cp"] ?></div>
                                </div>
                                
                                <div class="detail-item">
                                    <div class="detail-label">Ville</div>
                                    <div class="detail-value"><?= $client["ville"] ?></div>
                                </div>
                                
                                <div class="detail-item">
                                    <div class="detail-label">Membre depuis</div>
                                    <div class="detail-value">Janvier 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Activity Section -->
                <div class="activity-section">
                    <div class="activity-header">
                        <h3 class="activity-title">Activités récentes</h3>
                    </div>
                    
                    <div class="activity-content">
                        <div class="activity-list">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="activity-info">
                                    <div class="activity-text">Vous avez commenté l'atelier "Liquide vaisselle"</div>
                                    <div class="activity-date">Il y a 2 jours</div>
                                </div>
                            </div>
                            
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div class="activity-info">
                                    <div class="activity-text">Vous vous êtes inscrit à l'atelier "Crème hydratante pour homme"</div>
                                    <div class="activity-date">Il y a 1 semaine</div>
                                </div>
                            </div>
                            
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="activity-info">
                                    <div class="activity-text">Vous avez participé à l'atelier "Mousse à raser"</div>
                                    <div class="activity-date">Il y a 3 semaines</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Toggle sidebar on mobile
        const toggleMenu = document.getElementById('toggleMenu');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        
        toggleMenu.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('active');
        });
        
        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
        });
    </script>
</body>
</html>