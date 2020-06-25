<?php
    $message = $_POST['message'];
    $error = '';

    function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

    return $value;
}

    function check_length($value = "", $min, $max) {
        $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
        return !$result;
    }

    $message = clean($message);
    if(!empty($message)){
        if(check_length($message, 2, 100)){
            echo "Спасибо за имя!";
        }
        else{
            echo "Введенные данные некорректны";
        }
    }

