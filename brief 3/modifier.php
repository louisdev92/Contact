<?php
require 'Database.php';
require 'Produit.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];

    $produit = new Produit();
    if ($produit->modifier($id, $nom, $prix, $stock)) {
        echo "Produit modifié avec succès.";
    } else {
        echo "Erreur lors de la modification du produit.";
    }
}
?>


