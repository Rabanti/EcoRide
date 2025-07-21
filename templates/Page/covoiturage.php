<?php require_once APP_ROOT . "/templates/header.php" ?>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $depart = htmlspecialchars($_POST['depart']);
    $arrivee = htmlspecialchars($_POST['arrivee']);
    $date = htmlspecialchars($_POST['date']);

    // On peut ajouter la logique de traitement
    echo "<h2>Données reçues :</h2>";
    echo "<p>Adresse de départ : $depart</p>";
    echo "<p>Adresse d’arrivée : $arrivee</p>";
    echo "<p>Date du trajet : $date</p>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Formulaire à remplir</title>
</head>
<body>

<h2>Réserver un trajet</h2>

<form method="POST" action="">
    <label for="depart">Adresse de départ :</label><br />
    <input type="text" id="depart" name="depart" required /><br /><br />

    <label for="arrivee">Adresse d’arrivée :</label><br />
    <input type="text" id="arrivee" name="arrivee" required /><br /><br />

    <label for="date">Date du trajet :</label><br />
    <input type="date" id="date" name="date" required /><br /><br />

    <button type="submit">Valider</button>
</form>

</body>
</html>


<?php require_once APP_ROOT . "/templates/footer.php" ?>