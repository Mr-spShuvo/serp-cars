<?php get_header()  ?>

<section class="hero">
    <div class="hero__content">
        <video class="hero__video" autoplay loop playsinline muted>
            <source src="<?php echo get_template_directory_uri() . '/assets/videos/hero-bg.mp4'; ?>" type="video/mp4">
            <img src="<?php echo get_template_directory_uri() . '/assets/videos/fallback-webp'; ?>" title="Your browser does not support the video.">
        </video>
        <div id="video-overlays"></div>
        <div class="hero-box">
            <h2 class="hero-box__title">Explore Country's <span> Best Car Deals</span></h2>
            <a class="hero-box__c2a button button--lg button--tomato" href="<?php echo site_url('/cars'); ?>">Browse Cars <i class="im im-angle-right"></i></a>
        </div>
    </div>
</section>

<?php get_footer()  ?>