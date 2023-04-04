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
        div.calculs {
            display: flex;
            background-color: green;
            width: auto;
            height: auto;
            align-items: flex-end;
        }
        tr {
            display: flex;
            background-color: red;
            width: auto;
            height: auto;
        }
        td {
            display: flex;
            width: auto;
            height: auto;
            background-color: pink;
            flex-direction: flex-end;
        }
    </style>
  </head>
  <body>
    <h1>{$titre}</h1>
    <div class='calculs'>\n
HTML;

for ($i=1; $i<=10; $i++) {
    $res = $i*12;
    $html .= <<<HTML
            <tr>
                <td> $i</td>
                <td> &times; 12 = </td>
                <td>$res</td>
            </tr><br>\n
HTML;
}

$html .= <<<HTML
        </div>
  </body>
</html>
HTML;

echo $html;