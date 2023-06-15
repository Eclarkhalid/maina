<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    global $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }

    else{
        $result = false;
    }

    return $result;
}

function invalidUid($username){
    global $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        $result = true;

    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    global $result;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else{
        $result = false;
    }

    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    global $result;
    if($pwd !== $pwdRepeat) {
        $result = true;
    }

    else{
        $result = false;
    }

    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * fROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=null");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){

        return $row;
    }

    else{
        $return = false;
        return  $return;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=null 2 ");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",$name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();

}

function emptyInputLogin($username, $pwd){
    global $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    }

    else{
        $result = false;
    }

    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../login.php?error=wrong details");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        echo "<p>Incorrect password</p>";
        exit();
    }

    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../home.php");
        exit();
    }
}

