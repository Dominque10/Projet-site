<?php

// Configuration des serveurs SMTP
$smtpServers = [
    'serveur1' => [
        'host' => 'smtp.example.com',
        'port' => 587,
        'username' => 'votre_email@example.com',
        'password' => 'votre_mot_de_passe',
        'encryption' => 'tls', // ou ssl selon votre serveur
    ],
    'serveur2' => [
        'host' => 'smtp.example2.com',
        'port' => 465,
        'username' => 'votre_email2@example.com',
        'password' => 'votre_mot_de_passe2',
        'encryption' => 'ssl', // ou tls selon votre serveur
    ],
    // Ajoutez autant de serveurs SMTP que nécessaire
];

// Configuration des variables locales
$urlSite = "https://www.example.com";
$root = "/chemin/vers/votre/site";
$bdd = [
    'host' => 'localhost',
    'username' => 'votre_utilisateur_bdd',
    'password' => 'votre_mot_de_passe_bdd',
    'database' => 'nom_de_votre_base_de_donnees',
];

// Définir les constantes pour les configurations
define('SMTP_CONFIG', $smtpServers);
define('URL_SITE', $urlSite);
define('ROOT_PATH', $root);
define('DB_CONFIG', $bdd);