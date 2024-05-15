<?php
require_once('connexion/connexion.php');

try {
    $hashed_password = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO Inscription (prenom, nom, email, telephone, date_de_naissance, ville, mot_de_passe) 
    VALUES (:prenom, :nom, :email, :telephone, :date_de_naissance, :ville, :mot_de_passe)");

    $stmt->bindParam(':prenom', $_POST['prenom']);
    $stmt->bindParam(':nom', $_POST['nom']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':telephone', $_POST['telephone']);
    $stmt->bindParam(':date_de_naissance', $_POST['date_de_naissance']);
    $stmt->bindParam(':ville', $_POST['ville']);
    $stmt->bindParam(':mot_de_passe', $hashed_password);

    $stmt->execute();
    header("Location: Bienvenue.php");
    exit;
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
