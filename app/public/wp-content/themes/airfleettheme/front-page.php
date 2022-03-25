<?php get_header(); 
        
$args = array(
    'page_id' => 28
);

$blogQuery = new WP_Query($args);

while($blogQuery->have_posts()){
    $blogQuery->the_post(); 

$background_color    =  get_field('section_background_color');
$gradient_background = get_field('section_gradient_background');

?>




<section
    <?php if($gradient_background){
        echo "style='background:" . $gradient_background . "'";
    } else {
        echo "style='background-color:" . $background_color . "'";
    }
    ?>
id="post" class="py-14">
    <div class="container mx-auto">
           <?php 
            the_content(); ?>
                </div>
</section>
<?php
        }
        
        ?>



<?php get_footer(); ?>