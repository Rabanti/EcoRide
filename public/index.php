<?php
//Require once c'est pour charger l'autoload mettre dir et le chemin d'accés dans vendor c'est la que y'a l'autoload
require_once __DIR__ . "/../vendor/autoload.php";
//si on définit une constante comparé à une variable ça change plus, On définit une constante pour avoir le chemin racine de l'app
define('APP_ROOT', dirname(__DIR__));
define('APP_ENV', ".env.local");

use App\Routing\Router;

$router = new Router();
$router->handleRequest($_SERVER["REQUEST_URI"]);
/*use App\Controller\PageController;


$pageController = new PageController();
$pageController->home(); //quand on change ce qui est en vert on change de page
*/

// inclure home direct dans index





