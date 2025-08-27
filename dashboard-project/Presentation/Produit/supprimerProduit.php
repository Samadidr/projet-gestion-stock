<?php
// filepath: dashboard-project/Presentation/Produit/supprimerProduit.php

require_once '../../src/Produit.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produit = new Produit();

    if ($produit->supprimer($id)) {
        header("Location: afficherProduits.php?message=Produit supprimé avec succès");
        exit();
    } else {
        header("Location: afficherProduits.php?error=Erreur lors de la suppression du produit");
        exit();
    }
} else {
    header("Location: afficherProduits.php?error=ID de produit non spécifié");
    exit();
}
?>