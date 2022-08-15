# fichier Functions.php

## Mémo 

### Hooks :
Fonctions permettant d'interagir avec le Core de WP.

#### Actions :
Lancer une fonction à un moment clé du chargement

#### Filtres :
Intercepter une valeur à un moment et la modifier.

## Configuration du thème

- [config.php (Prise en charge des fonctions natives de WP)](../../inc/config.php)

## Gestion des assets

- [assets.php (Déclaration du CSS et du JS)](../../inc/assets.php)

Pour déclarer des assets spécifiques à une page / gabarit particulier, créer des fichiers individuels.  
Exemple :   
__assets-404.php__  
Ne pas oublier de déclarer le fichier dans __functions.php__