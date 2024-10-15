<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## A propos du projet

- php : <strong>8.1</strong>
- laravel/framework : <strong>10.10</strong>
- laravel/jetstream : <strong>3.2</strong>
- livewire/livewire : <strong>2.11</strong>
- Makefile (simplication d'installation et utilisation du projet)

## Avant d'installer le projet

Vous devrez désactiver la vérification CORS du navigateur lors du développement.

Je vous invite à suivre les indications via ce lien : https://alfilatov.com/posts/run-chrome-without-cors/

## Installation du projet

Pour installer tout ce qui est nécessaire faites ces commandes ci-dessous:

- make install

_Toutes les informations concernant la bdd se trouve dans le .env_

## Démarrer le projet

[Sail](https://laravel.com/docs/10.x/sail) est utilisé pour avoir tous les containers pour démarrer le projet.<br/>
Pour démarré le projet :

- <strong>make up</strong>

## Les URL

Si les url suivants ne fonctionne pas faites la commande suivante dans un terminal à la racine du projet et regarder les
url directement dans l'exécution de cette commande.

- http://0.0.0.0:80 pour accéder au site.
- http://localhost:8025/ Mailpit.

## Comptes utilisateurs disponibles:

- mail: _<strong>admin@admin.fr</strong>_ mdp: _<strong>admin</strong>_<br/>
  Permet d'avoir accès à une navigation admin.
  <br/><br/>
- mail: _<strong>user@user.fr</strong>_ mdp: _<strong>user</strong>_<br/>
  Permet d'avoir un accès à une navigation utilisateur.

## Commande de disponible

<strong>trending-films</strong> : Permet d'intégré dans la bdd, les films tendances.

- <strong>./vendor/bin/sail php artisan import:trending-films</strong> 


 
