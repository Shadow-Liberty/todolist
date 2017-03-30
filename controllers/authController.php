<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 23/03/17
 * Time: 09:55
 */

function getLogin() {
    return ['view' => 'views/auth.php'];
}

function postLogin() {
    include 'models/authModel.php';
    $_SESSION['errors'] = [];
    if (!empty($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'] && $_SESSION['password'] = $_POST['password'];
        if (is_validUser)
    }
}