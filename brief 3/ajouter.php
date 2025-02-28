<?php
require 'Database.php';
require 'Produit.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];

    $produit = new Produit();
    if ($produit->ajouter($nom, $prix, $stock)) {
        echo "Produit ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du produit.";
    }
}
?>
