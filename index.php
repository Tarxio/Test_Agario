<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="js/js.js" defer></script>
    </head>
    <body>
    <header>

        <?php require "Blocks/header.php" ?>

    </header>

    <div class="d-flex justify-content-between align-items-center">

            <canvas id="cl" width="400" height="200" style="left: 200px; top:31.5px;">cdcs</canvas>
            <textarea rows="2" cols="80" name="message" class="form-contorl" placeholder="Введите название"></textarea><br>
            <button id="start" >Add</button><br>

    </div>





    </body>
</html>
