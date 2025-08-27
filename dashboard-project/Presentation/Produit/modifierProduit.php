<?php
// filepath: dashboard-project/Presentation/Produit/modifierProduit.php

include "../../src/Produit.php";
include "../../src/Categorie.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $reference = $_POST['reference'];
    $libelle = $_POST['libelle'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];
    $achat = $_POST['achat'];
    $categorie = $_POST['cat'];

    // Update product in the database
    $produit = new Produit();
    $produit->set("r", $reference);
    $produit->set("l", $libelle);
    $produit->set("p", $prix);
    $produit->set("q", $quantite);
    $produit->set("a", $achat);
    $produit->set("c", $categorie);
    
    // Assuming there is a method to update the product
    if ($produit->modifier()) {
        header("Location: afficherProduits.php?success=1");
        exit();
    } else {
        $error = "Erreur lors de la mise à jour du produit.";
    }
}

// Fetch the product details for the given reference
if (isset($_GET['id'])) {
    $reference = $_GET['id'];
    $produit = Produit::getByReference($reference);
    if (!$produit) {
        die("Produit non trouvé.");
    }
} else {
    die("Aucune référence fournie.");
}

$title = "Modifier Produit";
include "../../templates/header.php";
?>

<div id="main">
    <div class="page-heading">
        <h3>Modifier Produit</h3>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier les détails du produit</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="reference">Reference</label>
                            <input type="text" id="reference" class="form-control" name="reference" value="<?= $produit->get("r") ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="libelle">Libelle</label>
                            <input type="text" id="libelle" class="form-control" name="libelle" value="<?= $produit->get("l") ?>">
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix unitaire</label>
                            <input type="number" id="prix" class="form-control" name="prix" value="<?= $produit->get("p") ?>">
                        </div>
                        <div class="form-group">
                            <label for="quantite">Quantite en stock</label>
                            <input type="number" id="quantite" class="form-control" name="quantite" value="<?= $produit->get("q") ?>">
                        </div>
                        <div class="form-group">
                            <label for="achat">Prix d'achat</label>
                            <input type="number" id="achat" class="form-control" name="achat" value="<?= $produit->get("a") ?>">
                        </div>
                        <div class="form-group">
                            <label for="cat">Categorie</label>
                            <select id="cat" class="form-control" name="cat">
                                <?php
                                $categories = Categorie::afficher();
                                foreach ($categories as $cat) {
                                    $selected = ($cat->get("i") == $produit->get("c")) ? "selected" : "";
                                    echo "<option value='" . $cat->get("i") . "' $selected>" . $cat->get("n") . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <a href="afficherProduits.php" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                    <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include "../../templates/footer.php"; ?>