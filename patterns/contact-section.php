<?php

/**
 * Title: Contact Section
 * Slug: enyoi/contact-section
 * Categories: enyoi_patterns
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact Section"},"className":"section contact has-gray-light-gradient-background","backgroundColor":"gray-light-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<section id="contact" class="wp-block-group section contact has-gray-light-gradient-background has-gray-light-gradient-background-color has-background"><!-- wp:group {"className":"container","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group container"><!-- wp:heading {"className":"section-title fade-in"} -->
        <h2 class="wp-block-heading section-title fade-in"><span data-subtitle="RESERVE"><?php esc_html_e('About Reservations', 'enyoi'); ?></span></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"contact-methods","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
        <div class="wp-block-group contact-methods">
            <!-- wp:group {"className":"contact-card","layout":{"type":"constrained"}} -->
            <div class="wp-block-group contact-card">
                <!-- wp:paragraph {"align":"center","className":"contact-icon"} -->
                <p class="has-text-align-center contact-icon">📞</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading"><?php esc_html_e('Phone', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Reservations and inquiries can also be made by phone.', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"contact-info"} -->
                <p class="contact-info"><?php esc_html_e('03-0000-0000', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Business hours', 'enyoi'); ?>：<?php esc_html_e('10:00', 'enyoi'); ?> - <?php esc_html_e('20:00', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"contact-card","layout":{"type":"constrained"}} -->
            <div class="wp-block-group contact-card"><!-- wp:paragraph {"align":"center","className":"contact-icon"} -->
                <p class="has-text-align-center contact-icon">✉️</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading"><?php esc_html_e('Email', 'enyoi'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Please send us a message using the contact form.', 'enyoi'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"contact-info"} -->
                <p class="contact-info"><a class="btn" href="#"><?php esc_html_e('Contact form', 'enyoi'); ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"style":{"layout":{}}} -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</section>
<!-- /wp:group -->