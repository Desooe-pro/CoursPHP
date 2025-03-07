<?php

require_once "Config.php";

class Log {
    public static function checkMail($mail) {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare('SELECT * FROM utilisateur WHERE email = ?');
        $stmt->execute([$mail]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function Register($nom, $prenom, $mail, $mdp) {
        $hash = password_hash($mdp, PASSWORD_BCRYPT, ['cost' => 10]);
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO utilisateur (nom, prenom, email, mdp) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$nom, $prenom, $mail, $hash])){
            $_SESSION['msg'] = 'Inscription réussie';
            header("Location: Login.php");
        } else {
            $_SESSION['error'] = 'Inscription ratée';
            header("Location: Register.php");
        }
        exit();
    }

    public static function login($mail, $mdp) {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM utilisateur WHERE ");
    }
}