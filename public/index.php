<?php
declare(strict_types=1);

// Включаем отображение ВСЕХ ошибок
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

try {
    $app = require_once __DIR__ . '/../core/bootstrap.php';
    $app->run();
} catch (\Throwable $exception) {
    echo '<pre style="background: #fee; padding: 20px; border: 1px solid #fcc;">';
    echo "Error: " . $exception->getMessage() . "\n";
    echo "File: " . $exception->getFile() . "\n";
    echo "Line: " . $exception->getLine() . "\n";
    echo "\nStack trace:\n";
    echo $exception->getTraceAsString();
    echo '</pre>';
}