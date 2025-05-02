<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Ateliers programmés</title>
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
        
        .page-subtitle {
            color: #858796;
            font-size: 1rem;
            font-weight: normal;
        }
        
        /* Tabs */
        .tabs {
            display: flex;
            border-bottom: 1px solid #e3e6f0;
            margin-bottom: 2rem;
        }
        
        .tab {
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            color: #858796;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .tab.active {
            color: var(--primary-color);
        }
        
        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .tab:hover {
            color: var(--primary-color);
        }
        
        .tab-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            font-size: 0.7rem;
            margin-left: 0.5rem;
        }
        
        /* Workshop List */
        .workshops-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .workshop-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        @media (min-width: 768px) {
            .workshop-item {
                flex-direction: row;
            }
        }
        
        .workshop-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .workshop-date {
            width: 100px;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .date-day {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1;
        }
        
        .date-month {
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }
        
        .date-year {
            font-size: 0.9rem;
        }
        
        .workshop-content {
            flex: 1;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        @media (min-width: 768px) {
            .workshop-content {
                flex-direction: row;
                align-items: center;
            }
        }
        
        .workshop-info {
            flex: 1;
        }
        
        .workshop-title {
            font-size: 1.2rem;
            margin-bottom: 0.25rem;
            color: var(--text-color);
            font-weight: 600;
        }
        
        .workshop-theme {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .workshop-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.9rem;
            color: #858796;
        }
        
        .workshop-meta span {
            display: flex;
            align-items: center;
        }
        
        .workshop-meta i {
            margin-right: 0.4rem;
        }
        
        .workshop-status {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        @media (max-width: 768px) {
            .workshop-status {
                margin-top: 1rem;
                justify-content: flex-end;
            }
        }
        
        .status-badge {
            padding: 0.3rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .status-badge i {
            margin-right: 0.4rem;
        }
        
        .status-registered {
            background-color: rgba(28, 200, 138, 0.1);
            color: var(--success-color);
        }
        
        .status-available {
            background-color: rgba(78, 115, 223, 0.1);
            color: var(--primary-color);
        }
        
        .status-full {
            background-color: rgba(231, 74, 59, 0.1);
            color: var(--danger-color);
        }
        
        .workshop-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        @media (max-width: 768px) {
            .workshop-actions {
                margin-top: 1rem;
            }
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
        
        .btn-danger {
            background-color: var(--danger-color);
            color: white;
        }
        
        .btn-danger:hover {
            background-color: #d52a1a;
        }
        
        .btn-secondary {
            background-color: var(--light-color);
            color: var(--text-color);
            border: 1px solid #ddd;
        }
        
        .btn-secondary:hover {
            background-color: #eaecf4;
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
        }
        
        .empty-icon {
            font-size: 4rem;
            color: #d1d3e2;
            margin-bottom: 1rem;
        }
        
        .empty-title {
            color: var(--text-color);
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }
        
        .empty-message {
            color: #858796;
            max-width: 500px;
            margin: 0 auto 1.5rem;
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
                gap: 0.5rem;
            }
            
            .workshop-date {
                width: 100%;
                padding: 1rem 0;
            }
            
            .tabs {
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none; /* Firefox */
            }
            
            .tabs::-webkit-scrollbar {
                display: none; /* Chrome, Safari, Opera */
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
                <a href="/ateliers/programmes" class="menu-item active">
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
                        <h1>Ateliers programmés</h1>
                        <p class="page-subtitle">Découvrez et inscrivez-vous aux prochains ateliers</p>
                    </div>
                </div>
                
                <!-- Tabs -->
                <div class="tabs">
                    <div class="tab active">Tous les ateliers</div>
                    <div class="tab">Mes inscriptions <span class="tab-badge">2</span></div>
                    <div class="tab">Disponibles <span class="tab-badge">8</span></div>
                </div>
                
                <!-- Workshops List -->
                <div class="workshops-list">
                    <?php foreach($ateliers as $unAtelier) { 
                        list($date, $heure) = explode(' ', $unAtelier['date_heure']);
                        list($annee, $mois, $jour) = explode('-', $date);
                        list($heures, $minutes, $secondes) = explode(':', $heure);
                        
                        $moisEnLettre = '';
                        switch($mois) {
                            case '01': $moisEnLettre = 'Jan'; break;
                            case '02': $moisEnLettre = 'Fév'; break;
                            case '03': $moisEnLettre = 'Mar'; break;
                            case '04': $moisEnLettre = 'Avr'; break;
                            case '05': $moisEnLettre = 'Mai'; break;
                            case '06': $moisEnLettre = 'Juin'; break;
                            case '07': $moisEnLettre = 'Juil'; break;
                            case '08': $moisEnLettre = 'Août'; break;
                            case '09': $moisEnLettre = 'Sep'; break;
                            case '10': $moisEnLettre = 'Oct'; break;
                            case '11': $moisEnLettre = 'Nov'; break;
                            case '12': $moisEnLettre = 'Déc'; break;
                        }
                    ?>
                    <div class="workshop-item">
                        <div class="workshop-date">
                            <div class="date-day"><?= $jour ?></div>
                            <div class="date-month"><?= $moisEnLettre ?></div>
                            <div class="date-year"><?= $annee ?></div>
                        </div>
                        
                        <div class="workshop-content">
                            <div class="workshop-info">
                                <h3 class="workshop-title"><?= $unAtelier['theme'] ?></h3>
                                
                                <div class="workshop-meta">
                                    <span><i class="far fa-clock"></i> <?= $heures ?>:<?= $minutes ?></span>
                                    <span><i class="fas fa-hourglass-half"></i> <?= $unAtelier['duree'] ?>h</span>
                                    <span><i class="far fa-user"></i> <?= $unAtelier['prenom'] ?> <?= $unAtelier['nom'] ?></span>
                                </div>
                            </div>
                            
                            <div class="workshop-status">
                                <?php if($unAtelier['participe'] == '1') { ?>
                                    <span class="status-badge status-registered">
                                        <i class="fas fa-check-circle"></i> Inscrit(e)
                                    </span>
                                <?php } else { ?>
                                    <span class="status-badge status-available">
                                        <i class="fas fa-info-circle"></i> Places disponibles
                                    </span>
                                <?php } ?>
                            </div>
                            
                            <div class="workshop-actions">
                                <?php if($unAtelier['participe'] == '1') { ?>
                                    <a href="/participations/<?= $unAtelier['numero'] ?>/annuler" class="btn btn-danger">
                                        <i class="fas fa-times"></i> Annuler
                                    </a>
                                <?php } else { ?>
                                    <a href="/participations/<?= $unAtelier['numero'] ?>/proceder" class="btn btn-success">
                                        <i class="fas fa-plus"></i> S'inscrire
                                    </a>
                                <?php } ?>
                                
                                <a href="#" class="btn btn-secondary">
                                    <i class="fas fa-info-circle"></i> Détails
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
                <!-- Empty state if no workshops -->
                <?php if(empty($ateliers)) { ?>
                <div class="empty-state">
                    <i class="fas fa-calendar-times empty-icon"></i>
                    <h2 class="empty-title">Aucun atelier programmé</h2>
                    <p class="empty-message">Il n'y a actuellement aucun atelier programmé. Veuillez vérifier ultérieurement.</p>
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
        
        // Tab switching (would be expanded in a real implementation)
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                // Here you would typically load different content based on the selected tab
            });
        });
    </script>
</body>
</html>