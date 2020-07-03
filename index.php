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


      <canvas id="cl">cdcs</canvas>

          <div id="play-menu" class="rovno" style="margin: 0px auto; text-align: left;">
            <input type="text" id="username-input" placeholder="Name" />
            <button id="start">PLAY</button>
        </div>






    </body>
</html>
