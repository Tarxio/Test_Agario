<?php

session_start();

if(!isset($_SESSION["session_username"])):
    header("location:login.php");
else:
?>
<!DOCTYPE html>
<head>
</head>
<body>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="#"></a>
        </div>
        <div class="col-4 text-center">
            <p class="fig">
                <img class="d-block mx-auto mb-4" border="3px solid #FFDEAD" src="img/1.png" alt="" width="100" height="100">
            </p>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
            <p><a href="logout.php">Выйти</a> из системы</p>
        </div>
    </div>
<?php endif; ?>
</header>
</body>
</html>