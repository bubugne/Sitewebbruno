<?php
// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=db;dbname=contactbruno", "brun", "Soleil123**");

    // Récupérer un message depuis la table contact
    $stmt = $pdo->query("SELECT message FROM contact LIMIT 1");
    $row = $stmt->fetch();

    // Afficher le message
    echo "<h1>Contact</h1>";
    echo "<p>" . $row['message'] . "</p>";

} catch (PDOException $e) {
    echo "<p>Impossible de se connecter à la base de données.</p>";
}

 
