<?php
// Définir les routes
$routes = [
    '/' => 'public/index',
    '/discord' => 'https://discord.gg/GX3rA45QUn',
    '/contact/save' => 'public/back-end/contact',
    '/test' => 'public/back-end/JsonClass',
    '/dashboard' => 'public/contact'
];

// Récupérer l'URL actuelle
$url = $_SERVER['REQUEST_URI'];

// Vérifier si la route existe
if (array_key_exists($url, $routes)) {
    // Inclure le fichier correspondant à la route
    include __DIR__ . '/' . $routes[$url] . '.php';
} else {
    // Afficher une erreur 404 si la route n'existe pas
    http_response_code(404);
    echo 'Page not found';
}
?>