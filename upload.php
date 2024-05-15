<?php
error_reporting(E_ALL); // Afficher toutes les erreurs PHP
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_etudiant = $_POST["name_etudiant"];
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $upload_directory = "C:/xampp/htdocs/project/project/picture_etudiants/";

    // Vérifier si le dossier de destination existe, sinon le créer
    if (!file_exists($upload_directory)) {
        mkdir($upload_directory, 0777, true);
    }

    // Déplacer le fichier vers le dossier de destination
    if (move_uploaded_file($file_tmp, $upload_directory . $name_etudiant . "_" . $file_name)) {
        echo "Le fichier a été téléchargé avec succès.";
    } else {
        echo "Erreur lors du téléchargement du fichier.";
        // Afficher les erreurs de déplacement de fichier
        echo "Erreur: " . $_FILES["file"]["error"];
    }

    // Rediriger après le téléchargement du fichier
    header("Location:index.php");
    exit;
}
?>
