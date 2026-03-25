<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/style_reg.css">
    <title>Document</title>
</head>
<body>
<div class="content">
    <div class="content_in">
        <form method="post">
            <h1>🔐 Регистрация</h1>
            <h3><?= $message ?? ''; ?></h3>

            <div class="password">
                <label>Имя</label>
                <label><input type="text" name="name" class="form-control" placeholder="Введите имя"><br></label>
            </div>

            <div class="login">
                <label>Логин</label>
                <label><input type="text" name="login" class="form-control" placeholder="Введите логин"><br></label>
            </div>

            <div class="password">
                <label>Пароль</label>
                <label><input type="password" name="password" class="form-control" placeholder="Введите пароль"><br></label>
            </div>

            <div class="entrance">
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>