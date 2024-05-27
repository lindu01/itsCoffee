<?php
require(realpath(__DIR__) . '/firewall.inc.php');
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Area</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="assets/css/custom.css" rel="stylesheet">
    </head>

<body>

<div class="main">
    <div class="menu" >
    
        <?php
        require(realpath(__DIR__) . '/menu.inc.php');
        ?>
        <hr>
        <?php
        if ($themeMenu == "bottom") {
            require(realpath(__DIR__) . '/usermenu.inc.php');
        }
        ?>
    </div>
    
<div class="container">
        <nav class="navbar">
            <div class="container-fluid">
                <?php
                if ($themeMenu == "top") {
                    require(realpath(__DIR__) . '/usermenu.inc.php');
                }
                ?>
            </div>
        </nav>
        <?php
        if ($_SESSION['messaggi']) {
            foreach ($_SESSION['messaggi'] as $msg) {
                echo '<div class="alert alert-' . $msg['type'] . '">' . $msg['message'] . '</div>';
            }
            unset($_SESSION['messaggi']);
        }
        ?>
