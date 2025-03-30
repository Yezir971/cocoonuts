<?php
function heart_shortcode($atts){
    $atts = shortcode_atts(
        $atts,
        'heart'
    );
    ob_start(); ?>
    <div class="heart-container">
        <img class="heart-non-valide" src="<?php echo get_template_directory_uri() ?>/../../uploads/2025/03/vector-heart-card-white.png" alt="heart-non-valide">
        <img class="heart-valide" src="<?php echo get_template_directory_uri() ?>/../../uploads/2025/03/vector-heart-card-red.svg" alt="heart-valide">
    </div>
    <style>


    </style>
        
    <script>

    </script>
    <?php return ob_get_clean();
}

add_shortcode('heart', 'heart_shortcode');
