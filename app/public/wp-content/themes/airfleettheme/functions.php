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
      'render_template'   => 'template-parts/blocks/section/content.php',
      'icon'              => 'dashicons-media-text',
      'keywords'          => array( 'content', 'text' ),
   ));

   // image block
    acf_register_block_type(array(
      'name'              => 'image',
      'title'             => __('Image'),
      'description'       => __('A custom image block.'),
      'render_template'   => 'template-parts/blocks/section/image.php',
      'icon'              => 'dashicons-format-image',
      'keywords'          => array( 'image', 'picture' ),
   ));
}
if( function_exists('acf_register_block_type') ) {
   add_action('acf/init', 'register_acf_block_types');
}
