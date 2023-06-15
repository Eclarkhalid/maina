<?php

if(isset($_POST["submit"])){
    echo "it works";

    $name = $_POST["username"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=empty input");
        exit();
    }

    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invalid uid");
        exit();
    }

    if (invalidEmail($email) == false){
        header("location: ../signup.php?error=use another email");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=pwd don't match");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=username taken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}

else{
    header("location: ../signup.php");
    exit();
}