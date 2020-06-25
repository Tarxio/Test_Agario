<?php

    $error = '';

    if(trim($message) == '')
        $error = 'Введите имя!';
    if($error != ''){
        echo $error;
        exit;
    }
