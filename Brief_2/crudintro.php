<?php

// Information de connexion a la base de données
$host = "localhost";
$dbname = "bibliotheque";
$user = "root";
$pass="";

try {
    // Création d'une instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // Configuration de PDO en cas d'exception
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}    catch (PDOException $e) {
    // S'il y a une erreur de connexion
    die ("Erreur de connexion : " . $e -> getMessage());
}

// Préparation de la requête
$query = "SELECT * FROM auteur";

// Execution de la requête
$stmt  = $pdo -> query($query);

// Récupération des données (tableau associatif)
$auteur = $stmt -> fetchAll(PDO::FETCH_ASSOC);

//print_r($auteurs);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Liste des livres</title>
</head>
<body>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
            </tr>
            </thead>
            <tbody>
            <!-- PHP -->
            <?php foreach ($auteur as $a): ?>
                <tr>
                    <td><?= htmlspecialchars($a['id']) ?></td>
                    <td><?= htmlspecialchars($a['nom']) ?></td>
                    <td><?= htmlspecialchars($a['prenom']) ?></td>
                    <td><?= htmlspecialchars($a['date_naissance']) ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
</body>
</html>