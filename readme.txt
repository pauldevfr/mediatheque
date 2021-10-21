Déploiement en local

Installer XAMPP
Configurer xampp
se rendre dans le fichier c:xampp/conf/extra/httpd-vhosts.conf
et rajouter
<VirtualHost *:80>
    ServerName mediatheque.localhost2

    DocumentRoot "C:\xampp\appStudi\projet-mediatheque\mediatheque"
    DirectoryIndex index.php

    <Directory "C:\xampp\appStudi\projet-mediatheque\mediatheque">
        Require all granted

        FallbackResource /index.php
    </Directory>
</VirtualHost>

puis se rendre dans le fichier c:windows/System32/drivers/etc/hosts
et rajouter
127.0.0.1       mediatheque.localhost2

puis mettre le dossier du projet ici:

C:\xampp\appStudi\projet-mediatheque\mediatheque

il faut enssuite créer la base de données donc lancer xampp et lancer mysql puit cliquer sur admin puis lancer le script sql.

une fois tout ceci fait on peut ouvrir notre navigateur et acceder a notre projet via l'URL: http://mediatheque.localhost2.
