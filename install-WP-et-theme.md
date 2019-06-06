
# Installation d'un WP avec un pattern, à l'aide 'composer'

    - Ajouter les fichiers du pattern dans le dossier du nouveau projet
- Un dossier `content` qui contient un fichier 'index.php'
- Un fichier `composer.json`
- Un fichier `composer.lock`
- Un fichier `index.php`
- Un fichier `wp-config-sample.php`
- Un fichier `.gitignore`

- Effectuer un `composer install` dans le terminal,à la racine du dossier
 
- Faire une copie du fichier `wp-config-sample.php`, le nommer  `wp-config.php` puis le remplir.
 
- Dans PHPmyadmin, créer une base de données, liée à un compte utilisateur
 
- Créer le fichier `.htaccess` en y ajoutant les lignes suivantes:
    # BEGIN WordPress
    <IfModule mod_rewrite.c>
    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . index.php [L]
    </IfModule>
    # END WordPress
- Se donner les droits de modifications sur les fichiers
    sudo chown -R mint:www-data .
    sudo find . -type f -exec chmod 664 {} +
    sudo find . -type d -exec chmod 775 {} +
    sudo chmod 644 .htaccess

- Dans le navigateur, go sur localhost, et allons sur le dossier de notre projet,
- 
- Procéder à l'installation, d'abord par le choix de language, puis en entrant les données demandées.
- 
- Une fois dans WP, aller dans réglages/permaliens et choisir 'Titre de la publication'
- 
- Par sécurité, refaire les 4 commandes de droits
    sudo chown -R mint:www-data .
    sudo find . -type f -exec chmod 664 {} +
    sudo find . -type d -exec chmod 775 {} +
    sudo chmod 644 .htaccess


# Importation d'un thème perso dans WP

- Dans le dossier `content/themes/nom-du-projet`, ajouter les dossiers/fichiers de l'importation
- 
- A la racine de notre nouveau thème, créer les 3 fichiers suivants
    - `index.php`
    - `style.css` contenant les détails du thème, qui seront affichés dans le tableau de bord de notre site
    - `screenshot.png` ce troisième fichier étant pas obligatoire, il est vivement recommandé pour le coté user-friendly
    - 
- Toujours à la racine du thème, ne pas oublier les fichiers pour webpack
- 
- Dans le terminal, aller dans le dossier de notre thème pour y faire les commandes suivant:
    - `npm install` : Installe NPM
    - `npm run start` : Démarre le serveur de développement en utilisant [Browsersync](https://www.browsersync.io/)
    - `npm run build:dev` : Génère les ressources front sans compression en vue d'une utilisation dans un environnement de développement
    - 
- Je pose ici le reste des commandes utiles:
    - `npm run build:prod` : Génère les ressources front avec compression (minify, uglify) en vue d'une utilisation dans un environnement de production
    - `npm run clean` : Supprime les fichiers générés par Webpack
    - `npm run clean:all` : Supprime les fichiers générés par Webpack ainsi que le répertoire des dépendances installées avec NPM (`node_modules`)

- Il ne nous reste 'plus qu'à' rendre tout ça dynamique !!!

composer require wpackagist-plugin/advanced-custom-fields

composer require --dev wpackagist-plugin/simply-show-hooks

.gitignore

notes/
.DS_Store
/vendor/
/wp/
wp-config.php
/content/*
!/content/plugins/
/content/plugins/*
!/content/plugins/ocooking
!/content/themes/
/content/themes/*
!/content/themes/ocooking


# Thème de A à Z


WP-oCOoking = new sur github
nope on a un classroom

prépa/cuisson = custom fields
ingrédients / recette visible dans 'catégorie' = taxonomies
ingrédients = taxo non hierarchique
les recettes = taxo hierarchique

menu: à droite et le reste est flouté


créer dossier docs et mettre captures/visuels/readme dedans

- soit pattern WP soit npm

ici pattern WP en premier

- c/c à la racine le pattern WP (composer.json / wp-config sample / htaccess / index.php / gitignore à prendre de oprofile par ex)

- PMA : créer BDD

- config sample à dupliquer et renseigner les infos (BDD, clés de salage, content)

- composer install

- droits 

sudo chown -R mint:www-data .
sudo find . -type f -exec chmod 664 {} +
sudo find . -type d -exec chmod 775 {} +
sudo chmod 644 .htaccess

- localhost = changer la langue

- installation

- thèmes > créer dossier nomdemontheme

- pattern WP à c/c dans mon theme (prendre ceux de opprofile par ex : webpack gitignor package.json app(à vider) )

- base de mon thème : npm install

- changer gitignore et mettre notre theme et notre plugin en visible
notes/
.DS_Store
/vendor/
/wp/
wp-config.php
/content/*            ignore tout
!/content/plugins/       sauf plugins (n'ignore pas plugins)  
/content/plugins/*           mais ignore tout ce qu'il y a dans le dossier plugins
!/content/plugins/ocooking       sauf ce dossier là
!/content/themes/
/content/themes/*
!/content/themes/ocooking

- si on modifie package.json alors npm update :P

- on va utiliser un framework css Bulma `npm i bulma` à la racine du thème

- main.scss ajouter '~bulma/bulma'; 
(on peut importeer que qlqs élements de bulma ex: buma/bulma/bulma.sass et derived-variable ??????)

- npm build:prod

- petit commit

- npm run clean //supprimer le dossier public

- npm start

- index.html go inté
    - /!\ bien respecter bulma (btw: on sait que c'est en place car le texte est un peu grisé)
    - header : components > navbar brand + navbar menu + navbar item (plusieurs)
    bulma == flexbox yay
    - bulma = tailles dans des variables
    - 