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
$raw_content = get_field( 'content_text' );
$trimmed_content = wp_trim_words($raw_content, 22);
$clean_excerpt = apply_filters('the_excerpt', $trimmed_content);

?>

<div class="grid grid-rows-3 gap-y-5">
    <h1 style="color: <?php echo $title_color;?>" class="post_title text-4xl font-normal font-roboto my-auto w-3/6 2xl:w-5/12"><?php echo $title; ?></h1>
    <div style="color: <?php echo $text_color;?>"  class="post_content font-roboto font-normal text-base my-auto w-2/3 "><?php echo $clean_excerpt; ?><a href="" class="moreless-button post_readmore text-blue-500 font-bold hover:underline">Read More</a></div>
    <div style="color: <?php echo $text_color;?>"  class="moretext post_content font-roboto font-normal text-base my-auto w-2/3 "><?php echo $raw_content; ?><a href="#" class="post_readmore text-blue-500 font-bold hover:underline">Read More</a></div>
    <div class="content_button">
        <a href="<?php echo $button_link ?>" class="post_button" target=”_blank”>
            <button style="background-color: <?php echo $button_color;?>; color:<?php echo $button_text_color;?> " class="hover:bg-cyan-500 text-indigo-700 font-bold py-2 px-6 rounded uppercase">
            <?php echo $button_text; ?>
            </button>
        </a>
    </div>
</div>