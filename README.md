# EcoRide
1. Installer un serveur local

Installe un serveur local comme XAMPP ou WAMP. Lance le serveur Apache (et MySQL si nécessaire).
2. Placer ton projet au bon endroit

Place le dossier de ton projet dans le dossier htdocs du serveur local.
3. Accéder au projet dans le navigateur

Ouvre un navigateur web et accède à l’URL locale correspondant à ton dossier public.
4. Configurer les chemins dans le fichier de démarrage

Dans le fichier d’entrée du projet (généralement index.php), charge l’autoloader, définis les constantes nécessaires comme le chemin racine du projet et inclue les fichiers de configuration.
5. Générer l’autoload de Composer

Si ton projet utilise Composer, exécute la commande pour générer l’autoload.
6. Ajouter un fichier .htaccess (optionnel)

Ajoute un fichier .htaccess dans le dossier public pour permettre la réécriture d’URL et gérer les routes propres.
7. Configurer la base de données (si besoin)

Crée une base de données locale et configure les paramètres de connexion dans ton fichier de configuration ou fichier .env.
