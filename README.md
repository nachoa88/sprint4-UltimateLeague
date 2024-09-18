# Sprint 4 - Laravel bàsics
Utilitzat `docker compose up` command amb el fitxer `docker-compose.yml` i un `Dockerfile` personalitzat per crear els contenidors de PHP-Apache i el de MySQL amb les conexions corresponents.

Amb aquesta configuració, una vegada es fa el build, s'ha d'executar `composer install`, `npm install` i `npm run build`. Després, cal executar les comandes d'artisan: `php artisan migrate`, `php artisan db:seed`, `php artisan storage:link` i `php artisan optimize` per tenir-lo a punt. Cal tenir ben configurat el fitxer `.env`, si es modifica alguna cosa de configuració recordar fer `php artisan config:clear` i `php artisan config:cache`.

Aclaració: Si en algun moment es deixen de veure els logos, es perque s'ha de tornar a executar el symbolic link, primer esborrar l'antic amb `rm public/storage` i desprès amb artisan tornar a crear-lo amb `php artisan storage:link`.

### Laravel MVC
## Nivell 1 - Funcionalitats bàsiques
1) Creació d'una base de dades amb tres taules (equips, partits i lligues), fent servir la migració per la creació de les mateixes. Creació de Models i Controllers per poder realitzar les operacions del CRUD per totes les taules. Creació de Views amb blade, un layout en comú per la APP i definit l'estil fent servir TailWind. Creada també la funció per fer un soft delete i recover dels equips.

## Nivell 2 - Sistema d'autenticació Breeze
1) Instal·lat Breeze utilitzant PHP composer: `composer require laravel/breeze --dev` i definint el base del projecte amb artisan: `php artisan breeze:install`. I per ùltim `npm install`, i si volem executar l'app, hem de fer començar el servidor de Vite: `npm run dev` i desprès `php artisan serve`. En aquest cas també he fet servir `npm run build` per crear una build i no haver de executar el servidor Vite cada vegada.
2) Creació d'una view en blade per tractar l'error 404 i afegit en el fixer `bootstrap/app.php` una excepció per enviar la vista.

## Nivell 3 - LiveWire & Capa de servei.
1) LiveWire queda pendent per fer.
2) Capa de servei creada per les Lligues i equips, pendent per millorar.