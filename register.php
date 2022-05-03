<?php
session_start();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="bootstrap-grid.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">

    </head>
    <body>
    <div class="form_div">
        <form class="register__form" action="signup.php" method="post">
            <label>Логін</label>
            <input name="login" type="text" placeholder="Введіть свій логін">
            <label>E-mail</label>
            <input name="email" type="email" placeholder="Введіть свій e-mail">
            <label>Пароль</label>
            <input name="password" type="password" placeholder="Введіть свій пароль">
            <label>Підтвердження паролю</label>
            <input name="password_confirm" type="password" placeholder="Повторіть введений пароль">
            <button type="submit" class="come__in">Зареєструватись</button>
            <p class="registration__click">В вас вже є акаунт? - <a href="login.php">авторизуйтесь</a>!</p>

            <?php
            error_reporting(0);
            if ($_SESSION["message"]) {
                echo '<p class="msg">' . $_SESSION["message"] . '</p>';
            }
            unset($_SESSION["message"]);
            ?>

        </form>
    </div>


    </body>
    </html>

<?php