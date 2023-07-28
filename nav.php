<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
</head>
<body>
<nav class='navbar border flex justify-content-between'>
        <h3>M<span class='span'>M</span></h3>
        <ul class='links-container'>
            <li class='link-item'><a href='home.php' class='link'>home</a></li>
            <li class='link-item'><a href='editor.php' class='link'>Authors</a></li>
        </ul>
        <ul class="links-container">
        <li class="link-item">
            <p class='btn mx-4'><a onclick="window.location.href='logout.inc.php';">Logout</a> </p>
            </li>
        </ul>
    

    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    
</body>
</html>