
    <?php
    // Autoload de Composer
    require_once __DIR__ . '/../vendor/autoload.php';

    // Configuration globale
    require_once __DIR__ . '/../config/config.php';

    use App\Routing\Router;

    // Démarrer le routeur
    $router = new Router();
    $router->handleRequest($_SERVER["REQUEST_URI"]);
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide</title>
<link rel="stylesheet" href="style.css">
</head>


<body>

</body>
</html>









