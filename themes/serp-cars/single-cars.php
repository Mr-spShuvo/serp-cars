<?php get_header(); ?>


<main class="main-sec">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <h1><?php the_title() ?></h1>
        <h2>
            <?php
            $brand = get_term_by('id', 2, 'brands');
            echo ($brand->name)
            ?>
        </h2>
        <h3><?php the_field('model');  ?></h3>
        <div><?php the_field('description'); ?></div>
        <?php $images = get_field('gallery');
        foreach ($images as $image) : ?>
            <img src="<?php echo ($image) ?>" />
        <?php endforeach;  ?>
        <a href="<?php the_field('cta_button_url'); ?>"><?php the_field('cta_button_text'); ?></a>
    <?php endwhile;
    wp_reset_query(); ?>
</main>

<?php get_footer(); ?>