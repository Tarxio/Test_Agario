<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="js/js.js" defer></script>
        <title>An example .io game</title>
    </head>
    <body>
    <header>

        <?php require "blocks/header.php" ?>

    </header>

    <div class="d-flex justify-content-between align-items-center">
        <div id="play-menu" class="hidden">
            <canvas id="cl" width="400" height="200" style="left: 200px; top:31.5px;">cdcs</canvas>
            <input type="text" id="username-input" placeholder="Name" />
            <button id="start">PLAY</button>
        </div>
    </div>





    </body>
</html>
