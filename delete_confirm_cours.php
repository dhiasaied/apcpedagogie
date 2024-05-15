<?php  
require_once('connexion/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM Cours WHERE Id_Cours = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) { 
            header("Location: matieres.php");
            exit(); 
        } else { 
            echo "Erreur lors de la suppression du cours."; 
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
} else { 
    echo "L'identifiant du cours n'est pas spécifié.";
}
?>
