<?php
session_start();
?>

<?php require_once("blocks/connection.php"); ?>
<?php

if(isset($_SESSION["session_username"])){
    // вывод "Session is set"; // в целях проверки
    header("Location: index.php");
}

if(isset($_POST["login"])){

    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $n1=mysqli_connect("localhost:8889","root","root","userlistdb");
        $query =mysqli_query($n1, "SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                $dbusername=$row['username'];
                $dbpassword=$row['password'];
            }
            if($username == $dbusername && $password == $dbpassword)
            {
                // старое место расположения
                //  session_start();
                $_SESSION['session_username']=$username;
                /* Перенаправление браузера */
                header("Location: index.php");
            }
        } else {
            //  $message = "Invalid username or password!";

            echo  "Invalid username or password!";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Авторизация</title>
    <link href="css/style.css" media="screen" rel="stylesheet">
    <link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php require_once("blocks/connection.php"); ?>

<div class="container mlogin">
    <div id="login">
        <h1>Вход</h1>
        <form action="" id="loginform" method="post"name="loginform">
            <p><label for="user_login">Имя опльзователя<br>
                    <input class="input" id="username" name="username"size="20"
                           type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="20"
                           type="password" value=""></label></p>
            <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
            <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
        </form>
    </div>
</div>
</body>
</html>