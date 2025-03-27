<?php

// import des fichiers css et js 
function capitaine_register_assets() {
    
    wp_enqueue_style( 
        'capitaine',
        get_stylesheet_uri()
    );
	wp_enqueue_script('script-js',get_template_directory_uri(). '/app.js');//on inclu le script js

}
add_action('wp_enqueue_scripts','capitaine_register_assets');

// Ajout de la navBar personnalisable dans wordPress
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
}

// fonctions qui active le logo dans wordPress
function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );



// ------------------------------------------------------------création des zonnes de widjets------------------------------------------------------------

function mon_theme_widget_zone(){
    // cette fonction permet de déclarer des zone de widjets 



    // ----------------------------zone footer --------------------------------------------
    // ----------------------------zone haut --------------------------------------------
    register_sidebar([
        'name'=> __('haut_gauche','monTheme'),
        'id' => 'haut-gauche',
        'description' => 'région en haut à gauche pour le logo'
    ]);
    register_sidebar([
        'name'=> __('haut_milieu','monTheme'),
        'id' => 'haut-milieu',
        'description' => 'région des liens du site'
    ]);
    register_sidebar([
        'name'=> __('haut_droit','monTheme'),
        'id' => 'haut-droit',
        'description' => 'région des réseaux'
    ]);
    // ------------------------------zone bas ----------------------------------------------
    register_sidebar([
        'name'=> __('bas_milieu','monTheme'),
        'id' => 'bas-milieu',
        'description' => 'région du titre'
    ]);
    // Zone centre du widget
    register_sidebar([
        'name'=> __('center','monTheme'),
        'id' => 'centre',
        'description' => 'région centre pour la bannière par exemple'
    ]);
    register_sidebar([
        'name'=> __('center-404','monTheme'),
        'id' => 'centre-404',
        'description' => 'région centre pour la page 404 par exemple'
    ]);
    


}
add_action('widgets_init','mon_theme_widget_zone');

// fonction pour modifier le conteneur des widgets (remplacer les li par une div)
function custom_widget_container($widget){   
    //ici on enlève les list a puce li degeux 
    $widget[0]['before_widget']= str_replace("<li","<div",$widget[0]['before_widget']);
    $widget[0]['after_widget']= str_replace('</li','</div',$widget[0]['after_widget']);

    return $widget;
}
add_filter('dynamic_sidebar_params','custom_widget_container');
// ------------------------------------------------------------fin de la création des zonnes de widjets------------------------------------------------------------

// ----------------------------------------------------activation du téléversement des svg sur wordpress------------------------------------------------------------
function autoriser_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'autoriser_svg');
// ----------------------------------------------------activation du téléversement des svg sur wordpress------------------------------------------------------------


