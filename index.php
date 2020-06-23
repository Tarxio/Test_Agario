<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
</head>
<body>
<header>
   <?php require "Blocks/header.php" ?>
</body>
</html>
