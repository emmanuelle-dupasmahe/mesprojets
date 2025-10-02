<?php
// 1. Inclusion du fichier de connexion à la base de données
require_once 'config.php'; 

// 2. Requête SQL pour récupérer tous les projets
try {
    // Préparer la requête pour éviter les injections SQL (bonne pratique même sans variables)
    $stmt = $pdo->prepare("SELECT titre, description, url_lien, url_image FROM projets ORDER BY date_creation DESC");
    $stmt->execute();
    $projets = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupère tous les résultats sous forme de tableau associatif
} catch (PDOException $e) {
    $erreur = "Impossible de charger les projets : " . $e->getMessage();
    $projets = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets | Portfolio</title>
    <link rel="stylesheet" href="projets.css"> </head>
<body>

    <header>
        <h1>Mon Portfolio de Projets</h1>
        <p>Découvrez l'ensemble de mes réalisations web.</p>
    </header>

    <div class="conteneur-projets">
        <?php if (!empty($erreur)): ?>
            <p class="erreur"><?php echo $erreur; ?></p>
        <?php elseif (empty($projets)): ?>
            <p>Aucun projet n'a été trouvé dans la base de données pour le moment.</p>
        <?php else: ?>
            <?php foreach ($projets as $projet): ?>
                <div class="carte-projet">
                    <?php if (!empty($projet['url_image'])): ?>
                        <img src="<?php echo htmlspecialchars($projet['url_image']); ?>" alt="Image du projet <?php echo htmlspecialchars($projet['titre']); ?>">
                    <?php endif; ?>
                    
                    <h2><?php echo htmlspecialchars($projet['titre']); ?></h2>
                    <p class="description-courte"><?php echo nl2br(htmlspecialchars($projet['description'])); ?></p>
                    
                    <a href="<?php echo htmlspecialchars($projet['url_lien']); ?>" target="_blank" class="bouton-voir">
                        Voir le Projet
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mes Projets. Propulsé par PHP/MySQL.</p>
    </footer>

</body>
</html>