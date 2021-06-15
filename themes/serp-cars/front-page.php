<?php get_header()  ?>
<h1>Serp Cars</h1>
<nav>
    <?php
    wp_nav_menu(array(
        'menu'           => 'Header Menu',
        'theme_location' => 'header_menu',
        'fallback_cb'    => false
    ));
    ?>
</nav>
<section class="hero">
    <div class="hero-content">
        <video class="hero-vid" autoplay loop playsinline muted>
            <source src="<?php echo get_template_directory_uri() . '/assets/hero-bg.mp4'; ?>" type="video/mp4">
            <img src="<?php echo get_template_directory_uri() . '/assets/fallback-webp'; ?>" title="Your browser does not support the video.">
        </video>
        <div id="video-overlays"></div>
        <div class="hero-box">
            <h1 class="hero-box__title">Explore Country's Best Car Deals</h1>
            <a class="hero-box__c2a btn btn-main btn-c2a" href="<?php echo site_url('/cars'); ?>">See Cars</a>
        </div>
    </div>
</section>

<?php get_footer()  ?>