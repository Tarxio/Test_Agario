<?php

require("constants.php");

$link = mysqli_connect("$HOST", "$USERNAME", "$PASSWORD") or die("cannot connect server ");
mysqli_select_db($link, "$DB_NAME") or die("cannot select DB");
?>
