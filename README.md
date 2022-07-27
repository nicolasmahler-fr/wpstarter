# Wordpress Starter Project

**Starter de projet basé sur bedrock.**  
[ > Voir la documentation sur la méthodologie de développement et de déploiement](https://github.com/nicolasmahler-fr/web-indus-process/blob/master/wordpress/bedrock/bedrock.md)  
[ > Lire le README de Bedrock ](_wiki/bedrock_readme.md)

## A propos de ce projet

- Pas de fichier wp-config, les variables (accès à la DB, salage...) dans le fichier [.env](.env) et les spécificités et limitations dans les fichiers d'environnement [development.php](config/environments/development.php) et [staging.php](config/environments/staging.php).
- Le thème est versionné directement avec le reste du projet (plugins, traductions, core...)  

---------------------

## **Todolist** : backoffice WordPress

1. Vérifier que le thème est activé (Apparence > Thèmes)
2. Modifier les urls (Réglages > Permaliens > Titre de la publication)
3. Création d'une page d'accueil (Pages > Ajouter)
4. Définir la page d'accueil (Réglages > Lecture > La page d'accueil affiche > Page d'accueil -- Sélectionner --)

----------------------
## **Todolist** : Thème

1. Modifier les meta du thème dans [style.css](app/themes/wpstartertheme/../../../web/app/themes/wpstartertheme/style.css)

----------------------

## A propos du thème **wpstartertheme**

- [Lire la documentation](web/app/themes/wpstartertheme/README.md)

---------------------

## Commandes 

### Ajouter un plugin 
### Mettre à jour un plugin
### Mettre à jour WordPress