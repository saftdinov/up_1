<?php

return [
    // Класс аутентификации
    'auth' => \Src\Auth\Auth::class,

    // Класс пользователя
    'identity' => \Model\User::class,

    // ✅ Глобальные middleware (работают на всех маршрутах)
    'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
        // 'csrf' => \Middlewares\CSRFMiddleware::class,  // Можно добавить позже
        // 'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
    ],

    // Middleware для конкретных маршрутов
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
    ],

    // Валидаторы
    'validators' => [
        'required' => \Validators\RequireValidator::class,
    ],

    // Сервис провайдеры
    'providers' => [
        'kernel' => \Providers\KernelProvider::class,
        'route' => \Providers\RouteProvider::class,
        'db' => \Providers\DBProvider::class,
        'auth' => \Providers\AuthProvider::class,
    ],
];