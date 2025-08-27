<?php 
session_start();

// Vérifier si des données POST ont été envoyées
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['submit'])){
    try {
        // Inclure les classes nécessaires - ajuster le chemin selon votre structure
        require_once("../../Metier/client.php");
        
        // Vérifier que toutes les données requises sont présentes
        $requiredFields = ['nom', 'adresse', 'telephone', 'email'];
        foreach($requiredFields as $field){
            if(empty($_POST[$field])){
                throw new Exception("Le champ '$field' est requis");
            }
        }
        
        // Extraire et nettoyer les données POST
        $nom = trim($_POST['nom']);
        $adresse = trim($_POST['adresse']);
        $telephone = trim($_POST['telephone']);
        $email = trim($_POST['email']);
        
        // Validation email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Format d'email invalide");
        }
        
        // Créer le client et le sauvegarder
        $client = new Client($nom, $adresse, $telephone, $email);
        $client->save();
        
        // Marquer le succès
        $_SESSION['succes'] = true;
        
    } catch(Exception $e) {
        $_SESSION['erreur'] = $e->getMessage();
        error_log("Erreur ajout client: " . $e->getMessage());
    }
}

// Redirection vers la page d'ajout
header('Location: ajouterClient.php');
exit();
?>