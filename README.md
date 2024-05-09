# Sprint 3 - Laravel bàsics
Utilitzat `docker compose` command amb el fitxer `docker-compose.yml` i un `Dockerfile` personalitzat per crear els contenidors de PHP i Laravel i el de MySQL amb les conexions corresponents.

Afegit seeders per poder fer les proves de l'aplicació amb el command: `php artisan db:seed`.

### Laravel MVC
## Nivell 1 - Funcionalitats bàsiques
1) Creació d'una base de dades amb tres taules (equips, partits i lligues), fent servir la migració per la creació de les mateixes. Creació de Models i Controllers per poder realitzar les operacions del CRUD per totes les taules. Creació de Views amb blade, un layout en comú per la APP i definit l'estil fent servir TailWind. Creada també la funció per fer un soft delete i recover dels equips.

## Nivell 2 - Sistema d'autenticació Breeze
1) Instal·lat Breeze utilitzant PHP composer: `composer require laravel/breeze --dev` i definint el base del projecte amb artisan: `php artisan breeze:install`.

## Nivell 3 - LiveWire
1) ...