<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Espace Client</title>
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
            margin-bottom: 1.5rem;
            color: var(--text-color);
            font-weight: 500;
        }
        
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-size: 1.1rem;
            color: var(--text-color);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .card-title i {
            color: var(--primary-color);
        }
        
        .stat {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        
        .stat-desc {
            color: #858796;
            font-size: 0.9rem;
        }
        
        .upcoming-workshop {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #e3e6f0;
        }
        
        .workshop-calendar {
            width: 60px;
            height: 60px;
            background-color: var(--light-color);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }
        
        .calendar-day {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .calendar-month {
            font-size: 0.8rem;
            color: var(--text-color);
            text-transform: uppercase;
        }
        
        .workshop-info {
            flex: 1;
        }
        
        .workshop-title {
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 0.25rem;
        }
        
        .workshop-meta {
            display: flex;
            gap: 1rem;
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
            
            .dashboard-cards {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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
            
            .dashboard-cards {
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
                <h3 class="user-name"><?= $_SESSION["prenom"] ?> <?= $_SESSION["nom"] ?></h3>
                <p>Client</p>
            </div>
            
            <div class="sidebar-menu">
                <h3 class="menu-title">Navigation</h3>
                <a href="/clients/espace" class="menu-item active">
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
                                <?= substr($_SESSION["prenom"], 0, 1) ?>
                            </div>
                            <span><?= $_SESSION["prenom"] ?></span>
                        </button>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="content">
                <h1 class="page-title">Bienvenue, <?= $_SESSION["prenom"] ?> !</h1>
                
                <div class="dashboard-cards">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-calendar-check"></i>
                                Ateliers à venir
                            </h2>
                            <div class="stat">2</div>
                            <p class="stat-desc">Vous êtes inscrit(e) à 2 ateliers</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-history"></i>
                                Ateliers passés
                            </h2>
                            <div class="stat">5</div>
                            <p class="stat-desc">Vous avez participé à 5 ateliers</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-star"></i>
                                Prochains ateliers
                            </h2>
                            <div class="stat">8</div>
                            <p class="stat-desc">Ateliers disponibles à l'inscription</p>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">
                            <i class="fas fa-calendar-alt"></i>
                            Vos prochains ateliers
                        </h2>
                        
                        <div class="upcoming-workshop">
                            <div class="workshop-calendar">
                                <div class="calendar-day">29</div>
                                <div class="calendar-month">Oct</div>
                            </div>
                            <div class="workshop-info">
                                <h3 class="workshop-title">Liquide vaisselle</h3>
                                <div class="workshop-meta">
                                    <span><i class="far fa-clock"></i> 10h30 - 12h30</span>
                                    <span><i class="far fa-user"></i> Maria Da Silva</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="upcoming-workshop">
                            <div class="workshop-calendar">
                                <div class="calendar-day">3</div>
                                <div class="calendar-month">Nov</div>
                            </div>
                            <div class="workshop-info">
                                <h3 class="workshop-title">Crème hydratante pour homme</h3>
                                <div class="workshop-meta">
                                    <span><i class="far fa-clock"></i> 10h00 - 13h00</span>
                                    <span><i class="far fa-user"></i> Katarina Jones</span>
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