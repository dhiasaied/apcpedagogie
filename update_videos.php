<?php
require_once('connexion/connexion.php');

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si toutes les données nécessaires sont présentes
    if (isset($_POST['Id_Video']) && isset($_POST['Id_Cours']) && isset($_POST['Titre_Video']) && isset($_POST['Description_Video']) && isset($_POST['URL_Video'])) {
        // Récupère les données du formulaire
        $id_video = $_POST['Id_Video'];
        $id_cours = $_POST['Id_Cours'];
        $titre_video = $_POST['Titre_Video'];
        $description_video = $_POST['Description_Video'];
        $url_video = $_POST['URL_Video'];

        // Prépare la requête SQL de mise à jour
        $sql = "UPDATE Videos SET Id_Cours = :id_cours, Titre_Video = :titre_video, Description_Video = :description_video, URL_Video = :url_video WHERE Id_Video = :id_video";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_cours', $id_cours);
        $stmt->bindParam(':titre_video', $titre_video);
        $stmt->bindParam(':description_video', $description_video);
        $stmt->bindParam(':url_video', $url_video);
        $stmt->bindParam(':id_video', $id_video);

        // Exécute la requête
        if ($stmt->execute()) {
            // Redirige vers une page de succès
            header("Location:videos.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour de la vidéo.";
        }
    } else {
        echo "Toutes les données nécessaires n'ont pas été fournies.";
    }
} else {
    echo "Accès invalide à cette page.";
}
?>
