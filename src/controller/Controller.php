<?php

namespace App\Controller;

class Controller
{
protected function render(string $templatePath, array $params = []): void
{
    extract($params);
    ob_start();
    require __DIR__ . '/../../templates/' . $templatePath . '.php';
    $content = ob_get_clean();
    require __DIR__ . '/../../templates/layout.php';
}

    }
