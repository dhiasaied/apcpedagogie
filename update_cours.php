<?php
require_once('connexion/connexion.php');

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si toutes les données nécessaires sont présentes
    if (isset($_POST['Id_Cours']) && isset($_POST['Titre_Cours']) && isset($_POST['Description_Cours']) && isset($_POST['Niveau_Cours'])) {
        // Récupère les données du formulaire
        $id_cours = $_POST['Id_Cours'];
        $titre_cours = $_POST['Titre_Cours'];
        $description_cours = $_POST['Description_Cours'];
        $niveau_cours = $_POST['Niveau_Cours'];

        // Prépare la requête SQL de mise à jour
        $sql = "UPDATE Cours SET Titre_Cours = :titre_cours, Description_Cours = :description_cours, Niveau_Cours = :niveau_cours WHERE Id_Cours = :id_cours";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titre_cours', $titre_cours);
        $stmt->bindParam(':description_cours', $description_cours);
        $stmt->bindParam(':niveau_cours', $niveau_cours);
        $stmt->bindParam(':id_cours', $id_cours);

        // Exécute la requête
        if ($stmt->execute()) {
            // Redirige vers une page de succès
            header("Location:Cours.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour du cours.";
        }
    } else {
        echo "Toutes les données nécessaires n'ont pas été fournies.";
    }
} else {
    echo "Accès invalide à cette page.";
}
