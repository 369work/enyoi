<?php

/**
 * Title: Staff Section
 * Slug: enyoi/staff-section
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Staff Section"},"className":"section staff section-bg-gray","layout":{"type":"constrained"}} -->
<section id="staff" class="wp-block-group section staff section-bg-gray">
    <!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container">
        <!-- wp:heading {"level":2,"className":"section-title fade-in"} -->
        <h2 class="wp-block-heading section-title fade-in"><span data-subtitle="STAFF"><?php esc_html_e('Staff Introduction', 'enyoi'); ?></span></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"staff-grid","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"300px"}} -->
        <div class="wp-block-group staff-grid">
            <!-- wp:group {"className":"staff-card","layout":{"type":"constrained"}} -->
            <div class="wp-block-group staff-card">
                <!-- wp:image {"className":"staff-avatar"} -->
                <figure class="wp-block-image staff-avatar"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/user.webp" alt="Staff Image" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"className":"staff-name"} -->
                <h3 class="wp-block-heading staff-name"><?php esc_html_e('Miho Tanaka', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"staff-position"} -->
                <p class="staff-position"><?php esc_html_e('Chief Stylist', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"staff-description"} -->
                <p class="staff-description"><?php esc_html_e('A veteran stylist with 15 years of experience, she is good at proposing styles that are in line with the latest trends.', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"staff-card","layout":{"type":"constrained"}} -->
            <div class="wp-block-group staff-card">
                <!-- wp:image {"className":"staff-avatar"} -->
                <figure class="wp-block-image staff-avatar"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/user.webp" alt="Staff Image" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"className":"staff-name"} -->
                <h3 class="wp-block-heading staff-name"><?php esc_html_e('Ken Sato', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"staff-position"} -->
                <p class="staff-position"><?php esc_html_e('stylist', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"staff-description"} -->
                <p class="staff-description"><?php esc_html_e('Specialists in mens haircuts and coloring, offering styles to suit your lifestyle.', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->