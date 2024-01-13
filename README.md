<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Iaorana, bienvenue sur mon projet

## Note d'information: ce projet est en cours de développement, il présente encore des erreurs, n'hésitez pas à faire des feedbacks pour que je puisse y travailler dessus.

## Pour avoir un aperçu du projet voici les étapes:

### Recupérer le projet sur github
- Rendez vous sur le depôt git: https://github.com/TereopaManuarii/vaa-as-app
- Cloner le projet: https://github.com/TereopaManuarii/vaa-as-app.git

  Attention à cloner le projet dans le dossier prévu par Xampp pour les projets, sinon, vous n'aurez pas accès au projet.

### Installer les dépendances nécessaires
```shell
composer install
npm install
```
### Configurer votre environemment

```shell
cp .env.example .env
```
```
// Il faut remplir selon vos accès dans XAMPP
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vaaAsApp 
DB_USERNAME=root
DB_PASSWORD= 
```

### Lancer le serveur php de laravel
```shell
php artisan key:generate
php artisan serve
```

Ensuite, l'url s'affichera, vous n'aurez qu'a cliquer dessus pour vous rendre sur la page( ou faire CTRL + click, tout dépend de votre IDE)

### compiler les packages de node_modules
```shell
npm run dev
```

### Populer votre db
```shell
php artisan migrate
```

### La connexion en tant que coach
- email: coach@gmail.com
- password: coach1234*
