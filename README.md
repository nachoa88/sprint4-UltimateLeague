# Sprint 3 - Laravel bàsics
Utilitzat `docker compose` command amb el fitxer `docker-compose.yml` i un `Dockerfile` personalitzat per crear els contenidors de PHP i Laravel i el de MySQL amb les conexions corresponents. Instal·lat Laravel amb PHP composer: `composer create-project laravel/laravel football-app`.

Afegit seeders per poder fer les proves de l'aplicació amb el command: `php artisan db:seed`.

### Laravel MVC
## Nivell 1 - Funcionalitats bàsiques
1) Creació d'una base de dades amb tres taules (equips, partits i lligues), fent servir la migració per la creació de les mateixes. Creació de Models i Controllers per poder realitzar les operacions del CRUD per totes les taules. Creació de Views amb blade, un layout en comú per la APP i definit l'estil fent servir TailWind. Creada també la funció per fer un soft delete i recover dels equips.

## Nivell 2 - Sistema d'autenticació Breeze
1) Instal·lat Breeze utilitzant PHP composer: `composer require laravel/breeze --dev` i definint el base del projecte amb artisan: `php artisan breeze:install`. I per ùltim `npm install`, i si volem executar l'app, hem de fer començar el servidor de Vite: `npm run dev` i desprès `php artisan serve`. En aquest cas també he fet servir `npm run build` per crear una build i no haver de executar el servidor Vite cada vegada.
2) Creació d'una view en blade per tractar l'error 404 i afegit en el fixer `bootstrap/app.php` una excepció per enviar la vista.

## Nivell 3 - LiveWire & Capa de servei.
1) LiveWire queda pendent per fer.
2) Capa de servei creada per les Lligues i equips.