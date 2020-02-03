    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Главная страница</title>
    </head>
    <body>
        <a href="index.php">Главная страница</a>
        <a href="authentication.php">Страница авторизации</a>
        <a href="registration.php">Страница регистрации</a>
        <a href="reset_password.php">Страница восстановления пароля</a>
        <br>
        <br>

        <form action="index.php" method="post">
            Name:   <input type="text" name="name"><br>
            Email:  <input type="text" name="email"><br>
                    <input type="submit" value="Отправить">
        </form>
    <?php
        var_dump($_POST);

    ?>
    </body>
    </html>

