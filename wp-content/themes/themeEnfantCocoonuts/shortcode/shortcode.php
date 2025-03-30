<?php
function heart_shortcode($atts, $content = null){
    $atts = shortcode_atts(
        array(
        ),
        $atts,
        'heart'
    );
    $hearts = $atts['hearts'];
    $html = '<div class="heart-container">';
    $html .= '<img src="' . get_template_directory_uri() . '/../../uploads/2025/03/vector.png" alt="heart">';
    $html .= '<img src="' . get_template_directory_uri() . '/../../uploads/2025/03/vector-coeur.svg" alt="heart">';
    $html .= '</div>';
    return $html;
}

add_shortcode('heart', 'heart_shortcode');
