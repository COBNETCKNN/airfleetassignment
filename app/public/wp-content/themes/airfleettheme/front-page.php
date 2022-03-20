<?php get_header(); ?>

<section id="post" class="bg-gray-300 py-14">
    <div class="container mx-auto">
        <div class="grid grid-cols-2">
            <!-- FIRST COLUMN -->
            <div class="grid grid-rows-3 gap-y-5">
                <h1 class="post_title text-indigo-800 text-4xl font-normal font-roboto my-auto w-3/6 2xl:w-5/12">Advanced Protection with a Special Sauce</h1>
                <p class="post_content font-roboto font-normal text-base my-auto w-2/3 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo. Vestibulum aliquam.<a href="#" class="post_readmore text-blue-500 font-bold hover:underline">Read More</a></p>
                <a href="" class="post_button">
                    <button class="bg-cyan-300 hover:bg-cyan-500 text-indigo-700 font-bold py-2 px-6 rounded uppercase">
                    contact us
                    </button>
                </a>
            </div>
            <!-- SECOND COLUMN -->
            <div class="">
                <img class="shadow-2xl rounded-xl mx-auto" src="<?php echo get_template_directory_uri() . '/images/Rectangle 1.png'; ?>" alt="">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>