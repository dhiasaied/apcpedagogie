<?php
require_once('connexion/connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    try {
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
        $stmt->execute();

        header("Location: Bienvenue.php");
        exit;
        } catch (PDOException $e) {
        echo "<div class='alert alert-danger' role='alert'>Erreur d'insertion : " . $e->getMessage() . "</div>";
    }
}
?>