<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
    <div class="conteiner">
        <form method="post">

        <div class="login">
            <label>Логин <input type="text" name="login"><br></label>
        </div>
        <div class="password">
            <label>Пароль <input type="password" name="password"><br></label>
        </div>
        <div class="entrance">
            <button>Войти</button>
        </div>
        </form>
    </div>
    </body>
    </html>
<?php endif;
