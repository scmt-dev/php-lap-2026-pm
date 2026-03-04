<?php
// refactor code from register.php and login.php to here
function login($email, $password) {

}

function register($name, $email, $password) {

}

function logout($isRedirect = true) {
    session_destroy();
    if($isRedirect) {
        header("Location: login.php");
    }
}