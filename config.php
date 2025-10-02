<?php
// --- Paramètres de connexion à la base de données ---
$host = 'localhost';          // Remplacer si nécessaire (parfois un nom spécifique sur Plesk)
$dbname = 'emmanuelle-dupas-mahe_mesprojets_db';    // Le nom de votre base de données
$username = 'Manux';     // L'utilisateur créé sur Plesk
$password = 'Pinkus83140@'; // Le mot de passe

// --- Connexion PDO ---
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie !"; // Décommenter pour tester
} catch (PDOException $e) {
    // En production, il est préférable de ne pas afficher l'erreur brute
    die("Erreur de connexion à la base de données. Veuillez contacter l'administrateur."); 
}
?>