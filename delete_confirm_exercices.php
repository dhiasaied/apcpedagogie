<?php  
require_once('connexion/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM Exercices WHERE Id_Exercice = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) { 
            header("Location: exercices.php");
            exit(); 
        } else { 
            echo "Erreur lors de la suppression de l'exercice."; 
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
} else { 
    echo "L'identifiant de l'exercice n'est pas spécifié.";
}
?>
