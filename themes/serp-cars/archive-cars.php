<?php

/**
 * Template Name: Cars Template
 */
get_header() ?>
<h1>Archive: Cars</h1>
<?php $car = new WP_Query(
    array(
        'post_type' => 'cars',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    )
);

while ($car->have_posts()) :
    $car->the_post(); ?>
    <?php the_field('model'); ?>
<?php endwhile ?>

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
<?php get_footer() ?>