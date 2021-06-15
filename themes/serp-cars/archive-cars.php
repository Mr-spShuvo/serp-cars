<?php

/**
 * Template Name: Cars Template
 */
get_header() ?>

<main class="cars">

    <div class="page-header" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/page-pattern.png' ?>);">
        <h2 class="page-header__title">Cars</h2>
    </div>

    <div class="container my-5 py-5">
        <div class="row">

            <?php
            $car = new WP_Query(
                array(
                    'post_type' => 'cars',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                )
            );

            while ($car->have_posts()) : $car->the_post(); ?>


                <div class="col-lg-4 mb-5">
                    <div class="card car">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title() ?>">
                        <div class="card-body p-4">
                            <h2 class="card-title mb-3"><?php the_title();  ?></h2>
                            <h4 class="card-subtitle mb-2 text-muted">
                                <?php the_field('model'); ?>,
                                <span>
                                    <?php $brand = get_term_by('id', get_field('brand'), 'brands');
                                    echo ($brand->name) ?>
                                </span>
                            </h4>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <h4>Starting at $<?php the_field('starting_price') ?></span></h4>
                                <a href="<?php the_permalink() ?>" class="button button--teal">Explore <i class="im im-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile ?>
        </div>
    </div>

    <div class="pagination-box text-center m-auto">
        <?php
        $big = 999999999; // need an unlikely integer
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
            'format' => '?paged=%#%',
            'prev_text'          => _x('&laquo;', 'previous set of posts'),
            'next_text'          => _x('&raquo;', 'next set of posts'),
            'current' => max(1, get_query_var('paged')),
            'total' => $car->max_num_pages
        ));

        wp_reset_query();
        ?>
    </div>

</main>
<?php get_footer() ?>