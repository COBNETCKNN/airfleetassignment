<?php 

function airfleet_files() {
    //enqueueing CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');

    
    //enqueing JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
}
add_action('wp_enqueue_scripts', 'airfleet_files');

// registration of ACF blocks
function register_acf_block_types() {
   // content block
   acf_register_block_type(array(
      'name'              => 'content',
      'title'             => __('Content'),
      'description'       => __('A custom content block.'),
      'render_template'   => 'template-parts/section/content.php',
      'icon'              => 'media-text',
      'keywords'          => array( 'content', 'text' ),
   ));

   // image block
    acf_register_block_type(array(
      'name'              => 'picture',
      'title'             => __('Picture'),
      'description'       => __('A custom image block.'),
      'render_template'   => 'template-parts/section/picture.php',
      'icon'              => 'format-image',
      'keywords'          => array( 'image', 'picture' ),
   ));
}
if( function_exists('acf_register_block_type') ) {
   add_action('acf/init', 'register_acf_block_types');
}


// Local JSON for custom fields
define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
 
function my_acf_json_save_point( $path ) {
    
    // Update path
    $path = MY_PLUGIN_DIR_PATH. '/acf-json';
    // Return path
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

// Exclude node_modules from exporting All In One Migration Plugin
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'airfleettheme/node_modules'; // insert your theme name
  return $exclude_filters;
} );
 
