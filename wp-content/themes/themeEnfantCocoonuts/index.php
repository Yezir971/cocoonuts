<?php
// Si front-page.php n'est pas présent, WordPress utilisera index.php pour afficher la page d'accueil. index.php sert alors comme modèle par défaut.

get_header(); 
?>

<section>

    <!-- Nous appelons la boucle wordpress -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
         <header>
            <div class="containerArticle"><?php the_title() ?></div>
         </header>
         <?php the_content(); ?>

      </article>
    <?php endwhile; else: ?>
       <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</section>


<?php get_footer();

