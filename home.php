<?php
include_once 'nav.php';

if (isset($_SESSION["useruid"])) {
    echo "
    

    <header class='header'>
        <div class='content'>
            <h1 class='heading'>
                <span class='small'>welcome in the world of</span>
                Recipe
                <span class='no-fill'>writing</span>
            </h1>
            <a href='editor.php' class='btn'>write a Recipe</a>
        </div>
    </header>

    <section class='blogs-section'>
        <img src='img/header.png' class='blog-image' alt=''>
        <h3 class='blog-title'>
        Author:

Name: John Smith
Website: www.johnsmithrecipes.com
Email: john.smith@example.com
        </h3>
        <p class='blog-overview'>Simple Recipe: Chocolate Chip Cookies</p>
        <a href='read.php' class='btn dark'>read</a>
    </section>
    
    <section class='blogs-section'>
        <img src='img/img1.png' class='blog-image' alt=''>
        <h3 class='blog-title'>
        Author:

Name: John Smith
Website: www.johnsmithrecipes.com
Email: john.smith@example.com
        </h3>
        <p class='blog-overview'>Simple Recipe: Chocolate Chip Cookies</p>
        <a href='read.php' class='btn dark'>read</a>
    </section>
    ";
    
}else{
    header("location: signup.php");
    exit();
}
?>

