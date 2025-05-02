<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Ateliers passés</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --dark-color: #224abe;
            --light-color: #f8f9fc;
            --danger-color: #e74a3b;
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
        
        .page-subtitle {
            color: #858796;
            font-size: 1rem;
            font-weight: normal;
        }
        
        /* Filter Controls */
        .filters {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 0.8rem;
        }
        
        .filter-item {
            position: relative;
        }
        
        .filter-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 0.6rem 2rem 0.6rem 1rem;
            border: 1px solid #e3e6f0;
            border-radius: 5px;
            background-color: white;
            color: var(--text-color);
            font-size: 0.9rem;
            cursor: pointer;
            min-width: 160px;
        }
        
        .filter-select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
        }
        
        .filter-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-color);
            pointer-events: none;
        }
        
        /* Workshop Cards */
        .workshops-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 1.5rem;
        }
        
        .workshop-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .workshop-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .workshop-header {
            background: linear-gradient(to right, rgba(78, 115, 223, 0.9), rgba(28, 200, 138, 0.9)), url('/api/placeholder/400/200');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 1.5rem;
            position: relative;
        }
        
        .workshop-date {
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            opacity: 0.9;
        }
        
        .workshop-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }
        
        .workshop-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            backdrop-filter: blur(5px);
        }
        
        .workshop-details {
            padding: 1.5rem;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--text-color);
        }
        
        .detail-item:last-child {
            margin-bottom: 0;
        }
        
        .detail-icon {
            width: 36px;
            height: 36px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .workshop-actions {
            padding: 1rem 1.5rem;
            border-top: 1px solid #e3e6f0;
            display: flex;
            justify-content: flex-end;
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
        
        .btn-secondary {
            background-color: var(--light-color);
            color: var(--text-color);
        }
        
        .btn-secondary:hover {
            background-color: #eaecf4;
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
            
            .workshops-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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
                padding: 1.5rem;
            }
            
            .page-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .filters {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-select {
                width: 100%;
            }
            
            .workshops-grid {
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
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }
        
        .page-item {
            margin: 0 0.25rem;
        }
        
        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 5px;
            border: 1px solid #e3e6f0;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .page-link:hover {
            background-color: #eaecf4;
        }
        
        .page-item.active .page-link {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .page-item.disabled .page-link {
            color: #858796;
            pointer-events: none;
            background-color: #f8f9fc;
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
                <h3 class="user-name"><?= $_SESSION["prenom"] ?> <?= $_SESSION["nom"] ?></h3>
                <p>Client</p>
            </div>
            
            <div class="sidebar-menu">
                <h3 class="menu-title">Navigation</h3>
                <a href="/clients/espace" class="menu-item">
                    <i class="fas fa-home"></i>
                    <span>Tableau de bord</span>
                </a>
                <a href="/clients/profil" class="menu-item">
                    <i class="fas fa-user"></i>
                    <span>Mon profil</span>
                </a>
                <a href="/ateliers/programmes" class="menu-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Ateliers programmés</span>
                </a>
                <a href="/ateliers/passes" class="menu-item active">
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
                    <input type="text" class="search-input" placeholder="Rechercher un atelier...">
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
                                <?= substr($_SESSION["prenom"], 0, 1) ?>
                            </div>
                            <span><?= $_SESSION["prenom"] ?></span>
                        </button>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="content">
                <div class="page-title">
                    <div>
                        <h1>Ateliers passés</h1>
                        <p class="page-subtitle">Consultez l'historique des ateliers auxquels vous avez participé</p>
                    </div>
                </div>
                
                <!-- Filters -->
                <div class="filters">
                    <div class="filter-item">
                        <select class="filter-select">
                            <option>Tous les ateliers</option>
                            <option>Avec commentaires</option>
                            <option>Sans commentaires</option>
                        </select>
                        <i class="fas fa-chevron-down filter-icon"></i>
                    </div>
                    
                    <div class="filter-item">
                        <select class="filter-select">
                            <option>Toutes les dates</option>
                            <option>3 derniers mois</option>
                            <option>6 derniers mois</option>
                            <option>Année en cours</option>
                        </select>
                        <i class="fas fa-chevron-down filter-icon"></i>
                    </div>
                    
                    <div class="filter-item">
                        <select class="filter-select">
                            <option>Tous les animateurs</option>
                            <option>Maria Da Silva</option>
                            <option>Katarina Jones</option>
                        </select>
                        <i class="fas fa-chevron-down filter-icon"></i>
                    </div>
                </div>
                
                <!-- Workshops Grid -->
                <div class="workshops-grid">
                    <?php foreach($ateliers as $unAtelier) { 
                        list($date, $heure) = explode(' ', $unAtelier['date_heure']);
                        list($annee, $mois, $jour) = explode('-', $date);
                        list($heures, $minutes, $secondes) = explode(':', $heure);
                    ?>
                    <div class="workshop-card">
                        <div class="workshop-header">
                            <div class="workshop-date">
                                <i class="far fa-calendar-alt"></i> <?= $jour ?>/<?= $mois ?>/<?= $annee ?> à <?= $heures ?>:<?= $minutes ?>
                            </div>
                            <h3 class="workshop-title"><?= $unAtelier['theme'] ?></h3>
                            <span class="workshop-badge">Terminé</span>
                        </div>
                        
                        <div class="workshop-details">
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <strong>Durée</strong>
                                    <div><?= $unAtelier['duree'] ?> heures</div>
                                </div>
                            </div>
                            
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <strong>Animateur</strong>
                                    <div><?= $unAtelier['prenom'] ?> <?= $unAtelier['nom'] ?></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="workshop-actions">
                            <a href="/ateliers/<?= $unAtelier['numero'] ?>/commentaires/voir" class="btn btn-primary">
                                <i class="fas fa-comment"></i> Voir les commentaires
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
                <!-- Empty state if no workshops -->
                <?php if(empty($ateliers)) { ?>
                <div style="text-align: center; padding: 3rem 1rem;">
                    <i class="fas fa-calendar-times" style="font-size: 4rem; color: #d1d3e2; margin-bottom: 1rem;"></i>
                    <h2 style="color: var(--text-color); margin-bottom: 0.5rem;">Aucun atelier passé</h2>
                    <p style="color: #858796;">Vous n'avez pas encore participé à des ateliers.</p>
                    <a href="/ateliers/programmes" class="btn btn-primary" style="margin-top: 1rem;">
                        <i class="fas fa-calendar-alt"></i> Voir les ateliers programmés
                    </a>
                </div>
                <?php } ?>
                
                <!-- Pagination -->
                <?php if(!empty($ateliers) && count($ateliers) > 6) { ?>
                <div class="pagination">
                    <div class="page-item disabled">
                        <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                    </div>
                    <div class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#">2</a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#">3</a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <?php } ?>
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