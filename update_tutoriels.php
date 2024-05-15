<?php
require_once('connexion/connexion.php');

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si toutes les données nécessaires sont présentes
    if (isset($_POST['Id_Tutoriel']) && isset($_POST['Id_Cours']) && isset($_POST['Titre_Tutoriel']) && isset($_POST['Description_Tutoriel']) && isset($_POST['Contenu_Tutoriel'])) {
        // Récupère les données du formulaire
        $id_tutoriel = $_POST['Id_Tutoriel'];
        $id_cours = $_POST['Id_Cours'];
        $titre_tutoriel = $_POST['Titre_Tutoriel'];
        $description_tutoriel = $_POST['Description_Tutoriel'];
        $contenu_tutoriel = $_POST['Contenu_Tutoriel'];

        // Prépare la requête SQL de mise à jour
        $sql = "UPDATE Tutoriels SET Id_Cours = :id_cours, Titre_Tutoriel = :titre_tutoriel, Description_Tutoriel = :description_tutoriel, Contenu_Tutoriel = :contenu_tutoriel WHERE Id_Tutoriel = :id_tutoriel";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_cours', $id_cours);
        $stmt->bindParam(':titre_tutoriel', $titre_tutoriel);
        $stmt->bindParam(':description_tutoriel', $description_tutoriel);
        $stmt->bindParam(':contenu_tutoriel', $contenu_tutoriel);
        $stmt->bindParam(':id_tutoriel', $id_tutoriel);

        // Exécute la requête
        if ($stmt->execute()) {
            // Redirige vers une page de succès
            header("Location:tutoriels.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour du tutoriel.";
        }
    } else {
        echo "Toutes les données nécessaires n'ont pas été fournies.";
    }
} else {
    echo "Accès invalide à cette page.";
}
?>
