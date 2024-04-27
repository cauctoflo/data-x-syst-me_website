<?php
// Définir les routes
$routes = [
    '/' => 'public/index',
    '/about' => 'public/about',
    '/contact' => 'public/contact'
];

// Récupérer l'URL actuelle
$url = $_SERVER['REQUEST_URI'];

// Vérifier si la route existe
if (array_key_exists($url, $routes)) {
    // Inclure le fichier correspondant à la route
    include __DIR__ . '/' . $routes[$url] . '.html';
} else {
    // Afficher une erreur 404 si la route n'existe pas
    http_response_code(404);
    echo 'Page not found';
}
?>