<?php

declare(strict_types=1);

$titre = 'Exemple';

/*
 * Rappel : le marqueur de fin HEREDOC s'appelle HTML pour indiquer
 * la nature du contenu au développeur ou à l'ÉDITEUR DE TEXTE,
 * certainement pas à PHP (pour qui c'est une chaîne de caractères)
 */
$html = <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
  </head>
  <body>
    <h1>{$titre}</h1>

HTML;

for ($i=1; $i<=10; $i++) {
    // Remarquez que le code HTML dans la chaîne de caractères n'est pas colorisé par l'éditeur de texte evim
    $html .= "<div>Hello $i!</div>\n";
}


$html .= <<<HTML
    <!-- Pour PHP, ceci est une simple chaîne de caractère
        Pour votre éditeur de texte, c'est un contenu HTML : il le colorise -->
  </body>
</html>
HTML;

// Une réponse HTTP est produite, son corps (la charge utile) contient ce qui est produit par echo
echo $html;