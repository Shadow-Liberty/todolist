<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23/03/17
 * Time: 09:56
 */

function connectUser() {
    $pdo = connectDB();
    if ($pdo) {
        $sql = sprintf('SELECT * FROM users WHERE email = :email AND password = :password');
        try {
            $pdoSt = $pdo->prepare($sql);
            $pdoSt->execute([
                ':email' => $_SESSION['email'],
                ':password' => $_SESSION['password']
            ]);
        } catch (PDOException $e) {
            die('Quelque chose a posé problème lors de la connexion');
        }
    } else {
        die('Quelque chose a posé problème lors de la connexion');
    }
}

function is_validUser() {
    if ()
}