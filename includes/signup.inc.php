<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputSignup($username, $email, $password, $confirmpassword) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password, $confirmpassword) !== false) {
        header("location: ../signup.php?error=passwordnotmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $email, $password);
}
else {
    header("location: ../signup.php");
}