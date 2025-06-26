<?php

/**
 * Title: News Section
 * Slug: enyoi/news-section
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"className":"section section-bg-gray","tagName":"section","metadata":{"name":"News Section"},"layout":{"type":"constrained"}} -->
<section id="news" class="wp-block-group section section-bg-gray">
    <!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container">
        <!-- wp:heading {"level":2,"className":"section-title fade-in"} -->
        <h2 class="wp-block-heading section-title fade-in"><span data-subtitle="NEWS"><?php esc_html_e('News', 'enyoi'); ?></span></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"news-grid","layout":{"type":"constrained"}} -->
        <div class="wp-block-group news-grid">
            <!-- wp:group {"className":"news-item fade-in","tagName":"article","layout":{"type":"constrained"}} -->
            <article class="wp-block-group news-item fade-in">
                <!-- wp:paragraph {"className":"news-date"} -->
                <p class="news-date">2024.03.15</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"className":"news-title"} -->
                <h3 class="wp-block-heading news-title"><?php esc_html_e('New Spring Menu', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"news-description"} -->
                <p class="news-description"><?php esc_html_e('New spring hairstyles and seasonal head spa menus have arrived.', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"news-link"} -->
                <p class="news-link"><a href="#"><?php esc_html_e('Read more', 'enyoi'); ?></a></p>
                <!-- /wp:paragraph -->
            </article>
            <!-- /wp:group -->

            <!-- wp:group {"className":"news-item fade-in","tagName":"article","layout":{"type":"constrained"}} -->
            <article class="wp-block-group news-item fade-in">
                <!-- wp:paragraph {"className":"news-date"} -->
                <p class="news-date">2024.02.15</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"className":"news-title"} -->
                <h3 class="wp-block-heading news-title"><?php esc_html_e('Announcement of new stylist', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"news-description"} -->
                <p class="news-description"><?php esc_html_e('Two new stylists have joined us.', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"news-link"} -->
                <p class="news-link"><a href="#"><?php esc_html_e('Read more', 'enyoi'); ?></a></p>
                <!-- /wp:paragraph -->
            </article>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->