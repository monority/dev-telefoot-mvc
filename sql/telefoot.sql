CREATE DATABASE IF NOT EXISTS telefoot;




USE telefoot;




CREATE TABLE users (

    id INT PRIMARY KEY AUTO_INCREMENT,

    firstname VARCHAR(60) NOT NULL,

    lastname VARCHAR(60) NOT NULL,

    email VARCHAR(100) NOT NULL,

    password VARCHAR(255) NOT NULL

);




CREATE TABLE password_reset (

    id INT PRIMARY KEY AUTO_INCREMENT,

    email VARCHAR(100) NOT NULL,

    token VARCHAR(100) NOT NULL

);




CREATE TABLE channels (

    id TINYINT PRIMARY KEY AUTO_INCREMENT,

    name VARCHAR(50) NOT NULL,

    image VARCHAR(255)

);




CREATE TABLE replay (

    id TINYINT PRIMARY KEY AUTO_INCREMENT,

    name VARCHAR(50) NOT NULL,

    image VARCHAR(255)

);




CREATE TABLE clubs (

    id TINYINT PRIMARY KEY AUTO_INCREMENT,

    nom VARCHAR(50) NOT NULL,

    ville VARCHAR(50) NOT NULL,

    division VARCHAR(50) NOT NULL,

    image VARCHAR(255)

);




INSERT INTO channels

    (name, image)

VALUES

("Stadium 1", "../public/assets/img/channels/telefootstadium1.webp"),

("Stadium 2", "../public/assets/img/channels/telefootstadium2.webp"),

("Stadium 3", "../public/assets/img/channels/telefootstadium3.webp"),

("Stadium 4", "../public/assets/img/channels/telefootstadium4.webp"),

("Stadium 5", "../public/assets/img/channels/telefootstadium5.webp"),

("Stadium 6", "../public/assets/img/channels/telefootstadium6.webp");




INSERT INTO replay

    (name, image)

VALUES

("Ligue 1", "../public/assets/img/replay/matchs-ligue-1.webp"),

("Ligue 2", "../public/assets/img/replay/matchs-ligue-2.webp"),

("Champions League", "../public/assets/img/replay/matchs-champions-league.webp"),

("Europa League", "../public/assets/img/replay/matchs-europa-league.webp");




INSERT INTO clubs

    (nom, ville, division, image)

VALUES

("AC Ajaccio", "Ajaccio", "Ligue 2", "../public/assets/img/clubs/ajaccio.png"),

("AC Amiens", "Amiens", "Ligue 2", "../public/assets/img/clubs/amiens.png"),

("SCO Angers", "Angers", "Ligue 1", "../public/assets/img/clubs/angers.png"),

("AS Saint-Etienne", "Saint-Etienne", "Ligue 1", "../public/assets/img/clubs/asse.png"),

("AJ Auxerre", "Auxerre", "NC", "../public/assets/img/clubs/auxerre.png"),

("Girondins Bordeaux", "Bordeaux", "Ligue 1", "../public/assets/img/clubs/bordeaux.png"),

("Stade Brest", "Brest", "Ligue 1", "../public/assets/img/clubs/brest.png"),

("SM Caen", "Caen", "Ligue 2", "../public/assets/img/clubs/caen.png"),

("FC Chambly", "Chambly", "Ligue 2", "../public/assets/img/clubs/chambly.png"),

("La Berrichonne Châteauroux", "Châteauroux", "Ligue 2", "../public/assets/img/clubs/chateauroux.png"),

("Clermont Foot", "Clermont", "Ligue 2", "../public/assets/img/clubs/clermont.png"),

("Dijon FCO", "Dijon", "Ligue 1", "../public/assets/img/clubs/dijon.png"),

("USL Dunkerque", "Dunkerque", "Ligue 2", "../public/assets/img/clubs/dunkerque.png"),

("Grenoble Foot 38", "Grenoble", "Ligue 2", "../public/assets/img/clubs/grenoble.png"),

("EA Guimgamp", "Guimgamp", "Ligue 2", "../public/assets/img/clubs/guingamp.png"),

("Le Havre AC", "Le Havre", "Ligue 2", "../public/assets/img/clubs/havre.png"),

("RC Lens", "Lens", "Ligue 1", "../public/assets/img/clubs/lens.png"),

("FC Lorient", "Lorient", "NC", "../public/assets/img/clubs/lorient.png"),

("Lille OSC", "Lille", "Ligue 1", "../public/assets/img/clubs/lille.png"),

("FC Metz", "Metz", "Ligue 1", "../public/assets/img/clubs/metz.png"),

("AS Monaco", "Monaco", "Ligue 1", "../public/assets/img/clubs/monaco.png"),

("Montpellier HSC", "Montpellier", "Ligue 1", "../public/assets/img/clubs/montpellier.png"),

("AS Nancy", "Nancy", "Ligue 2", "../public/assets/img/clubs/nancy.png"),

("FC Nantes", "Nantes", "Ligue 1", "../public/assets/img/clubs/nantes.png"),

("OGC Nice", "Nice", "Ligue 1", "../public/assets/img/clubs/nice.png"),

("Nîmes Olympique", "Nîmes", "Ligue 1", "../public/assets/img/clubs/nimes.png"),

("Chamois Niortais", "Niort", "Ligue 2", "../public/assets/img/clubs/niort.png"),

("Olympique Lyonnais", "Lyon", "Ligue 1", "../public/assets/img/clubs/ol.png"),

("Olympique de Marseille", "Marseille", "Ligue 1", "../public/assets/img/clubs/om.png"),

("Paris FC", "Paris", "Ligue 2", "../public/assets/img/clubs/paris.png"),

("Pau FC", "Pau", "Ligue 2", "../public/assets/img/clubs/pau.png"),

("Rodez Aveyron Football", "Rodez", "Ligue 2", "../public/assets/img/clubs/rodez.png");