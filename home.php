<?php
include_once 'nav.php';

if (isset($_SESSION["useruid"])) {
    echo header("location: recipe.php");
    exit();
    
}else{
    header("location: signup.php");
    exit();
}
?>

