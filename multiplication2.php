<?php

declare(strict_types=1);

$titre = 'Table de multiplication de 12';

$html = <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
    <style>
         div.bloc {
            display: flex;
            flex-direction: column;
            width: auto;
            height: auto;
        }

        div.ligne {
            display: flex;
            flex-direction: row;
        }

        div.infos {
            width: 50px;
            text-align: right;
        }
    </style>
  </head>
  <body>
    <h1>{$titre}</h1>
    <div class='bloc'>\n
HTML;

for ($i=0; $i<=10; $i++) {
    $res = $i*12;
    $html .= <<<HTML
            <div class='ligne'>
                <div class='infos'> $i</div>
                <div class='infos'> &times; 12 = </div>
                <div class='infos'>$res</div>
            </div>\n
HTML;
}

$html .= <<<HTML
        </div>
  </body>
</html>
HTML;

echo $html;