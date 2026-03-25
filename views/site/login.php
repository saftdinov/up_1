    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../public/css/style_input.css">
        <title>Document</title>
    </head>
    <body>
    <div class="content">
        <h3><?= $message ?? ''; ?></h3>

        <h3><?= app()->auth->user()->name ?? ''; ?></h3>
        <?php
        if (!app()->auth::check()):
        ?>
    <div class="content_in">
    <form method="post">
        <h1>🔐 Вход в систему</h1>
        <div class="login">
            <label>Логин</label>
            <label><input type="text" class="form-control" name="login" placeholder="Введите логин"><br></label>
        </div>

        <div class="password">
            <label>Пароль</label>
            <label> <input type="password" class="form-control" name="password" placeholder="Введите пароль"><br></label>
        </div>

        <div class="entrance">
            <button type="submit" class="btn btn-primary">Войти</button>
        </div>
    </form>
    </div>
</div>
    </body>
    </html>

    <?php endif;