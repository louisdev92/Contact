<?php
global $pdo;
require 'config.php';

// Ajoutez
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];

    $query = "INSERT INTO produits (nom, prix, stock) VALUES (:nom, :prix, :stock)";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['nom' => $nom, 'prix' => $prix, 'stock' => $stock]);
}

// Suppression
if (isset($_GET['supprimer'])) {
    $id = $_GET['supprimer'];
    $query = "DELETE FROM produits WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => $id]);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Récupérez les produits
$query = "SELECT * FROM produits";
$stmt = $pdo->query($query);
$produits = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion des Produits</title>
</head>
<body>

<h1>Liste des Produits</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($produits as $produit) : ?>
        <tr>
            <td><?= htmlspecialchars($produit['id']) ?></td>
            <td><?= htmlspecialchars($produit['nom']) ?></td>
            <td><?= htmlspecialchars($produit['prix']) ?></td>
            <td><?= htmlspecialchars($produit['stock']) ?></td>
            <td>
                <a href="modifier.php?id=<?= $produit['id'] ?>">Modifier</a>
                |
                <a href="?supprimer=<?= $produit['id'] ?>" onclick="return confirm('Supprimer ce produit ?');">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
</form>
<h1>Ajouter un Produit</h1>
<form method="post">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="number" name="prix" placeholder="Prix" step="0.01" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <button type="submit" name="ajouter">Ajouter</button>
</body>
</html>
