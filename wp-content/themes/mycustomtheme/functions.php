<?php

function theme_support_options() {
    $defaults = array(
    'height'      => 50,
    'width'       => 100,
    'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
    'flex-width'  => false
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   // call the function in the hook
   add_action( 'after_setup_theme', 'theme_support_options' );
   
   

?>

<?php
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
        'primary-menu' => __( 'Primary Menu' ),
        'secondary-menu' => __( 'Secondary Menu' )
        )
    );
    
}

?>


<?php

function create_posttype() {
  
    register_post_type( 'Companies',
        array(
            'labels' => array(
                'name' => __( 'Companies' ),
                'singular_name' => __( 'Companies' )

            ),
            'supports' => array(
				'title',
				'editor',
				'excerpt',
				'custom-fields',
				'thumbnail',
				'page-attributes'
			),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
  
        )
    );
}
add_action( 'init', 'create_posttype' );


?>
<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] ); 

?>






<?php add_theme_support( 'post-thumbnails' ); ?>


