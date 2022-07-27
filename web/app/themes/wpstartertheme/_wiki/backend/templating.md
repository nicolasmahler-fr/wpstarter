# Templating du thème

[Schémas du template hierarchy de WordPress](template-hierarchy.png)

## Structure html unique
- [head (ouverture html, body, head...)](../../header.php)
- [foot (fermeture html, body...)](../../footer.php)
--------------
## Layout

- [header](../../templates/layout/header.php)
- [footer](../../templates/layout/footer.php)
--------------------
## Pages
- [Page d'accueil (frontpage.php)](../../front-page.php)
- [Page générique](../../page.php)
- [Page contact](../../templates/contact.php)
- [Page 404](../../404.php)
- [Résultats de recherche (search)](../../search.php)

### Créer des template pour des pages spécifiques

Ajouter dans templates/MaPage.php

    <?php
    /**
    * Template Name: Mapage
    * Template Post Type: page
    * Page MaPage, assigner comme modèle dans l'édition de la page
    */
    ?>
---------------------
## Posts
- [Page d'accueil du blog : **home.php**](../../home.php)
- [Liste d'articles, de catégories, étiquettes, etc... : **archive.php**](../../archive.php)
- [Détail d'articles, de catégorie, étiquette etc... : **single.php**](../../single.php)

### Créer des template pour des posts spécifiques

Ajouter dans templates/MonPost.php

    <?php
    /**
    * Template Name: MonPost
    * Template Post Type: post, custom-post
    * Page MonPost, assigner comme modèle dans l'édition de la page
    */
    ?>