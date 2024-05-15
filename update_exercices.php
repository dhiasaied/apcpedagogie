<?php
require_once('connexion/connexion.php');

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si toutes les données nécessaires sont présentes
    if (isset($_POST['Id_Exercice']) && isset($_POST['Id_Cours']) && isset($_POST['Titre_Exercice']) && isset($_POST['Description_Exercice']) && isset($_POST['Solution_Exercice'])) {
        // Récupère les données du formulaire
        $id_exercice = $_POST['Id_Exercice'];
        $id_cours = $_POST['Id_Cours'];
        $titre_exercice = $_POST['Titre_Exercice'];
        $description_exercice = $_POST['Description_Exercice'];
        $solution_exercice = $_POST['Solution_Exercice'];

        // Prépare la requête SQL de mise à jour
        $sql = "UPDATE Exercices SET Id_Cours = :id_cours, Titre_Exercice = :titre_exercice, Description_Exercice = :description_exercice, Solution_Exercice = :solution_exercice WHERE Id_Exercice = :id_exercice";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_cours', $id_cours);
        $stmt->bindParam(':titre_exercice', $titre_exercice);
        $stmt->bindParam(':description_exercice', $description_exercice);
        $stmt->bindParam(':solution_exercice', $solution_exercice);
        $stmt->bindParam(':id_exercice', $id_exercice);

        // Exécute la requête
        if ($stmt->execute()) {
            // Redirige vers une page de succès
            header("Location:Exercices.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour de l'exercice.";
        }
    } else {
        echo "Toutes les données nécessaires n'ont pas été fournies.";
    }
} else {
    echo "Accès invalide à cette page.";
}
?>
