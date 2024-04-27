<?php
// Définir les routes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

$routes = [
    '/' => 'public/index',
    '/discord' => 'https://discord.gg/GX3rA45QUn',
    '/contact/save' => 'public/back-end/contact',
    '/test' => 'public/back-end/JsonClass',
    '/dashboard' => 'public/contact',
    '/en' => 'public/index'
];

// Récupérer l'URL actuelle
$url = $_SERVER['REQUEST_URI'];

// Vérifier si la route existe
if (array_key_exists($url, $routes)) {
    // Vérifier si la route est '/en'
    // Vérifier si la route est '/en'
    if ($url === '/en') {
        // Définir le paramètre 'language' avant d'inclure le fichier
        $_SESSION['language'] = 'en';
        // Inclure le fichier correspondant à la route
        include __DIR__ . '/' . $routes[$url] . '.php';
    } else {
        // Définir le paramètre 'language' avant d'inclure le fichier
        $_SESSION['language'] = 'fr';
        // Inclure le fichier correspondant à la route
        include __DIR__ . '/' . $routes[$url] . '.php';
        $language = "fr";
    }
} else {
    // Afficher une erreur 404 si la route n'existe pas
    http_response_code(404);
    echo 'Page not found';
}


?>