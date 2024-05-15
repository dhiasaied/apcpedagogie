<?php  
require_once('connexion/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM QCM WHERE Id_QCM = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) { 
            header("Location: qcms.php");
            exit(); 
        } else { 
            echo "Erreur lors de la suppression du QCM."; 
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
} else { 
    echo "L'identifiant du QCM n'est pas spécifié.";
}
?>
