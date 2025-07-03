<?php

/**
 * Title: Hero Section
 * Slug: enyoi/hero-section
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero Section"},"className":"hero","style":{"dimensions":{"minHeight":"100vh"},"background":{"backgroundImage":{"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-background.webp","id":128,"source":"file","title":"hero-background"},"backgroundSize":"cover"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<section class="wp-block-group hero" style="min-height:100vh"><!-- wp:group {"className":"hero-content","layout":{"type":"constrained"}} -->
    <div class="wp-block-group hero-content"><!-- wp:heading {"level":1} -->
        <h1 class="wp-block-heading"><?php _e("Beauty<br>Redefined<br>Salon", 'enyoi'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php _e("We bring out your beauty with the best technology and space.", 'enyoi'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"className":"btn-primary is-style-fill"} -->
            <div class="wp-block-button btn-primary is-style-fill"><a href="#contact" class="wp-block-button__link wp-element-button"><?php _e('Reservation', 'enyoi'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"popular-menu","layout":{"type":"constrained"}} -->
    <div class="wp-block-group popular-menu"><!-- wp:heading {"className":"popular-menu-title"} -->
        <h2 class="wp-block-heading popular-menu-title"><?php esc_html_e('Popular Menu', 'enyoi'); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:list {"className":"popular-menu-list"} -->
        <ul class="wp-block-list popular-menu-list"><!-- wp:list-item {"className":"popular-menu-item"} -->
            <li class="popular-menu-item"><span class="menu-item-name"><?php esc_html_e('Cut', 'enyoi'); ?></span><span class="menu-item-price"><?php esc_html_e('￥5,000', 'enyoi'); ?></span></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item {"className":"popular-menu-item"} -->
            <li class="popular-menu-item"><span class="menu-item-name"><?php esc_html_e('Color', 'enyoi'); ?></span><span class="menu-item-price"><?php esc_html_e('￥8,000', 'enyoi'); ?></span></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item {"className":"popular-menu-item"} -->
            <li class="popular-menu-item"><span class="menu-item-name"><?php esc_html_e('Perm', 'enyoi'); ?></span><span class="menu-item-price"><?php esc_html_e('￥10,000', 'enyoi'); ?></span></li>
            <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->