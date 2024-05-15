<?php
require_once('ajout-login.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email === "dhiasaied@gmail.com" && $password === "12345678") {
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email; 
            $_SESSION['password'] = $password; 
            header('Location: Bienvenue.php'); 
            exit;
        } else {
            $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect.";
            header('Location: login.php'); 
            exit;
        }        
    } else {
        $_SESSION['error_message'] = "Veuillez remplir tous les champs du formulaire.";
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php'); 
    exit;
}
?>
