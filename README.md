# SB Ateliers

Application de gestion d'ateliers permettant aux utilisateurs de s'inscrire, consulter et participer à des ateliers.

## Prérequis

- Git
- Docker
- Docker Compose

## Installation et démarrage

1. Cloner le dépôt
```bash
git clone https://github.com/feuphraim/sbateliers.git
cd sbateliers
```

2. Démarrer l'application avec Docker Compose

Démarrage en une seule commande:
```bash
docker-compose up -d
```

Méthode recommandée en cad de problème:
```bash
# Nettoyer les anciennes installations si nécessaire (Attention toute ancienne donnée sera supprimée)
docker-compose down -v
docker system prune -a

# Démarrer les services individuellement
docker pull mysql:5.7
docker-compose up -d db
docker-compose up -d web
```

3. Accéder à l'application
Ouvrez votre navigateur et accédez à:
```
http://localhost
```

## Arrêt de l'application

```bash
docker-compose down
```

Pour supprimer également les volumes (données):
```bash
docker-compose down -v
```

## Commandes utiles

Consulter les logs:
```bash
# Logs du serveur web
docker-compose logs web

# Logs de la base de données
docker-compose logs db
```

Accéder à la base de données:
```bash
docker exec -it sbateliers_db_1 mysql -uslam -pazerty sb
```

## Fonctionnalités

- Inscription et connexion des utilisateurs
- Consultation des ateliers programmés
- Inscription aux ateliers
- Commentaires sur les ateliers passés
- Gestion du profil utilisateur
