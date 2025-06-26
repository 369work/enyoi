<?php

/**
 * Title: Salon Section
 * Slug: enyoi/salon-section
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"tagName":"section","className":"section section-bg-gray","layout":{"type":"constrained"}} -->
<section id="about" class="wp-block-group section section-bg-gray"><!-- wp:group {"className":"container","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group container"><!-- wp:heading {"className":"section-title fade-in","style":{"typography":{"textAlign":"center"}}} -->
        <h2 class="wp-block-heading section-title fade-in"><span data-subtitle="ABOUT"><?php esc_html_e('About the salon', 'enyoi'); ?></span></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"about-content","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group about-content"><!-- wp:paragraph {"className":"about-description fade-in"} -->
            <p class="about-description fade-in">
                <?php _e('We value the individuality and beauty of each customer, and will propose hairstyles incorporating the latest trends and techniques. Please enjoy a comfortable salon time in a relaxing space.', 'enyoi'); ?>

            </p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"className":"features-grid"} -->
            <div class="wp-block-columns features-grid"><!-- wp:column {"className":"feature-item fade-in"} -->
                <div class="wp-block-column feature-item fade-in"><!-- wp:group {"className":"feature-icon"} -->
                    <div class="wp-block-group feature-icon"><!-- wp:paragraph {"className":"icon-circle"} -->
                        <p class="icon-circle">✓</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"className":"feature-title"} -->
                    <h3 class="wp-block-heading feature-title"><?php esc_html_e('High technical capabilities', 'enyoi'); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"feature-description"} -->
                    <p class="feature-description"><?php esc_html_e('Experienced stylists with the latest technology', 'enyoi'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"feature-item fade-in"} -->
                <div class="wp-block-column feature-item fade-in"><!-- wp:group {"className":"feature-icon"} -->
                    <div class="wp-block-group feature-icon"><!-- wp:paragraph {"className":"icon-circle"} -->
                        <p class="icon-circle">★</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"className":"feature-title"} -->
                    <h3 class="wp-block-heading feature-title"><?php esc_html_e('High-quality space', 'enyoi'); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"feature-description"} -->
                    <p class="feature-description"><?php esc_html_e('You can relax in a calm atmosphere.', 'enyoi'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"feature-item fade-in"} -->
                <div class="wp-block-column feature-item fade-in"><!-- wp:group {"className":"feature-icon"} -->
                    <div class="wp-block-group feature-icon"><!-- wp:paragraph {"className":"icon-circle"} -->
                        <p class="icon-circle">♡</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"className":"feature-title"} -->
                    <h3 class="wp-block-heading feature-title"><?php esc_html_e('Careful counseling', 'enyoi'); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"feature-description"} -->
                    <p class="feature-description"><?php esc_html_e('We listen to your requests in detail and suggest the best style for you.', 'enyoi'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->