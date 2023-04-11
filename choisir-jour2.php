<?php

declare(strict_types=1);

$jours = [1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
$titre = "Les jours de la semaine";

$html = <<<HTML
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>$titre</title>
    </head>
    <body>
        <h1>$titre</h1>
        <form name="form" method="POST" action="jour.php">
HTML;

foreach ($jours as $num => $jour) {
    $html .= <<<HTML
            <label>
                <input name="$jour" type="radio" value="$num">
                $jour
            </label><br>\n
HTML;
}

$html .= <<<HTML
            <button type="submit">Choisir ce jour</button>
        </form>
    </body>
</html>
HTML;

echo $html;