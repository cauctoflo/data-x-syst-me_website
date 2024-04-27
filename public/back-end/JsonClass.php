<?php
function lireFichierJSON($cheminFichier) {
    // Vérifier si le fichier existe
    if (file_exists($cheminFichier)) {
        // Lire le contenu du fichier
        $contenuFichier = file_get_contents($cheminFichier);
        
        // Décoder le contenu JSON en tableau associatif
        $donneesJSON = json_decode($contenuFichier, true);
        
        // Vérifier si le décodage a réussi
        if ($donneesJSON === null) {
            // Gérer l'erreur de décodage JSON
            throw new Exception('Erreur lors du décodage JSON : ' . json_last_error_msg());
        } else {
            // Retourner les données JSON décodées
            return $donneesJSON;
        }
    } else {
        // Gérer l'erreur si le fichier n'existe pas
        throw new Exception('Le fichier JSON spécifié n\'existe pas : ' . $cheminFichier);
    }
}

try {
    $donnees = lireFichierJSON('public/back-end/data/en.json');
    // Convertir les données en format JSON
    $donneesJSON = json_encode($donnees);
    
    // // Définir l'en-tête de la réponse comme JSON
    // header('Content-Type: application/json');
    
    // // Retourner les données JSON à la réponse
    // echo $donneesJSON;
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
