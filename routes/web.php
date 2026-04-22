<?php

use Src\Route;

// Главная страница (требуется авторизация)
Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');

// Вход
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);

// Регистрация
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);

// Выход
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

// Аспиранты
Route::add('GET', '/students', [Controller\StudentController::class, 'index'])
    ->middleware('auth');
Route::add('GET', '/students/create', [Controller\StudentController::class, 'create'])
    ->middleware('auth');
Route::add('POST', '/students', [Controller\StudentController::class, 'store'])
    ->middleware('auth');