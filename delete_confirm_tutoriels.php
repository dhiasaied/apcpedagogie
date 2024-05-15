<?php  
require_once('connexion/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM Tutoriels WHERE Id_Tutoriel = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) { 
            header("Location: tutoriels.php");
            exit(); 
        } else { 
            echo "Erreur lors de la suppression du tutoriel."; 
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
} else { 
    echo "L'identifiant du tutoriel n'est pas spécifié.";
}
?>
