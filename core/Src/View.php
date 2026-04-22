<?php

namespace Src;

use Exception;

class View
{
    private string $view = '';
    private array $data = [];
    private string $root = '';
    private string $layout = '/layouts/main.php';
    private bool $useLayout = true;  // ✅ Добавляем это свойство

    public function __construct(string $view = '', array $data = [])
    {
        $this->root = $this->getRoot();
        $this->view = $view;
        $this->data = $data;
    }

    // ✅ Метод для отключения layout
    public function withoutLayout(): self
    {
        $this->useLayout = false;
        return $this;
    }

    private function getRoot(): string
    {
        // ✅ ЖЕСТКО ПРОПИСЫВАЕМ ПУТЬ (как мы делали сегодня)
        return $_SERVER['DOCUMENT_ROOT'] . '/up_1-master/views';
    }

    private function getPathToMain(): string
    {
        return $this->root . $this->layout;
    }

    private function getPathToView(string $view = ''): string
    {
        $view = str_replace('.', '/', $view);
        return $this->getRoot() . "/$view.php";
    }

    public function render(string $view = '', array $data = []): string
    {
        $view = $view ?: $this->view;
        $data = $data ?: $this->data;

        $path = $this->getPathToView($view);
        $main = $this->getPathToMain();

//        // === ДОБАВЬТЕ ЭТОТ БЛОК ДЛЯ ОТЛАДКИ ===
//        echo "<pre style='background: #fee; padding: 20px; border: 1px solid #fcc;'>";
//        echo "View name: $view\n";
//        echo "Root path: {$this->root}\n";
//        echo "Path to view: $path\n";
//        echo "Path to main: $main\n";
//        echo "View exists: " . (file_exists($path) ? 'YES ✅' : 'NO ❌') . "\n";
//        echo "Main exists: " . (file_exists($main) ? 'YES ✅' : 'NO ❌') . "\n";
//        echo "useLayout: " . ($this->useLayout ? 'true' : 'false') . "\n";
//        echo "</pre>";
//        // =======================================

        if (file_exists($path)) {
            extract($data, EXTR_PREFIX_SAME, '');
            ob_start();
            require $path;
            $content = ob_get_clean();

            if (!$this->useLayout) {
                return $content;
            }

            if (file_exists($main)) {
                return require($main);
            }
        }
        throw new Exception('Error render');
    }

    public function __toString(): string
    {
        return $this->render($this->view, $this->data);
    }
}