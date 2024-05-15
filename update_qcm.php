<?php
require_once('connexion/connexion.php');

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si toutes les données nécessaires sont présentes
    if (isset($_POST['Id_QCM']) && isset($_POST['Id_Cours']) && isset($_POST['Titre_QCM']) && isset($_POST['Description_QCM']) && isset($_POST['Solution_QCM'])) {
        // Récupère les données du formulaire
        $id_qcm = $_POST['Id_QCM'];
        $id_cours = $_POST['Id_Cours'];
        $titre_qcm = $_POST['Titre_QCM'];
        $description_qcm = $_POST['Description_QCM'];
        $solution_qcm = $_POST['Solution_QCM'];

        // Prépare la requête SQL de mise à jour
        $sql = "UPDATE QCM SET Id_Cours = :id_cours, Titre_QCM = :titre_qcm, Description_QCM = :description_qcm, Solution_QCM = :solution_qcm WHERE Id_QCM = :id_qcm";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_cours', $id_cours);
        $stmt->bindParam(':titre_qcm', $titre_qcm);
        $stmt->bindParam(':description_qcm', $description_qcm);
        $stmt->bindParam(':solution_qcm', $solution_qcm);
        $stmt->bindParam(':id_qcm', $id_qcm);

        // Exécute la requête
        if ($stmt->execute()) {
            // Redirige vers une page de succès
            header("Location:QCM.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour du QCM.";
        }
    } else {
        echo "Toutes les données nécessaires n'ont pas été fournies.";
    }
} else {
    echo "Accès invalide à cette page.";
}
?>
