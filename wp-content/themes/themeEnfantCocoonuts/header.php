<!DOCTYPE html>
<!-- attribu langue  -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- import font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- import font  -->
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
<main>
    
    <nav id="navigation">
        <!-- constenu du menu burger  -->
         <div class="logo-menu-burger">
            <?php if(has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>            
            <?php endif; ?>
         </div>
        <!-- constenu du menu burger  -->


        <?php
        
        
        wp_nav_menu(
          array(
            'theme_location' => 'main-menu',
            'menu_id' => 'primary-menu',
            'menu_class'    => 'off',    
        ));
        ?>
        <!-- logo  -->
        <?php if(has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>            
        <?php endif; ?>
        <!-- logo  -->

        <!-- zone icone  -->
        <div class="navbar-icone">
            <img src="<?php echo get_template_directory_uri(); ?>/images/vector-recherche.svg" alt="icone loupe">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/vector-user.svg" alt="icone user">
                <img src="<?php echo get_template_directory_uri(); ?>/images/vector-coeur.svg" alt="icone like">
                <img src="<?php echo get_template_directory_uri(); ?>/images/vector-cart.svg" alt="icone panier">
            </div>
        </div>

        <!-- zone icone  -->
        <!-- menu hamburger -->
        <div class="burger">
            <span></span>
        </div>
        <!-- fin du menu hamburegr  -->
    
    
    </nav>


<!-- gestion de la page d'erreur 404 -->
<section>
    <?php  
    // condition ternaire pour afficher la page d'erreur 404 
        is_404() ? dynamic_sidebar('center-404') : dynamic_sidebar('center');
    ?>
</section>
<!-- fin de la gestion de la page d'erreur 404 -->
