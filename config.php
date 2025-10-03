<?php
// Inclusion du fichier de connexion à la base de données

$host = 'localhost';
$dbname = 'mesprojets_db'; //emmanuelle-dupas-mahe_mesprojets_db sur plesk
$username = 'root';       //Manux     
$password = '';       // Patou83140@ sur Plesk         

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>