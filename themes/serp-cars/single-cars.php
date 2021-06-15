<?php get_header(); ?>


<main class="car">
    <?php
    while (have_posts()) :
        the_post();
    ?>

        <div class="car__details">
            <div class="container">
                <h2 class="car__title">
                    <?php the_title() ?>
                </h2>
                <h4 class="car__meta">
                    <?php the_field('model'); ?>,
                    <span>
                        <?php $brand = get_term_by('id', get_field('brand'), 'brands');
                        echo ($brand->name) ?>
                    </span>
                </h4>
                <div class="car__info"><?php the_field('description'); ?></div>
                <p class="car__price">Starting at <span>$<?php the_field('starting_price') ?></span></p>
                <a class="button button--teal button-lg" href="<?php the_field('cta_button_url'); ?>"><?php the_field('cta_button_text'); ?></a>
            </div>
        </div>
        <div class="car__gallery">

            <div class="slider">
                <div id="splide-gallery" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php $images = get_field('gallery');
                            foreach ($images as $image) : ?>
                                <li class="splide__slide" role="button" tabindex="0">
                                    <img src="<?php echo ($image) ?>">
                                </li>
                            <?php endforeach;  ?>
                        </ul>
                    </div>
                    <div class=" thumbnails js-thumbnails">
                        <ul class="thumbnails__list">
                            <?php $images = get_field('gallery');
                            foreach ($images as $image) : ?>
                                <li class="thumbnails__item" role="button" tabindex="0">
                                    <img src="<?php echo ($image) ?>">
                                </li>
                            <?php endforeach;  ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>






    <?php endwhile;
    wp_reset_query(); ?>
</main>

<?php get_footer(); ?>