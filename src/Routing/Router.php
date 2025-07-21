<?php

namespace App\Routing;

use App\Controller\PageController;

class Router
{
    public function handleRequest(string $uri): void
    {
        // Récupère le paramètre GET 'page' dans l'URL
        $page = $_GET['page'] ?? 'home';

        // Tu peux ajouter ici d'autres contrôleurs si besoin
        $controller = new PageController();

        // Appelle la méthode correspondante si elle existe
        if (method_exists($controller, $page)) {
            $controller->$page();
        } else {
            // Si la méthode n'existe pas, appelle une page d’erreur ou une 404
            echo "Erreur 404 : La page demandée n'existe pas.";
        }
    }
}
