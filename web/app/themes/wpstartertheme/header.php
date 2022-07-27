<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); //Insertion des meta, css et scripts?>
</head>

<body <?php body_class(); //Génération de classes en fonction de la page, du tpl etc...?>>
<?php wp_body_open(); ?>
<?php get_template_part('templates/layout/header'); ?>