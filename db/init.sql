CREATE DATABASE IF NOT EXISTS sb;
USE sb;

-- Table client
CREATE TABLE IF NOT EXISTS client (
  numero INT AUTO_INCREMENT PRIMARY KEY,
  civilite VARCHAR(10) NOT NULL,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  date_naissance DATE NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  mobile VARCHAR(15) NOT NULL,
  adresse VARCHAR(100) NOT NULL,
  cp VARCHAR(5) NOT NULL,
  ville VARCHAR(50) NOT NULL,
  mdp VARCHAR(100) NOT NULL
);

-- Table responsable
CREATE TABLE IF NOT EXISTS responsable (
  numero INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL
);

-- Table atelier
CREATE TABLE IF NOT EXISTS atelier (
  numero INT AUTO_INCREMENT PRIMARY KEY,
  theme VARCHAR(100) NOT NULL,
  date_heure DATETIME NOT NULL,
  duree INT NOT NULL,
  nb_places INT NOT NULL DEFAULT 20,
  nb_participants INT NOT NULL DEFAULT 0,
  responsable INT NOT NULL,
  FOREIGN KEY (responsable) REFERENCES responsable(numero)
);

-- Table participer
CREATE TABLE IF NOT EXISTS participer (
  client INT NOT NULL,
  atelier INT NOT NULL,
  date_inscription DATE NOT NULL,
  PRIMARY KEY (client, atelier),
  FOREIGN KEY (client) REFERENCES client(numero),
  FOREIGN KEY (atelier) REFERENCES atelier(numero)
);

-- Table commenter
CREATE TABLE IF NOT EXISTS commenter (
  client INT NOT NULL,
  atelier INT NOT NULL,
  commentaire TEXT NOT NULL,
  date_redaction DATE NOT NULL,
  PRIMARY KEY (client, atelier),
  FOREIGN KEY (client) REFERENCES client(numero),
  FOREIGN KEY (atelier) REFERENCES atelier(numero)
);

-- Ajouter quelques responsables
INSERT INTO responsable (nom, prenom) VALUES
('Dupont', 'Jean'),
('Martin', 'Sophie'),
('Lefebvre', 'Pierre');

-- Ajouter quelques ateliers
INSERT INTO atelier (theme, date_heure, duree, nb_places, responsable) VALUES
('Cuisine italienne', '2025-04-15 14:00:00', 120, 20, 1),
('Pâtisserie française', '2025-04-20 10:00:00', 180, 15, 2),
('Cuisine asiatique', '2025-05-01 15:00:00', 150, 12, 3),
('Boulangerie', '2025-05-10 09:00:00', 210, 10, 1);

-- Ajouter quelques ateliers passés pour les tests
INSERT INTO atelier (theme, date_heure, duree, nb_places, responsable) VALUES
('Cuisine méditerranéenne', '2023-01-15 14:00:00', 120, 20, 1),
('Desserts du monde', '2023-02-10 10:00:00', 180, 15, 2);
