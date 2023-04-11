4. Fichier choisir-jour1.php

GET	
scheme http
host localhost:8000
filename /choisir-jour1.php
Adresse 127.0.0.1:8000
État 200 OK
Version HTTP/1.1
Transfert 1,07 Ko (taille 936 o)
Priorité de la requête Highest
	
Connection close
Content-type text/html; charset=UTF-8
Date Tue, 11 Apr 2023 06:35:12 GMT
Host localhost:8000
X-Powered-By PHP/8.1.17
	
Accept text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8
Accept-Encoding gzip, deflate, br
Accept-Language fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3
Connection keep-alive
Host localhost:8000
Sec-Fetch-Dest document
Sec-Fetch-Mode navigate
Sec-Fetch-Site cross-site
Upgrade-Insecure-Requests 1
User-Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0

Fichier jour.php

POST
scheme http
host localhost:8000
filename /jour.php
Adresse 127.0.0.1:8000
État 200 OK
Version HTTP/1.1
Transfert 423 o (taille 260 o)
Politique de référent strict-origin-when-cross-origin
Priorité de la requête Highest

	
Connection close
Content-type text/html; charset=UTF-8
Date Tue, 11 Apr 2023 06:36:57 GMT
Host localhost:8000
X-Powered-By PHP/8.1.17
	
Accept text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8
Accept-Encoding gzip, deflate, br
Accept-Language fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3
Connection keep-alive
Content-Length 16
Content-Type application/x-www-form-urlencoded
Host localhost:8000
Origin http://localhost:8000
Referer http://localhost:8000/choisir-jour1.php
Sec-Fetch-Dest document
Sec-Fetch-Mode navigate
Sec-Fetch-Site same-origin
Sec-Fetch-User ?1
Upgrade-Insecure-Requests 1
User-Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0

5. Le serveur n'aura pas de données à traiter et retournera probablement une réponse vide ou une erreur pour signaler que la requête n'a pas de sens.

6. Les données envoyées peuvent facilement être modifiées, cela fonctionne comme la méthode GET. Le rendu final renvoie donc 14 à la place d'un jour de la semaine.
