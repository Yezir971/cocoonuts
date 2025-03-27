
</main>
<footer>
    <!-- on place les widgets pour permettre de placer une barre de recherche des liens iportants et les réseaux sociaux  -->
    <div class="containerWidget">
        <div class="widget-top">
            <div class="widget" id="widgetGauche">
                <?php dynamic_sidebar('haut_gauche') ;?>
            </div>
            <div class="widget" id="widgetMillieu">
                <?php dynamic_sidebar('haut_milieu'); ?>
            </div>
            <div class="widget" id="widgetDroite">
                <?php dynamic_sidebar('haut_droit') ?>
            </div>
        </div>
        <div class="widget" id="widgetBasMillieu">
            <?php dynamic_sidebar('bas_milieu'); ?>
        </div>

    </div>
</footer>
<?php wp_footer() ;?>

</body>
</html>