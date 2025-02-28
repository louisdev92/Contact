<?php
require 'Database.php';
require 'Produit.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produit = new Produit();

    if ($produit->supprimer($id)) {
        echo "Produit supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression.";
    }
}
?>
