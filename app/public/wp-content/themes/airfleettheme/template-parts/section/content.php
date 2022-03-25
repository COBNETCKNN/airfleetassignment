<?php 

//getting the acf fields
$title =             get_field('content_title');
$title_color =       get_field('content_title_color');
$text_color =        get_field('content_text_color');
$button_text =       get_field('content_button_text');
$button_text_color = get_field('content_button_text_color');
$button_color =      get_field('content_button_color');
$button_link =       get_field('content_button_link');

// getting the excerpt from the text field
$raw_content =     get_field( 'content_text' );
$trimmed_content = wp_trim_words($raw_content, 22);
$clean_excerpt =   apply_filters('the_excerpt', $trimmed_content);

?>

<div class="grid grid-rows-3 gap-y-4 md:gap-y-5">
    <h1 style="color: <?php echo $title_color;?>" class="post_title text-mobileTitle md:text-desktopTitle font-normal font-roboto my-auto lg:w-7/12 h-min"><?php echo $title; ?></h1>
    <div class="hidden md:block content_article__desktop">
        <div style="color: <?php echo $text_color;?>" class="post_content font-roboto font-normal text-desktopContent my-auto lg:w-2/3 "><?php echo $clean_excerpt;  ?>
        </div>
        <div style="color: <?php echo $text_color;?>" class="moretext post_content font-roboto font-normal text-desktopContent my-auto lg:w-2/3 "><?php echo $raw_content; ?>
        </div>
        <a style="color: <?php echo $title_color;?>" class="moreless-button post_readmore font-roboto font-bold hover:underline" href="#">Read more</a>
    </div>

    <div class="md:hidden content_article__desktop">
        <div style="color: <?php echo $text_color;?>" class="post_content font-roboto font-normal text-mobileContent md:text-base my-auto"><?php echo $raw_content; ?>
        </div>
    </div>
    <div class="content_button my-auto">
        <a href="<?php echo $button_link ?>" class="post_button" target=”_blank”>
            <button style="background-color: <?php echo $button_color;?>; color:<?php echo $button_text_color;?> " class="grow hover:bg-cyan-500 font-roboto font-bold py-2 px-6 rounded uppercase">
            <?php echo $button_text; ?>
            </button>
        </a>
    </div>
</div>