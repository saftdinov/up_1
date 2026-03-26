<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>


<header>
    <div class="logo">
        <h2> Учет научной деятельности </h2>
    </div>
    <div class="account">
        <h3>Сотрудник научного отдела</h3>
        <button><a href="<?= app()->route->getUrl('/logout') ?>">Выход </a></button>
    </div>

</header>

<nav>
    <div class="nav-block">
        <div class="main-block">
            <button><a href="<?= app()->route->getUrl('/hello') ?>">Главная</a></button>
        </div>
        <div class="students-block">
            <button> Аспиранты</button>
        </div>
        <div class="publication-block">
            <button> Публикации</button>
        </div>
        <div class="dissertations-block">
            <button> диссертации </button>
        </div>
        <div class="reports-block">
            <button> Отчёты</button>
        </div>
    </div>
</nav>

<div class="main-back">
    <div class="information">
        <div class="information-cart-students">
            <h2>Аспирантов</h2>
        </div>
        <div class="information-cart-publication">
            <h2>Публикаций</h2>
        </div>
        <div class="information-cart-protection">
            <h2>Защит в этом году</h2>
        </div>
        <div class="information-cart-supervisors">
            <h2>Научных руководителей</h2>
        </div>
    </div>


    <div class="Quick-actions">
        <h2>Быстрые действия</h2><br>
        <div class="new-students">
            <button>Добавить аспиранта</button>
        </div>
        <div class="new-publication">
            <button>Добавить публикацию</button>
        </div>
        <div class="Generate-a-report">
            <button>Сформировать отчет</button>
        </div>

    </div>
</div>
</body>
</html>