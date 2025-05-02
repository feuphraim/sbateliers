<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB - Commentaires atelier</title>
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
        
        /* Comments Section */
        .workshop-header {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .workshop-info {
            display: flex;
            align-items: center;
        }
        
        .workshop-icon {
            font-size: 2.5rem;
            margin-right: 1.5rem;
        }
        
        .workshop-title {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }
        
        .workshop-meta {
            opacity: 0.8;
            font-size: 1rem;
        }
        
        .workshop-meta span {
            margin-right: 1.5rem;
            display: inline-flex;
            align-items: center;
        }
        
        .workshop-meta i {
            margin-right: 0.5rem;
        }
        
        .comments-container {
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-size: 1.3rem;
            color: var(--text-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 0.75rem;
            color: var(--primary-color);
        }
        
        .comments-list {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .comment-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 1.5rem;
        }
        
        .comment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .comment-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .commenter-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.2rem;
            color: var(--primary-color);
        }
        
        .commenter-info {
            flex: 1;
        }
        
        .commenter-name {
            font-weight: 600;
            color: var(--text-color);
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }
        
        .comment-date {
            color: #858796;
            font-size: 0.85rem;
        }
        
        .comment-actions {
            display: flex;
            gap: 0.75rem;
        }
        
        .comment-action {
            background: none;
            border: none;
            color: #858796;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .comment-action:hover {
            color: var(--primary-color);
        }
        
        .comment-content {
            color: var(--text-color);
            line-height: 1.7;
        }
        
        /* Add comment form */
        .add-comment {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
        }
        
        .comment-form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .form-group label {
            font-weight: 600;
            color: var(--text-color);
            font-size: 1rem;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #e3e6f0;
            border-radius: 5px;
            background-color: #f8f9fc;
            color: var(--text-color);
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            resize: vertical;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.1);
        }
        
        .form-footer {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 0.95rem;
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
        
        /* Empty state */
        .empty-comments {
            text-align: center;
            padding: 3rem 1rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
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
            
            .workshop-header {
                padding: 1.5rem;
            }
            
            .workshop-info {
                flex-direction: column;
                text-align: center;
            }
            
            .workshop-icon {
                margin-right: 0;
                margin-bottom: 1rem;
            }
            
            .workshop-meta span {
                display: block;
                margin-right: 0;
                margin-bottom: 0.5rem;
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
            
            .form-footer {
                flex-direction: column;
            }
            
            .form-footer .btn {
                width: 100%;
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
                <!-- Workshop Header -->
                <div class="workshop-header">
                    <div class="workshop-info">
                        <div class="workshop-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <div>
                            <h1 class="workshop-title">Atelier: <?= $atelier['theme'] ?></h1>
                            <div class="workshop-meta">
                                <span><i class="far fa-calendar-alt"></i> 
                                    <?php
                                        list($date, $heure) = explode(' ', $atelier['date_heure']); 
                                        list($annee, $mois, $jour) = explode('-', $date);
                                        echo "$jour/$mois/$annee";
                                    ?>
                                </span>
                                <span><i class="far fa-clock"></i> 
                                    <?php
                                        list($heures, $minutes, $secondes) = explode(':', $heure);
                                        echo "$heures:$minutes";
                                    ?>
                                </span>
                                <span><i class="fas fa-hourglass-half"></i> <?= $atelier['duree'] ?>h</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Comments Section -->
                <div class="comments-container">
                    <h2 class="section-title">
                        <i class="fas fa-comments"></i>
                        Commentaires des participants
                    </h2>
                    
                    <?php if(!empty($commentaires)) { ?>
                    <div class="comments-list">
                        <?php foreach($commentaires as $commentaire) { ?>
                        <div class="comment-card">
                            <div class="comment-header">
                                <div class="commenter-avatar">
                                    <?= substr($commentaire['prenom'], 0, 1) ?>
                                </div>
                                <div class="commenter-info">
                                    <div class="commenter-name"><?= $commentaire['prenom'] ?> <?= $commentaire['nom'] ?></div>
                                    <div class="comment-date"><?= $commentaire['date_redaction'] ?></div>
                                </div>
                                <div class="comment-actions">
                                    <button class="comment-action">
                                        <i class="far fa-flag"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="comment-content">
                                <?= $commentaire['commentaire'] ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } else { ?>
                    <div class="empty-comments">
                        <i class="far fa-comment-alt empty-icon"></i>
                        <h2 class="empty-title">Aucun commentaire</h2>
                        <p class="empty-message">Soyez le premier à laisser un commentaire sur cet atelier.</p>
                    </div>
                    <?php } ?>
                </div>
                
                <!-- Add Comment Form -->
                <div class="add-comment">
                    <h2 class="section-title">
                        <i class="fas fa-pen"></i>
                        Ajouter un commentaire
                    </h2>
                    
                    <form action="/ateliers/<?= $atelier['numero'] ?>/commenter" method="POST" class="comment-form">
                        <div class="form-group">
                            <label for="commentaire">Votre commentaire</label>
                            <textarea name="commentaire" id="commentaire" rows="5" class="form-control" placeholder="Partagez votre expérience et vos impressions sur cet atelier..."></textarea>
                        </div>
                        
                        <div class="form-footer">
                            <button type="reset" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Annuler
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Publier le commentaire
                            </button>
                        </div>
                    </form>
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