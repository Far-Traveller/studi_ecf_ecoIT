
# Projet EcoIt - ECF Studi Juin 2022

## Informations

Projet réalisé dans le cadre de la formation Graduate Developer.
Il s'agit d'une plateforme d'apprentissage de l'éco-conception web.

## Comment installer l'application ?
* **Installation**
```
$ git clone https://github.com/Far-Traveller/studi_ecf_ecoIT.git
```
```
$ cd studi_ecf_ecoIT/
```
```
$ npm start
```
```
$ composer install
```
* **Création base de données** : *Si vous utilisez MAMP, vous n'aurais rien à faire. Sinon, pensez à modifier la DATABASE_URL dans le fichier .env avant de continuer.*

```
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:migrate
```
* **Initialisation** d'un administrateur et de plusieurs formations :
```
$ php bin/console doctrine:fixtures:load
```
* **Accès au site en local :**
*Avec Symfony*
```
$ symfony serve
```
*Avec Composer*
```
$ composer require symfony/web-server-bundle --dev
$ php bin/console server:start
```

## Livrables
Les différents livrables de ce projet se trouvent dans le dossier "Livrables".
