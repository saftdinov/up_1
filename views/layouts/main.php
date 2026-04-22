<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop it MVC</title>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #f8f9fc; }
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 24px 0; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        .header-content { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 22px; font-weight: 600; }
        .user-menu { display: flex; align-items: center; gap: 16px; }
        .btn-logout { background: rgba(255,255,255,0.2); color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none; }
        .nav { background: white; border-bottom: 1px solid #eef2f7; }
        .nav-list { list-style: none; display: flex; gap: 4px; }
        .nav-item { display: block; padding: 14px 20px; color: #5a6c84; text-decoration: none; font-size: 14px; border-bottom: 2px solid transparent; }
        .nav-item:hover, .nav-item.active { color: #667eea; background: #f8f9ff; border-bottom-color: #667eea; }
        .content { padding: 32px 20px; }
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-bottom: 32px; }
        .stat-card { background: white; padding: 24px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .stat-value { font-size: 36px; font-weight: 700; color: #2d3748; display: block; }
        .stat-label { font-size: 13px; color: #7a8c9f; text-transform: uppercase; }
        .actions { background: white; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .section-title { margin: 0 0 24px 0; font-size: 18px; font-weight: 600; padding-bottom: 12px; border-bottom: 2px solid #667eea; display: inline-block; }
        .actions-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px; }
        .action-btn { display: flex; flex-direction: column; align-items: center; gap: 12px; padding: 24px; background: #f8f9ff; border: 2px solid transparent; border-radius: 10px; text-decoration: none; color: #2d3748; }
        .action-btn:hover { background: white; border-color: #667eea; transform: translateY(-2px); }
        .action-icon { font-size: 28px; width: 48px; height: 48px; background: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; }
    </style>
</head>
<body>

<?php if (!isset($hideLayout)): ?>
    <header class="header">
        <div class="container header-content">
            <h1 class="logo">Учет научной деятельности</h1>
            <div class="user-menu">
                <span>Сотрудник научного отдела</span>
                <?php if (\Src\Auth\Auth::check()): ?>
                    <a href="/up_1-master/public/logout" class="btn-logout">Выход</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <nav class="nav">
        <div class="container">
            <ul class="nav-list">
                <li><a href="/up_1-master/public/hello" class="nav-item <?= ($_SERVER['REQUEST_URI'] === '/up_1-master/public/hello') ? 'active' : '' ?>">Главная</a></li>
                <li><a href="/up_1-master/public/students" class="nav-item <?= (strpos($_SERVER['REQUEST_URI'], '/students') !== false) ? 'active' : '' ?>">Аспиранты</a></li>
                <li><a href="#" class="nav-item">Публикации</a></li>
                <li><a href="#" class="nav-item">Диссертации</a></li>
                <li><a href="#" class="nav-item">Отчёты</a></li>
            </ul>
        </div>
    </nav>
<?php endif; ?>

<main class="container content">
    <?= $content ?? '' ?>
</main>

</body>
</html>