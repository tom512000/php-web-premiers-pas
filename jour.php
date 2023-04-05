<?php

declare(strict_types=1);

$titre = "Le jour de la semaine choisi";
$jour = "n'est pas très clair...";

if (isset($_POST['choix-jour']) && !empty($_POST['choix-jour']) &&  strip_tags($_POST['choix-jour']) && htmlspecialchars($_POST['choix-jour']) || $_POST['choix-jour'] != "Choisissez...") {
    $jour = preg_replace('@<(.+)[^>]*>.*?@is', '', $_POST['choix-jour']);
}

$html = <<<HTML
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>$titre</title>
    </head>
    <body>
        <h1>$titre</h1>
        <p>Votre choix $jour</p>
    </body>
</html>
HTML;

echo $html;