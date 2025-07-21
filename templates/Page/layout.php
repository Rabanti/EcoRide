<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon site</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<?php require_once APP_ROOT . "/templates/header.php"; ?>
<?= $content ?>
<?php require_once APP_ROOT . "/templates/footer.php"; ?>
</body>
</html>
