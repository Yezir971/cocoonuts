<?php
// la page front-page va nous permettre de mettre le contenu de notre page d'acccueil elle remplace le contenu de la page d'accueil 
// get_header et get_footer sont des fonctions qui vont inclure le header et le footer 
get_header();
?>


<section id="containerArticleImage">


<!--  Nous appelons la boucle wordpress qui vérifie si have_posts() vérifie s'il y a des articles dans la requête actuelle.
Si des articles sont présents, la boucle while est exécutée avec the_post() pour configurer les données de l'article actuel, puis le contenu de l'article est affiché.
Si aucun article n'est trouvé, le bloc else est exécuté.-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- on récupère le contenu du paragraphe  -->

            <div class="pageAccueil">
                <!-- on récupère le contenu  -->
                <?php the_content();
                // boucle if qui permet d'afficher les images des articles mis en avant, elle retourne true si c'est le cas 
                if ( has_post_thumbnail()) : ?>
                <!-- on créer un lien clickable de l'image mis en avant  -->
                    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                        <!-- affiche l'image mis en avant  -->
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endif; ?>

            </div>

        <?php endwhile;else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    </section>

<?php
get_footer();