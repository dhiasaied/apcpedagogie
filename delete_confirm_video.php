<?php  
require_once('connexion/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM Videos WHERE Id_Video = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) { 
            header("Location: videos.php");
            exit(); 
        } else { 
            echo "Erreur lors de la suppression de la vidéo."; 
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
} else { 
    echo "L'identifiant de la vidéo n'est pas spécifié.";
}
?>
