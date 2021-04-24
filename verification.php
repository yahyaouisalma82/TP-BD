<?php
session_start();
/*
 * 1- Récupérer les identifiants
 * Tester si le login et le mot de passe correspondent
 * Si oui
 *  Redirige vers la page d'accueil
 * Si non
 *  Redirgie vers la page login avec un message d'erreur
 * */

//1
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username)&&isset($password)) {
    if ($username == 'admin' && $password == "admin") {
        $_SESSION['user']="as";
        header('location:home.php');
    } else {
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
        header('location:index.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:index.php');
}