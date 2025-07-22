<?php


namespace App\Routing;

use App\Controller\PageController;

class Router
{
    public function handleRequest(string $uri): void
    {
        // Simple route en dur pour l'exemple
        $controller = new PageController();

        if ($uri === '/' || $uri === '/public/' || $uri === '/public/index.php') {
            $controller->home();
        } elseif ($uri === '/about') {
            $controller->about();
    }
    elseif return $controller->$page();
}

public static function normalizePath(string $uri):string 
{
    $path = parse_url($uri, PHP_URL_PATH);
    $path = rtrim($path, "/") . "/";
    return $path;
}

public static function isActiveRoute(string $path):bool 
{
    var_dump(self::normalizePath($path));
    return true;
}
protected function render(string $templatePath, array $params = []): string
{
    extract($params);
    ob_start();
    require __DIR__ . '/../../templates/' . $templatePath . '.php';
    $content = ob_get_clean();

    return $content;
}


}
